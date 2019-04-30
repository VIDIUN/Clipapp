<?php
require_once(dirname(__FILE__) . "/../VidiunClientBase.php");
require_once(dirname(__FILE__) . "/../VidiunEnums.php");
require_once(dirname(__FILE__) . "/../VidiunTypes.php");

class VidiunStatsKey extends VidiunObjectBase
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
	public $parentId = null;

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
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $isLeaf = null;


}

class VidiunStatsKeyListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunStatsKey
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


class VidiunStatskeyService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function listDescendants($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("statskey_statskey", "listDescendants", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunStatsKeyListResponse");
		return $resultObject;
	}
}
class VidiunStatskeyClientPlugin extends VidiunClientPlugin
{
	/**
	 * @var VidiunStatskeyClientPlugin
	 */
	protected static $instance;

	/**
	 * @var VidiunStatskeyService
	 */
	public $Statskey = null;

	protected function __construct(VidiunClient $client)
	{
		parent::__construct($client);
		$this->Statskey = new VidiunStatskeyService($client);
	}

	/**
	 * @return VidiunStatskeyClientPlugin
	 */
	public static function get(VidiunClient $client)
	{
		if(!self::$instance)
			self::$instance = new VidiunStatskeyClientPlugin($client);
		return self::$instance;
	}

	/**
	 * @return array<VidiunServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'Statskey' => $this->Statskey,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'statskey';
	}
}

