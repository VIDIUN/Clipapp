<?php
require_once(dirname(__FILE__) . "/../VidiunClientBase.php");
require_once(dirname(__FILE__) . "/../VidiunEnums.php");
require_once(dirname(__FILE__) . "/../VidiunTypes.php");

class VidiunVirusFoundAction
{
	const NONE = 0;
	const DELETE = 1;
	const CLEAN_NONE = 2;
	const CLEAN_DELETE = 3;
}

class VidiunVirusScanEngineType
{
	const SYMANTEC_SCAN_ENGINE = "symantecScanEngine.SymantecScanEngine";
}

class VidiunVirusScanJobResult
{
	const SCAN_ERROR = 1;
	const FILE_IS_CLEAN = 2;
	const FILE_WAS_CLEANED = 3;
	const FILE_INFECTED = 4;
}

class VidiunVirusScanProfileOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

class VidiunVirusScanProfileStatus
{
	const DISABLED = 1;
	const ENABLED = 2;
	const DELETED = 3;
}

abstract class VidiunVirusScanProfileBaseFilter extends VidiunFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameLike = null;

	/**
	 * 
	 *
	 * @var VidiunVirusScanProfileStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var VidiunVirusScanEngineType
	 */
	public $engineTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $engineTypeIn = null;


}

class VidiunVirusScanProfileFilter extends VidiunVirusScanProfileBaseFilter
{

}

class VidiunVirusScanProfile extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var VidiunVirusScanProfileStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var VidiunVirusScanEngineType
	 */
	public $engineType = null;

	/**
	 * 
	 *
	 * @var VidiunBaseEntryFilter
	 */
	public $entryFilter;

	/**
	 * 
	 *
	 * @var VidiunVirusFoundAction
	 */
	public $actionIfInfected = null;


}

class VidiunVirusScanProfileListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunVirusScanProfile
	 * @readonly
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;


}

class VidiunVirusScanJobData extends VidiunJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFilePath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * 
	 *
	 * @var VidiunVirusScanJobResult
	 */
	public $scanResult = null;

	/**
	 * 
	 *
	 * @var VidiunVirusFoundAction
	 */
	public $virusFoundAction = null;


}


class VidiunVirusScanProfileService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function listAction(VidiunVirusScanProfileFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunVirusScanProfileListResponse");
		return $resultObject;
	}

	function add(VidiunVirusScanProfile $virusScanProfile)
	{
		$vparams = array();
		$this->client->addParam($vparams, "virusScanProfile", $virusScanProfile->toParams());
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunVirusScanProfile");
		return $resultObject;
	}

	function get($virusScanProfileId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "virusScanProfileId", $virusScanProfileId);
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunVirusScanProfile");
		return $resultObject;
	}

	function update($virusScanProfileId, VidiunVirusScanProfile $virusScanProfile)
	{
		$vparams = array();
		$this->client->addParam($vparams, "virusScanProfileId", $virusScanProfileId);
		$this->client->addParam($vparams, "virusScanProfile", $virusScanProfile->toParams());
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunVirusScanProfile");
		return $resultObject;
	}

	function delete($virusScanProfileId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "virusScanProfileId", $virusScanProfileId);
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunVirusScanProfile");
		return $resultObject;
	}

	function scan($flavorAssetId, $virusScanProfileId = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "flavorAssetId", $flavorAssetId);
		$this->client->addParam($vparams, "virusScanProfileId", $virusScanProfileId);
		$this->client->queueServiceActionCall("virusscan_virusscanprofile", "scan", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}
}

class VidiunVirusScanBatchService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function getExclusiveVirusScanJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveVirusScanJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveVirusScanJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveVirusScanJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveVirusScanJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusiveVirusScanJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveImportJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveImportJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusiveImportJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveBulkUploadJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveAlmostDoneBulkUploadJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveBulkUploadJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusiveBulkUploadJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "addBulkUploadResult", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getBulkUploadLastResult", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "countBulkUploadEntries", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateBulkUploadResults", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveAlmostDoneConvertCollectionJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveAlmostDoneConvertProfileJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveConvertCollectionJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveConvertProfileJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusiveConvertCollectionJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusiveConvertProfileJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveConvertCollectionJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveConvertJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveAlmostDoneConvertJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveConvertJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveConvertJobSubType", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusiveConvertJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusivePostConvertJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusivePostConvertJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusivePostConvertJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveCaptureThumbJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveCaptureThumbJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusiveCaptureThumbJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveExtractMediaJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveExtractMediaJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "addMediaInfo", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusiveExtractMediaJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveStorageExportJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveStorageExportJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusiveStorageExportJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveStorageDeleteJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveStorageDeleteJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusiveStorageDeleteJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveNotificationJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveNotificationJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusiveNotificationJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveMailJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveMailJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusiveMailJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveBulkDownloadJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveAlmostDoneBulkDownloadJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveBulkDownloadJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusiveBulkDownloadJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveProvisionProvideJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveAlmostDoneProvisionProvideJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveProvisionProvideJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusiveProvisionProvideJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveProvisionDeleteJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveAlmostDoneProvisionDeleteJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveProvisionDeleteJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusiveProvisionDeleteJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "resetJobExecutionAttempts", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "freeExclusiveJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getQueueSize", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "getExclusiveAlmostDone", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "updateExclusiveJob", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "cleanExclusiveJobs", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "logConversion", $vparams);
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
		$this->client->queueServiceActionCall("virusscan_virusscanbatch", "checkFileExists", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFileExistsResponse");
		return $resultObject;
	}
}
class VidiunVirusScanClientPlugin extends VidiunClientPlugin
{
	/**
	 * @var VidiunVirusScanClientPlugin
	 */
	protected static $instance;

	/**
	 * @var VidiunVirusScanProfileService
	 */
	public $virusScanProfile = null;

	/**
	 * @var VidiunVirusScanBatchService
	 */
	public $virusScanBatch = null;

	protected function __construct(VidiunClient $client)
	{
		parent::__construct($client);
		$this->virusScanProfile = new VidiunVirusScanProfileService($client);
		$this->virusScanBatch = new VidiunVirusScanBatchService($client);
	}

	/**
	 * @return VidiunVirusScanClientPlugin
	 */
	public static function get(VidiunClient $client)
	{
		if(!self::$instance)
			self::$instance = new VidiunVirusScanClientPlugin($client);
		return self::$instance;
	}

	/**
	 * @return array<VidiunServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'virusScanProfile' => $this->virusScanProfile,
			'virusScanBatch' => $this->virusScanBatch,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'virusScan';
	}
}

