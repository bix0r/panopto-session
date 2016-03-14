<?php

namespace Panopto\Session;

class IsDropboxResponse
{

    /**
     * @var boolean $IsDropboxResult
     */
    protected $IsDropboxResult = null;

    /**
     * @param boolean $IsDropboxResult
     */
    public function __construct($IsDropboxResult)
    {
      $this->IsDropboxResult = $IsDropboxResult;
    }

    /**
     * @return boolean
     */
    public function getIsDropboxResult()
    {
      return $this->IsDropboxResult;
    }

    /**
     * @param boolean $IsDropboxResult
     * @return \Panopto\Session\IsDropboxResponse
     */
    public function setIsDropboxResult($IsDropboxResult)
    {
      $this->IsDropboxResult = $IsDropboxResult;
      return $this;
    }

}
