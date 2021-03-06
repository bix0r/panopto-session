<?php

namespace Panopto\Session;

class UpdateFoldersAvailabilityStartSettingsResponse
{

    /**
     * @var boolean $UpdateFoldersAvailabilityStartSettingsResult
     */
    protected $UpdateFoldersAvailabilityStartSettingsResult = null;

    /**
     * @param boolean $UpdateFoldersAvailabilityStartSettingsResult
     */
    public function __construct($UpdateFoldersAvailabilityStartSettingsResult)
    {
      $this->UpdateFoldersAvailabilityStartSettingsResult = $UpdateFoldersAvailabilityStartSettingsResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateFoldersAvailabilityStartSettingsResult()
    {
      return $this->UpdateFoldersAvailabilityStartSettingsResult;
    }

    /**
     * @param boolean $UpdateFoldersAvailabilityStartSettingsResult
     * @return \Panopto\Session\UpdateFoldersAvailabilityStartSettingsResponse
     */
    public function setUpdateFoldersAvailabilityStartSettingsResult($UpdateFoldersAvailabilityStartSettingsResult)
    {
      $this->UpdateFoldersAvailabilityStartSettingsResult = $UpdateFoldersAvailabilityStartSettingsResult;
      return $this;
    }

}
