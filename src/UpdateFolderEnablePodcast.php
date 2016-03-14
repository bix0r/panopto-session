<?php

namespace Panopto\Session;

class UpdateFolderEnablePodcast
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
     * @var boolean $enablePodcast
     */
    protected $enablePodcast = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $folderId
     * @param boolean $enablePodcast
     */
    public function __construct($auth, $folderId, $enablePodcast)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->enablePodcast = $enablePodcast;
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
     * @return \Panopto\Session\UpdateFolderEnablePodcast
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
     * @return \Panopto\Session\UpdateFolderEnablePodcast
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnablePodcast()
    {
      return $this->enablePodcast;
    }

    /**
     * @param boolean $enablePodcast
     * @return \Panopto\Session\UpdateFolderEnablePodcast
     */
    public function setEnablePodcast($enablePodcast)
    {
      $this->enablePodcast = $enablePodcast;
      return $this;
    }

}
