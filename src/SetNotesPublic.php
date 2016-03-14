<?php

namespace Panopto\Session;

class SetNotesPublic
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var boolean $areNotesPublic
     */
    protected $areNotesPublic = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $sessionId
     * @param boolean $areNotesPublic
     */
    public function __construct($auth, $sessionId, $areNotesPublic)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->areNotesPublic = $areNotesPublic;
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
     * @return \Panopto\Session\SetNotesPublic
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return string 
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \Panopto\Session\SetNotesPublic
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAreNotesPublic()
    {
      return $this->areNotesPublic;
    }

    /**
     * @param boolean $areNotesPublic
     * @return \Panopto\Session\SetNotesPublic
     */
    public function setAreNotesPublic($areNotesPublic)
    {
      $this->areNotesPublic = $areNotesPublic;
      return $this;
    }

}
