<?php

namespace Panopto\Session;

class UpdateFolderAllowPublicNotes
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
     * @var boolean $allowPublicNotes
     */
    protected $allowPublicNotes = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $folderId
     * @param boolean $allowPublicNotes
     */
    public function __construct($auth, $folderId, $allowPublicNotes)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->allowPublicNotes = $allowPublicNotes;
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
     * @return \Panopto\Session\UpdateFolderAllowPublicNotes
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
     * @return \Panopto\Session\UpdateFolderAllowPublicNotes
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowPublicNotes()
    {
      return $this->allowPublicNotes;
    }

    /**
     * @param boolean $allowPublicNotes
     * @return \Panopto\Session\UpdateFolderAllowPublicNotes
     */
    public function setAllowPublicNotes($allowPublicNotes)
    {
      $this->allowPublicNotes = $allowPublicNotes;
      return $this;
    }

}
