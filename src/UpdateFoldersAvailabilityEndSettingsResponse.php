<?php

namespace Panopto\Session;

class UpdateFoldersAvailabilityEndSettingsResponse
{

    /**
     * @var boolean $UpdateFoldersAvailabilityEndSettingsResult
     */
    protected $UpdateFoldersAvailabilityEndSettingsResult = null;

    /**
     * @param boolean $UpdateFoldersAvailabilityEndSettingsResult
     */
    public function __construct($UpdateFoldersAvailabilityEndSettingsResult)
    {
      $this->UpdateFoldersAvailabilityEndSettingsResult = $UpdateFoldersAvailabilityEndSettingsResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateFoldersAvailabilityEndSettingsResult()
    {
      return $this->UpdateFoldersAvailabilityEndSettingsResult;
    }

    /**
     * @param boolean $UpdateFoldersAvailabilityEndSettingsResult
     * @return \Panopto\Session\UpdateFoldersAvailabilityEndSettingsResponse
     */
    public function setUpdateFoldersAvailabilityEndSettingsResult($UpdateFoldersAvailabilityEndSettingsResult)
    {
      $this->UpdateFoldersAvailabilityEndSettingsResult = $UpdateFoldersAvailabilityEndSettingsResult;
      return $this;
    }

}
