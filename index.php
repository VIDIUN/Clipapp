<?php

// Initilize App
require_once('init.php');

// Get entryId from GET parameter or Config
$entryId = (isset($_GET['entryId']) ? htmlspecialchars($_GET['entryId']) : $conf['entry_id']);

// html5 library location
$html5Url = $protocol . '://' . $conf['host'] . '/p/' . $conf['partner_id'] ."/sp/". $conf['partner_id'] ."00/embedIframeJs/uiconf_id/". $conf['vdp_uiconf_id'] ."/partner_id/". $conf['partner_id'];

// Create Vdp Url
$vdpUrl = $protocol . '://' . $conf['host'] . '/vwidget/wid/_' . $conf['partner_id'] . '/uiconf_id/' . $conf['vdp_uiconf_id'] . '/entry_id/' . $entryId;

// Create Clipper Url & Flashvars
$clipperUrl = $protocol . '://' . $conf['host'] . '/vgeneric/ui_conf_id/' . $conf['clipper_uiconf_id'];
//$clipperUrl = "http://localhost/Clipper/bin-debug/VClip.swf?host=http://www.vidiun.com&uiConfId=21224322&cdnHost=cdnbakmi.vidiun.com";
$clipperFlashvars = '&entry_id=' . $entryId . '&partner_id=' . $conf['partner_id'] . '&host=' . $conf['host'];
$clipperFlashvars .= '&vs=' . $vs . '&show_add_delete_buttons=false&state=clippingState&jsReadyFunc=clipperReady';
$clipperFlashvars .= '&max_allowed_rows=1&show_control_bar=true&show_message_box=false&protocol=' . $protocol . '://';

if(!$entryId)
	die(t("Entry Id not found"));

// Load entry
try
{
	$entry = $client->baseEntry->get($entryId, null);
}
catch(Exception $e)
{
	echo($e->getMessage());
}

if( $conf['overwrite_entry'] ){
	$save_message = $conf['trim_save_message'];
	$form_title = t('Use the trimming timeline below or enter exact in and out times');
	$trim_note = '<p class="note">' . t('Note: Trimming will replace your original media!') . '</p>';
} else {
	$save_message = $conf['clip_save_message'];
	$form_title = '<a href="#">' . t('Add New Clip') . '</a>';
	$trim_note = '';
}

$clipAppConfig = array(
	"config" => (isset($_GET['config'])) ? htmlspecialchars($_GET['config']) : null,
	"host" => $conf['host'],
	"partner_id" => $conf['partner_id'],
	"entry" => ($entry) ? $entry : null,
	"vs" => $vs,
	"vdp_uiconf_id" => $conf['vdp_uiconf_id'],
	"vclip_uiconf_id" => $conf['clipper_uiconf_id'],
	"redirect_save" => $conf['redirect_save'],
	"redirect_url" => $conf['redirect_url'],
	"overwrite_entry" => $conf['overwrite_entry'],
	"messages" => array(
		"start_time_error" => t('End-time must be larger than Start-time'),
		"clip_duration_error" => t('Clip duration must be at least 100ms'),
		"delete_confirmation" => t('Are you sure you want to delete?'),
	)
);

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $conf['title']; ?></title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
		<script src="js/jquery-1.4.2.min.js"></script>
		<script src="js/jquery.time.stepper.js"></script>
		<script src="js/clipApp.js"></script>
		<script>clipApp.init( <?php echo json_encode($clipAppConfig); ?> );</script>
		<script src="<?php echo $html5Url; ?>"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
<!--[if IE 7 ]><body class="ie ie7"><![endif]-->
<!--[if IE 8 ]><body class="ie ie8"><![endif]-->
<!--[if IE 9 ]><body class="ie ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><body><!--<![endif]-->
		<div id="wrapper">
			<object id="vdp3" name="vdp3" type="application/x-shockwave-flash" wmode="window" allowFullScreen="true" allowNetworking="all" allowScriptAccess="always" bgcolor="#000000" data="<?php echo $vdpUrl; ?>">
				<param name="allowFullScreen" value="true" />
				<param name="allowNetworking" value="all" />
				<param name="allowScriptAccess" value="always" />
				<param name="wmode" value="window" />
				<param name="bgcolor" value="#000000" />
				<param name="flashVars" value="vs=<?php echo $vs;?>&streamerType=auto&autoPlay=true" />
				<param name="movie" value="<?php echo $vdpUrl; ?>" />
			</object>
			<div id="form" class="form clearfix">
				<div id="newclip"><div class="disable"></div><img id="loader" src="images/loader.gif" alt="<?php echo t('Saving'); ?>..." /><?php echo $form_title; ?></div>
				<div id="embed" class="form clearfix">
					<p><?php echo $save_message; ?></p><br />
					<?php if( $conf['show_embed'] === true ) { ?>
					<div class="item clearfix">
						<label><?php echo t('Embed'); ?>:</label>
						<input id="embedcode" class="text-field" type="text" value="" />
					</div><br />
					<?php } ?>
				</div>
				<div id="fields">
					<?php echo $trim_note; ?>
					<div class="disable"></div>
					<div class="item clearfix">
						<label><?php echo t('Start Time'); ?>:</label>
						<input id="startTime" value="" />
					</div>
					<div class="item clearfix">
						<label><?php echo t('End Time'); ?>:</label>
						<input id="endTime" value="" />
					</div>
					<?php if( ! $conf['overwrite_entry'] ): ?>
					<div class="item clearfix">
						<label><?php echo t('Title'); ?>:</label>
						<input id="entry_title" class="text-field" type="text" value="<?php echo htmlspecialchars($entry->name); ?>" /><br /><br />
					</div>
					<div class="item clearfix">
						<label><?php echo t('Description'); ?>:</label>
						<textarea id="entry_desc"><?php echo htmlspecialchars($entry->description); ?></textarea><br /><br />
					</div>
					<?php endif; ?>
				</div>
			</div>
			<object id="clipper" name="clipper" type="application/x-shockwave-flash" wmode="window" allowNetworking="all" allowScriptAccess="always" data="<?php echo $clipperUrl; ?>">
				<param name="allowNetworking" value="all" />
				<param name="allowScriptAccess" value="always" />
				<param name="wmode" value="window" />
				<param name="bgcolor" value="#f8f8f8" />
				<param name="flashVars" value="<?php echo $clipperFlashvars; ?>" />
				<param name="movie" value="<?php echo $clipperUrl; ?>" />
			</object>
			
			<div id="actions" class="clearfix">
				<div class="disable"></div>
				<div class="left clearfix">
					<a href="#" id="setStartTime"><?php echo t('Set In'); ?></a>
					<a href="#" id="setEndTime"><?php echo t('Set Out'); ?></a>
				</div>
				<div class="right clearfix">
					<a href="#" id="preview"><?php echo t('Preview'); ?></a>
					<span class="seperator"> | </span>
					<a href="#" id="delete"><?php echo t('Remove'); ?></a>
				</div>
			</div>
			<div id="save">
				<div class="disable"></div>
				<a href="#"><?php echo t('Save'); ?></a>
			</div>
		</div>
	</body>
</html>