<?php

namespace Panopto\Session;

class MoveSessions
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ArrayOfguid $sessionIds
     */
    protected $sessionIds = null;

    /**
     * @var string $folderId
     */
    protected $folderId = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ArrayOfguid $sessionIds
     * @param string $folderId
     */
    public function __construct($auth, $sessionIds, $folderId)
    {
      $this->auth = $auth;
      $this->sessionIds = $sessionIds;
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
     * @return \Panopto\Session\MoveSessions
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getSessionIds()
    {
      return $this->sessionIds;
    }

    /**
     * @param ArrayOfguid $sessionIds
     * @return \Panopto\Session\MoveSessions
     */
    public function setSessionIds($sessionIds)
    {
      $this->sessionIds = $sessionIds;
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
     * @return \Panopto\Session\MoveSessions
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

}
