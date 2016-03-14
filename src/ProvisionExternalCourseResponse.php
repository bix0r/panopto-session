<?php

namespace Panopto\Session;

class ProvisionExternalCourseResponse
{

    /**
     * @var Folder $ProvisionExternalCourseResult
     */
    protected $ProvisionExternalCourseResult = null;

    /**
     * @param Folder $ProvisionExternalCourseResult
     */
    public function __construct($ProvisionExternalCourseResult)
    {
      $this->ProvisionExternalCourseResult = $ProvisionExternalCourseResult;
    }

    /**
     * @return Folder
     */
    public function getProvisionExternalCourseResult()
    {
      return $this->ProvisionExternalCourseResult;
    }

    /**
     * @param Folder $ProvisionExternalCourseResult
     * @return \Panopto\Session\ProvisionExternalCourseResponse
     */
    public function setProvisionExternalCourseResult($ProvisionExternalCourseResult)
    {
      $this->ProvisionExternalCourseResult = $ProvisionExternalCourseResult;
      return $this;
    }

}
