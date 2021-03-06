<?php

namespace Panopto\Session;

class GetFoldersWithExternalContextByExternalId
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ArrayOfstring $folderExternalIds
     */
    protected $folderExternalIds = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ArrayOfstring $folderExternalIds
     */
    public function __construct($auth, $folderExternalIds)
    {
      $this->auth = $auth;
      $this->folderExternalIds = $folderExternalIds;
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
     * @return \Panopto\Session\GetFoldersWithExternalContextByExternalId
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getFolderExternalIds()
    {
      return $this->folderExternalIds;
    }

    /**
     * @param ArrayOfstring $folderExternalIds
     * @return \Panopto\Session\GetFoldersWithExternalContextByExternalId
     */
    public function setFolderExternalIds($folderExternalIds)
    {
      $this->folderExternalIds = $folderExternalIds;
      return $this;
    }

}
