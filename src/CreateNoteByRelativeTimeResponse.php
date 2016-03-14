<?php

namespace Panopto\Session;

class CreateNoteByRelativeTimeResponse
{

    /**
     * @var string $CreateNoteByRelativeTimeResult
     */
    protected $CreateNoteByRelativeTimeResult = null;

    /**
     * @param string $CreateNoteByRelativeTimeResult
     */
    public function __construct($CreateNoteByRelativeTimeResult)
    {
      $this->CreateNoteByRelativeTimeResult = $CreateNoteByRelativeTimeResult;
    }

    /**
     * @return string 
     */
    public function getCreateNoteByRelativeTimeResult()
    {
      return $this->CreateNoteByRelativeTimeResult;
    }

    /**
     * @param string $CreateNoteByRelativeTimeResult
     * @return \Panopto\Session\CreateNoteByRelativeTimeResponse
     */
    public function setCreateNoteByRelativeTimeResult($CreateNoteByRelativeTimeResult)
    {
      $this->CreateNoteByRelativeTimeResult = $CreateNoteByRelativeTimeResult;
      return $this;
    }

}
