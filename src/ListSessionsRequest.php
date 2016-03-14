<?php

namespace Panopto\Session;

class ListSessionsRequest
{

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var string $FolderId
     */
    protected $FolderId = null;

    /**
     * @var Pagination $Pagination
     */
    protected $Pagination = null;

    /**
     * @var string $RemoteRecorderId
     */
    protected $RemoteRecorderId = null;

    /**
     * @var SessionSortField|string $SortBy
     */
    protected $SortBy = null;

    /**
     * @var boolean $SortIncreasing
     */
    protected $SortIncreasing = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var ArrayOfSessionState $States
     */
    protected $States = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return \Panopto\Session\ListSessionsRequest
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string 
     */
    public function getFolderId()
    {
      return $this->FolderId;
    }

    /**
     * @param string $FolderId
     * @return \Panopto\Session\ListSessionsRequest
     */
    public function setFolderId($FolderId)
    {
      $this->FolderId = $FolderId;
      return $this;
    }

    /**
     * @return Pagination
     */
    public function getPagination()
    {
      return $this->Pagination;
    }

    /**
     * @param Pagination $Pagination
     * @return \Panopto\Session\ListSessionsRequest
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

    /**
     * @return string 
     */
    public function getRemoteRecorderId()
    {
      return $this->RemoteRecorderId;
    }

    /**
     * @param string $RemoteRecorderId
     * @return \Panopto\Session\ListSessionsRequest
     */
    public function setRemoteRecorderId($RemoteRecorderId)
    {
      $this->RemoteRecorderId = $RemoteRecorderId;
      return $this;
    }

    /**
     * @return SessionSortField|string
     */
    public function getSortBy()
    {
      return $this->SortBy;
    }

    /**
     * @param SessionSortField|string $SortBy
     * @return \Panopto\Session\ListSessionsRequest
     */
    public function setSortBy($SortBy)
    {
      $this->SortBy = $SortBy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSortIncreasing()
    {
      return $this->SortIncreasing;
    }

    /**
     * @param boolean $SortIncreasing
     * @return \Panopto\Session\ListSessionsRequest
     */
    public function setSortIncreasing($SortIncreasing)
    {
      $this->SortIncreasing = $SortIncreasing;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return \Panopto\Session\ListSessionsRequest
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfSessionState
     */
    public function getStates()
    {
      return $this->States;
    }

    /**
     * @param ArrayOfSessionState $States
     * @return \Panopto\Session\ListSessionsRequest
     */
    public function setStates($States)
    {
      $this->States = $States;
      return $this;
    }

}
