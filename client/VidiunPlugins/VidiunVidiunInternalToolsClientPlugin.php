<?php
require_once(dirname(__FILE__) . "/../VidiunClientBase.php");
require_once(dirname(__FILE__) . "/../VidiunEnums.php");
require_once(dirname(__FILE__) . "/../VidiunTypes.php");

class VidiunInternalToolsSession extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $partner_id = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $valid_until = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partner_pattern = null;

	/**
	 * 
	 *
	 * @var VidiunSessionType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $error = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $rand = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $user = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $privileges = null;


}


class VidiunVidiunInternalToolsService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}
}

class VidiunVidiunInternalToolsSystemHelperService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function fromSecureString($str)
	{
		$vparams = array();
		$this->client->addParam($vparams, "str", $str);
		$this->client->queueServiceActionCall("vidiuninternaltools_vidiuninternaltoolssystemhelper", "fromSecureString", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunInternalToolsSession");
		return $resultObject;
	}

	function iptocountry($remote_addr)
	{
		$vparams = array();
		$this->client->addParam($vparams, "remote_addr", $remote_addr);
		$this->client->queueServiceActionCall("vidiuninternaltools_vidiuninternaltoolssystemhelper", "iptocountry", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function getRemoteAddress()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("vidiuninternaltools_vidiuninternaltoolssystemhelper", "getRemoteAddress", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}
class VidiunVidiunInternalToolsClientPlugin extends VidiunClientPlugin
{
	/**
	 * @var VidiunVidiunInternalToolsClientPlugin
	 */
	protected static $instance;

	/**
	 * @var VidiunVidiunInternalToolsService
	 */
	public $VidiunInternalTools = null;

	/**
	 * @var VidiunVidiunInternalToolsSystemHelperService
	 */
	public $VidiunInternalToolsSystemHelper = null;

	protected function __construct(VidiunClient $client)
	{
		parent::__construct($client);
		$this->VidiunInternalTools = new VidiunVidiunInternalToolsService($client);
		$this->VidiunInternalToolsSystemHelper = new VidiunVidiunInternalToolsSystemHelperService($client);
	}

	/**
	 * @return VidiunVidiunInternalToolsClientPlugin
	 */
	public static function get(VidiunClient $client)
	{
		if(!self::$instance)
			self::$instance = new VidiunVidiunInternalToolsClientPlugin($client);
		return self::$instance;
	}

	/**
	 * @return array<VidiunServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'VidiunInternalTools' => $this->VidiunInternalTools,
			'VidiunInternalToolsSystemHelper' => $this->VidiunInternalToolsSystemHelper,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'VidiunInternalTools';
	}
}

