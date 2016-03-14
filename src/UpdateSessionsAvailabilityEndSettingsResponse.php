<?php

namespace Panopto\Session;

class UpdateSessionsAvailabilityEndSettingsResponse
{

    /**
     * @var boolean $UpdateSessionsAvailabilityEndSettingsResult
     */
    protected $UpdateSessionsAvailabilityEndSettingsResult = null;

    /**
     * @param boolean $UpdateSessionsAvailabilityEndSettingsResult
     */
    public function __construct($UpdateSessionsAvailabilityEndSettingsResult)
    {
      $this->UpdateSessionsAvailabilityEndSettingsResult = $UpdateSessionsAvailabilityEndSettingsResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateSessionsAvailabilityEndSettingsResult()
    {
      return $this->UpdateSessionsAvailabilityEndSettingsResult;
    }

    /**
     * @param boolean $UpdateSessionsAvailabilityEndSettingsResult
     * @return \Panopto\Session\UpdateSessionsAvailabilityEndSettingsResponse
     */
    public function setUpdateSessionsAvailabilityEndSettingsResult($UpdateSessionsAvailabilityEndSettingsResult)
    {
      $this->UpdateSessionsAvailabilityEndSettingsResult = $UpdateSessionsAvailabilityEndSettingsResult;
      return $this;
    }

}
