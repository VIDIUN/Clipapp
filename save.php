<?php

// Initilize App
$save = true;
require_once('init.php');

// Params
$overwrite = $conf['overwrite_entry'];

// Entry Data
$entryId = $_POST['entryId'];
$startTime = $_POST['start'];
$endTime = $_POST['end'];
$clipDuration = $endTime - $startTime;

// Create New Clip
$operation1						= new VidiunClipAttributes();
$operation1->offset				= $startTime;
$operation1->duration			= $clipDuration;

// Add New Resource
$resource						= new VidiunOperationResource();
$resource->resource				= new VidiunEntryResource();
$resource->resource->entryId	= $entryId;
$resource->operationAttributes	= array($operation1);

if( $overwrite ) {
	// Trim Entry
	try {
		$resultEntry = $client->media->updateContent($entryId, $resource);
	} catch( Exception $e ){
		die('{"error": "' . $e->getMessage() . '"}');
	}
} else {
	// Create New Media Entry
	$entry					= new VidiunMediaEntry();
	$entry->name			= $_POST['name'];
	$entry->description		= $_POST['desc'];
	$entry->mediaType		= intval($_POST['mediaType']);

	// New Clip
	try {
		$resultEntry = $client->media->add($entry);
		$resultEntry = $client->media->addContent($resultEntry->id, $resource);
	} catch( Exception $e ){
		die('{"error": "' . $e->getMessage() . '"}');
	}
}

echo json_encode($resultEntry);
exit();
