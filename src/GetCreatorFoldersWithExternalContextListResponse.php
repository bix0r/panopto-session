<?php

namespace Panopto\Session;

class GetCreatorFoldersWithExternalContextListResponse
{

    /**
     * @var ListFoldersResponseWithExternalContext $GetCreatorFoldersWithExternalContextListResult
     */
    protected $GetCreatorFoldersWithExternalContextListResult = null;

    /**
     * @param ListFoldersResponseWithExternalContext $GetCreatorFoldersWithExternalContextListResult
     */
    public function __construct($GetCreatorFoldersWithExternalContextListResult)
    {
      $this->GetCreatorFoldersWithExternalContextListResult = $GetCreatorFoldersWithExternalContextListResult;
    }

    /**
     * @return ListFoldersResponseWithExternalContext
     */
    public function getGetCreatorFoldersWithExternalContextListResult()
    {
      return $this->GetCreatorFoldersWithExternalContextListResult;
    }

    /**
     * @param ListFoldersResponseWithExternalContext $GetCreatorFoldersWithExternalContextListResult
     * @return \Panopto\Session\GetCreatorFoldersWithExternalContextListResponse
     */
    public function setGetCreatorFoldersWithExternalContextListResult($GetCreatorFoldersWithExternalContextListResult)
    {
      $this->GetCreatorFoldersWithExternalContextListResult = $GetCreatorFoldersWithExternalContextListResult;
      return $this;
    }

}
