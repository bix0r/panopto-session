<?php

namespace Panopto\Session;

class GetFoldersWithExternalContextListResponse
{

    /**
     * @var ListFoldersResponseWithExternalContext $GetFoldersWithExternalContextListResult
     */
    protected $GetFoldersWithExternalContextListResult = null;

    /**
     * @param ListFoldersResponseWithExternalContext $GetFoldersWithExternalContextListResult
     */
    public function __construct($GetFoldersWithExternalContextListResult)
    {
      $this->GetFoldersWithExternalContextListResult = $GetFoldersWithExternalContextListResult;
    }

    /**
     * @return ListFoldersResponseWithExternalContext
     */
    public function getGetFoldersWithExternalContextListResult()
    {
      return $this->GetFoldersWithExternalContextListResult;
    }

    /**
     * @param ListFoldersResponseWithExternalContext $GetFoldersWithExternalContextListResult
     * @return \Panopto\Session\GetFoldersWithExternalContextListResponse
     */
    public function setGetFoldersWithExternalContextListResult($GetFoldersWithExternalContextListResult)
    {
      $this->GetFoldersWithExternalContextListResult = $GetFoldersWithExternalContextListResult;
      return $this;
    }

}
