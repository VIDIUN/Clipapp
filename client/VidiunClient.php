<?php
require_once("VidiunClientBase.php");
require_once("VidiunEnums.php");
require_once("VidiunTypes.php");


class VidiunAccessControlService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunAccessControl $accessControl)
	{
		$vparams = array();
		$this->client->addParam($vparams, "accessControl", $accessControl->toParams());
		$this->client->queueServiceActionCall("accesscontrol", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunAccessControl");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("accesscontrol", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunAccessControl");
		return $resultObject;
	}

	function update($id, VidiunAccessControl $accessControl)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "accessControl", $accessControl->toParams());
		$this->client->queueServiceActionCall("accesscontrol", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunAccessControl");
		return $resultObject;
	}

	function delete($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("accesscontrol", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunAccessControlFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("accesscontrol", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunAccessControlListResponse");
		return $resultObject;
	}
}

class VidiunAdminUserService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function updatePassword($email, $password, $newEmail = "", $newPassword = "")
	{
		$vparams = array();
		$this->client->addParam($vparams, "email", $email);
		$this->client->addParam($vparams, "password", $password);
		$this->client->addParam($vparams, "newEmail", $newEmail);
		$this->client->addParam($vparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("adminuser", "updatePassword", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunAdminUser");
		return $resultObject;
	}

	function resetPassword($email)
	{
		$vparams = array();
		$this->client->addParam($vparams, "email", $email);
		$this->client->queueServiceActionCall("adminuser", "resetPassword", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function login($email, $password, $partnerId = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "email", $email);
		$this->client->addParam($vparams, "password", $password);
		$this->client->addParam($vparams, "partnerId", $partnerId);
		$this->client->queueServiceActionCall("adminuser", "login", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function setInitialPassword($hashKey, $newPassword)
	{
		$vparams = array();
		$this->client->addParam($vparams, "hashKey", $hashKey);
		$this->client->addParam($vparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("adminuser", "setInitialPassword", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}
}

class VidiunBaseEntryService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunBaseEntry $entry, $type = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entry", $entry->toParams());
		$this->client->addParam($vparams, "type", $type);
		$this->client->queueServiceActionCall("baseentry", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseEntry");
		return $resultObject;
	}

	function addContent($entryId, VidiunResource $resource)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "resource", $resource->toParams());
		$this->client->queueServiceActionCall("baseentry", "addContent", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseEntry");
		return $resultObject;
	}

	function addFromUploadedFile(VidiunBaseEntry $entry, $uploadTokenId, $type = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entry", $entry->toParams());
		$this->client->addParam($vparams, "uploadTokenId", $uploadTokenId);
		$this->client->addParam($vparams, "type", $type);
		$this->client->queueServiceActionCall("baseentry", "addFromUploadedFile", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseEntry");
		return $resultObject;
	}

	function get($entryId, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("baseentry", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseEntry");
		return $resultObject;
	}

	function update($entryId, VidiunBaseEntry $baseEntry)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "baseEntry", $baseEntry->toParams());
		$this->client->queueServiceActionCall("baseentry", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseEntry");
		return $resultObject;
	}

	function updateContent($entryId, VidiunResource $resource, $conversionProfileId = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "resource", $resource->toParams());
		$this->client->addParam($vparams, "conversionProfileId", $conversionProfileId);
		$this->client->queueServiceActionCall("baseentry", "updateContent", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseEntry");
		return $resultObject;
	}

	function getByIds($entryIds)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryIds", $entryIds);
		$this->client->queueServiceActionCall("baseentry", "getByIds", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function delete($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("baseentry", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunBaseEntryFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("baseentry", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseEntryListResponse");
		return $resultObject;
	}

	function count(VidiunBaseEntryFilter $filter = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("baseentry", "count", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function upload($fileData)
	{
		$vparams = array();
		$vfiles = array();
		$this->client->addParam($vfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("baseentry", "upload", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function updateThumbnailJpeg($entryId, $fileData)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$vfiles = array();
		$this->client->addParam($vfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("baseentry", "updateThumbnailJpeg", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseEntry");
		return $resultObject;
	}

	function updateThumbnailFromUrl($entryId, $url)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "url", $url);
		$this->client->queueServiceActionCall("baseentry", "updateThumbnailFromUrl", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseEntry");
		return $resultObject;
	}

	function updateThumbnailFromSourceEntry($entryId, $sourceEntryId, $timeOffset)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "sourceEntryId", $sourceEntryId);
		$this->client->addParam($vparams, "timeOffset", $timeOffset);
		$this->client->queueServiceActionCall("baseentry", "updateThumbnailFromSourceEntry", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseEntry");
		return $resultObject;
	}

	function flag(VidiunModerationFlag $moderationFlag)
	{
		$vparams = array();
		$this->client->addParam($vparams, "moderationFlag", $moderationFlag->toParams());
		$this->client->queueServiceActionCall("baseentry", "flag", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function reject($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("baseentry", "reject", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function approve($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("baseentry", "approve", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listFlags($entryId, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("baseentry", "listFlags", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunModerationFlagListResponse");
		return $resultObject;
	}

	function anonymousRank($entryId, $rank)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "rank", $rank);
		$this->client->queueServiceActionCall("baseentry", "anonymousRank", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function getContextData($entryId, VidiunEntryContextDataParams $contextDataParams)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "contextDataParams", $contextDataParams->toParams());
		$this->client->queueServiceActionCall("baseentry", "getContextData", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunEntryContextDataResult");
		return $resultObject;
	}
}

class VidiunBatchcontrolService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function reportStatus(VidiunScheduler $scheduler, array $schedulerStatuses, array $workerQueueFilters)
	{
		$vparams = array();
		$this->client->addParam($vparams, "scheduler", $scheduler->toParams());
		foreach($schedulerStatuses as $index => $obj)
		{
			$this->client->addParam($vparams, "schedulerStatuses:$index", $obj->toParams());
		}
		foreach($workerQueueFilters as $index => $obj)
		{
			$this->client->addParam($vparams, "workerQueueFilters:$index", $obj->toParams());
		}
		$this->client->queueServiceActionCall("batchcontrol", "reportStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunSchedulerStatusResponse");
		return $resultObject;
	}

	function configLoaded(VidiunScheduler $scheduler, $configParam, $configValue, $configParamPart = null, $workerConfigId = null, $workerName = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "scheduler", $scheduler->toParams());
		$this->client->addParam($vparams, "configParam", $configParam);
		$this->client->addParam($vparams, "configValue", $configValue);
		$this->client->addParam($vparams, "configParamPart", $configParamPart);
		$this->client->addParam($vparams, "workerConfigId", $workerConfigId);
		$this->client->addParam($vparams, "workerName", $workerName);
		$this->client->queueServiceActionCall("batchcontrol", "configLoaded", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunSchedulerConfig");
		return $resultObject;
	}

	function stopScheduler($schedulerId, $adminId, $cause)
	{
		$vparams = array();
		$this->client->addParam($vparams, "schedulerId", $schedulerId);
		$this->client->addParam($vparams, "adminId", $adminId);
		$this->client->addParam($vparams, "cause", $cause);
		$this->client->queueServiceActionCall("batchcontrol", "stopScheduler", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunControlPanelCommand");
		return $resultObject;
	}

	function stopWorker($workerId, $adminId, $cause)
	{
		$vparams = array();
		$this->client->addParam($vparams, "workerId", $workerId);
		$this->client->addParam($vparams, "adminId", $adminId);
		$this->client->addParam($vparams, "cause", $cause);
		$this->client->queueServiceActionCall("batchcontrol", "stopWorker", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunControlPanelCommand");
		return $resultObject;
	}

	function kill($workerId, $batchIndex, $adminId, $cause)
	{
		$vparams = array();
		$this->client->addParam($vparams, "workerId", $workerId);
		$this->client->addParam($vparams, "batchIndex", $batchIndex);
		$this->client->addParam($vparams, "adminId", $adminId);
		$this->client->addParam($vparams, "cause", $cause);
		$this->client->queueServiceActionCall("batchcontrol", "kill", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunControlPanelCommand");
		return $resultObject;
	}

	function startWorker($workerId, $adminId, $cause = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "workerId", $workerId);
		$this->client->addParam($vparams, "adminId", $adminId);
		$this->client->addParam($vparams, "cause", $cause);
		$this->client->queueServiceActionCall("batchcontrol", "startWorker", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunControlPanelCommand");
		return $resultObject;
	}

	function setSchedulerConfig($schedulerId, $adminId, $configParam, $configValue, $configParamPart = null, $cause = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "schedulerId", $schedulerId);
		$this->client->addParam($vparams, "adminId", $adminId);
		$this->client->addParam($vparams, "configParam", $configParam);
		$this->client->addParam($vparams, "configValue", $configValue);
		$this->client->addParam($vparams, "configParamPart", $configParamPart);
		$this->client->addParam($vparams, "cause", $cause);
		$this->client->queueServiceActionCall("batchcontrol", "setSchedulerConfig", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunControlPanelCommand");
		return $resultObject;
	}

	function setWorkerConfig($workerId, $adminId, $configParam, $configValue, $configParamPart = null, $cause = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "workerId", $workerId);
		$this->client->addParam($vparams, "adminId", $adminId);
		$this->client->addParam($vparams, "configParam", $configParam);
		$this->client->addParam($vparams, "configValue", $configValue);
		$this->client->addParam($vparams, "configParamPart", $configParamPart);
		$this->client->addParam($vparams, "cause", $cause);
		$this->client->queueServiceActionCall("batchcontrol", "setWorkerConfig", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunControlPanelCommand");
		return $resultObject;
	}

	function setCommandResult($commandId, $status, $errorDescription = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "commandId", $commandId);
		$this->client->addParam($vparams, "status", $status);
		$this->client->addParam($vparams, "errorDescription", $errorDescription);
		$this->client->queueServiceActionCall("batchcontrol", "setCommandResult", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunControlPanelCommand");
		return $resultObject;
	}

	function listCommands(VidiunControlPanelCommandFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("batchcontrol", "listCommands", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunControlPanelCommandListResponse");
		return $resultObject;
	}

	function getCommand($commandId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "commandId", $commandId);
		$this->client->queueServiceActionCall("batchcontrol", "getCommand", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunControlPanelCommand");
		return $resultObject;
	}

	function listSchedulers()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("batchcontrol", "listSchedulers", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunSchedulerListResponse");
		return $resultObject;
	}

	function listWorkers()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("batchcontrol", "listWorkers", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunSchedulerWorkerListResponse");
		return $resultObject;
	}

	function getFullStatus()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("batchcontrol", "getFullStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunControlPanelCommand");
		return $resultObject;
	}
}

class VidiunBatchService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function getExclusiveImportJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveImportJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveImportJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveImportJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveImportJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveImportJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveBulkUploadJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveBulkUploadJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveAlmostDoneBulkUploadJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveAlmostDoneBulkUploadJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveBulkUploadJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveBulkUploadJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveBulkUploadJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveBulkUploadJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function addBulkUploadResult(VidiunBulkUploadResult $bulkUploadResult, array $pluginDataArray = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "bulkUploadResult", $bulkUploadResult->toParams());
		if ($pluginDataArray !== null)
			foreach($pluginDataArray as $index => $obj)
			{
				$this->client->addParam($vparams, "pluginDataArray:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("batch", "addBulkUploadResult", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBulkUploadResult");
		return $resultObject;
	}

	function getBulkUploadLastResult($bulkUploadJobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "bulkUploadJobId", $bulkUploadJobId);
		$this->client->queueServiceActionCall("batch", "getBulkUploadLastResult", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBulkUploadResult");
		return $resultObject;
	}

	function countBulkUploadEntries($bulkUploadJobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "bulkUploadJobId", $bulkUploadJobId);
		$this->client->queueServiceActionCall("batch", "countBulkUploadEntries", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function updateBulkUploadResults($bulkUploadJobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "bulkUploadJobId", $bulkUploadJobId);
		$this->client->queueServiceActionCall("batch", "updateBulkUploadResults", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function getExclusiveAlmostDoneConvertCollectionJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveAlmostDoneConvertCollectionJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveAlmostDoneConvertProfileJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveAlmostDoneConvertProfileJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveConvertCollectionJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job, array $flavorsData = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		if ($flavorsData !== null)
			foreach($flavorsData as $index => $obj)
			{
				$this->client->addParam($vparams, "flavorsData:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("batch", "updateExclusiveConvertCollectionJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function updateExclusiveConvertProfileJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveConvertProfileJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveConvertCollectionJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveConvertCollectionJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function freeExclusiveConvertProfileJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveConvertProfileJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveConvertCollectionJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveConvertCollectionJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveConvertJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveConvertJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveAlmostDoneConvertJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveAlmostDoneConvertJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveConvertJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveConvertJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function updateExclusiveConvertJobSubType($id, VidiunExclusiveLockKey $lockKey, $subType)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "subType", $subType);
		$this->client->queueServiceActionCall("batch", "updateExclusiveConvertJobSubType", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveConvertJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveConvertJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function getExclusivePostConvertJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusivePostConvertJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusivePostConvertJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusivePostConvertJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusivePostConvertJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusivePostConvertJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveCaptureThumbJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveCaptureThumbJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveCaptureThumbJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveCaptureThumbJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveCaptureThumbJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveCaptureThumbJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveExtractMediaJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveExtractMediaJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveExtractMediaJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveExtractMediaJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function addMediaInfo(VidiunMediaInfo $mediaInfo)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mediaInfo", $mediaInfo->toParams());
		$this->client->queueServiceActionCall("batch", "addMediaInfo", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaInfo");
		return $resultObject;
	}

	function freeExclusiveExtractMediaJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveExtractMediaJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveStorageExportJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveStorageExportJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveStorageExportJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveStorageExportJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveStorageExportJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveStorageExportJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveStorageDeleteJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveStorageDeleteJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveStorageDeleteJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveStorageDeleteJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveStorageDeleteJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveStorageDeleteJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveNotificationJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveNotificationJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchGetExclusiveNotificationJobsResponse");
		return $resultObject;
	}

	function updateExclusiveNotificationJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveNotificationJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveNotificationJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveNotificationJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveMailJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveMailJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveMailJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveMailJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveMailJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveMailJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveBulkDownloadJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveBulkDownloadJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveAlmostDoneBulkDownloadJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveAlmostDoneBulkDownloadJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveBulkDownloadJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveBulkDownloadJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveBulkDownloadJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveBulkDownloadJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveProvisionProvideJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveProvisionProvideJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveAlmostDoneProvisionProvideJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveAlmostDoneProvisionProvideJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveProvisionProvideJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveProvisionProvideJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveProvisionProvideJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveProvisionProvideJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveProvisionDeleteJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveProvisionDeleteJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveAlmostDoneProvisionDeleteJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("batch", "getExclusiveAlmostDoneProvisionDeleteJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveProvisionDeleteJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveProvisionDeleteJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveProvisionDeleteJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveProvisionDeleteJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function resetJobExecutionAttempts($id, VidiunExclusiveLockKey $lockKey, $jobType)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "jobType", $jobType);
		$this->client->queueServiceActionCall("batch", "resetJobExecutionAttempts", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function freeExclusiveJob($id, VidiunExclusiveLockKey $lockKey, $jobType, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "jobType", $jobType);
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("batch", "freeExclusiveJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function getQueueSize(VidiunWorkerQueueFilter $workerQueueFilter)
	{
		$vparams = array();
		$this->client->addParam($vparams, "workerQueueFilter", $workerQueueFilter->toParams());
		$this->client->queueServiceActionCall("batch", "getQueueSize", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function getExclusiveJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null, $jobType = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->addParam($vparams, "jobType", $jobType);
		$this->client->queueServiceActionCall("batch", "getExclusiveJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveAlmostDone(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null, $jobType = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->addParam($vparams, "jobType", $jobType);
		$this->client->queueServiceActionCall("batch", "getExclusiveAlmostDone", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function cleanExclusiveJobs()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("batch", "cleanExclusiveJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function logConversion($flavorAssetId, $data)
	{
		$vparams = array();
		$this->client->addParam($vparams, "flavorAssetId", $flavorAssetId);
		$this->client->addParam($vparams, "data", $data);
		$this->client->queueServiceActionCall("batch", "logConversion", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function checkFileExists($localPath, $size)
	{
		$vparams = array();
		$this->client->addParam($vparams, "localPath", $localPath);
		$this->client->addParam($vparams, "size", $size);
		$this->client->queueServiceActionCall("batch", "checkFileExists", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFileExistsResponse");
		return $resultObject;
	}
}

class VidiunBulkUploadService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add($conversionProfileId, $fileData, $bulkUploadType = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "conversionProfileId", $conversionProfileId);
		$vfiles = array();
		$this->client->addParam($vfiles, "fileData", $fileData);
		$this->client->addParam($vparams, "bulkUploadType", $bulkUploadType);
		$this->client->queueServiceActionCall("bulkupload", "add", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBulkUpload");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("bulkupload", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBulkUpload");
		return $resultObject;
	}

	function listAction(VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("bulkupload", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBulkUploadListResponse");
		return $resultObject;
	}
}

class VidiunCategoryService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunCategory $category)
	{
		$vparams = array();
		$this->client->addParam($vparams, "category", $category->toParams());
		$this->client->queueServiceActionCall("category", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunCategory");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("category", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunCategory");
		return $resultObject;
	}

	function update($id, VidiunCategory $category)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "category", $category->toParams());
		$this->client->queueServiceActionCall("category", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunCategory");
		return $resultObject;
	}

	function delete($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("category", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunCategoryFilter $filter = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("category", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunCategoryListResponse");
		return $resultObject;
	}
}

class VidiunConversionProfileAssetParamsService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function listAction(VidiunConversionProfileAssetParamsFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("conversionprofileassetparams", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunConversionProfileAssetParamsListResponse");
		return $resultObject;
	}

	function update($conversionProfileId, $assetParamsId, VidiunConversionProfileAssetParams $conversionProfileAssetParams)
	{
		$vparams = array();
		$this->client->addParam($vparams, "conversionProfileId", $conversionProfileId);
		$this->client->addParam($vparams, "assetParamsId", $assetParamsId);
		$this->client->addParam($vparams, "conversionProfileAssetParams", $conversionProfileAssetParams->toParams());
		$this->client->queueServiceActionCall("conversionprofileassetparams", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunConversionProfileAssetParams");
		return $resultObject;
	}
}

class VidiunConversionProfileService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function setAsDefault($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("conversionprofile", "setAsDefault", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunConversionProfile");
		return $resultObject;
	}

	function getDefault()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("conversionprofile", "getDefault", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunConversionProfile");
		return $resultObject;
	}

	function add(VidiunConversionProfile $conversionProfile)
	{
		$vparams = array();
		$this->client->addParam($vparams, "conversionProfile", $conversionProfile->toParams());
		$this->client->queueServiceActionCall("conversionprofile", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunConversionProfile");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("conversionprofile", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunConversionProfile");
		return $resultObject;
	}

	function update($id, VidiunConversionProfile $conversionProfile)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "conversionProfile", $conversionProfile->toParams());
		$this->client->queueServiceActionCall("conversionprofile", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunConversionProfile");
		return $resultObject;
	}

	function delete($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("conversionprofile", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunConversionProfileFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("conversionprofile", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunConversionProfileListResponse");
		return $resultObject;
	}
}

class VidiunDataService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunDataEntry $dataEntry)
	{
		$vparams = array();
		$this->client->addParam($vparams, "dataEntry", $dataEntry->toParams());
		$this->client->queueServiceActionCall("data", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDataEntry");
		return $resultObject;
	}

	function get($entryId, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("data", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDataEntry");
		return $resultObject;
	}

	function update($entryId, VidiunDataEntry $documentEntry)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "documentEntry", $documentEntry->toParams());
		$this->client->queueServiceActionCall("data", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDataEntry");
		return $resultObject;
	}

	function delete($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("data", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunDataEntryFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("data", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDataListResponse");
		return $resultObject;
	}

	function serve($entryId, $version = -1, $forceProxy = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "version", $version);
		$this->client->addParam($vparams, "forceProxy", $forceProxy);
		$this->client->queueServiceActionCall('data', 'serve', $vparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}
}

class VidiunDocumentService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function addFromUploadedFile(VidiunDocumentEntry $documentEntry, $uploadTokenId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "documentEntry", $documentEntry->toParams());
		$this->client->addParam($vparams, "uploadTokenId", $uploadTokenId);
		$this->client->queueServiceActionCall("document", "addFromUploadedFile", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDocumentEntry");
		return $resultObject;
	}

	function addFromEntry($sourceEntryId, VidiunDocumentEntry $documentEntry = null, $sourceFlavorParamsId = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "sourceEntryId", $sourceEntryId);
		if ($documentEntry !== null)
			$this->client->addParam($vparams, "documentEntry", $documentEntry->toParams());
		$this->client->addParam($vparams, "sourceFlavorParamsId", $sourceFlavorParamsId);
		$this->client->queueServiceActionCall("document", "addFromEntry", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDocumentEntry");
		return $resultObject;
	}

	function addFromFlavorAsset($sourceFlavorAssetId, VidiunDocumentEntry $documentEntry = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "sourceFlavorAssetId", $sourceFlavorAssetId);
		if ($documentEntry !== null)
			$this->client->addParam($vparams, "documentEntry", $documentEntry->toParams());
		$this->client->queueServiceActionCall("document", "addFromFlavorAsset", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDocumentEntry");
		return $resultObject;
	}

	function convert($entryId, $conversionProfileId = null, array $dynamicConversionAttributes = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "conversionProfileId", $conversionProfileId);
		if ($dynamicConversionAttributes !== null)
			foreach($dynamicConversionAttributes as $index => $obj)
			{
				$this->client->addParam($vparams, "dynamicConversionAttributes:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("document", "convert", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function get($entryId, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("document", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDocumentEntry");
		return $resultObject;
	}

	function update($entryId, VidiunDocumentEntry $documentEntry)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "documentEntry", $documentEntry->toParams());
		$this->client->queueServiceActionCall("document", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDocumentEntry");
		return $resultObject;
	}

	function delete($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("document", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunDocumentEntryFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("document", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDocumentListResponse");
		return $resultObject;
	}

	function upload($fileData)
	{
		$vparams = array();
		$vfiles = array();
		$this->client->addParam($vfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("document", "upload", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function convertPptToSwf($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("document", "convertPptToSwf", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function serve($entryId, $flavorAssetId = null, $forceProxy = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "flavorAssetId", $flavorAssetId);
		$this->client->addParam($vparams, "forceProxy", $forceProxy);
		$this->client->queueServiceActionCall('document', 'serve', $vparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	function serveByFlavorParamsId($entryId, $flavorParamsId = null, $forceProxy = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "flavorParamsId", $flavorParamsId);
		$this->client->addParam($vparams, "forceProxy", $forceProxy);
		$this->client->queueServiceActionCall('document', 'serveByFlavorParamsId', $vparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}
}

class VidiunEmailIngestionProfileService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunEmailIngestionProfile $EmailIP)
	{
		$vparams = array();
		$this->client->addParam($vparams, "EmailIP", $EmailIP->toParams());
		$this->client->queueServiceActionCall("emailingestionprofile", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunEmailIngestionProfile");
		return $resultObject;
	}

	function getByEmailAddress($emailAddress)
	{
		$vparams = array();
		$this->client->addParam($vparams, "emailAddress", $emailAddress);
		$this->client->queueServiceActionCall("emailingestionprofile", "getByEmailAddress", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunEmailIngestionProfile");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("emailingestionprofile", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunEmailIngestionProfile");
		return $resultObject;
	}

	function update($id, VidiunEmailIngestionProfile $EmailIP)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "EmailIP", $EmailIP->toParams());
		$this->client->queueServiceActionCall("emailingestionprofile", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunEmailIngestionProfile");
		return $resultObject;
	}

	function delete($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("emailingestionprofile", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function addMediaEntry(VidiunMediaEntry $mediaEntry, $uploadTokenId, $emailProfId, $fromAddress, $emailMsgId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($vparams, "uploadTokenId", $uploadTokenId);
		$this->client->addParam($vparams, "emailProfId", $emailProfId);
		$this->client->addParam($vparams, "fromAddress", $fromAddress);
		$this->client->addParam($vparams, "emailMsgId", $emailMsgId);
		$this->client->queueServiceActionCall("emailingestionprofile", "addMediaEntry", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}
}

class VidiunFlavorAssetService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add($entryId, VidiunFlavorAsset $flavorAsset)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "flavorAsset", $flavorAsset->toParams());
		$this->client->queueServiceActionCall("flavorasset", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFlavorAsset");
		return $resultObject;
	}

	function update($id, VidiunFlavorAsset $flavorAsset)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "flavorAsset", $flavorAsset->toParams());
		$this->client->queueServiceActionCall("flavorasset", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFlavorAsset");
		return $resultObject;
	}

	function setContent($id, VidiunContentResource $contentResource)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "contentResource", $contentResource->toParams());
		$this->client->queueServiceActionCall("flavorasset", "setContent", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFlavorAsset");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("flavorasset", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFlavorAsset");
		return $resultObject;
	}

	function getByEntryId($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("flavorasset", "getByEntryId", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function listAction(VidiunAssetFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("flavorasset", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFlavorAssetListResponse");
		return $resultObject;
	}

	function getWebPlayableByEntryId($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("flavorasset", "getWebPlayableByEntryId", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function convert($entryId, $flavorParamsId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "flavorParamsId", $flavorParamsId);
		$this->client->queueServiceActionCall("flavorasset", "convert", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function reconvert($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("flavorasset", "reconvert", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function delete($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("flavorasset", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function getDownloadUrl($id, $useCdn = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "useCdn", $useCdn);
		$this->client->queueServiceActionCall("flavorasset", "getDownloadUrl", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function getFlavorAssetsWithParams($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("flavorasset", "getFlavorAssetsWithParams", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}
}

class VidiunFlavorParamsService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunFlavorParams $flavorParams)
	{
		$vparams = array();
		$this->client->addParam($vparams, "flavorParams", $flavorParams->toParams());
		$this->client->queueServiceActionCall("flavorparams", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFlavorParams");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("flavorparams", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFlavorParams");
		return $resultObject;
	}

	function update($id, VidiunFlavorParams $flavorParams)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "flavorParams", $flavorParams->toParams());
		$this->client->queueServiceActionCall("flavorparams", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFlavorParams");
		return $resultObject;
	}

	function delete($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("flavorparams", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunFlavorParamsFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("flavorparams", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFlavorParamsListResponse");
		return $resultObject;
	}

	function getByConversionProfileId($conversionProfileId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "conversionProfileId", $conversionProfileId);
		$this->client->queueServiceActionCall("flavorparams", "getByConversionProfileId", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}
}

class VidiunJobsService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function getImportStatus($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getImportStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deleteImport($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteImport", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortImport($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortImport", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryImport($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryImport", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function getProvisionProvideStatus($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getProvisionProvideStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deleteProvisionProvide($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteProvisionProvide", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortProvisionProvide($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortProvisionProvide", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryProvisionProvide($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryProvisionProvide", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function getProvisionDeleteStatus($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getProvisionDeleteStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deleteProvisionDelete($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteProvisionDelete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortProvisionDelete($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortProvisionDelete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryProvisionDelete($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryProvisionDelete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function getBulkUploadStatus($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getBulkUploadStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deleteBulkUpload($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteBulkUpload", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortBulkUpload($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortBulkUpload", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryBulkUpload($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryBulkUpload", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function getConvertStatus($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getConvertStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function getConvertCollectionStatus($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getConvertCollectionStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function getConvertProfileStatus($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getConvertProfileStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function addConvertProfileJob($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("jobs", "addConvertProfileJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function getRemoteConvertStatus($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getRemoteConvertStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deleteConvert($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteConvert", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortConvert($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortConvert", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryConvert($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryConvert", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deleteRemoteConvert($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteRemoteConvert", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortRemoteConvert($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortRemoteConvert", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryRemoteConvert($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryRemoteConvert", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deleteConvertCollection($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteConvertCollection", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deleteConvertProfile($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteConvertProfile", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortConvertCollection($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortConvertCollection", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortConvertProfile($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortConvertProfile", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryConvertCollection($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryConvertCollection", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryConvertProfile($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryConvertProfile", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function getPostConvertStatus($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getPostConvertStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deletePostConvert($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deletePostConvert", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortPostConvert($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortPostConvert", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryPostConvert($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryPostConvert", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function getCaptureThumbStatus($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getCaptureThumbStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deleteCaptureThumb($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteCaptureThumb", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortCaptureThumb($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortCaptureThumb", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryCaptureThumb($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryCaptureThumb", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function getPullStatus($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getPullStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deletePull($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deletePull", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortPull($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortPull", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryPull($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryPull", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function getExtractMediaStatus($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getExtractMediaStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deleteExtractMedia($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteExtractMedia", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortExtractMedia($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortExtractMedia", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryExtractMedia($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryExtractMedia", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function getStorageExportStatus($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getStorageExportStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deleteStorageExport($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteStorageExport", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortStorageExport($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortStorageExport", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryStorageExport($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryStorageExport", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function getStorageDeleteStatus($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getStorageDeleteStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deleteStorageDelete($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteStorageDelete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortStorageDelete($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortStorageDelete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryStorageDelete($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryStorageDelete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function getNotificationStatus($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getNotificationStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deleteNotification($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteNotification", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortNotification($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortNotification", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryNotification($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryNotification", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function getMailStatus($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "getMailStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deleteMail($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "deleteMail", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortMail($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "abortMail", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryMail($jobId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->queueServiceActionCall("jobs", "retryMail", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function addMailJob(VidiunMailJobData $mailJobData)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mailJobData", $mailJobData->toParams());
		$this->client->queueServiceActionCall("jobs", "addMailJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function addBatchJob(VidiunBatchJob $batchJob)
	{
		$vparams = array();
		$this->client->addParam($vparams, "batchJob", $batchJob->toParams());
		$this->client->queueServiceActionCall("jobs", "addBatchJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function getStatus($jobId, $jobType, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->addParam($vparams, "jobType", $jobType);
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("jobs", "getStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function deleteJob($jobId, $jobType)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->addParam($vparams, "jobType", $jobType);
		$this->client->queueServiceActionCall("jobs", "deleteJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function abortJob($jobId, $jobType)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->addParam($vparams, "jobType", $jobType);
		$this->client->queueServiceActionCall("jobs", "abortJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function retryJob($jobId, $jobType)
	{
		$vparams = array();
		$this->client->addParam($vparams, "jobId", $jobId);
		$this->client->addParam($vparams, "jobType", $jobType);
		$this->client->queueServiceActionCall("jobs", "retryJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobResponse");
		return $resultObject;
	}

	function listBatchJobs(VidiunBatchJobFilterExt $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("jobs", "listBatchJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJobListResponse");
		return $resultObject;
	}
}

class VidiunLiveStreamService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunLiveStreamAdminEntry $liveStreamEntry, $sourceType = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "liveStreamEntry", $liveStreamEntry->toParams());
		$this->client->addParam($vparams, "sourceType", $sourceType);
		$this->client->queueServiceActionCall("livestream", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunLiveStreamAdminEntry");
		return $resultObject;
	}

	function get($entryId, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("livestream", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunLiveStreamEntry");
		return $resultObject;
	}

	function update($entryId, VidiunLiveStreamAdminEntry $liveStreamEntry)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "liveStreamEntry", $liveStreamEntry->toParams());
		$this->client->queueServiceActionCall("livestream", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunLiveStreamAdminEntry");
		return $resultObject;
	}

	function delete($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("livestream", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunLiveStreamEntryFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("livestream", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunLiveStreamListResponse");
		return $resultObject;
	}

	function updateOfflineThumbnailJpeg($entryId, $fileData)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$vfiles = array();
		$this->client->addParam($vfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("livestream", "updateOfflineThumbnailJpeg", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunLiveStreamEntry");
		return $resultObject;
	}

	function updateOfflineThumbnailFromUrl($entryId, $url)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "url", $url);
		$this->client->queueServiceActionCall("livestream", "updateOfflineThumbnailFromUrl", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunLiveStreamEntry");
		return $resultObject;
	}
}

class VidiunMediaService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunMediaEntry $entry)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entry", $entry->toParams());
		$this->client->queueServiceActionCall("media", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function addContent($entryId, VidiunResource $resource = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		if ($resource !== null)
			$this->client->addParam($vparams, "resource", $resource->toParams());
		$this->client->queueServiceActionCall("media", "addContent", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function addFromBulk(VidiunMediaEntry $mediaEntry, $url, $bulkUploadId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($vparams, "url", $url);
		$this->client->addParam($vparams, "bulkUploadId", $bulkUploadId);
		$this->client->queueServiceActionCall("media", "addFromBulk", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function addFromUrl(VidiunMediaEntry $mediaEntry, $url)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($vparams, "url", $url);
		$this->client->queueServiceActionCall("media", "addFromUrl", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function addFromSearchResult(VidiunMediaEntry $mediaEntry = null, VidiunSearchResult $searchResult = null)
	{
		$vparams = array();
		if ($mediaEntry !== null)
			$this->client->addParam($vparams, "mediaEntry", $mediaEntry->toParams());
		if ($searchResult !== null)
			$this->client->addParam($vparams, "searchResult", $searchResult->toParams());
		$this->client->queueServiceActionCall("media", "addFromSearchResult", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function addFromUploadedFile(VidiunMediaEntry $mediaEntry, $uploadTokenId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($vparams, "uploadTokenId", $uploadTokenId);
		$this->client->queueServiceActionCall("media", "addFromUploadedFile", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function addFromRecordedWebcam(VidiunMediaEntry $mediaEntry, $webcamTokenId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($vparams, "webcamTokenId", $webcamTokenId);
		$this->client->queueServiceActionCall("media", "addFromRecordedWebcam", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function addFromEntry($sourceEntryId, VidiunMediaEntry $mediaEntry = null, $sourceFlavorParamsId = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "sourceEntryId", $sourceEntryId);
		if ($mediaEntry !== null)
			$this->client->addParam($vparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($vparams, "sourceFlavorParamsId", $sourceFlavorParamsId);
		$this->client->queueServiceActionCall("media", "addFromEntry", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function addFromFlavorAsset($sourceFlavorAssetId, VidiunMediaEntry $mediaEntry = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "sourceFlavorAssetId", $sourceFlavorAssetId);
		if ($mediaEntry !== null)
			$this->client->addParam($vparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->queueServiceActionCall("media", "addFromFlavorAsset", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function convert($entryId, $conversionProfileId = null, array $dynamicConversionAttributes = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "conversionProfileId", $conversionProfileId);
		if ($dynamicConversionAttributes !== null)
			foreach($dynamicConversionAttributes as $index => $obj)
			{
				$this->client->addParam($vparams, "dynamicConversionAttributes:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("media", "convert", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function get($entryId, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("media", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function update($entryId, VidiunMediaEntry $mediaEntry)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->queueServiceActionCall("media", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function updateContent($entryId, VidiunResource $resource, $conversionProfileId = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "resource", $resource->toParams());
		$this->client->addParam($vparams, "conversionProfileId", $conversionProfileId);
		$this->client->queueServiceActionCall("media", "updateContent", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function delete($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function approveReplace($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "approveReplace", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function cancelReplace($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "cancelReplace", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function listAction(VidiunMediaEntryFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("media", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaListResponse");
		return $resultObject;
	}

	function count(VidiunMediaEntryFilter $filter = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("media", "count", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function upload($fileData)
	{
		$vparams = array();
		$vfiles = array();
		$this->client->addParam($vfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("media", "upload", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function updateThumbnail($entryId, $timeOffset, $flavorParamsId = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "timeOffset", $timeOffset);
		$this->client->addParam($vparams, "flavorParamsId", $flavorParamsId);
		$this->client->queueServiceActionCall("media", "updateThumbnail", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function updateThumbnailFromSourceEntry($entryId, $sourceEntryId, $timeOffset, $flavorParamsId = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "sourceEntryId", $sourceEntryId);
		$this->client->addParam($vparams, "timeOffset", $timeOffset);
		$this->client->addParam($vparams, "flavorParamsId", $flavorParamsId);
		$this->client->queueServiceActionCall("media", "updateThumbnailFromSourceEntry", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function updateThumbnailJpeg($entryId, $fileData)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$vfiles = array();
		$this->client->addParam($vfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("media", "updateThumbnailJpeg", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function updateThumbnailFromUrl($entryId, $url)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "url", $url);
		$this->client->queueServiceActionCall("media", "updateThumbnailFromUrl", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseEntry");
		return $resultObject;
	}

	function requestConversion($entryId, $fileFormat)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "fileFormat", $fileFormat);
		$this->client->queueServiceActionCall("media", "requestConversion", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function flag(VidiunModerationFlag $moderationFlag)
	{
		$vparams = array();
		$this->client->addParam($vparams, "moderationFlag", $moderationFlag->toParams());
		$this->client->queueServiceActionCall("media", "flag", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function reject($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "reject", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function approve($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "approve", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listFlags($entryId, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("media", "listFlags", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunModerationFlagListResponse");
		return $resultObject;
	}

	function anonymousRank($entryId, $rank)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "rank", $rank);
		$this->client->queueServiceActionCall("media", "anonymousRank", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}
}

class VidiunMixingService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunMixEntry $mixEntry)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mixEntry", $mixEntry->toParams());
		$this->client->queueServiceActionCall("mixing", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMixEntry");
		return $resultObject;
	}

	function get($entryId, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("mixing", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMixEntry");
		return $resultObject;
	}

	function update($entryId, VidiunMixEntry $mixEntry)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "mixEntry", $mixEntry->toParams());
		$this->client->queueServiceActionCall("mixing", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMixEntry");
		return $resultObject;
	}

	function delete($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("mixing", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunMixEntryFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("mixing", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMixListResponse");
		return $resultObject;
	}

	function count(VidiunMediaEntryFilter $filter = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("mixing", "count", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function cloneAction($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("mixing", "clone", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMixEntry");
		return $resultObject;
	}

	function appendMediaEntry($mixEntryId, $mediaEntryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mixEntryId", $mixEntryId);
		$this->client->addParam($vparams, "mediaEntryId", $mediaEntryId);
		$this->client->queueServiceActionCall("mixing", "appendMediaEntry", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMixEntry");
		return $resultObject;
	}

	function requestFlattening($entryId, $fileFormat, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "fileFormat", $fileFormat);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("mixing", "requestFlattening", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function getMixesByMediaId($mediaEntryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mediaEntryId", $mediaEntryId);
		$this->client->queueServiceActionCall("mixing", "getMixesByMediaId", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getReadyMediaEntries($mixId, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mixId", $mixId);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("mixing", "getReadyMediaEntries", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function anonymousRank($entryId, $rank)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "rank", $rank);
		$this->client->queueServiceActionCall("mixing", "anonymousRank", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}
}

class VidiunNotificationService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function getClientNotification($entryId, $type)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "type", $type);
		$this->client->queueServiceActionCall("notification", "getClientNotification", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunClientNotification");
		return $resultObject;
	}
}

class VidiunPartnerService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function register(VidiunPartner $partner, $cmsPassword = "")
	{
		$vparams = array();
		$this->client->addParam($vparams, "partner", $partner->toParams());
		$this->client->addParam($vparams, "cmsPassword", $cmsPassword);
		$this->client->queueServiceActionCall("partner", "register", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPartner");
		return $resultObject;
	}

	function update(VidiunPartner $partner, $allowEmpty = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "partner", $partner->toParams());
		$this->client->addParam($vparams, "allowEmpty", $allowEmpty);
		$this->client->queueServiceActionCall("partner", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPartner");
		return $resultObject;
	}

	function getSecrets($partnerId, $adminEmail, $cmsPassword)
	{
		$vparams = array();
		$this->client->addParam($vparams, "partnerId", $partnerId);
		$this->client->addParam($vparams, "adminEmail", $adminEmail);
		$this->client->addParam($vparams, "cmsPassword", $cmsPassword);
		$this->client->queueServiceActionCall("partner", "getSecrets", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPartner");
		return $resultObject;
	}

	function getInfo()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("partner", "getInfo", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPartner");
		return $resultObject;
	}

	function getUsage($year = "", $month = 1, $resolution = "days")
	{
		$vparams = array();
		$this->client->addParam($vparams, "year", $year);
		$this->client->addParam($vparams, "month", $month);
		$this->client->addParam($vparams, "resolution", $resolution);
		$this->client->queueServiceActionCall("partner", "getUsage", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPartnerUsage");
		return $resultObject;
	}
}

class VidiunPermissionItemService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunPermissionItem $permissionItem)
	{
		$vparams = array();
		$this->client->addParam($vparams, "permissionItem", $permissionItem->toParams());
		$this->client->queueServiceActionCall("permissionitem", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPermissionItem");
		return $resultObject;
	}

	function get($permissionItemId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "permissionItemId", $permissionItemId);
		$this->client->queueServiceActionCall("permissionitem", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPermissionItem");
		return $resultObject;
	}

	function update($permissionItemId, VidiunPermissionItem $permissionItem)
	{
		$vparams = array();
		$this->client->addParam($vparams, "permissionItemId", $permissionItemId);
		$this->client->addParam($vparams, "permissionItem", $permissionItem->toParams());
		$this->client->queueServiceActionCall("permissionitem", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPermissionItem");
		return $resultObject;
	}

	function delete($permissionItemId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "permissionItemId", $permissionItemId);
		$this->client->queueServiceActionCall("permissionitem", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPermissionItem");
		return $resultObject;
	}

	function listAction(VidiunPermissionItemFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("permissionitem", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPermissionItemListResponse");
		return $resultObject;
	}
}

class VidiunPermissionService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunPermission $permission)
	{
		$vparams = array();
		$this->client->addParam($vparams, "permission", $permission->toParams());
		$this->client->queueServiceActionCall("permission", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPermission");
		return $resultObject;
	}

	function get($permissionName)
	{
		$vparams = array();
		$this->client->addParam($vparams, "permissionName", $permissionName);
		$this->client->queueServiceActionCall("permission", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPermission");
		return $resultObject;
	}

	function update($permissionName, VidiunPermission $permission)
	{
		$vparams = array();
		$this->client->addParam($vparams, "permissionName", $permissionName);
		$this->client->addParam($vparams, "permission", $permission->toParams());
		$this->client->queueServiceActionCall("permission", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPermission");
		return $resultObject;
	}

	function delete($permissionName)
	{
		$vparams = array();
		$this->client->addParam($vparams, "permissionName", $permissionName);
		$this->client->queueServiceActionCall("permission", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPermission");
		return $resultObject;
	}

	function listAction(VidiunPermissionFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("permission", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPermissionListResponse");
		return $resultObject;
	}

	function getCurrentPermissions()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("permission", "getCurrentPermissions", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}

class VidiunPlaylistService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunPlaylist $playlist, $updateStats = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "playlist", $playlist->toParams());
		$this->client->addParam($vparams, "updateStats", $updateStats);
		$this->client->queueServiceActionCall("playlist", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPlaylist");
		return $resultObject;
	}

	function get($id, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("playlist", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPlaylist");
		return $resultObject;
	}

	function update($id, VidiunPlaylist $playlist, $updateStats = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "playlist", $playlist->toParams());
		$this->client->addParam($vparams, "updateStats", $updateStats);
		$this->client->queueServiceActionCall("playlist", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPlaylist");
		return $resultObject;
	}

	function delete($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("playlist", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function cloneAction($id, VidiunPlaylist $newPlaylist = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		if ($newPlaylist !== null)
			$this->client->addParam($vparams, "newPlaylist", $newPlaylist->toParams());
		$this->client->queueServiceActionCall("playlist", "clone", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPlaylist");
		return $resultObject;
	}

	function listAction(VidiunPlaylistFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("playlist", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPlaylistListResponse");
		return $resultObject;
	}

	function execute($id, $detailed = "")
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "detailed", $detailed);
		$this->client->queueServiceActionCall("playlist", "execute", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function executeFromContent($playlistType, $playlistContent, $detailed = "")
	{
		$vparams = array();
		$this->client->addParam($vparams, "playlistType", $playlistType);
		$this->client->addParam($vparams, "playlistContent", $playlistContent);
		$this->client->addParam($vparams, "detailed", $detailed);
		$this->client->queueServiceActionCall("playlist", "executeFromContent", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function executeFromFilters(array $filters, $totalResults, $detailed = "")
	{
		$vparams = array();
		foreach($filters as $index => $obj)
		{
			$this->client->addParam($vparams, "filters:$index", $obj->toParams());
		}
		$this->client->addParam($vparams, "totalResults", $totalResults);
		$this->client->addParam($vparams, "detailed", $detailed);
		$this->client->queueServiceActionCall("playlist", "executeFromFilters", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getStatsFromContent($playlistType, $playlistContent)
	{
		$vparams = array();
		$this->client->addParam($vparams, "playlistType", $playlistType);
		$this->client->addParam($vparams, "playlistContent", $playlistContent);
		$this->client->queueServiceActionCall("playlist", "getStatsFromContent", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPlaylist");
		return $resultObject;
	}
}

class VidiunReportService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function getGraphs($reportType, VidiunReportInputFilter $reportInputFilter, $dimension = null, $objectIds = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "reportType", $reportType);
		$this->client->addParam($vparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($vparams, "dimension", $dimension);
		$this->client->addParam($vparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getGraphs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getTotal($reportType, VidiunReportInputFilter $reportInputFilter, $objectIds = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "reportType", $reportType);
		$this->client->addParam($vparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($vparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getTotal", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunReportTotal");
		return $resultObject;
	}

	function getTable($reportType, VidiunReportInputFilter $reportInputFilter, VidiunFilterPager $pager, $order = null, $objectIds = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "reportType", $reportType);
		$this->client->addParam($vparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->addParam($vparams, "order", $order);
		$this->client->addParam($vparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getTable", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunReportTable");
		return $resultObject;
	}

	function getUrlForReportAsCsv($reportTitle, $reportText, $headers, $reportType, VidiunReportInputFilter $reportInputFilter, $dimension = null, VidiunFilterPager $pager = null, $order = null, $objectIds = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "reportTitle", $reportTitle);
		$this->client->addParam($vparams, "reportText", $reportText);
		$this->client->addParam($vparams, "headers", $headers);
		$this->client->addParam($vparams, "reportType", $reportType);
		$this->client->addParam($vparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($vparams, "dimension", $dimension);
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->addParam($vparams, "order", $order);
		$this->client->addParam($vparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getUrlForReportAsCsv", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}

class VidiunSearchService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function search(VidiunSearch $search, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "search", $search->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("search", "search", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunSearchResultResponse");
		return $resultObject;
	}

	function getMediaInfo(VidiunSearchResult $searchResult)
	{
		$vparams = array();
		$this->client->addParam($vparams, "searchResult", $searchResult->toParams());
		$this->client->queueServiceActionCall("search", "getMediaInfo", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunSearchResult");
		return $resultObject;
	}

	function searchUrl($mediaType, $url)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mediaType", $mediaType);
		$this->client->addParam($vparams, "url", $url);
		$this->client->queueServiceActionCall("search", "searchUrl", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunSearchResult");
		return $resultObject;
	}

	function externalLogin($searchSource, $userName, $password)
	{
		$vparams = array();
		$this->client->addParam($vparams, "searchSource", $searchSource);
		$this->client->addParam($vparams, "userName", $userName);
		$this->client->addParam($vparams, "password", $password);
		$this->client->queueServiceActionCall("search", "externalLogin", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunSearchAuthData");
		return $resultObject;
	}
}

class VidiunSessionService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function start($secret, $userId = "", $type = 0, $partnerId = null, $expiry = 86400, $privileges = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "secret", $secret);
		$this->client->addParam($vparams, "userId", $userId);
		$this->client->addParam($vparams, "type", $type);
		$this->client->addParam($vparams, "partnerId", $partnerId);
		$this->client->addParam($vparams, "expiry", $expiry);
		$this->client->addParam($vparams, "privileges", $privileges);
		$this->client->queueServiceActionCall("session", "start", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function end()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("session", "end", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function impersonate($secret, $impersonatedPartnerId, $userId = "", $type = 0, $partnerId = null, $expiry = 86400, $privileges = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "secret", $secret);
		$this->client->addParam($vparams, "impersonatedPartnerId", $impersonatedPartnerId);
		$this->client->addParam($vparams, "userId", $userId);
		$this->client->addParam($vparams, "type", $type);
		$this->client->addParam($vparams, "partnerId", $partnerId);
		$this->client->addParam($vparams, "expiry", $expiry);
		$this->client->addParam($vparams, "privileges", $privileges);
		$this->client->queueServiceActionCall("session", "impersonate", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function startWidgetSession($widgetId, $expiry = 86400)
	{
		$vparams = array();
		$this->client->addParam($vparams, "widgetId", $widgetId);
		$this->client->addParam($vparams, "expiry", $expiry);
		$this->client->queueServiceActionCall("session", "startWidgetSession", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunStartWidgetSessionResponse");
		return $resultObject;
	}
}

class VidiunStatsService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function collect(VidiunStatsEvent $event)
	{
		$vparams = array();
		$this->client->addParam($vparams, "event", $event->toParams());
		$this->client->queueServiceActionCall("stats", "collect", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function vmcCollect(VidiunStatsVmcEvent $vmcEvent)
	{
		$vparams = array();
		$this->client->addParam($vparams, "vmcEvent", $vmcEvent->toParams());
		$this->client->queueServiceActionCall("stats", "vmcCollect", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function reportVceError(VidiunCEError $vidiunCEError)
	{
		$vparams = array();
		$this->client->addParam($vparams, "vidiunCEError", $vidiunCEError->toParams());
		$this->client->queueServiceActionCall("stats", "reportVceError", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunCEError");
		return $resultObject;
	}
}

class VidiunStorageProfileService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function listAction(VidiunStorageProfileFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("storageprofile", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunStorageProfileListResponse");
		return $resultObject;
	}

	function updateStatus($storageId, $status)
	{
		$vparams = array();
		$this->client->addParam($vparams, "storageId", $storageId);
		$this->client->addParam($vparams, "status", $status);
		$this->client->queueServiceActionCall("storageprofile", "updateStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function get($storageProfileId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "storageProfileId", $storageProfileId);
		$this->client->queueServiceActionCall("storageprofile", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunStorageProfile");
		return $resultObject;
	}

	function update($storageProfileId, VidiunStorageProfile $storageProfile)
	{
		$vparams = array();
		$this->client->addParam($vparams, "storageProfileId", $storageProfileId);
		$this->client->addParam($vparams, "storageProfile", $storageProfile->toParams());
		$this->client->queueServiceActionCall("storageprofile", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunStorageProfile");
		return $resultObject;
	}

	function add(VidiunStorageProfile $storageProfile)
	{
		$vparams = array();
		$this->client->addParam($vparams, "storageProfile", $storageProfile->toParams());
		$this->client->queueServiceActionCall("storageprofile", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunStorageProfile");
		return $resultObject;
	}
}

class VidiunSyndicationFeedService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunBaseSyndicationFeed $syndicationFeed)
	{
		$vparams = array();
		$this->client->addParam($vparams, "syndicationFeed", $syndicationFeed->toParams());
		$this->client->queueServiceActionCall("syndicationfeed", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseSyndicationFeed");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("syndicationfeed", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseSyndicationFeed");
		return $resultObject;
	}

	function update($id, VidiunBaseSyndicationFeed $syndicationFeed)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "syndicationFeed", $syndicationFeed->toParams());
		$this->client->queueServiceActionCall("syndicationfeed", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseSyndicationFeed");
		return $resultObject;
	}

	function delete($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("syndicationfeed", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunBaseSyndicationFeedFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("syndicationfeed", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseSyndicationFeedListResponse");
		return $resultObject;
	}

	function getEntryCount($feedId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "feedId", $feedId);
		$this->client->queueServiceActionCall("syndicationfeed", "getEntryCount", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunSyndicationFeedEntryCount");
		return $resultObject;
	}

	function requestConversion($feedId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "feedId", $feedId);
		$this->client->queueServiceActionCall("syndicationfeed", "requestConversion", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}

class VidiunSystemService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function ping()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("system", "ping", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$resultObject = (bool) $resultObject;
		return $resultObject;
	}
}

class VidiunThumbAssetService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add($entryId, VidiunThumbAsset $thumbAsset)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "thumbAsset", $thumbAsset->toParams());
		$this->client->queueServiceActionCall("thumbasset", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunThumbAsset");
		return $resultObject;
	}

	function setContent($id, VidiunContentResource $contentResource)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "contentResource", $contentResource->toParams());
		$this->client->queueServiceActionCall("thumbasset", "setContent", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunThumbAsset");
		return $resultObject;
	}

	function update($id, VidiunThumbAsset $thumbAsset, VidiunContentResource $contentResource = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "thumbAsset", $thumbAsset->toParams());
		if ($contentResource !== null)
			$this->client->addParam($vparams, "contentResource", $contentResource->toParams());
		$this->client->queueServiceActionCall("thumbasset", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunThumbAsset");
		return $resultObject;
	}

	function serveByEntryId($entryId, $thumbParamId = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "thumbParamId", $thumbParamId);
		$this->client->queueServiceActionCall('thumbasset', 'serveByEntryId', $vparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	function serve($thumbAssetId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "thumbAssetId", $thumbAssetId);
		$this->client->queueServiceActionCall('thumbasset', 'serve', $vparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	function setAsDefault($thumbAssetId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "thumbAssetId", $thumbAssetId);
		$this->client->queueServiceActionCall("thumbasset", "setAsDefault", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function generateByEntryId($entryId, $destThumbParamsId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "destThumbParamsId", $destThumbParamsId);
		$this->client->queueServiceActionCall("thumbasset", "generateByEntryId", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunThumbAsset");
		return $resultObject;
	}

	function generate($entryId, VidiunThumbParams $thumbParams, $sourceAssetId = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "thumbParams", $thumbParams->toParams());
		$this->client->addParam($vparams, "sourceAssetId", $sourceAssetId);
		$this->client->queueServiceActionCall("thumbasset", "generate", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunThumbAsset");
		return $resultObject;
	}

	function regenerate($thumbAssetId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "thumbAssetId", $thumbAssetId);
		$this->client->queueServiceActionCall("thumbasset", "regenerate", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunThumbAsset");
		return $resultObject;
	}

	function get($thumbAssetId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "thumbAssetId", $thumbAssetId);
		$this->client->queueServiceActionCall("thumbasset", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunThumbAsset");
		return $resultObject;
	}

	function getByEntryId($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("thumbasset", "getByEntryId", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function listAction(VidiunAssetFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("thumbasset", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunThumbAssetListResponse");
		return $resultObject;
	}

	function addFromUrl($entryId, $url)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "url", $url);
		$this->client->queueServiceActionCall("thumbasset", "addFromUrl", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunThumbAsset");
		return $resultObject;
	}

	function addFromImage($entryId, $fileData)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$vfiles = array();
		$this->client->addParam($vfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("thumbasset", "addFromImage", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunThumbAsset");
		return $resultObject;
	}

	function delete($thumbAssetId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "thumbAssetId", $thumbAssetId);
		$this->client->queueServiceActionCall("thumbasset", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}
}

class VidiunThumbParamsService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunThumbParams $thumbParams)
	{
		$vparams = array();
		$this->client->addParam($vparams, "thumbParams", $thumbParams->toParams());
		$this->client->queueServiceActionCall("thumbparams", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunThumbParams");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("thumbparams", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunThumbParams");
		return $resultObject;
	}

	function update($id, VidiunThumbParams $thumbParams)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "thumbParams", $thumbParams->toParams());
		$this->client->queueServiceActionCall("thumbparams", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunThumbParams");
		return $resultObject;
	}

	function delete($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("thumbparams", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunThumbParamsFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("thumbparams", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunThumbParamsListResponse");
		return $resultObject;
	}

	function getByConversionProfileId($conversionProfileId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "conversionProfileId", $conversionProfileId);
		$this->client->queueServiceActionCall("thumbparams", "getByConversionProfileId", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}
}

class VidiunUiConfService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunUiConf $uiConf)
	{
		$vparams = array();
		$this->client->addParam($vparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("uiconf", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUiConf");
		return $resultObject;
	}

	function update($id, VidiunUiConf $uiConf)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("uiconf", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUiConf");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("uiconf", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUiConf");
		return $resultObject;
	}

	function delete($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("uiconf", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function cloneAction($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("uiconf", "clone", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUiConf");
		return $resultObject;
	}

	function listTemplates(VidiunUiConfFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("uiconf", "listTemplates", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUiConfListResponse");
		return $resultObject;
	}

	function listAction(VidiunUiConfFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("uiconf", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUiConfListResponse");
		return $resultObject;
	}

	function getAvailableTypes()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("uiconf", "getAvailableTypes", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}
}

class VidiunUploadService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function upload($fileData)
	{
		$vparams = array();
		$vfiles = array();
		$this->client->addParam($vfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("upload", "upload", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function getUploadedFileTokenByFileName($fileName)
	{
		$vparams = array();
		$this->client->addParam($vparams, "fileName", $fileName);
		$this->client->queueServiceActionCall("upload", "getUploadedFileTokenByFileName", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUploadResponse");
		return $resultObject;
	}
}

class VidiunUploadTokenService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunUploadToken $uploadToken = null)
	{
		$vparams = array();
		if ($uploadToken !== null)
			$this->client->addParam($vparams, "uploadToken", $uploadToken->toParams());
		$this->client->queueServiceActionCall("uploadtoken", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUploadToken");
		return $resultObject;
	}

	function get($uploadTokenId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "uploadTokenId", $uploadTokenId);
		$this->client->queueServiceActionCall("uploadtoken", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUploadToken");
		return $resultObject;
	}

	function upload($uploadTokenId, $fileData, $resume = false, $finalChunk = true, $resumeAt = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "uploadTokenId", $uploadTokenId);
		$vfiles = array();
		$this->client->addParam($vfiles, "fileData", $fileData);
		$this->client->addParam($vparams, "resume", $resume);
		$this->client->addParam($vparams, "finalChunk", $finalChunk);
		$this->client->addParam($vparams, "resumeAt", $resumeAt);
		$this->client->queueServiceActionCall("uploadtoken", "upload", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUploadToken");
		return $resultObject;
	}

	function delete($uploadTokenId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "uploadTokenId", $uploadTokenId);
		$this->client->queueServiceActionCall("uploadtoken", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunUploadTokenFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("uploadtoken", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUploadTokenListResponse");
		return $resultObject;
	}
}

class VidiunUserRoleService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunUserRole $userRole)
	{
		$vparams = array();
		$this->client->addParam($vparams, "userRole", $userRole->toParams());
		$this->client->queueServiceActionCall("userrole", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUserRole");
		return $resultObject;
	}

	function get($userRoleId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "userRoleId", $userRoleId);
		$this->client->queueServiceActionCall("userrole", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUserRole");
		return $resultObject;
	}

	function update($userRoleId, VidiunUserRole $userRole)
	{
		$vparams = array();
		$this->client->addParam($vparams, "userRoleId", $userRoleId);
		$this->client->addParam($vparams, "userRole", $userRole->toParams());
		$this->client->queueServiceActionCall("userrole", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUserRole");
		return $resultObject;
	}

	function delete($userRoleId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "userRoleId", $userRoleId);
		$this->client->queueServiceActionCall("userrole", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUserRole");
		return $resultObject;
	}

	function listAction(VidiunUserRoleFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("userrole", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUserRoleListResponse");
		return $resultObject;
	}

	function cloneAction($userRoleId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "userRoleId", $userRoleId);
		$this->client->queueServiceActionCall("userrole", "clone", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUserRole");
		return $resultObject;
	}
}

class VidiunUserService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunUser $user)
	{
		$vparams = array();
		$this->client->addParam($vparams, "user", $user->toParams());
		$this->client->queueServiceActionCall("user", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUser");
		return $resultObject;
	}

	function update($userId, VidiunUser $user)
	{
		$vparams = array();
		$this->client->addParam($vparams, "userId", $userId);
		$this->client->addParam($vparams, "user", $user->toParams());
		$this->client->queueServiceActionCall("user", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUser");
		return $resultObject;
	}

	function get($userId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUser");
		return $resultObject;
	}

	function getByLoginId($loginId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "loginId", $loginId);
		$this->client->queueServiceActionCall("user", "getByLoginId", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUser");
		return $resultObject;
	}

	function delete($userId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUser");
		return $resultObject;
	}

	function listAction(VidiunUserFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("user", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUserListResponse");
		return $resultObject;
	}

	function notifyBan($userId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "notifyBan", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function login($partnerId, $userId, $password, $expiry = 86400, $privileges = "*")
	{
		$vparams = array();
		$this->client->addParam($vparams, "partnerId", $partnerId);
		$this->client->addParam($vparams, "userId", $userId);
		$this->client->addParam($vparams, "password", $password);
		$this->client->addParam($vparams, "expiry", $expiry);
		$this->client->addParam($vparams, "privileges", $privileges);
		$this->client->queueServiceActionCall("user", "login", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function loginByLoginId($loginId, $password, $partnerId = null, $expiry = 86400, $privileges = "*")
	{
		$vparams = array();
		$this->client->addParam($vparams, "loginId", $loginId);
		$this->client->addParam($vparams, "password", $password);
		$this->client->addParam($vparams, "partnerId", $partnerId);
		$this->client->addParam($vparams, "expiry", $expiry);
		$this->client->addParam($vparams, "privileges", $privileges);
		$this->client->queueServiceActionCall("user", "loginByLoginId", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function updateLoginData($oldLoginId, $password, $newLoginId = "", $newPassword = "", $newFirstName = null, $newLastName = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "oldLoginId", $oldLoginId);
		$this->client->addParam($vparams, "password", $password);
		$this->client->addParam($vparams, "newLoginId", $newLoginId);
		$this->client->addParam($vparams, "newPassword", $newPassword);
		$this->client->addParam($vparams, "newFirstName", $newFirstName);
		$this->client->addParam($vparams, "newLastName", $newLastName);
		$this->client->queueServiceActionCall("user", "updateLoginData", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function resetPassword($email)
	{
		$vparams = array();
		$this->client->addParam($vparams, "email", $email);
		$this->client->queueServiceActionCall("user", "resetPassword", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function setInitialPassword($hashKey, $newPassword)
	{
		$vparams = array();
		$this->client->addParam($vparams, "hashKey", $hashKey);
		$this->client->addParam($vparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("user", "setInitialPassword", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function enableLogin($userId, $loginId, $password = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "userId", $userId);
		$this->client->addParam($vparams, "loginId", $loginId);
		$this->client->addParam($vparams, "password", $password);
		$this->client->queueServiceActionCall("user", "enableLogin", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUser");
		return $resultObject;
	}

	function disableLogin($userId = null, $loginId = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "userId", $userId);
		$this->client->addParam($vparams, "loginId", $loginId);
		$this->client->queueServiceActionCall("user", "disableLogin", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUser");
		return $resultObject;
	}
}

class VidiunWidgetService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunWidget $widget)
	{
		$vparams = array();
		$this->client->addParam($vparams, "widget", $widget->toParams());
		$this->client->queueServiceActionCall("widget", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunWidget");
		return $resultObject;
	}

	function update($id, VidiunWidget $widget)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "widget", $widget->toParams());
		$this->client->queueServiceActionCall("widget", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunWidget");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("widget", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunWidget");
		return $resultObject;
	}

	function cloneAction(VidiunWidget $widget)
	{
		$vparams = array();
		$this->client->addParam($vparams, "widget", $widget->toParams());
		$this->client->queueServiceActionCall("widget", "clone", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunWidget");
		return $resultObject;
	}

	function listAction(VidiunWidgetFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("widget", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunWidgetListResponse");
		return $resultObject;
	}
}

class VidiunXInternalService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function xAddBulkDownload($entryIds, $flavorParamsId = "")
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryIds", $entryIds);
		$this->client->addParam($vparams, "flavorParamsId", $flavorParamsId);
		$this->client->queueServiceActionCall("xinternal", "xAddBulkDownload", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}

class VidiunClient extends VidiunClientBase
{
	/**
	 * @var string
	 */
	protected $apiVersion = '3.1.3';

	/**
	 * Add & Manage Access Controls
	 * @var VidiunAccessControlService
	 */
	public $accessControl = null;

	/**
	 * Manage details for the administrative user
	 * @var VidiunAdminUserService
	 */
	public $adminUser = null;

	/**
	 * Base Entry Service
	 * @var VidiunBaseEntryService
	 */
	public $baseEntry = null;

	/**
	 * batch service lets you handle different batch process from remote machines.
	 * As oppesed to other ojects in the system, locking mechanism is critical in this case.
	 * For this reason the GetExclusiveXX, UpdateExclusiveXX and FreeExclusiveXX actions are important for the system's intergity.
	 * In general - updating batch object should be done only using the UpdateExclusiveXX which in turn can be called only after 
	 * acuiring a batch objet properly (using  GetExclusiveXX).
	 * If an object was aquired and should be returned to the pool in it's initial state - use the FreeExclusiveXX action 
	 * 
	 * @var VidiunBatchcontrolService
	 */
	public $batchcontrol = null;

	/**
	 * batch service lets you handle different batch process from remote machines.
	 * As oppesed to other ojects in the system, locking mechanism is critical in this case.
	 * For this reason the GetExclusiveXX, UpdateExclusiveXX and FreeExclusiveXX actions are important for the system's intergity.
	 * In general - updating batch object should be done only using the UpdateExclusiveXX which in turn can be called only after 
	 * acuiring a batch objet properly (using  GetExclusiveXX).
	 * If an object was aquired and should be returned to the pool in it's initial state - use the FreeExclusiveXX action 
	 * 
	 * @var VidiunBatchService
	 */
	public $batch = null;

	/**
	 * Bulk upload service is used to upload & manage bulk uploads using CSV files
	 * @var VidiunBulkUploadService
	 */
	public $bulkUpload = null;

	/**
	 * Add & Manage Categories
	 * @var VidiunCategoryService
	 */
	public $category = null;

	/**
	 * Manage the connection between Conversion Profiles and Asset Params
	 * @var VidiunConversionProfileAssetParamsService
	 */
	public $conversionProfileAssetParams = null;

	/**
	 * Add & Manage Conversion Profiles
	 * @var VidiunConversionProfileService
	 */
	public $conversionProfile = null;

	/**
	 * Data service lets you manage data content (textual content)
	 * @var VidiunDataService
	 */
	public $data = null;

	/**
	 * Document service
	 * DEPRECATED
	 * @var VidiunDocumentService
	 */
	public $document = null;

	/**
	 * EmailIngestionProfile service lets you manage email ingestion profile records
	 * @var VidiunEmailIngestionProfileService
	 */
	public $EmailIngestionProfile = null;

	/**
	 * Retrieve information and invoke actions on Flavor Asset
	 * @var VidiunFlavorAssetService
	 */
	public $flavorAsset = null;

	/**
	 * Add & Manage Flavor Params
	 * @var VidiunFlavorParamsService
	 */
	public $flavorParams = null;

	/**
	 * batch service lets you handle different batch process from remote machines.
	 * As oppesed to other ojects in the system, locking mechanism is critical in this case.
	 * For this reason the GetExclusiveXX, UpdateExclusiveXX and FreeExclusiveXX actions are important for the system's intergity.
	 * In general - updating batch object should be done only using the UpdateExclusiveXX which in turn can be called only after 
	 * acuiring a batch objet properly (using  GetExclusiveXX).
	 * If an object was aquired and should be returned to the pool in it's initial state - use the FreeExclusiveXX action 
	 * 
	 * @var VidiunJobsService
	 */
	public $jobs = null;

	/**
	 * Live Stream service lets you manage live stream channels
	 * @var VidiunLiveStreamService
	 */
	public $liveStream = null;

	/**
	 * Media service lets you upload and manage media files (images / videos & audio)
	 * @var VidiunMediaService
	 */
	public $media = null;

	/**
	 * A Mix is an XML unique format invented by Vidiun, it allows the user to create a mix of videos and images, in and out points, transitions, text overlays, soundtrack, effects and much more...
	 * Mixing service lets you create a new mix, manage its metadata and make basic manipulations.   
	 * @var VidiunMixingService
	 */
	public $mixing = null;

	/**
	 * Notification Service
	 * @var VidiunNotificationService
	 */
	public $notification = null;

	/**
	 * partner service allows you to change/manage your partner personal details and settings as well
	 * @var VidiunPartnerService
	 */
	public $partner = null;

	/**
	 * PermissionItem service lets you create and manage permission items
	 * @var VidiunPermissionItemService
	 */
	public $permissionItem = null;

	/**
	 * Permission service lets you create and manage user permissions
	 * @var VidiunPermissionService
	 */
	public $permission = null;

	/**
	 * Playlist service lets you create,manage and play your playlists
	 * Playlists could be static (containing a fixed list of entries) or dynamic (baseed on a filter)
	 * @var VidiunPlaylistService
	 */
	public $playlist = null;

	/**
	 * api for getting reports data by the report type and some inputFilter
	 * @var VidiunReportService
	 */
	public $report = null;

	/**
	 * Search service allows you to search for media in various media providers
	 * This service is being used mostly by the CW component
	 * @var VidiunSearchService
	 */
	public $search = null;

	/**
	 * Session service
	 * @var VidiunSessionService
	 */
	public $session = null;

	/**
	 * Stats Service
	 * @var VidiunStatsService
	 */
	public $stats = null;

	/**
	 * Storage Profiles service
	 * @var VidiunStorageProfileService
	 */
	public $storageProfile = null;

	/**
	 * Add & Manage Syndication Feeds
	 * @var VidiunSyndicationFeedService
	 */
	public $syndicationFeed = null;

	/**
	 * System service is used for internal system helpers & to retrieve system level information
	 * @var VidiunSystemService
	 */
	public $system = null;

	/**
	 * Retrieve information and invoke actions on Thumb Asset
	 * @var VidiunThumbAssetService
	 */
	public $thumbAsset = null;

	/**
	 * Add & Manage Thumb Params
	 * @var VidiunThumbParamsService
	 */
	public $thumbParams = null;

	/**
	 * UiConf service lets you create and manage your UIConfs for the various flash components
	 * This service is used by the VMC-ApplicationStudio
	 * @var VidiunUiConfService
	 */
	public $uiConf = null;

	/**
	 * 
	 * @var VidiunUploadService
	 */
	public $upload = null;

	/**
	 * 
	 * @var VidiunUploadTokenService
	 */
	public $uploadToken = null;

	/**
	 * UserRole service lets you create and manage user roles
	 * @var VidiunUserRoleService
	 */
	public $userRole = null;

	/**
	 * Manage partner users on Vidiun's side
	 * The userId in vidiun is the unique Id in the partner's system, and the [partnerId,Id] couple are unique key in vidiun's DB
	 * @var VidiunUserService
	 */
	public $user = null;

	/**
	 * widget service for full widget management
	 * @var VidiunWidgetService
	 */
	public $widget = null;

	/**
	 * Internal Service is used for actions that are used internally in Vidiun applications and might be changed in the future without any notice.
	 * @var VidiunXInternalService
	 */
	public $xInternal = null;

	/**
	 * Vidiun client constructor
	 *
	 * @param VidiunConfiguration $config
	 */
	public function __construct(VidiunConfiguration $config)
	{
		parent::__construct($config);
		
		$this->accessControl = new VidiunAccessControlService($this);
		$this->adminUser = new VidiunAdminUserService($this);
		$this->baseEntry = new VidiunBaseEntryService($this);
		$this->batchcontrol = new VidiunBatchcontrolService($this);
		$this->batch = new VidiunBatchService($this);
		$this->bulkUpload = new VidiunBulkUploadService($this);
		$this->category = new VidiunCategoryService($this);
		$this->conversionProfileAssetParams = new VidiunConversionProfileAssetParamsService($this);
		$this->conversionProfile = new VidiunConversionProfileService($this);
		$this->data = new VidiunDataService($this);
		$this->document = new VidiunDocumentService($this);
		$this->EmailIngestionProfile = new VidiunEmailIngestionProfileService($this);
		$this->flavorAsset = new VidiunFlavorAssetService($this);
		$this->flavorParams = new VidiunFlavorParamsService($this);
		$this->jobs = new VidiunJobsService($this);
		$this->liveStream = new VidiunLiveStreamService($this);
		$this->media = new VidiunMediaService($this);
		$this->mixing = new VidiunMixingService($this);
		$this->notification = new VidiunNotificationService($this);
		$this->partner = new VidiunPartnerService($this);
		$this->permissionItem = new VidiunPermissionItemService($this);
		$this->permission = new VidiunPermissionService($this);
		$this->playlist = new VidiunPlaylistService($this);
		$this->report = new VidiunReportService($this);
		$this->search = new VidiunSearchService($this);
		$this->session = new VidiunSessionService($this);
		$this->stats = new VidiunStatsService($this);
		$this->storageProfile = new VidiunStorageProfileService($this);
		$this->syndicationFeed = new VidiunSyndicationFeedService($this);
		$this->system = new VidiunSystemService($this);
		$this->thumbAsset = new VidiunThumbAssetService($this);
		$this->thumbParams = new VidiunThumbParamsService($this);
		$this->uiConf = new VidiunUiConfService($this);
		$this->upload = new VidiunUploadService($this);
		$this->uploadToken = new VidiunUploadTokenService($this);
		$this->userRole = new VidiunUserRoleService($this);
		$this->user = new VidiunUserService($this);
		$this->widget = new VidiunWidgetService($this);
		$this->xInternal = new VidiunXInternalService($this);
	}
	
}

