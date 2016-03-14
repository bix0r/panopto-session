<?php

namespace Panopto\Session;

class IsDropbox
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var string $folderId
     */
    protected $folderId = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $folderId
     */
    public function __construct($auth, $folderId)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
    }

    /**
     * @return AuthenticationInfo
     */
    public function getAuth()
    {
      return $this->auth;
    }

    /**
     * @param AuthenticationInfo $auth
     * @return \Panopto\Session\IsDropbox
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return string 
     */
    public function getFolderId()
    {
      return $this->folderId;
    }

    /**
     * @param string $folderId
     * @return \Panopto\Session\IsDropbox
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

}
