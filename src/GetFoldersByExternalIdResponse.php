<?php

namespace Panopto\Session;

class GetFoldersByExternalIdResponse
{

    /**
     * @var ArrayOfFolder $GetFoldersByExternalIdResult
     */
    protected $GetFoldersByExternalIdResult = null;

    /**
     * @param ArrayOfFolder $GetFoldersByExternalIdResult
     */
    public function __construct($GetFoldersByExternalIdResult)
    {
      $this->GetFoldersByExternalIdResult = $GetFoldersByExternalIdResult;
    }

    /**
     * @return ArrayOfFolder
     */
    public function getGetFoldersByExternalIdResult()
    {
      return $this->GetFoldersByExternalIdResult;
    }

    /**
     * @param ArrayOfFolder $GetFoldersByExternalIdResult
     * @return \Panopto\Session\GetFoldersByExternalIdResponse
     */
    public function setGetFoldersByExternalIdResult($GetFoldersByExternalIdResult)
    {
      $this->GetFoldersByExternalIdResult = $GetFoldersByExternalIdResult;
      return $this;
    }

}
