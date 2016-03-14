<?php

namespace Panopto\Session;

class ListFoldersRequest
{

    /**
     * @var Pagination $Pagination
     */
    protected $Pagination = null;

    /**
     * @var string $ParentFolderId
     */
    protected $ParentFolderId = null;

    /**
     * @var boolean $PublicOnly
     */
    protected $PublicOnly = null;

    /**
     * @var FolderSortField|string|string $SortBy
     */
    protected $SortBy = null;

    /**
     * @var boolean $SortIncreasing
     */
    protected $SortIncreasing = null;

    /**
     * @var boolean $WildcardSearchNameOnly
     */
    protected $WildcardSearchNameOnly = null;

    
    public function __construct()
    {
    
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
     * @return \Panopto\Session\ListFoldersRequest
     */
    public function setPagination($Pagination)
    {
      $this->Pagination = $Pagination;
      return $this;
    }

    /**
     * @return string 
     */
    public function getParentFolderId()
    {
      return $this->ParentFolderId;
    }

    /**
     * @param string $ParentFolderId
     * @return \Panopto\Session\ListFoldersRequest
     */
    public function setParentFolderId($ParentFolderId)
    {
      $this->ParentFolderId = $ParentFolderId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPublicOnly()
    {
      return $this->PublicOnly;
    }

    /**
     * @param boolean $PublicOnly
     * @return \Panopto\Session\ListFoldersRequest
     */
    public function setPublicOnly($PublicOnly)
    {
      $this->PublicOnly = $PublicOnly;
      return $this;
    }

    /**
     * @return FolderSortField|string|string
     */
    public function getSortBy()
    {
      return $this->SortBy;
    }

    /**
     * @param FolderSortField|string|string $SortBy
     * @return \Panopto\Session\ListFoldersRequest
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
     * @return \Panopto\Session\ListFoldersRequest
     */
    public function setSortIncreasing($SortIncreasing)
    {
      $this->SortIncreasing = $SortIncreasing;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWildcardSearchNameOnly()
    {
      return $this->WildcardSearchNameOnly;
    }

    /**
     * @param boolean $WildcardSearchNameOnly
     * @return \Panopto\Session\ListFoldersRequest
     */
    public function setWildcardSearchNameOnly($WildcardSearchNameOnly)
    {
      $this->WildcardSearchNameOnly = $WildcardSearchNameOnly;
      return $this;
    }

}
