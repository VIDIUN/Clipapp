<?php
require_once(dirname(__FILE__) . "/../VidiunClientBase.php");
require_once(dirname(__FILE__) . "/../VidiunEnums.php");
require_once(dirname(__FILE__) . "/../VidiunTypes.php");

class VidiunSystemPartnerLimitType
{
	const ENTRIES = "ENTRIES";
	const STREAM_ENTRIES = "STREAM_ENTRIES";
	const BANDWIDTH = "BANDWIDTH";
	const PUBLISHERS = "PUBLISHERS";
	const ADMIN_LOGIN_USERS = "ADMIN_LOGIN_USERS";
	const LOGIN_USERS = "LOGIN_USERS";
	const USER_LOGIN_ATTEMPTS = "USER_LOGIN_ATTEMPTS";
	const BULK_SIZE = "BULK_SIZE";
}

class VidiunSystemPartnerUsageFilter extends VidiunFilter
{
	/**
	 * Date range from
	 * 
	 *
	 * @var int
	 */
	public $fromDate = null;

	/**
	 * Date range to
	 * 
	 *
	 * @var int
	 */
	public $toDate = null;


}

class VidiunSystemPartnerUsageItem extends VidiunObjectBase
{
	/**
	 * Partner ID
	 * 
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * Partner name
	 * 
	 *
	 * @var string
	 */
	public $partnerName = null;

	/**
	 * Partner status
	 * 
	 *
	 * @var VidiunPartnerStatus
	 */
	public $partnerStatus = null;

	/**
	 * Partner package
	 * 
	 *
	 * @var int
	 */
	public $partnerPackage = null;

	/**
	 * Partner creation date (Unix timestamp)
	 * 
	 *
	 * @var int
	 */
	public $partnerCreatedAt = null;

	/**
	 * Number of player loads in the specific date range
	 * 
	 *
	 * @var int
	 */
	public $views = null;

	/**
	 * Number of plays in the specific date range
	 * 
	 *
	 * @var int
	 */
	public $plays = null;

	/**
	 * Number of new entries created during specific date range
	 * 
	 *
	 * @var int
	 */
	public $entriesCount = null;

	/**
	 * Total number of entries
	 * 
	 *
	 * @var int
	 */
	public $totalEntriesCount = null;

	/**
	 * Number of new video entries created during specific date range
	 * 
	 *
	 * @var int
	 */
	public $videoEntriesCount = null;

	/**
	 * Number of new image entries created during specific date range
	 * 
	 *
	 * @var int
	 */
	public $imageEntriesCount = null;

	/**
	 * Number of new audio entries created during specific date range
	 * 
	 *
	 * @var int
	 */
	public $audioEntriesCount = null;

	/**
	 * Number of new mix entries created during specific date range
	 * 
	 *
	 * @var int
	 */
	public $mixEntriesCount = null;

	/**
	 * The total bandwidth usage during the given date range (in MB)
	 * 
	 *
	 * @var float
	 */
	public $bandwidth = null;

	/**
	 * The total storage consumption (in MB)
	 * 
	 *
	 * @var float
	 */
	public $totalStorage = null;

	/**
	 * The change in storage consumption (new uploads) during the given date range (in MB)
	 * 
	 *
	 * @var float
	 */
	public $storage = null;


}

class VidiunSystemPartnerUsageListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunSystemPartnerUsageItem
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var int
	 */
	public $totalCount = null;


}

class VidiunSystemPartnerLimit extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var VidiunSystemPartnerLimitType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $max = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $overagePrice = null;


}

class VidiunSystemPartnerConfiguration extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerName = null;

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
	 */
	public $adminName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adminEmail = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $host = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $cdnHost = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerPackage = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $monitorUsage = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $moderateContent = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $rtmpUrl = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $storageDeleteFromVidiun = null;

	/**
	 * 
	 *
	 * @var VidiunStorageServePriority
	 */
	public $storageServePriority = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $vmcVersion = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $defThumbOffset = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $userSessionRoleId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $adminSessionRoleId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $alwaysAllowedPermissionNames = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $importRemoteSourceForConvert = null;

	/**
	 * 
	 *
	 * @var array of VidiunPermission
	 */
	public $permissions;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notificationsConfig = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $allowMultiNotification = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $loginBlockPeriod = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $numPrevPassToKeep = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $passReplaceFreq = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isFirstLogin = null;

	/**
	 * 
	 *
	 * @var VidiunPartnerGroupType
	 */
	public $partnerGroupType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerParentId = null;

	/**
	 * 
	 *
	 * @var array of VidiunSystemPartnerLimit
	 */
	public $limits;


}

class VidiunSystemPartnerPackage extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;


}


class VidiunSystemPartnerService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function get($partnerId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "partnerId", $partnerId);
		$this->client->queueServiceActionCall("systempartner_systempartner", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPartner");
		return $resultObject;
	}

	function getUsage(VidiunPartnerFilter $partnerFilter = null, VidiunSystemPartnerUsageFilter $usageFilter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($partnerFilter !== null)
			$this->client->addParam($vparams, "partnerFilter", $partnerFilter->toParams());
		if ($usageFilter !== null)
			$this->client->addParam($vparams, "usageFilter", $usageFilter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("systempartner_systempartner", "getUsage", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunSystemPartnerUsageListResponse");
		return $resultObject;
	}

	function listAction(VidiunPartnerFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("systempartner_systempartner", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPartnerListResponse");
		return $resultObject;
	}

	function updateStatus($partnerId, $status)
	{
		$vparams = array();
		$this->client->addParam($vparams, "partnerId", $partnerId);
		$this->client->addParam($vparams, "status", $status);
		$this->client->queueServiceActionCall("systempartner_systempartner", "updateStatus", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function getAdminSession($partnerId, $userId = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "partnerId", $partnerId);
		$this->client->addParam($vparams, "userId", $userId);
		$this->client->queueServiceActionCall("systempartner_systempartner", "getAdminSession", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function updateConfiguration($partnerId, VidiunSystemPartnerConfiguration $configuration)
	{
		$vparams = array();
		$this->client->addParam($vparams, "partnerId", $partnerId);
		$this->client->addParam($vparams, "configuration", $configuration->toParams());
		$this->client->queueServiceActionCall("systempartner_systempartner", "updateConfiguration", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function getConfiguration($partnerId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "partnerId", $partnerId);
		$this->client->queueServiceActionCall("systempartner_systempartner", "getConfiguration", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunSystemPartnerConfiguration");
		return $resultObject;
	}

	function getPackages()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("systempartner_systempartner", "getPackages", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function resetUserPassword($userId, $partnerId, $newPassword)
	{
		$vparams = array();
		$this->client->addParam($vparams, "userId", $userId);
		$this->client->addParam($vparams, "partnerId", $partnerId);
		$this->client->addParam($vparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("systempartner_systempartner", "resetUserPassword", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}
}
class VidiunSystemPartnerClientPlugin extends VidiunClientPlugin
{
	/**
	 * @var VidiunSystemPartnerClientPlugin
	 */
	protected static $instance;

	/**
	 * @var VidiunSystemPartnerService
	 */
	public $systemPartner = null;

	protected function __construct(VidiunClient $client)
	{
		parent::__construct($client);
		$this->systemPartner = new VidiunSystemPartnerService($client);
	}

	/**
	 * @return VidiunSystemPartnerClientPlugin
	 */
	public static function get(VidiunClient $client)
	{
		if(!self::$instance)
			self::$instance = new VidiunSystemPartnerClientPlugin($client);
		return self::$instance;
	}

	/**
	 * @return array<VidiunServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'systemPartner' => $this->systemPartner,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'systemPartner';
	}
}

