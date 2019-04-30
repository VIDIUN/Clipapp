<?php
require_once(dirname(__FILE__) . "/../VidiunClientBase.php");
require_once(dirname(__FILE__) . "/../VidiunEnums.php");
require_once(dirname(__FILE__) . "/../VidiunTypes.php");

class VidiunDocumentEntryOrderBy
{
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

class VidiunDocumentFlavorParamsOrderBy
{
}

class VidiunDocumentFlavorParamsOutputOrderBy
{
}

class VidiunDocumentType
{
	const DOCUMENT = 11;
	const SWF = 12;
	const PDF = 13;
}

class VidiunPdfFlavorParamsOrderBy
{
}

class VidiunPdfFlavorParamsOutputOrderBy
{
}

class VidiunSwfFlavorParamsOrderBy
{
}

class VidiunSwfFlavorParamsOutputOrderBy
{
}

class VidiunDocumentEntry extends VidiunBaseEntry
{
	/**
	 * The type of the document
	 *
	 * @var VidiunDocumentType
	 * @insertonly
	 */
	public $documentType = null;


}

abstract class VidiunDocumentEntryBaseFilter extends VidiunBaseEntryFilter
{
	/**
	 * 
	 *
	 * @var VidiunDocumentType
	 */
	public $documentTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $documentTypeIn = null;


}

class VidiunDocumentEntryFilter extends VidiunDocumentEntryBaseFilter
{

}

class VidiunDocumentListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var array of VidiunDocumentEntry
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

abstract class VidiunDocumentFlavorParamsBaseFilter extends VidiunFlavorParamsFilter
{

}

class VidiunDocumentFlavorParamsFilter extends VidiunDocumentFlavorParamsBaseFilter
{

}

abstract class VidiunDocumentFlavorParamsOutputBaseFilter extends VidiunFlavorParamsOutputFilter
{

}

class VidiunDocumentFlavorParamsOutputFilter extends VidiunDocumentFlavorParamsOutputBaseFilter
{

}

abstract class VidiunPdfFlavorParamsBaseFilter extends VidiunFlavorParamsFilter
{

}

class VidiunPdfFlavorParamsFilter extends VidiunPdfFlavorParamsBaseFilter
{

}

abstract class VidiunPdfFlavorParamsOutputBaseFilter extends VidiunFlavorParamsOutputFilter
{

}

class VidiunPdfFlavorParamsOutputFilter extends VidiunPdfFlavorParamsOutputBaseFilter
{

}

abstract class VidiunSwfFlavorParamsBaseFilter extends VidiunFlavorParamsFilter
{

}

class VidiunSwfFlavorParamsFilter extends VidiunSwfFlavorParamsBaseFilter
{

}

abstract class VidiunSwfFlavorParamsOutputBaseFilter extends VidiunFlavorParamsOutputFilter
{

}

class VidiunSwfFlavorParamsOutputFilter extends VidiunSwfFlavorParamsOutputBaseFilter
{

}

class VidiunDocumentFlavorParams extends VidiunFlavorParams
{

}

class VidiunDocumentFlavorParamsOutput extends VidiunFlavorParamsOutput
{

}

class VidiunPdfFlavorParams extends VidiunFlavorParams
{
	/**
	 * 
	 *
	 * @var bool
	 */
	public $readonly = null;


}

class VidiunPdfFlavorParamsOutput extends VidiunFlavorParamsOutput
{
	/**
	 * 
	 *
	 * @var bool
	 */
	public $readonly = null;


}

class VidiunSwfFlavorParams extends VidiunFlavorParams
{

}

class VidiunSwfFlavorParamsOutput extends VidiunFlavorParamsOutput
{

}


class VidiunDocumentsService extends VidiunServiceBase
{
	function __construct(VidiunClient $client = null)
	{
		parent::__construct($client);
	}

	function addFromUploadedFile(VidiunDocumentEntry $documentEntry, $uploadTokenId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "documentEntry", $documentEntry->toParams());
		$this->client->addParam($vparams, "uploadTokenId", $uploadTokenId);
		$this->client->queueServiceActionCall("document_documents", "addFromUploadedFile", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDocumentEntry");
		return $resultObject;
	}

	function addFromEntry($sourceEntryId, VidiunDocumentEntry $documentEntry = null, $sourceFlavorParamsId = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "sourceEntryId", $sourceEntryId);
		if ($documentEntry !== null)
			$this->client->addParam($vparams, "documentEntry", $documentEntry->toParams());
		$this->client->addParam($vparams, "sourceFlavorParamsId", $sourceFlavorParamsId);
		$this->client->queueServiceActionCall("document_documents", "addFromEntry", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDocumentEntry");
		return $resultObject;
	}

	function addFromFlavorAsset($sourceFlavorAssetId, VidiunDocumentEntry $documentEntry = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "sourceFlavorAssetId", $sourceFlavorAssetId);
		if ($documentEntry !== null)
			$this->client->addParam($vparams, "documentEntry", $documentEntry->toParams());
		$this->client->queueServiceActionCall("document_documents", "addFromFlavorAsset", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDocumentEntry");
		return $resultObject;
	}

	function convert($entryId, $conversionProfileId = null, array $dynamicConversionAttributes = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "conversionProfileId", $conversionProfileId);
		if ($dynamicConversionAttributes !== null)
			foreach($dynamicConversionAttributes as $index => $obj)
			{
				$this->client->addParam($vparams, "dynamicConversionAttributes:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("document_documents", "convert", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "integer");
		return $resultObject;
	}

	function get($entryId, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("document_documents", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDocumentEntry");
		return $resultObject;
	}

	function update($entryId, VidiunDocumentEntry $documentEntry)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "documentEntry", $documentEntry->toParams());
		$this->client->queueServiceActionCall("document_documents", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDocumentEntry");
		return $resultObject;
	}

	function delete($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("document_documents", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunDocumentEntryFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("document_documents", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunDocumentListResponse");
		return $resultObject;
	}

	function upload($fileData)
	{
		$vparams = array();
		$vfiles = array();
		$this->client->addParam($vfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("document_documents", "upload", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function convertPptToSwf($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("document_documents", "convertPptToSwf", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function serve($entryId, $flavorAssetId = null, $forceProxy = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "flavorAssetId", $flavorAssetId);
		$this->client->addParam($vparams, "forceProxy", $forceProxy);
		$this->client->queueServiceActionCall('document_documents', 'serve', $vparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	function serveByFlavorParamsId($entryId, $flavorParamsId = null, $forceProxy = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "flavorParamsId", $flavorParamsId);
		$this->client->addParam($vparams, "forceProxy", $forceProxy);
		$this->client->queueServiceActionCall('document_documents', 'serveByFlavorParamsId', $vparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}
}
class VidiunDocumentClientPlugin extends VidiunClientPlugin
{
	/**
	 * @var VidiunDocumentClientPlugin
	 */
	protected static $instance;

	/**
	 * @var VidiunDocumentsService
	 */
	public $documents = null;

	protected function __construct(VidiunClient $client)
	{
		parent::__construct($client);
		$this->documents = new VidiunDocumentsService($client);
	}

	/**
	 * @return VidiunDocumentClientPlugin
	 */
	public static function get(VidiunClient $client)
	{
		if(!self::$instance)
			self::$instance = new VidiunDocumentClientPlugin($client);
		return self::$instance;
	}

	/**
	 * @return array<VidiunServiceBase>
	 */
	public function getServices()
	{
		$services = array(
			'documents' => $this->documents,
		);
		return $services;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'document';
	}
}

