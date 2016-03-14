<?php

namespace Panopto\Session;

class ListFoldersResponseWithExternalContext
{

    /**
     * @var ArrayOfFolderWithExternalContext $Results
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
     * @return ArrayOfFolderWithExternalContext
     */
    public function getResults()
    {
      return $this->Results;
    }

    /**
     * @param ArrayOfFolderWithExternalContext $Results
     * @return \Panopto\Session\ListFoldersResponseWithExternalContext
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
     * @return \Panopto\Session\ListFoldersResponseWithExternalContext
     */
    public function setTotalNumberResults($TotalNumberResults)
    {
      $this->TotalNumberResults = $TotalNumberResults;
      return $this;
    }

}
