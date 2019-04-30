<?php
require_once(dirname(__FILE__) . "/../VidiunClientBase.php");
require_once(dirname(__FILE__) . "/../VidiunEnums.php");
require_once(dirname(__FILE__) . "/../VidiunTypes.php");

class VidiunMediaEntryWithDistributionsOrderBy
{
	const MEDIA_TYPE_ASC = "+mediaType";
	const MEDIA_TYPE_DESC = "-mediaType";
	const PLAYS_ASC = "+plays";
	const PLAYS_DESC = "-plays";
	const VIEWS_ASC = "+views";
	const VIEWS_DESC = "-views";
	const DURATION_ASC = "+duration";
	const DURATION_DESC = "-duration";
	const MS_DURATION_ASC = "+msDuration";
	const MS_DURATION_DESC = "-msDuration";
	const NAME_ASC = "+name";
	const NAME_DESC = "-name";
	const MODERATION_COUNT_ASC = "+moderationCount";
	const MODERATION_COUNT_DESC = "-moderationCount";
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const UPDATED_AT_DESC = "-updatedAt";
	const RANK_ASC = "+rank";
	const RANK_DESC = "-rank";
	const PARTNER_SORT_VALUE_ASC = "+partnerSortValue";
	const PARTNER_SORT_VALUE_DESC = "-partnerSortValue";
}

class VidiunVampEntryOrderBy
{
	const PUBLISHING_STARTED_AT_ASC = "+publishingStartedAt";
	const PUBLISHING_STARTED_AT_DESC = "-publishingStartedAt";
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

class VidiunVampWorkflowStatus
{
	const INCOMPLETE = 0;
	const COMPLETE = 1;
	const PUBLISHING = 2;
	const PUBLISHED = 3;
	const PENDING_SUBMISSION = 11;
	const SUBMITTED = 12;
	const APPROVED = 13;
	const REJECTED = 14;
}

class VidiunVampSystemStatusSummary extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $uploadingErrors = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $transcodingErrors = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $transcodingInProgress = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $transcodingComplete = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $publishingSunrise = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $publishingSunset = null;


}

class VidiunEntryDistributionDetails extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var VidiunMediaEntry
	 */
	public $entry;

	/**
	 * 
	 *
	 * @var int
	 */
	public $date = null;


}

class VidiunMediaEntryWithDistributions extends VidiunMediaEntry
{
	/**
	 * 
	 *
	 * @var array of VidiunEntryDistribution
	 */
	public $entryDistributions;


}

class VidiunMediaEntryWithDistributionsResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunMediaEntryWithDistributions
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

class VidiunVampEntry extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var string
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
	 * @var VidiunEntryStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var VidiunVampWorkflowStatus
	 * @readonly
	 */
	public $workflowStatus = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $publishingStartedAt = null;

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
	 * @var VidiunBaseEntry
	 * @readonly
	 */
	public $entry;

	/**
	 * 
	 *
	 * @var array of VidiunEntryDistribution
	 * @readonly
	 */
	public $entryDistributions;


}

abstract class VidiunVampEntryBaseFilter extends VidiunFilter
{
	/**
	 * 
	 *
	 * @var string
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
	 * @var string
	 */
	public $idNotIn = null;

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
	 * @var VidiunEntryStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var VidiunEntryStatus
	 */
	public $statusNotEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusNotIn = null;

	/**
	 * 
	 *
	 * @var VidiunVampWorkflowStatus
	 */
	public $workflowStatusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $workflowStatusIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $workflowStatusNotIn = null;


}

class VidiunVampEntryFilter extends VidiunVampEntryBaseFilter
{

}

class VidiunVampEntryListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunVampEntry
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

abstract class VidiunMediaEntryWithDistributionsBaseFilter extends VidiunMediaEntryFilter
{

}

class VidiunMediaEntryWithDistributionsFilter extends VidiunMediaEntryWithDistributionsBaseFilter
{

}


class VidiunDashboardService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function getSystemStatusSummary()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("vamp_dashboard", "getSystemStatusSummary", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunVampSystemStatusSummary");
		return $resultObject;
	}

	function getEntriesForDistributionSunriseLast24Hours()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("vamp_dashboard", "getEntriesForDistributionSunriseLast24Hours", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getEntriesForDistributionSunsetLast24Hours()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("vamp_dashboard", "getEntriesForDistributionSunsetLast24Hours", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getLastDistributedEntries($limit)
	{
		$vparams = array();
		$this->client->addParam($vparams, "limit", $limit);
		$this->client->queueServiceActionCall("vamp_dashboard", "getLastDistributedEntries", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function listMediaWithEntryDistributions(VidiunMediaEntryFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("vamp_dashboard", "listMediaWithEntryDistributions", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntryWithDistributionsResponse");
		return $resultObject;
	}

	function notifyEntryCreatedFromUploadPage($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("vamp_dashboard", "notifyEntryCreatedFromUploadPage", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}
}

class VidiunVampEntryService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("vamp_vampentry", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunVampEntry");
		return $resultObject;
	}

	function listAction(VidiunVampEntryFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("vamp_vampentry", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunVampEntryListResponse");
		return $resultObject;
	}

	function approve($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("vamp_vampentry", "approve", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function reject($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("vamp_vampentry", "reject", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function submitForModeration($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("vamp_vampentry", "submitForModeration", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function publish($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("vamp_vampentry", "publish", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}
}

class VidiunVampUiConfService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunUiConf $uiConf)
	{
		$vparams = array();
		$this->client->addParam($vparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("vamp_vampuiconf", "add", $vparams);
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
		$this->client->queueServiceActionCall("vamp_vampuiconf", "update", $vparams);
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
		$this->client->queueServiceActionCall("vamp_vampuiconf", "get", $vparams);
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
		$this->client->queueServiceActionCall("vamp_vampuiconf", "delete", $vparams);
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
		$this->client->queueServiceActionCall("vamp_vampuiconf", "clone", $vparams);
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
		$this->client->queueServiceActionCall("vamp_vampuiconf", "listTemplates", $vparams);
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
		$this->client->queueServiceActionCall("vamp_vampuiconf", "list", $vparams);
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
		$this->client->queueServiceActionCall("vamp_vampuiconf", "getAvailableTypes", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}
}
class VidiunVampClientPlugin extends VidiunClientPlugin
{
	/**
	 * @var VidiunVampClientPlugin
	 */
	protected static $instance;

	/**
	 * @var VidiunDashboardService
	 */
	public $dashboard = null;

	/**
	 * @var VidiunVampEntryService
	 */
	public $vampEntry = null;

	/**
	 * @var VidiunVampUiConfService
	 */
	public $vampUiConf = null;

	protected function __construct(VidiunClient $client)
	{
		parent::__construct($client);
		$this->dashboard = new VidiunDashboardService($client);
		$this->vampEntry = new VidiunVampEntryService($client);
		$this->vampUiConf = new VidiunVampUiConfService($client);
	}

	/**
	 * @return VidiunVampClientPlugin
	 */
	public static function get(VidiunClient $client)
	{
		if(!self::$instance)
			self::$instance = new VidiunVampClientPlugin($client);
		return self::$instance;
	}

	/**
	 * @return array<VidiunServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'dashboard' => $this->dashboard,
			'vampEntry' => $this->vampEntry,
			'vampUiConf' => $this->vampUiConf,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'vamp';
	}
}

