<?php

// Load configuration
require_once('config.php');

// Decide which config to use
if( isset($_GET['config']) ) {
	$configName = $_GET['config'];
} else {
	$configName = 'default';
}

// Load local configuration
if( file_exists('config.local.php') )
	include('config.local.php');

// If we use local configuration, merge it with our default one
if( $configName != 'default' && isset($config[$configName]) ) {
	$conf = array_merge( $config['default'], $config[$configName] );
} else {
	// Else, use default configuration
	$conf = $config['default'];
}

// Load Vidiun Client
require_once('client/VidiunClient.php');

try {
	// Return a Client
	$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? "https" : "http";
	$config = new VidiunConfiguration( $conf['partner_id'] );
	$config->serviceUrl = $protocol . '://' . $conf['host'];
	$client = new VidiunClient( $config );

	// Create & Set VS
	if( isset($conf['vs']) ) {
		$vs = $conf['vs'];
	} else {
		if( isset( $save ) ) {
			$sessionType = VidiunSessionType::ADMIN;
			$sessionSecret = $conf['adminsecret'];
		} else {
			$sessionType = VidiunSessionType::USER;
			$sessionSecret = $conf['usersecret'];
		}
		$vs = $client->session->start($sessionSecret, $conf['user_id'], $sessionType, $conf['partner_id'], null, null);
	}
	$client->setVs($vs);
} catch( Exception $e ){
	$error = '<h1>Error</h1>' . $e->getMessage();
	die($error);
}

// Reset admin/user secrets, just for safety
$conf['usersecret'] = null;
$conf['adminsecret'] = null;

// Localization
include('Lang.php');

$lang = $conf['language'];
if( isset($_GET['lang']) && preg_match('/^[a-zA-Z_-]+$/', $_GET['lang']) ){
	$lang = strtolower($_GET['lang']);
}

// Load our language
$langHelper = new Lang( $lang );

function t( $text ) {
	global $langHelper;
	return $langHelper->translate( $text );
}