<?php

namespace Panopto\Session;

class DeleteNote
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var string $noteId
     */
    protected $noteId = null;

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $noteId
     * @param string $sessionId
     */
    public function __construct($auth, $noteId, $sessionId)
    {
      $this->auth = $auth;
      $this->noteId = $noteId;
      $this->sessionId = $sessionId;
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
     * @return \Panopto\Session\DeleteNote
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return string 
     */
    public function getNoteId()
    {
      return $this->noteId;
    }

    /**
     * @param string $noteId
     * @return \Panopto\Session\DeleteNote
     */
    public function setNoteId($noteId)
    {
      $this->noteId = $noteId;
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
     * @return \Panopto\Session\DeleteNote
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

}
