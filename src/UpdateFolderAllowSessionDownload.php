<?php

namespace Panopto\Session;

class UpdateFolderAllowSessionDownload
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
     * @var boolean $allowSessionDownload
     */
    protected $allowSessionDownload = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $folderId
     * @param boolean $allowSessionDownload
     */
    public function __construct($auth, $folderId, $allowSessionDownload)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->allowSessionDownload = $allowSessionDownload;
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
     * @return \Panopto\Session\UpdateFolderAllowSessionDownload
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
     * @return \Panopto\Session\UpdateFolderAllowSessionDownload
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowSessionDownload()
    {
      return $this->allowSessionDownload;
    }

    /**
     * @param boolean $allowSessionDownload
     * @return \Panopto\Session\UpdateFolderAllowSessionDownload
     */
    public function setAllowSessionDownload($allowSessionDownload)
    {
      $this->allowSessionDownload = $allowSessionDownload;
      return $this;
    }

}
