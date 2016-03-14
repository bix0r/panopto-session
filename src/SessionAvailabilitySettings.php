<?php

namespace Panopto\Session;

class SessionAvailabilitySettings
{

    /**
     * @var DateTimeOffset $EndSettingDate
     */
    protected $EndSettingDate = null;

    /**
     * @var SessionEndSettingType|string $EndSettingType
     */
    protected $EndSettingType = null;

    /**
     * @var string $SessionId
     */
    protected $SessionId = null;

    /**
     * @var DateTimeOffset $StartSettingDate
     */
    protected $StartSettingDate = null;

    /**
     * @var SessionStartSettingType|string $StartSettingType
     */
    protected $StartSettingType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DateTimeOffset
     */
    public function getEndSettingDate()
    {
      return $this->EndSettingDate;
    }

    /**
     * @param DateTimeOffset $EndSettingDate
     * @return \Panopto\Session\SessionAvailabilitySettings
     */
    public function setEndSettingDate($EndSettingDate)
    {
      $this->EndSettingDate = $EndSettingDate;
      return $this;
    }

    /**
     * @return SessionEndSettingType|string
     */
    public function getEndSettingType()
    {
      return $this->EndSettingType;
    }

    /**
     * @param SessionEndSettingType|string $EndSettingType
     * @return \Panopto\Session\SessionAvailabilitySettings
     */
    public function setEndSettingType($EndSettingType)
    {
      $this->EndSettingType = $EndSettingType;
      return $this;
    }

    /**
     * @return string 
     */
    public function getSessionId()
    {
      return $this->SessionId;
    }

    /**
     * @param string $SessionId
     * @return \Panopto\Session\SessionAvailabilitySettings
     */
    public function setSessionId($SessionId)
    {
      $this->SessionId = $SessionId;
      return $this;
    }

    /**
     * @return DateTimeOffset
     */
    public function getStartSettingDate()
    {
      return $this->StartSettingDate;
    }

    /**
     * @param DateTimeOffset $StartSettingDate
     * @return \Panopto\Session\SessionAvailabilitySettings
     */
    public function setStartSettingDate($StartSettingDate)
    {
      $this->StartSettingDate = $StartSettingDate;
      return $this;
    }

    /**
     * @return SessionStartSettingType|string
     */
    public function getStartSettingType()
    {
      return $this->StartSettingType;
    }

    /**
     * @param SessionStartSettingType|string $StartSettingType
     * @return \Panopto\Session\SessionAvailabilitySettings
     */
    public function setStartSettingType($StartSettingType)
    {
      $this->StartSettingType = $StartSettingType;
      return $this;
    }

}
