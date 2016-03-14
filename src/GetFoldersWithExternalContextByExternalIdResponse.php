<?php

namespace Panopto\Session;

class GetFoldersWithExternalContextByExternalIdResponse
{

    /**
     * @var ArrayOfFolderWithExternalContext $GetFoldersWithExternalContextByExternalIdResult
     */
    protected $GetFoldersWithExternalContextByExternalIdResult = null;

    /**
     * @param ArrayOfFolderWithExternalContext $GetFoldersWithExternalContextByExternalIdResult
     */
    public function __construct($GetFoldersWithExternalContextByExternalIdResult)
    {
      $this->GetFoldersWithExternalContextByExternalIdResult = $GetFoldersWithExternalContextByExternalIdResult;
    }

    /**
     * @return ArrayOfFolderWithExternalContext
     */
    public function getGetFoldersWithExternalContextByExternalIdResult()
    {
      return $this->GetFoldersWithExternalContextByExternalIdResult;
    }

    /**
     * @param ArrayOfFolderWithExternalContext $GetFoldersWithExternalContextByExternalIdResult
     * @return \Panopto\Session\GetFoldersWithExternalContextByExternalIdResponse
     */
    public function setGetFoldersWithExternalContextByExternalIdResult($GetFoldersWithExternalContextByExternalIdResult)
    {
      $this->GetFoldersWithExternalContextByExternalIdResult = $GetFoldersWithExternalContextByExternalIdResult;
      return $this;
    }

}
