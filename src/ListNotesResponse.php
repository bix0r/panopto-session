<?php

namespace Panopto\Session;

class ListNotesResponse
{

    /**
     * @var ListNotesResponse $ListNotesResult
     */
    protected $ListNotesResult = null;

    /**
     * @param ListNotesResponse $ListNotesResult
     */
    public function __construct($ListNotesResult)
    {
      $this->ListNotesResult = $ListNotesResult;
    }

    /**
     * @return ListNotesResponse
     */
    public function getListNotesResult()
    {
      return $this->ListNotesResult;
    }

    /**
     * @param ListNotesResponse $ListNotesResult
     * @return \Panopto\Session\ListNotesResponse
     */
    public function setListNotesResult($ListNotesResult)
    {
      $this->ListNotesResult = $ListNotesResult;
      return $this;
    }

}
