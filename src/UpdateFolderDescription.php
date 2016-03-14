<?php

namespace Panopto\Session;

class UpdateFolderDescription
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
     * @var string $description
     */
    protected $description = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $folderId
     * @param string $description
     */
    public function __construct($auth, $folderId, $description)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->description = $description;
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
     * @return \Panopto\Session\UpdateFolderDescription
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
     * @return \Panopto\Session\UpdateFolderDescription
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Panopto\Session\UpdateFolderDescription
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
