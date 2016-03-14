<?php

namespace Panopto\Session;

class CreateNoteByAbsoluteTimeResponse
{

    /**
     * @var string $CreateNoteByAbsoluteTimeResult
     */
    protected $CreateNoteByAbsoluteTimeResult = null;

    /**
     * @param string $CreateNoteByAbsoluteTimeResult
     */
    public function __construct($CreateNoteByAbsoluteTimeResult)
    {
      $this->CreateNoteByAbsoluteTimeResult = $CreateNoteByAbsoluteTimeResult;
    }

    /**
     * @return string 
     */
    public function getCreateNoteByAbsoluteTimeResult()
    {
      return $this->CreateNoteByAbsoluteTimeResult;
    }

    /**
     * @param string $CreateNoteByAbsoluteTimeResult
     * @return \Panopto\Session\CreateNoteByAbsoluteTimeResponse
     */
    public function setCreateNoteByAbsoluteTimeResult($CreateNoteByAbsoluteTimeResult)
    {
      $this->CreateNoteByAbsoluteTimeResult = $CreateNoteByAbsoluteTimeResult;
      return $this;
    }

}
