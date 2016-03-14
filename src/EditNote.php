<?php

namespace Panopto\Session;

class EditNote
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
     * @var string $newText
     */
    protected $newText = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $noteId
     * @param string $sessionId
     * @param string $newText
     */
    public function __construct($auth, $noteId, $sessionId, $newText)
    {
      $this->auth = $auth;
      $this->noteId = $noteId;
      $this->sessionId = $sessionId;
      $this->newText = $newText;
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
     * @return \Panopto\Session\EditNote
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
     * @return \Panopto\Session\EditNote
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
     * @return \Panopto\Session\EditNote
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewText()
    {
      return $this->newText;
    }

    /**
     * @param string $newText
     * @return \Panopto\Session\EditNote
     */
    public function setNewText($newText)
    {
      $this->newText = $newText;
      return $this;
    }

}
