<?php

namespace Panopto\Session;

class UpdateFolderExternalIdWithProvider
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
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @var string $SiteMembershipProviderName
     */
    protected $SiteMembershipProviderName = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $folderId
     * @param string $externalId
     * @param string $SiteMembershipProviderName
     */
    public function __construct($auth, $folderId, $externalId, $SiteMembershipProviderName)
    {
      $this->auth = $auth;
      $this->folderId = $folderId;
      $this->externalId = $externalId;
      $this->SiteMembershipProviderName = $SiteMembershipProviderName;
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
     * @return \Panopto\Session\UpdateFolderExternalIdWithProvider
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
     * @return \Panopto\Session\UpdateFolderExternalIdWithProvider
     */
    public function setFolderId($folderId)
    {
      $this->folderId = $folderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Panopto\Session\UpdateFolderExternalIdWithProvider
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSiteMembershipProviderName()
    {
      return $this->SiteMembershipProviderName;
    }

    /**
     * @param string $SiteMembershipProviderName
     * @return \Panopto\Session\UpdateFolderExternalIdWithProvider
     */
    public function setSiteMembershipProviderName($SiteMembershipProviderName)
    {
      $this->SiteMembershipProviderName = $SiteMembershipProviderName;
      return $this;
    }

}
