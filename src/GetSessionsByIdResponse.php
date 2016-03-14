<?php

namespace Panopto\Session;

class GetSessionsByIdResponse
{

    /**
     * @var ArrayOfSession $GetSessionsByIdResult
     */
    protected $GetSessionsByIdResult = null;

    /**
     * @param ArrayOfSession $GetSessionsByIdResult
     */
    public function __construct($GetSessionsByIdResult)
    {
      $this->GetSessionsByIdResult = $GetSessionsByIdResult;
    }

    /**
     * @return ArrayOfSession
     */
    public function getGetSessionsByIdResult()
    {
      return $this->GetSessionsByIdResult;
    }

    /**
     * @param ArrayOfSession $GetSessionsByIdResult
     * @return \Panopto\Session\GetSessionsByIdResponse
     */
    public function setGetSessionsByIdResult($GetSessionsByIdResult)
    {
      $this->GetSessionsByIdResult = $GetSessionsByIdResult;
      return $this;
    }

}
