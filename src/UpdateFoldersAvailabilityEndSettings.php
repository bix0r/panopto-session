<?php

namespace Panopto\Session;

class UpdateFoldersAvailabilityEndSettings
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ArrayOfguid $folderIds
     */
    protected $folderIds = null;

    /**
     * @var FolderEndSettingType|string $settingType
     */
    protected $settingType = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var boolean $overrideSessionsSettings
     */
    protected $overrideSessionsSettings = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ArrayOfguid $folderIds
     * @param FolderEndSettingType|string $settingType
     * @param \DateTime $endDate
     * @param boolean $overrideSessionsSettings
     */
    public function __construct($auth, $folderIds, $settingType, \DateTime $endDate, $overrideSessionsSettings)
    {
      $this->auth = $auth;
      $this->folderIds = $folderIds;
      $this->settingType = $settingType;
      $this->endDate = $endDate->format(\DateTime::ATOM);
      $this->overrideSessionsSettings = $overrideSessionsSettings;
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
     * @return \Panopto\Session\UpdateFoldersAvailabilityEndSettings
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getFolderIds()
    {
      return $this->folderIds;
    }

    /**
     * @param ArrayOfguid $folderIds
     * @return \Panopto\Session\UpdateFoldersAvailabilityEndSettings
     */
    public function setFolderIds($folderIds)
    {
      $this->folderIds = $folderIds;
      return $this;
    }

    /**
     * @return FolderEndSettingType|string
     */
    public function getSettingType()
    {
      return $this->settingType;
    }

    /**
     * @param FolderEndSettingType|string $settingType
     * @return \Panopto\Session\UpdateFoldersAvailabilityEndSettings
     */
    public function setSettingType($settingType)
    {
      $this->settingType = $settingType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \Panopto\Session\UpdateFoldersAvailabilityEndSettings
     */
    public function setEndDate(\DateTime $endDate)
    {
      $this->endDate = $endDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverrideSessionsSettings()
    {
      return $this->overrideSessionsSettings;
    }

    /**
     * @param boolean $overrideSessionsSettings
     * @return \Panopto\Session\UpdateFoldersAvailabilityEndSettings
     */
    public function setOverrideSessionsSettings($overrideSessionsSettings)
    {
      $this->overrideSessionsSettings = $overrideSessionsSettings;
      return $this;
    }

}
