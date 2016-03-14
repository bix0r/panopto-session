<?php

namespace Panopto\Session;

class SetExternalCourseAccessResponse
{

    /**
     * @var ArrayOfFolder $SetExternalCourseAccessResult
     */
    protected $SetExternalCourseAccessResult = null;

    /**
     * @param ArrayOfFolder $SetExternalCourseAccessResult
     */
    public function __construct($SetExternalCourseAccessResult)
    {
      $this->SetExternalCourseAccessResult = $SetExternalCourseAccessResult;
    }

    /**
     * @return ArrayOfFolder
     */
    public function getSetExternalCourseAccessResult()
    {
      return $this->SetExternalCourseAccessResult;
    }

    /**
     * @param ArrayOfFolder $SetExternalCourseAccessResult
     * @return \Panopto\Session\SetExternalCourseAccessResponse
     */
    public function setSetExternalCourseAccessResult($SetExternalCourseAccessResult)
    {
      $this->SetExternalCourseAccessResult = $SetExternalCourseAccessResult;
      return $this;
    }

}
