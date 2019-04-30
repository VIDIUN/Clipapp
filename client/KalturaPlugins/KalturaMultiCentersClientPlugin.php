<?php
require_once(dirname(__FILE__) . "/../VidiunClientBase.php");
require_once(dirname(__FILE__) . "/../VidiunEnums.php");
require_once(dirname(__FILE__) . "/../VidiunTypes.php");

class VidiunFileSyncImportJobData extends VidiunJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $sourceUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $filesyncId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tmpFilePath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFilePath = null;


}


class VidiunFilesyncImportBatchService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function getExclusiveFileSyncImportJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveFileSyncImportJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveFileSyncImportJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveFileSyncImportJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveFileSyncImportJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusiveFileSyncImportJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveAlmostDoneFileSyncImportJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveAlmostDoneFileSyncImportJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getExclusiveImportJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveImportJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveImportJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusiveImportJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveBulkUploadJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveAlmostDoneBulkUploadJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveBulkUploadJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusiveBulkUploadJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "addBulkUploadResult", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getBulkUploadLastResult", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "countBulkUploadEntries", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateBulkUploadResults", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveAlmostDoneConvertCollectionJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveAlmostDoneConvertProfileJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveConvertCollectionJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveConvertProfileJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusiveConvertCollectionJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusiveConvertProfileJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveConvertCollectionJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveConvertJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveAlmostDoneConvertJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveConvertJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveConvertJobSubType", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusiveConvertJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusivePostConvertJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusivePostConvertJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusivePostConvertJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveCaptureThumbJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveCaptureThumbJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusiveCaptureThumbJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveExtractMediaJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveExtractMediaJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "addMediaInfo", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusiveExtractMediaJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveStorageExportJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveStorageExportJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusiveStorageExportJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveStorageDeleteJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveStorageDeleteJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusiveStorageDeleteJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveNotificationJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveNotificationJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusiveNotificationJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveMailJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveMailJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusiveMailJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveBulkDownloadJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveAlmostDoneBulkDownloadJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveBulkDownloadJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusiveBulkDownloadJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveProvisionProvideJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveAlmostDoneProvisionProvideJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveProvisionProvideJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusiveProvisionProvideJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveProvisionDeleteJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveAlmostDoneProvisionDeleteJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveProvisionDeleteJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusiveProvisionDeleteJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "resetJobExecutionAttempts", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "freeExclusiveJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getQueueSize", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "getExclusiveAlmostDone", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "updateExclusiveJob", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "cleanExclusiveJobs", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "logConversion", $vparams);
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
		$this->client->queueServiceActionCall("multicenters_filesyncimportbatch", "checkFileExists", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFileExistsResponse");
		return $resultObject;
	}
}
class VidiunMultiCentersClientPlugin extends VidiunClientPlugin
{
	/**
	 * @var VidiunMultiCentersClientPlugin
	 */
	protected static $instance;

	/**
	 * @var VidiunFileSyncImportBatchService
	 */
	public $fileSyncImportBatch = null;

	protected function __construct(VidiunClient $client)
	{
		parent::__construct($client);
		$this->fileSyncImportBatch = new VidiunFileSyncImportBatchService($client);
	}

	/**
	 * @return VidiunMultiCentersClientPlugin
	 */
	public static function get(VidiunClient $client)
	{
		if(!self::$instance)
			self::$instance = new VidiunMultiCentersClientPlugin($client);
		return self::$instance;
	}

	/**
	 * @return array<VidiunServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'fileSyncImportBatch' => $this->fileSyncImportBatch,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'multiCenters';
	}
}

