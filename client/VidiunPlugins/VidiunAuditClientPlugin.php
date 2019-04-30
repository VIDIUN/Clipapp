<?php
require_once(dirname(__FILE__) . "/../VidiunClientBase.php");
require_once(dirname(__FILE__) . "/../VidiunEnums.php");
require_once(dirname(__FILE__) . "/../VidiunTypes.php");

class VidiunAuditTrailAction
{
	const CREATED = "CREATED";
	const COPIED = "COPIED";
	const CHANGED = "CHANGED";
	const DELETED = "DELETED";
	const VIEWED = "VIEWED";
	const CONTENT_VIEWED = "CONTENT_VIEWED";
	const FILE_SYNC_CREATED = "FILE_SYNC_CREATED";
	const RELATION_ADDED = "RELATION_ADDED";
	const RELATION_REMOVED = "RELATION_REMOVED";
}

class VidiunAuditTrailContext
{
	const CLIENT = -1;
	const SCRIPT = 0;
	const PS2 = 1;
	const API_V3 = 2;
}

class VidiunAuditTrailFileSyncType
{
	const FILE = 1;
	const LINK = 2;
	const URL = 3;
}

class VidiunAuditTrailObjectType
{
	const ACCESS_CONTROL = "accessControl";
	const ADMIN_VUSER = "adminVuser";
	const BATCH_JOB = "BatchJob";
	const CATEGORY = "category";
	const CONVERSION_PROFILE_2 = "conversionProfile2";
	const EMAIL_INGESTION_PROFILE = "EmailIngestionProfile";
	const ENTRY = "entry";
	const FILE_SYNC = "FileSync";
	const FLAVOR_ASSET = "flavorAsset";
	const THUMBNAIL_ASSET = "thumbAsset";
	const FLAVOR_PARAMS = "flavorParams";
	const THUMBNAIL_PARAMS = "thumbParams";
	const FLAVOR_PARAMS_CONVERSION_PROFILE = "flavorParamsConversionProfile";
	const FLAVOR_PARAMS_OUTPUT = "flavorParamsOutput";
	const THUMBNAIL_PARAMS_OUTPUT = "thumbParamsOutput";
	const VSHOW = "vshow";
	const VSHOW_VUSER = "VshowVuser";
	const VUSER = "vuser";
	const MEDIA_INFO = "mediaInfo";
	const MODERATION = "moderation";
	const PARTNER = "Partner";
	const ROUGHCUT = "roughcutEntry";
	const SYNDICATION = "syndicationFeed";
	const UI_CONF = "uiConf";
	const UPLOAD_TOKEN = "UploadToken";
	const WIDGET = "widget";
	const METADATA = "Metadata";
	const METADATA_PROFILE = "MetadataProfile";
	const USER_LOGIN_DATA = "UserLoginData";
	const USER_ROLE = "UserRole";
	const PERMISSION = "Permission";
}

class VidiunAuditTrailOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const PARSED_AT_ASC = "+parsedAt";
	const PARSED_AT_DESC = "-parsedAt";
}

class VidiunAuditTrailStatus
{
	const PENDING = 1;
	const READY = 2;
	const FAILED = 3;
}

abstract class VidiunAuditTrailBaseFilter extends VidiunFilter
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
	public $parsedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $parsedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var VidiunAuditTrailStatus
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
	 * @var VidiunAuditTrailObjectType
	 */
	public $auditObjectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $auditObjectTypeIn = null;

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
	 * @var string
	 */
	public $relatedObjectIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $relatedObjectIdIn = null;

	/**
	 * 
	 *
	 * @var VidiunAuditTrailObjectType
	 */
	public $relatedObjectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $relatedObjectTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $masterPartnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $masterPartnerIdIn = null;

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
	public $requestIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $requestIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userIdIn = null;

	/**
	 * 
	 *
	 * @var VidiunAuditTrailAction
	 */
	public $actionEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $actionIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $vsEqual = null;

	/**
	 * 
	 *
	 * @var VidiunAuditTrailContext
	 */
	public $contextEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contextIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryPointEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryPointIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverNameIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ipAddressEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ipAddressIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $clientTagEqual = null;


}

class VidiunAuditTrailFilter extends VidiunAuditTrailBaseFilter
{

}

abstract class VidiunAuditTrailInfo extends VidiunObjectBase
{

}

class VidiunAuditTrail extends VidiunObjectBase
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
	 * Indicates when the data was parsed
	 *
	 * @var int
	 * @readonly
	 */
	public $parsedAt = null;

	/**
	 * 
	 *
	 * @var VidiunAuditTrailStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var VidiunAuditTrailObjectType
	 */
	public $auditObjectType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $relatedObjectId = null;

	/**
	 * 
	 *
	 * @var VidiunAuditTrailObjectType
	 */
	public $relatedObjectType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $masterPartnerId = null;

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
	 * @readonly
	 */
	public $requestId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * 
	 *
	 * @var VidiunAuditTrailAction
	 */
	public $action = null;

	/**
	 * 
	 *
	 * @var VidiunAuditTrailInfo
	 */
	public $data;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $vs = null;

	/**
	 * 
	 *
	 * @var VidiunAuditTrailContext
	 * @readonly
	 */
	public $context = null;

	/**
	 * The API service and action that called and caused this audit
	 *
	 * @var string
	 * @readonly
	 */
	public $entryPoint = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $serverName = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $ipAddress = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $userAgent = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $clientTag = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $errorDescription = null;


}

class VidiunAuditTrailListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunAuditTrail
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

class VidiunAuditTrailChangeItem extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $descriptor = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $oldValue = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $newValue = null;


}

class VidiunAuditTrailChangeInfo extends VidiunAuditTrailInfo
{
	/**
	 * 
	 *
	 * @var array of VidiunAuditTrailChangeItem
	 */
	public $changedItems;


}

class VidiunAuditTrailFileSyncCreateInfo extends VidiunAuditTrailInfo
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $version = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $objectSubType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dc = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $original = null;

	/**
	 * 
	 *
	 * @var VidiunAuditTrailFileSyncType
	 */
	public $fileType = null;


}

class VidiunAuditTrailTextInfo extends VidiunAuditTrailInfo
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $info = null;


}


class VidiunAuditTrailService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function listAction(VidiunAuditTrailFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("audit_audittrail", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunAuditTrailListResponse");
		return $resultObject;
	}

	function add(VidiunAuditTrail $auditTrail)
	{
		$vparams = array();
		$this->client->addParam($vparams, "auditTrail", $auditTrail->toParams());
		$this->client->queueServiceActionCall("audit_audittrail", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunAuditTrail");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("audit_audittrail", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunAuditTrail");
		return $resultObject;
	}
}
class VidiunAuditClientPlugin extends VidiunClientPlugin
{
	/**
	 * @var VidiunAuditClientPlugin
	 */
	protected static $instance;

	/**
	 * @var VidiunAuditTrailService
	 */
	public $auditTrail = null;

	protected function __construct(VidiunClient $client)
	{
		parent::__construct($client);
		$this->auditTrail = new VidiunAuditTrailService($client);
	}

	/**
	 * @return VidiunAuditClientPlugin
	 */
	public static function get(VidiunClient $client)
	{
		if(!self::$instance)
			self::$instance = new VidiunAuditClientPlugin($client);
		return self::$instance;
	}

	/**
	 * @return array<VidiunServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'auditTrail' => $this->auditTrail,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'audit';
	}
}

