<?php

namespace Panopto\Session;

class UpdateFolderParent
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
     * @var string $parentId
     */
    protected $parentId = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $folderId
     * @param string $parentId
     */
    public function __construct($auth, $folderId, $parentId)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->parentId = $parentId;
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
     * @return \Panopto\Session\UpdateFolderParent
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
     * @return \Panopto\Session\UpdateFolderParent
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return string 
     */
    public function getParentId()
    {
      return $this->parentId;
    }

    /**
     * @param string $parentId
     * @return \Panopto\Session\UpdateFolderParent
     */
    public function setParentId($parentId)
    {
      $this->parentId = $parentId;
      return $this;
    }

}
