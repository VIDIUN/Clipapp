<?php
require_once(dirname(__FILE__) . "/../VidiunClientBase.php");
require_once(dirname(__FILE__) . "/../VidiunEnums.php");
require_once(dirname(__FILE__) . "/../VidiunTypes.php");

class VidiunMetadataObjectType
{
	const ENTRY = 1;
}

class VidiunMetadataOrderBy
{
	const METADATA_PROFILE_VERSION_ASC = "+metadataProfileVersion";
	const METADATA_PROFILE_VERSION_DESC = "-metadataProfileVersion";
	const VERSION_ASC = "+version";
	const VERSION_DESC = "-version";
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

class VidiunMetadataProfileCreateMode
{
	const API = 1;
	const VMC = 2;
}

class VidiunMetadataProfileOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

class VidiunMetadataProfileStatus
{
	const ACTIVE = 1;
	const DEPRECATED = 2;
	const TRANSFORMING = 3;
}

class VidiunMetadataStatus
{
	const VALID = 1;
	const INVALID = 2;
	const DELETED = 3;
}

abstract class VidiunMetadataBaseFilter extends VidiunFilter
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileIdEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileVersionEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileVersionGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileVersionLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var VidiunMetadataObjectType
	 */
	public $metadataObjectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $versionEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $versionGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $versionLessThanOrEqual = null;

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
	 * @var VidiunMetadataStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;


}

class VidiunMetadataFilter extends VidiunMetadataBaseFilter
{

}

class VidiunMetadata extends VidiunObjectBase
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
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $metadataProfileId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $metadataProfileVersion = null;

	/**
	 * 
	 *
	 * @var VidiunMetadataObjectType
	 * @readonly
	 */
	public $metadataObjectType = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $objectId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $version = null;

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
	 * @var VidiunMetadataStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $xml = null;


}

class VidiunMetadataListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunMetadata
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

abstract class VidiunMetadataProfileBaseFilter extends VidiunFilter
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
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var VidiunMetadataObjectType
	 */
	public $metadataObjectTypeEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $versionEqual = null;

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
	public $systemNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameIn = null;

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
	 * @var VidiunMetadataProfileStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;


}

class VidiunMetadataProfileFilter extends VidiunMetadataProfileBaseFilter
{

}

class VidiunMetadataProfile extends VidiunObjectBase
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
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var VidiunMetadataObjectType
	 */
	public $metadataObjectType = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $version = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

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
	 * @var VidiunMetadataProfileStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $xsd = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $views = null;

	/**
	 * 
	 *
	 * @var VidiunMetadataProfileCreateMode
	 */
	public $createMode = null;


}

class VidiunMetadataProfileListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunMetadataProfile
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

class VidiunMetadataProfileField extends VidiunObjectBase
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
	 * @var string
	 * @readonly
	 */
	public $xPath = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $key = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $label = null;


}

class VidiunMetadataProfileFieldListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunMetadataProfileField
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

class VidiunTransformMetadataResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunMetadata
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

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $lowerVersionCount = null;


}

class VidiunUpgradeMetadataResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $lowerVersionCount = null;


}

class VidiunMetadataSearchItem extends VidiunSearchOperator
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileId = null;


}

class VidiunImportMetadataJobData extends VidiunJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileLocalPath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataId = null;


}

class VidiunTransformMetadataJobData extends VidiunJobData
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $srcXslPath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $srcVersion = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $destVersion = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destXsdPath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileId = null;


}


class VidiunMetadataService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function listAction(VidiunMetadataFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("metadata_metadata", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadataListResponse");
		return $resultObject;
	}

	function add($metadataProfileId, $objectType, $objectId, $xmlData)
	{
		$vparams = array();
		$this->client->addParam($vparams, "metadataProfileId", $metadataProfileId);
		$this->client->addParam($vparams, "objectType", $objectType);
		$this->client->addParam($vparams, "objectId", $objectId);
		$this->client->addParam($vparams, "xmlData", $xmlData);
		$this->client->queueServiceActionCall("metadata_metadata", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadata");
		return $resultObject;
	}

	function addFromFile($metadataProfileId, $objectType, $objectId, $xmlFile)
	{
		$vparams = array();
		$this->client->addParam($vparams, "metadataProfileId", $metadataProfileId);
		$this->client->addParam($vparams, "objectType", $objectType);
		$this->client->addParam($vparams, "objectId", $objectId);
		$vfiles = array();
		$this->client->addParam($vfiles, "xmlFile", $xmlFile);
		$this->client->queueServiceActionCall("metadata_metadata", "addFromFile", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadata");
		return $resultObject;
	}

	function addFromUrl($metadataProfileId, $objectType, $objectId, $url)
	{
		$vparams = array();
		$this->client->addParam($vparams, "metadataProfileId", $metadataProfileId);
		$this->client->addParam($vparams, "objectType", $objectType);
		$this->client->addParam($vparams, "objectId", $objectId);
		$this->client->addParam($vparams, "url", $url);
		$this->client->queueServiceActionCall("metadata_metadata", "addFromUrl", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadata");
		return $resultObject;
	}

	function addFromBulk($metadataProfileId, $objectType, $objectId, $url)
	{
		$vparams = array();
		$this->client->addParam($vparams, "metadataProfileId", $metadataProfileId);
		$this->client->addParam($vparams, "objectType", $objectType);
		$this->client->addParam($vparams, "objectId", $objectId);
		$this->client->addParam($vparams, "url", $url);
		$this->client->queueServiceActionCall("metadata_metadata", "addFromBulk", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadata");
		return $resultObject;
	}

	function delete($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("metadata_metadata", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function invalidate($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("metadata_metadata", "invalidate", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("metadata_metadata", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadata");
		return $resultObject;
	}

	function update($id, $xmlData = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "xmlData", $xmlData);
		$this->client->queueServiceActionCall("metadata_metadata", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadata");
		return $resultObject;
	}

	function updateFromFile($id, $xmlFile = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$vfiles = array();
		$this->client->addParam($vfiles, "xmlFile", $xmlFile);
		$this->client->queueServiceActionCall("metadata_metadata", "updateFromFile", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadata");
		return $resultObject;
	}

	function serve($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall('metadata_metadata', 'serve', $vparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}
}

class VidiunMetadataProfileService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function listAction(VidiunMetadataProfileFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("metadata_metadataprofile", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadataProfileListResponse");
		return $resultObject;
	}

	function listFields($metadataProfileId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "metadataProfileId", $metadataProfileId);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "listFields", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadataProfileFieldListResponse");
		return $resultObject;
	}

	function add(VidiunMetadataProfile $metadataProfile, $xsdData, $viewsData = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "metadataProfile", $metadataProfile->toParams());
		$this->client->addParam($vparams, "xsdData", $xsdData);
		$this->client->addParam($vparams, "viewsData", $viewsData);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadataProfile");
		return $resultObject;
	}

	function addFromFile(VidiunMetadataProfile $metadataProfile, $xsdFile, $viewsFile = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "metadataProfile", $metadataProfile->toParams());
		$vfiles = array();
		$this->client->addParam($vfiles, "xsdFile", $xsdFile);
		$this->client->addParam($vfiles, "viewsFile", $viewsFile);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "addFromFile", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadataProfile");
		return $resultObject;
	}

	function delete($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadataProfile");
		return $resultObject;
	}

	function update($id, VidiunMetadataProfile $metadataProfile, $xsdData = null, $viewsData = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "metadataProfile", $metadataProfile->toParams());
		$this->client->addParam($vparams, "xsdData", $xsdData);
		$this->client->addParam($vparams, "viewsData", $viewsData);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadataProfile");
		return $resultObject;
	}

	function revert($id, $toVersion)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "toVersion", $toVersion);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "revert", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadataProfile");
		return $resultObject;
	}

	function updateDefinitionFromFile($id, $xsdFile)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$vfiles = array();
		$this->client->addParam($vfiles, "xsdFile", $xsdFile);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "updateDefinitionFromFile", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadataProfile");
		return $resultObject;
	}

	function updateViewsFromFile($id, $viewsFile)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$vfiles = array();
		$this->client->addParam($vfiles, "viewsFile", $viewsFile);
		$this->client->queueServiceActionCall("metadata_metadataprofile", "updateViewsFromFile", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMetadataProfile");
		return $resultObject;
	}

	function serve($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall('metadata_metadataprofile', 'serve', $vparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	function serveView($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall('metadata_metadataprofile', 'serveView', $vparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}
}

class VidiunMetadataBatchService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function getExclusiveImportMetadataJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveImportMetadataJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveImportMetadataJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveImportMetadataJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveImportMetadataJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveImportMetadataJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function getExclusiveTransformMetadataJobs(VidiunExclusiveLockKey $lockKey, $maxExecutionTime, $numberOfJobs, VidiunBatchJobFilter $filter = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveTransformMetadataJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveTransformMetadataJob($id, VidiunExclusiveLockKey $lockKey, VidiunBatchJob $job)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "job", $job->toParams());
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveTransformMetadataJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveTransformMetadataJob($id, VidiunExclusiveLockKey $lockKey, $resetExecutionAttempts = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "lockKey", $lockKey->toParams());
		$this->client->addParam($vparams, "resetExecutionAttempts", $resetExecutionAttempts);
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveTransformMetadataJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFreeJobResponse");
		return $resultObject;
	}

	function getTransformMetadataObjects($metadataProfileId, $srcVersion, $destVersion, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "metadataProfileId", $metadataProfileId);
		$this->client->addParam($vparams, "srcVersion", $srcVersion);
		$this->client->addParam($vparams, "destVersion", $destVersion);
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getTransformMetadataObjects", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunTransformMetadataResponse");
		return $resultObject;
	}

	function upgradeMetadataObjects($metadataProfileId, $srcVersion, $destVersion, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "metadataProfileId", $metadataProfileId);
		$this->client->addParam($vparams, "srcVersion", $srcVersion);
		$this->client->addParam($vparams, "destVersion", $destVersion);
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("metadata_metadatabatch", "upgradeMetadataObjects", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUpgradeMetadataResponse");
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveImportJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveImportJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveImportJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveBulkUploadJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveAlmostDoneBulkUploadJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveBulkUploadJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveBulkUploadJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "addBulkUploadResult", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getBulkUploadLastResult", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "countBulkUploadEntries", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateBulkUploadResults", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveAlmostDoneConvertCollectionJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveAlmostDoneConvertProfileJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveConvertCollectionJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveConvertProfileJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveConvertCollectionJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveConvertProfileJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveConvertCollectionJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveConvertJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveAlmostDoneConvertJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveConvertJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveConvertJobSubType", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveConvertJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusivePostConvertJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusivePostConvertJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusivePostConvertJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveCaptureThumbJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveCaptureThumbJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveCaptureThumbJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveExtractMediaJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveExtractMediaJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "addMediaInfo", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveExtractMediaJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveStorageExportJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveStorageExportJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveStorageExportJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveStorageDeleteJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveStorageDeleteJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveStorageDeleteJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveNotificationJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveNotificationJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveNotificationJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveMailJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveMailJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveMailJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveBulkDownloadJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveAlmostDoneBulkDownloadJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveBulkDownloadJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveBulkDownloadJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveProvisionProvideJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveAlmostDoneProvisionProvideJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveProvisionProvideJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveProvisionProvideJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveProvisionDeleteJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveAlmostDoneProvisionDeleteJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveProvisionDeleteJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveProvisionDeleteJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "resetJobExecutionAttempts", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "freeExclusiveJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getQueueSize", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "getExclusiveAlmostDone", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "updateExclusiveJob", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "cleanExclusiveJobs", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "logConversion", $vparams);
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
		$this->client->queueServiceActionCall("metadata_metadatabatch", "checkFileExists", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFileExistsResponse");
		return $resultObject;
	}
}
class VidiunMetadataClientPlugin extends VidiunClientPlugin
{
	/**
	 * @var VidiunMetadataClientPlugin
	 */
	protected static $instance;

	/**
	 * @var VidiunMetadataService
	 */
	public $metadata = null;

	/**
	 * @var VidiunMetadataProfileService
	 */
	public $metadataProfile = null;

	/**
	 * @var VidiunMetadataBatchService
	 */
	public $metadataBatch = null;

	protected function __construct(VidiunClient $client)
	{
		parent::__construct($client);
		$this->metadata = new VidiunMetadataService($client);
		$this->metadataProfile = new VidiunMetadataProfileService($client);
		$this->metadataBatch = new VidiunMetadataBatchService($client);
	}

	/**
	 * @return VidiunMetadataClientPlugin
	 */
	public static function get(VidiunClient $client)
	{
		if(!self::$instance)
			self::$instance = new VidiunMetadataClientPlugin($client);
		return self::$instance;
	}

	/**
	 * @return array<VidiunServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'metadata' => $this->metadata,
			'metadataProfile' => $this->metadataProfile,
			'metadataBatch' => $this->metadataBatch,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'metadata';
	}
}

