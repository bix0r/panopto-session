<?php

namespace Panopto\Session;

class GetAllFoldersWithExternalContextByExternalIdResponse
{

    /**
     * @var ArrayOfFolderWithExternalContext $GetAllFoldersWithExternalContextByExternalIdResult
     */
    protected $GetAllFoldersWithExternalContextByExternalIdResult = null;

    /**
     * @param ArrayOfFolderWithExternalContext $GetAllFoldersWithExternalContextByExternalIdResult
     */
    public function __construct($GetAllFoldersWithExternalContextByExternalIdResult)
    {
      $this->GetAllFoldersWithExternalContextByExternalIdResult = $GetAllFoldersWithExternalContextByExternalIdResult;
    }

    /**
     * @return ArrayOfFolderWithExternalContext
     */
    public function getGetAllFoldersWithExternalContextByExternalIdResult()
    {
      return $this->GetAllFoldersWithExternalContextByExternalIdResult;
    }

    /**
     * @param ArrayOfFolderWithExternalContext $GetAllFoldersWithExternalContextByExternalIdResult
     * @return \Panopto\Session\GetAllFoldersWithExternalContextByExternalIdResponse
     */
    public function setGetAllFoldersWithExternalContextByExternalIdResult($GetAllFoldersWithExternalContextByExternalIdResult)
    {
      $this->GetAllFoldersWithExternalContextByExternalIdResult = $GetAllFoldersWithExternalContextByExternalIdResult;
      return $this;
    }

}
