<?php

namespace Panopto\Session;

class FoldersWithAvailabilitySettings
{

    /**
     * @var ArrayOfFolderAvailabilitySettings $Results
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
     * @return ArrayOfFolderAvailabilitySettings
     */
    public function getResults()
    {
      return $this->Results;
    }

    /**
     * @param ArrayOfFolderAvailabilitySettings $Results
     * @return \Panopto\Session\FoldersWithAvailabilitySettings
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
     * @return \Panopto\Session\FoldersWithAvailabilitySettings
     */
    public function setTotalNumberResults($TotalNumberResults)
    {
      $this->TotalNumberResults = $TotalNumberResults;
      return $this;
    }

}
