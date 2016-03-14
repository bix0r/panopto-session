<?php

namespace Panopto\Session;

class UpdateFolderName
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
     * @var string $name
     */
    protected $name = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $folderId
     * @param string $name
     */
    public function __construct($auth, $folderId, $name)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->name = $name;
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
     * @return \Panopto\Session\UpdateFolderName
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
     * @return \Panopto\Session\UpdateFolderName
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Panopto\Session\UpdateFolderName
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
