<?php
require_once(dirname(__FILE__) . "/../VidiunClientBase.php");
require_once(dirname(__FILE__) . "/../VidiunEnums.php");
require_once(dirname(__FILE__) . "/../VidiunTypes.php");

class VidiunDropFolderContentFileHandlerMatchPolicy
{
	const ADD_AS_NEW = 1;
	const MATCH_EXISTING_OR_ADD_AS_NEW = 2;
	const MATCH_EXISTING_OR_KEEP_IN_FOLDER = 3;
}

class VidiunDropFolderFileDeletePolicy
{
	const MANUAL_DELETE = 1;
	const AUTO_DELETE = 2;
}

class VidiunDropFolderFileErrorCode
{
	const ERROR_UPDATE_ENTRY = "1";
	const ERROR_ADD_ENTRY = "2";
	const FLAVOR_NOT_FOUND = "3";
	const FLAVOR_MISSING_IN_FILE_NAME = "4";
	const SLUG_REGEX_NO_MATCH = "5";
	const ERROR_READING_FILE = "6";
}

class VidiunDropFolderFileHandlerType
{
	const CONTENT = "1";
}

class VidiunDropFolderFileOrderBy
{
	const ID_ASC = "+id";
	const ID_DESC = "-id";
	const FILE_NAME_ASC = "+fileName";
	const FILE_NAME_DESC = "-fileName";
	const FILE_SIZE_ASC = "+fileSize";
	const FILE_SIZE_DESC = "-fileSize";
	const FILE_SIZE_LAST_SET_AT_ASC = "+fileSizeLastSetAt";
	const FILE_SIZE_LAST_SET_AT_DESC = "-fileSizeLastSetAt";
	const PARSED_SLUG_ASC = "+parsedSlug";
	const PARSED_SLUG_DESC = "-parsedSlug";
	const PARSED_FLAVOR_ASC = "+parsedFlavor";
	const PARSED_FLAVOR_DESC = "-parsedFlavor";
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

class VidiunDropFolderFileStatus
{
	const UPLOADING = 1;
	const PENDING = 2;
	const WAITING = 3;
	const HANDLED = 4;
	const IGNORE = 5;
	const DELETED = 6;
	const PURGED = 7;
	const NO_MATCH = 8;
	const ERROR_HANDLING = 9;
	const ERROR_DELETING = 10;
}

class VidiunDropFolderOrderBy
{
	const ID_ASC = "+id";
	const ID_DESC = "-id";
	const NAME_ASC = "+name";
	const NAME_DESC = "-name";
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const UPDATED_AT_ASC = "+updatedAt";
	const UPDATED_AT_DESC = "-updatedAt";
}

class VidiunDropFolderStatus
{
	const DISABLED = 0;
	const ENABLED = 1;
	const DELETED = 2;
}

class VidiunDropFolderType
{
	const LOCAL = "1";
}

abstract class VidiunDropFolderFileHandlerConfig extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var VidiunDropFolderFileHandlerType
	 * @readonly
	 */
	public $handlerType = null;


}

class VidiunDropFolder extends VidiunObjectBase
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
	 * @insertonly
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
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var VidiunDropFolderType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var VidiunDropFolderStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $conversionProfileId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dc = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $path = null;

	/**
	 * The ammount of time, in seconds, that should pass so that a file with no change in size we'll be treated as "finished uploading to folder"
	 *
	 * @var int
	 */
	public $fileSizeCheckInterval = null;

	/**
	 * 
	 *
	 * @var VidiunDropFolderFileDeletePolicy
	 */
	public $fileDeletePolicy = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $autoFileDeleteDays = null;

	/**
	 * 
	 *
	 * @var VidiunDropFolderFileHandlerType
	 */
	public $fileHandlerType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNamePatterns = null;

	/**
	 * 
	 *
	 * @var VidiunDropFolderFileHandlerConfig
	 */
	public $fileHandlerConfig;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ignoreFileNamePatterns = null;

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


}

abstract class VidiunDropFolderBaseFilter extends VidiunFilter
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
	public $nameLike = null;

	/**
	 * 
	 *
	 * @var VidiunDropFolderType
	 */
	public $typeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * 
	 *
	 * @var VidiunDropFolderStatus
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
	 * @var int
	 */
	public $conversionProfileIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $conversionProfileIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dcEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $dcIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $pathLike = null;

	/**
	 * 
	 *
	 * @var VidiunDropFolderFileHandlerType
	 */
	public $fileHandlerTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileHandlerTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNamePatternsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNamePatternsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNamePatternsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

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


}

class VidiunDropFolderFilter extends VidiunDropFolderBaseFilter
{

}

class VidiunDropFolderListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunDropFolder
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

class VidiunDropFolderFile extends VidiunObjectBase
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
	 * @insertonly
	 */
	public $dropFolderId = null;

	/**
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $fileName = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $fileSize = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $fileSizeLastSetAt = null;

	/**
	 * 
	 *
	 * @var VidiunDropFolderFileStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedSlug = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedFlavor = null;

	/**
	 * 
	 *
	 * @var VidiunDropFolderFileErrorCode
	 */
	public $errorCode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errorDescription = null;

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


}

abstract class VidiunDropFolderFileBaseFilter extends VidiunFilter
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
	 * @var int
	 */
	public $dropFolderIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $dropFolderIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNameIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNameLike = null;

	/**
	 * 
	 *
	 * @var VidiunDropFolderFileStatus
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
	 * @var string
	 */
	public $parsedSlugEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedSlugIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedSlugLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedFlavorEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedFlavorIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedFlavorLike = null;

	/**
	 * 
	 *
	 * @var VidiunDropFolderFileErrorCode
	 */
	public $errorCodeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errorCodeIn = null;

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


}

class VidiunDropFolderFileFilter extends VidiunDropFolderFileBaseFilter
{

}

class VidiunDropFolderFileListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunDropFolderFile
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

class VidiunDropFolderFileResource extends VidiunDataCenterContentResource
{
	/**
	 * Id of the drop folder file object
	 *
	 * @var int
	 */
	public $dropFolderFileId = null;


}

class VidiunDropFolderContentFileHandlerConfig extends VidiunDropFolderFileHandlerConfig
{
	/**
	 * 
	 *
	 * @var VidiunDropFolderContentFileHandlerMatchPolicy
	 */
	public $contentMatchPolicy = null;

	/**
	 * Regular expression that defines valid file names to be handled.
	 * The following might be extracted from the file name and used if defined:
	 * - (?P<referenceId>\w+) - will be used as the drop folder file's parsed slug.
	 * - (?P<flavorName>\w+)  - will be used as the drop folder file's parsed flavor.
	 * 
	 *
	 * @var string
	 */
	public $slugRegex = null;


}


class VidiunDropFolderService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunDropFolder $dropFolder)
	{
		$vparams = array();
		$this->client->addParam($vparams, "dropFolder", $dropFolder->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDropFolder");
		return $resultObject;
	}

	function get($dropFolderId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "dropFolderId", $dropFolderId);
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDropFolder");
		return $resultObject;
	}

	function update($dropFolderId, VidiunDropFolder $dropFolder)
	{
		$vparams = array();
		$this->client->addParam($vparams, "dropFolderId", $dropFolderId);
		$this->client->addParam($vparams, "dropFolder", $dropFolder->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDropFolder");
		return $resultObject;
	}

	function delete($dropFolderId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "dropFolderId", $dropFolderId);
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDropFolder");
		return $resultObject;
	}

	function listAction(VidiunDropFolderFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDropFolderListResponse");
		return $resultObject;
	}
}

class VidiunDropFolderFileService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function add(VidiunDropFolderFile $dropFolderFile)
	{
		$vparams = array();
		$this->client->addParam($vparams, "dropFolderFile", $dropFolderFile->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDropFolderFile");
		return $resultObject;
	}

	function get($dropFolderFileId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDropFolderFile");
		return $resultObject;
	}

	function update($dropFolderFileId, VidiunDropFolderFile $dropFolderFile)
	{
		$vparams = array();
		$this->client->addParam($vparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->addParam($vparams, "dropFolderFile", $dropFolderFile->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDropFolderFile");
		return $resultObject;
	}

	function delete($dropFolderFileId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDropFolderFile");
		return $resultObject;
	}

	function listAction(VidiunDropFolderFileFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDropFolderFileListResponse");
		return $resultObject;
	}

	function ignore($dropFolderFileId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "dropFolderFileId", $dropFolderFileId);
		$this->client->queueServiceActionCall("dropfolder_dropfolderfile", "ignore", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDropFolderFile");
		return $resultObject;
	}
}
class VidiunDropFolderClientPlugin extends VidiunClientPlugin
{
	/**
	 * @var VidiunDropFolderClientPlugin
	 */
	protected static $instance;

	/**
	 * @var VidiunDropFolderService
	 */
	public $dropFolder = null;

	/**
	 * @var VidiunDropFolderFileService
	 */
	public $dropFolderFile = null;

	protected function __construct(VidiunClient $client)
	{
		parent::__construct($client);
		$this->dropFolder = new VidiunDropFolderService($client);
		$this->dropFolderFile = new VidiunDropFolderFileService($client);
	}

	/**
	 * @return VidiunDropFolderClientPlugin
	 */
	public static function get(VidiunClient $client)
	{
		if(!self::$instance)
			self::$instance = new VidiunDropFolderClientPlugin($client);
		return self::$instance;
	}

	/**
	 * @return array<VidiunServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'dropFolder' => $this->dropFolder,
			'dropFolderFile' => $this->dropFolderFile,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'dropFolder';
	}
}

