<?php

namespace Panopto\Session;

class GetSessionsByExternalIdResponse
{

    /**
     * @var ArrayOfSession $GetSessionsByExternalIdResult
     */
    protected $GetSessionsByExternalIdResult = null;

    /**
     * @param ArrayOfSession $GetSessionsByExternalIdResult
     */
    public function __construct($GetSessionsByExternalIdResult)
    {
      $this->GetSessionsByExternalIdResult = $GetSessionsByExternalIdResult;
    }

    /**
     * @return ArrayOfSession
     */
    public function getGetSessionsByExternalIdResult()
    {
      return $this->GetSessionsByExternalIdResult;
    }

    /**
     * @param ArrayOfSession $GetSessionsByExternalIdResult
     * @return \Panopto\Session\GetSessionsByExternalIdResponse
     */
    public function setGetSessionsByExternalIdResult($GetSessionsByExternalIdResult)
    {
      $this->GetSessionsByExternalIdResult = $GetSessionsByExternalIdResult;
      return $this;
    }

}
