<?php

namespace Panopto\Session;

class ListFoldersResponse
{

    /**
     * @var ArrayOfFolder $Results
     */
    protected $Results = null;

    /**
     * @var int $TotalNumberResults
     */
    protected $TotalNumberResults = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfFolder
     */
    public function getResults()
    {
      return $this->Results;
    }

    /**
     * @param ArrayOfFolder $Results
     * @return \Panopto\Session\ListFoldersResponse
     */
    public function setResults($Results)
    {
      $this->Results = $Results;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalNumberResults()
    {
      return $this->TotalNumberResults;
    }

    /**
     * @param int $TotalNumberResults
     * @return \Panopto\Session\ListFoldersResponse
     */
    public function setTotalNumberResults($TotalNumberResults)
    {
      $this->TotalNumberResults = $TotalNumberResults;
      return $this;
    }

}
