<?php

namespace Panopto\Session;

class GetFoldersListResponse
{

    /**
     * @var ListFoldersResponse $GetFoldersListResult
     */
    protected $GetFoldersListResult = null;

    /**
     * @param ListFoldersResponse $GetFoldersListResult
     */
    public function __construct($GetFoldersListResult)
    {
      $this->GetFoldersListResult = $GetFoldersListResult;
    }

    /**
     * @return ListFoldersResponse
     */
    public function getGetFoldersListResult()
    {
      return $this->GetFoldersListResult;
    }

    /**
     * @param ListFoldersResponse $GetFoldersListResult
     * @return \Panopto\Session\GetFoldersListResponse
     */
    public function setGetFoldersListResult($GetFoldersListResult)
    {
      $this->GetFoldersListResult = $GetFoldersListResult;
      return $this;
    }

}
