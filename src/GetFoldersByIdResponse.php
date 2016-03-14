<?php

namespace Panopto\Session;

class GetFoldersByIdResponse
{

    /**
     * @var ArrayOfFolder $GetFoldersByIdResult
     */
    protected $GetFoldersByIdResult = null;

    /**
     * @param ArrayOfFolder $GetFoldersByIdResult
     */
    public function __construct($GetFoldersByIdResult)
    {
      $this->GetFoldersByIdResult = $GetFoldersByIdResult;
    }

    /**
     * @return ArrayOfFolder
     */
    public function getGetFoldersByIdResult()
    {
      return $this->GetFoldersByIdResult;
    }

    /**
     * @param ArrayOfFolder $GetFoldersByIdResult
     * @return \Panopto\Session\GetFoldersByIdResponse
     */
    public function setGetFoldersByIdResult($GetFoldersByIdResult)
    {
      $this->GetFoldersByIdResult = $GetFoldersByIdResult;
      return $this;
    }

}
