<?php

if( $configName == 'vmc' ) {
	
	if( !isset($_COOKIE['vmcvs']) || empty($_COOKIE['vmcvs']) ) {
		die('Error: Missing VS');
	}

	if( !isset($_GET['partnerId']) ) {
		die('Error: Missing Partner ID');
	}

	if( !isset($_GET['vclipUiconf']) || !isset($_GET['vdpUiconf']) ) {
		die('Error: Missing Uiconfs for VDP/vClip');
	}

	$config['vmc'] = array(
		'host' => (isset($_GET['host'])) ? $_GET['host'] : $_SERVER['HTTP_HOST'],
		'partner_id' => intval($_GET['partnerId']),
		'user_id' => null,
		'vs' => $_COOKIE['vmcvs'],
		'overwrite_entry' => ($_GET['mode'] == "trim") ? true : false,
		'clipper_uiconf_id' => intval($_GET['vclipUiconf']),
		'vdp_uiconf_id' => intval($_GET['vdpUiconf']),
		'show_embed' => false,
		'trim_save_message' => 'The trimmed video is now converting. This might take a few minutes. Please close the window to continue.',
		'clip_save_message' => 'A new entry "<strong>@title@</strong>" has been created.<br />Entry ID: <strong>@entryId@</strong><br /><br />You can close this window to view the new clip in the entries table or create another clip.',
	);

}