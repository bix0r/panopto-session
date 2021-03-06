<?php

namespace Panopto\Session;

class UpdateSessionsAvailabilityStartSettings
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var ArrayOfguid $sessionIds
     */
    protected $sessionIds = null;

    /**
     * @var SessionStartSettingType|string $settingType
     */
    protected $settingType = null;

    /**
     * @var \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @param AuthenticationInfo $auth
     * @param ArrayOfguid $sessionIds
     * @param SessionStartSettingType|string $settingType
     * @param \DateTime $startDate
     */
    public function __construct($auth, $sessionIds, $settingType, \DateTime $startDate)
    {
      $this->auth = $auth;
      $this->sessionIds = $sessionIds;
      $this->settingType = $settingType;
      $this->startDate = $startDate->format(\DateTime::ATOM);
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
     * @return \Panopto\Session\UpdateSessionsAvailabilityStartSettings
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getSessionIds()
    {
      return $this->sessionIds;
    }

    /**
     * @param ArrayOfguid $sessionIds
     * @return \Panopto\Session\UpdateSessionsAvailabilityStartSettings
     */
    public function setSessionIds($sessionIds)
    {
      $this->sessionIds = $sessionIds;
      return $this;
    }

    /**
     * @return SessionStartSettingType|string
     */
    public function getSettingType()
    {
      return $this->settingType;
    }

    /**
     * @param SessionStartSettingType|string $settingType
     * @return \Panopto\Session\UpdateSessionsAvailabilityStartSettings
     */
    public function setSettingType($settingType)
    {
      $this->settingType = $settingType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->startDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->startDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $startDate
     * @return \Panopto\Session\UpdateSessionsAvailabilityStartSettings
     */
    public function setStartDate(\DateTime $startDate)
    {
      $this->startDate = $startDate->format(\DateTime::ATOM);
      return $this;
    }

}
