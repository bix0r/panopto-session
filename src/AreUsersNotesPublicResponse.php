<?php

namespace Panopto\Session;

class AreUsersNotesPublicResponse
{

    /**
     * @var boolean $AreUsersNotesPublicResult
     */
    protected $AreUsersNotesPublicResult = null;

    /**
     * @param boolean $AreUsersNotesPublicResult
     */
    public function __construct($AreUsersNotesPublicResult)
    {
      $this->AreUsersNotesPublicResult = $AreUsersNotesPublicResult;
    }

    /**
     * @return boolean
     */
    public function getAreUsersNotesPublicResult()
    {
      return $this->AreUsersNotesPublicResult;
    }

    /**
     * @param boolean $AreUsersNotesPublicResult
     * @return \Panopto\Session\AreUsersNotesPublicResponse
     */
    public function setAreUsersNotesPublicResult($AreUsersNotesPublicResult)
    {
      $this->AreUsersNotesPublicResult = $AreUsersNotesPublicResult;
      return $this;
    }

}
