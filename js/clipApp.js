window.clipApp = {};

// Log function
clipApp.log = function(msg) {
	if(this.vars.debug) {
		if( typeof console !='undefined' && console.log){
			console.log('ClipApp :: ' + msg);
		}
	}
};

// Set default vars
clipApp.vars = {
	host: "www.vidiun.com",
	redirect_save: false,
	redirect_url: "http://www.vidiun.com/",
	overwrite_entry: false,
	seekFromVClip: false,
	debug: false
};

clipApp.init = function( options ) {
	$.extend( this.vars, options );
};

var jsCallbackReady = function( videoId ) {
	clipApp.vdp = $("#" + videoId ).get(0);
	clipApp.vdp.addJsListener("mediaReady", "clipApp.player.doFirstPlay");
	clipApp.vdp.addJsListener("playerPlayed", "clipApp.player.playerPlaying");
	clipApp.vdp.addJsListener("playerPaused", "clipApp.player.playerPaused");
	clipApp.vdp.addJsListener("doSeek", "clipApp.onSeek");
	clipApp.vdp.addJsListener("durationChange", "clipApp.player.durationChange");

};

var clipperReady = function() {
	clipApp.vClip = $("#clipper").get(0);
	clipApp.vClip.addJsListener("clipStartChanged", "clipApp.updateStartTime");
	clipApp.vClip.addJsListener("clipEndChanged", "clipApp.updateEndTime");
	clipApp.vClip.addJsListener("entryReady", "clipApp.enableAddClip");
	clipApp.vClip.addJsListener("clipAdded", "clipApp.clipAdded");
	clipApp.vClip.addJsListener("clipperError", "clipApp.showError");
	clipApp.vClip.addJsListener("playheadDragStart", "clipApp.clipper.dragStarted");
	clipApp.vClip.addJsListener("playheadDragDrop", "clipApp.player.updatePlayhead")
};

/* Init the App */
$(function() {
	clipApp.log('Init App');

	clipApp.createTimeSteppers();
	clipApp.activateButtons();

});

// Contains all player related functions
clipApp.player = {
	doFirstPlay: function() {
		clipApp.log('doFirstPlay');
		clipApp.player.firstLoad = true;
		clipApp.vdp.sendNotification("doPlay");
	},

	playerPlaying: function() {
		clipApp.log('clipApp.player.playerPlaying');
		if( clipApp.player.firstLoad ) {
			clipApp.log('pauseVdp');
			clipApp.player.firstLoad = false;
			setTimeout( function() {
				clipApp.vdp.sendNotification("doPause");
			}, 50);
		}
		clipApp.vars.removeBlackScreen = true;
		clipApp.vars.playerPlaying = true;

		clipApp.vClip.removeJsListener("playheadUpdated", "clipApp.player.updatePlayhead");
		clipApp.vdp.addJsListener("playerUpdatePlayhead", "clipApp.clipper.updatePlayhead");
	},

	playerPaused: function() {
		clipApp.vars.playerPlaying = false;
		clipApp.vClip.addJsListener("playheadUpdated", "clipApp.player.updatePlayhead");
		clipApp.vdp.removeJsListener("playerUpdatePlayhead", "clipApp.clipper.updatePlayhead");
	},

	updatePlayhead: function(val) {
		clipApp.clipper.dragging = false;
		if( clipApp.clipper.dragging === false ) {
			clipApp.vClip.addJsListener("playheadUpdated", "clipApp.player.updatePlayhead");
		}

		val = Math.floor( val / 1000 );
		clipApp.vars.seekFromVClip = true;
		clipApp.vdp.sendNotification("doSeek", val);
		setTimeout(function() {
			clipApp.vdp.sendNotification("doPause");
		}, 250);
	},

	durationChange:function(data) {
		clipApp.vars.entry.msDuration = data.newValue*1000;
		clipApp.vClip.setDuration(data.newValue*1000);

	}
};

// Contains all clipper related functions
clipApp.clipper = {
	dragging: false,
	addClip: function( start, end ) {
		var clip_length = (end) ? end : (clipApp.getMsDuration() / 10); // Get 10 percent of video duration
		var clip_offset = (start) ? start : clipApp.vClip.getPlayheadLocation();
		clip_length = Math.round(clip_length);
		clip_offset = Math.round(clip_offset);
		clipApp.vClip.addClipAt(clip_offset, clip_length);
		clipApp.log('addClipAt (Length: ' + clip_length + ')');
		clipApp.vdp.sendNotification("doPause");
	},

	updatePlayhead: function(val) {
			clipApp.vClip.scrollToPoint(val * 1000);
	},
	dragStarted: function() {
		clipApp.clipper.dragging = true;
		clipApp.vClip.removeJsListener("playheadUpdated", "clipApp.player.updatePlayhead");
	}
};

clipApp.m = function( msgKey ){
	return this.vars.messages[ msgKey ] || '';
};

clipApp.clipAdded = function( clip ) {
	clipApp.updateStartTime( clip );
	clipApp.updateEndTime( clip );
	clipApp.addClipForm();
};

clipApp.addClipForm = function() {
	if( $("#newclip").find('.disable').length == 0 ) {
		$("#newclip").prepend( clipApp.disableDiv() );
	}
	$("#fields").show().find('.disable').remove();
	$("#actions").find('.disable').remove();
	
	if( clipApp.vars.overwrite_entry ) {
		$("#delete").remove();
		$(".seperator").remove();
	}

	$("#save").find('.disable').remove();
	$("#embed").hide();
};

clipApp.disableDiv = function() {
	return $('<div />').addClass('disable');
};

clipApp.createTimeSteppers = function() {
	clipApp.log('Create Time Steppers');
	$("#startTime").timeStepper( {
		onChange: function( val ) {
			clipApp.setStartTime( val );
		}
	} );
	$("#endTime").timeStepper( {
		onChange: function( val ) {
			clipApp.setEndTime( val );
		}
	} );
};

clipApp.checkClipDuration = function( val, type ) {

	var minLength = 0;
	if( type == 'start' ) {
		minLength = $("#endTime").timeStepper( 'getValue' ) - val;
	} else if( type == 'end' ) {
		minLength = val - $("#startTime").timeStepper( 'getValue' );
	}

	if( type == 'start' && ( val > $("#endTime").timeStepper( 'getValue' )) ) {
		alert(this.m('start_time_error'));
		return false;
	}
	
	if( minLength <= 100 ) {
		alert(this.m('clip_duration_error'));
		return false;
	}

	if( val > (clipApp.getMsDuration()) ) {
		return false;
	}
	
	return true;
};

clipApp.updateStartTime = function(clip) {
	var startTime = Math.round( clip.clipAttributes.offset );
	if( $("#startTime").timeStepper( 'getValue' ) == startTime ) { return ; }

	clipApp.log('TimeStepper :: Set startTime: ' + startTime);
	$("#startTime").timeStepper( 'setValue', startTime );
	clipApp.vars.lastStartTime = startTime;
};

clipApp.updateEndTime = function(clip) {
	var endTime = Math.round( clip.clipAttributes.offset + clip.clipAttributes.duration );
	if( $("#endTime").timeStepper( 'getValue' ) == endTime || endTime <= 0 ) { return ; }

	clipApp.log('TimeStepper :: Set endTime: ' + endTime);
	$("#endTime").timeStepper( 'setValue', endTime );
	clipApp.vars.lastEndTime = endTime;
};

clipApp.setStartTime = function( val ) {
	var startTime = Math.round(val);
	if( !clipApp.checkClipDuration( startTime, 'start') ) {
		$("#startTime").timeStepper( 'setValue', clipApp.vars.lastStartTime );
		return ;
	}

	var clipAttributes = {
		offset: startTime,
		duration: $("#endTime").timeStepper( 'getValue' ) - startTime
	};

	clipApp.vClip.updateClipAttributes( clipAttributes );
	clipApp.vdp.sendNotification("doPause");
};

clipApp.setEndTime = function( val ) {
	var endTime = Math.round(val);
	if( !clipApp.checkClipDuration( endTime, 'end') ) {
		$("#endTime").timeStepper( 'setValue', clipApp.vars.lastEndTime );
		return ;
	}

	var clipAttributes = {
		offset: $("#startTime").timeStepper( 'getValue' ),
		duration: endTime - $("#startTime").timeStepper( 'getValue' )
	};

	clipApp.vClip.updateClipAttributes( clipAttributes );
	clipApp.vdp.sendNotification("doPause");
};

clipApp.activateButtons = function() {
	clipApp.log('Activate Buttons');

	$("#newclip a").click( function() {
		clipApp.clipper.addClip();
	});

	$("#preview").click( function() { clipApp.doPreview(); });

	$("#setStartTime").click( function() {
		clipApp.setStartTime( clipApp.vClip.getPlayheadLocation() );
	});

	$("#setEndTime").click( function() {
		clipApp.setEndTime( clipApp.vClip.getPlayheadLocation() );
	});

	$("#delete").click( function() {
		if ( confirm(clipApp.m('delete_confirmation')) ) {
			clipApp.deleteClip();
		}
		return false;
	});

	$("#save a").click( function() {
		clipApp.doSave();
		return false;
	});
};

clipApp.enableAddClip = function() {
	if( clipApp.vars.overwrite_entry ) {
		clipApp.log('Add new clip for trimming', (clipApp.getMsDuration()) );
		clipApp.clipper.addClip(0, (clipApp.getMsDuration()) );
	}
	$("#newclip").find('.disable').remove();
};

clipApp.doPreview = function() {
	var startTime = $("#startTime").timeStepper( 'getValue', 'seconds' ),
		endTime = $("#endTime").timeStepper( 'getValue', 'seconds' );

	clipApp.log('Start Time: ' + startTime + ', End Time: ' + endTime );

	clipApp.vars.removeBlackScreen = false;

	clipApp.vdp.removeJsListener("doSeek", "clipApp.onSeek");
	clipApp.vClip.updateZoomIndex(0);

	if( clipApp.vars.playerPlaying ){
		clipApp.vdp.sendNotification("doPause");
	}
	clipApp.vdp.setVDPAttribute("blackScreen", "visible", "true" );
	clipApp.vdp.setVDPAttribute("mediaProxy", "mediaPlayFrom", startTime );
	clipApp.vdp.setVDPAttribute("mediaProxy", "mediaPlayTo", endTime );
	// work around for vdp didn't play at first doPlay
	clipApp.vdp.sendNotification("doPlay");
	clipApp.vdp.sendNotification("doPlay");

	clipApp.vdp.addJsListener("doSeek", "clipApp.onSeek");
};

clipApp.onSeek = function(val) {
	if( clipApp.vars.removeBlackScreen ) {
		clipApp.log('onSeek :: Remove black screen');
		clipApp.vdp.setVDPAttribute("blackScreen", "visible", "false" );
	}

	if( clipApp.vars.seekFromVClip === false ) {
		clipApp.clipper.updatePlayhead(val);
	} else {
		clipApp.vars.seekFromVClip = false;
	}
};

clipApp.getDuration = function() {
	return clipApp.vars.entry.duration;
};
clipApp.getMsDuration = function() {
	return clipApp.vars.entry.msDuration;
};

clipApp.showError = function(error) {
	alert(error.messageText);
};

clipApp.getEmbedCode = function(entry_id) {

	var unique_id = clipApp.getUniqueId();
	var entry_url = 'http://' + clipApp.vars.host + '/vwidget/wid/_' + clipApp.vars.partner_id + '/uiconf_id/' + clipApp.vars.vdp_uiconf_id + '/entry_id/' + entry_id;

	var embed_code = '<object id="vidiun_player_' + unique_id + '" name="vidiun_player_' + unique_id + '" type="application/x-shockwave-flash" allowFullScreen="true"' +
				' allowNetworking="all" allowScriptAccess="always" height="330" width="400" bgcolor="#000000"' +
				' resource="' + entry_url + '" data="' + entry_url + '"><param name="allowFullScreen" value="true" /><param name="allowNetworking" value="all" />' +
				' <param name="allowScriptAccess" value="always" /><param name="bgcolor" value="#000000" /><param name="movie" value="' + entry_url + '" /></object>';

	return embed_code;
};

clipApp.getUniqueId = function() {
	var d = new Date();
	return d.getTime().toString().substring(4);
};

clipApp.showEmbed = function( entry_id, entry_name ) {
	// Hide current elements
	clipApp.deleteClip();

	// Set embed code
	$("#embedcode").click( function() { this.select(); } );
	$("#embedcode").val( clipApp.getEmbedCode( entry_id ) );

	// Search & Replace for [title] & [entryId] in save message
	var saveMessage = $("#embed").find("p").html();
	saveMessage = saveMessage.replace("@title@", entry_name);
	saveMessage = saveMessage.replace("@entryId@", entry_id);
	
	$("#embed").find("p").html( saveMessage );

	// Show embed code
	$("#fields").hide();
	$("#newclip").find('.disable').remove();
	$("#embed").show();
};

clipApp.doSave = function() {
	if( ($("#endTime").timeStepper( 'getValue' ) - $("#startTime").timeStepper( 'getValue' )) <= 100 ) {
		alert(this.m('clip_duration_error'));
		return ;
	}

	$("#loader").fadeIn();

	$("#newclip").prepend( clipApp.disableDiv() );
	$("#fields").prepend( clipApp.disableDiv() );
	$("#actions").prepend( clipApp.disableDiv() );
	$("#save").prepend( clipApp.disableDiv() );
	
	// Get Params
	var params = {
		'entryId': clipApp.vars.entry.id,
		'mediaType': clipApp.vars.entry.mediaType,
		'name': $("#entry_title").val(),
		'desc': $("#entry_desc").val(),
		'start': $("#startTime").timeStepper( 'getValue' ),
		'end': $("#endTime").timeStepper( 'getValue' )
	};

	var saveUrl = 'save.php';
	if( clipApp.vars.config ) {
		var queryString = $.param( {
			'config': clipApp.vars.config,
			'partnerId': clipApp.vars.partner_id,
			'vclipUiconf': clipApp.vars.vclip_uiconf_id,
			'vdpUiconf': clipApp.vars.vdp_uiconf_id,
			'mode': ((clipApp.vars.overwrite_entry) ? 'trim' : 'clip')
		} );
		saveUrl += '?' + queryString;
	}

	// Make the request
	$.ajax({
		url: saveUrl,
		type: "post",
		data: params,
		dataType: "json",
		success: function(res) {
			$("#loader").fadeOut();
			if( res.error ) {
				alert(res.error);
			}
			if( clipApp.vars.redirect_save === true ) {
				window.location.href = clipApp.vars.redirect_url;
			} else {
				clipApp.showEmbed(res.id, res.name);
			}
		}
	});
};

clipApp.deleteClip = function() {
	// Stop the VDP
	clipApp.vdp.sendNotification("doPause");

	// Remove clip from clipper
	clipApp.vClip.deleteSelected();

	// Reset fields
	$("#entry_title").val( clipApp.vars.entry.name );
	if( ! clipApp.vars.entry.description ) {
		clipApp.vars.entry.description = '';
	}
	$("#entry_desc").val( clipApp.vars.entry.description || '' );

	if( !clipApp.vars.overwrite_entry ) {
		$("#newclip").find('.disable').remove();
	}
	$("#fields").prepend( clipApp.disableDiv() );
	$("#actions").prepend( clipApp.disableDiv() );
	$("#save").prepend( clipApp.disableDiv() );	
};