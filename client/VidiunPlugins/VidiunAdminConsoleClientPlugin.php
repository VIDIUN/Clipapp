<?php
require_once(dirname(__FILE__) . "/../VidiunClientBase.php");
require_once(dirname(__FILE__) . "/../VidiunEnums.php");
require_once(dirname(__FILE__) . "/../VidiunTypes.php");

class VidiunTrackEntryEventType
{
	const UPLOADED_FILE = 1;
	const WEBCAM_COMPLETED = 2;
	const IMPORT_STARTED = 3;
	const ADD_ENTRY = 4;
	const UPDATE_ENTRY = 5;
	const DELETED_ENTRY = 6;
}

class VidiunUiConfAdminOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

class VidiunFlavorParamsOutputListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunFlavorParamsOutput
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

class VidiunThumbParamsOutputListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunThumbParamsOutput
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

class VidiunMediaInfoListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunMediaInfo
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

class VidiunTrackEntry extends VidiunObjectBase
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
	 * @var VidiunTrackEntryEventType
	 */
	public $trackEventType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $psVersion = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $context = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hostName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $changedProperties = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $paramStr1 = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $paramStr2 = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $paramStr3 = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $vs = null;

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
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userIp = null;


}

class VidiunTrackEntryListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunTrackEntry
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

class VidiunUiConfAdmin extends VidiunUiConf
{
	/**
	 * 
	 *
	 * @var bool
	 */
	public $isPublic = null;


}

class VidiunUiConfAdminListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunUiConfAdmin
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

abstract class VidiunUiConfAdminBaseFilter extends VidiunUiConfFilter
{

}

class VidiunUiConfAdminFilter extends VidiunUiConfAdminBaseFilter
{

}


class VidiunFlavorParamsOutputService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function listAction(VidiunFlavorParamsOutputFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("adminconsole_flavorparamsoutput", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunFlavorParamsOutputListResponse");
		return $resultObject;
	}
}

class VidiunThumbParamsOutputService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function listAction(VidiunThumbParamsOutputFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("adminconsole_thumbparamsoutput", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunThumbParamsOutputListResponse");
		return $resultObject;
	}
}

class VidiunMediaInfoService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function listAction(VidiunMediaInfoFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("adminconsole_mediainfo", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaInfoListResponse");
		return $resultObject;
	}
}

class VidiunEntryAdminService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function get($entryId, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("adminconsole_entryadmin", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseEntry");
		return $resultObject;
	}

	function getByFlavorId($flavorId, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "flavorId", $flavorId);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("adminconsole_entryadmin", "getByFlavorId", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseEntry");
		return $resultObject;
	}

	function getTracks($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("adminconsole_entryadmin", "getTracks", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunTrackEntryListResponse");
		return $resultObject;
	}
}

class VidiunUiConfAdminService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunUiConfAdmin $uiConf)
	{
		$vparams = array();
		$this->client->addParam($vparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("adminconsole_uiconfadmin", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUiConfAdmin");
		return $resultObject;
	}

	function update($id, VidiunUiConfAdmin $uiConf)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("adminconsole_uiconfadmin", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUiConfAdmin");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("adminconsole_uiconfadmin", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUiConfAdmin");
		return $resultObject;
	}

	function delete($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("adminconsole_uiconfadmin", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunUiConfFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("adminconsole_uiconfadmin", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUiConfAdminListResponse");
		return $resultObject;
	}
}
class VidiunAdminConsoleClientPlugin extends VidiunClientPlugin
{
	/**
	 * @var VidiunAdminConsoleClientPlugin
	 */
	protected static $instance;

	/**
	 * @var VidiunFlavorParamsOutputService
	 */
	public $flavorParamsOutput = null;

	/**
	 * @var VidiunThumbParamsOutputService
	 */
	public $thumbParamsOutput = null;

	/**
	 * @var VidiunMediaInfoService
	 */
	public $mediaInfo = null;

	/**
	 * @var VidiunEntryAdminService
	 */
	public $entryAdmin = null;

	/**
	 * @var VidiunUiConfAdminService
	 */
	public $uiConfAdmin = null;

	protected function __construct(VidiunClient $client)
	{
		parent::__construct($client);
		$this->flavorParamsOutput = new VidiunFlavorParamsOutputService($client);
		$this->thumbParamsOutput = new VidiunThumbParamsOutputService($client);
		$this->mediaInfo = new VidiunMediaInfoService($client);
		$this->entryAdmin = new VidiunEntryAdminService($client);
		$this->uiConfAdmin = new VidiunUiConfAdminService($client);
	}

	/**
	 * @return VidiunAdminConsoleClientPlugin
	 */
	public static function get(VidiunClient $client)
	{
		if(!self::$instance)
			self::$instance = new VidiunAdminConsoleClientPlugin($client);
		return self::$instance;
	}

	/**
	 * @return array<VidiunServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'flavorParamsOutput' => $this->flavorParamsOutput,
			'thumbParamsOutput' => $this->thumbParamsOutput,
			'mediaInfo' => $this->mediaInfo,
			'entryAdmin' => $this->entryAdmin,
			'uiConfAdmin' => $this->uiConfAdmin,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'adminConsole';
	}
}

