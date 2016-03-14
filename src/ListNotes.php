<?php

namespace Panopto\Session;

class ListNotes
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var Pagination $pagination
     */
    protected $pagination = null;

    /**
     * @var string $creatorId
     */
    protected $creatorId = null;

    /**
     * @var string $channel
     */
    protected $channel = null;

    /**
     * @var string $searchQuery
     */
    protected $searchQuery = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $sessionId
     * @param Pagination $pagination
     * @param string $creatorId
     * @param string $channel
     * @param string $searchQuery
     */
    public function __construct($auth, $sessionId, $pagination, $creatorId, $channel, $searchQuery)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->pagination = $pagination;
      $this->creatorId = $creatorId;
      $this->channel = $channel;
      $this->searchQuery = $searchQuery;
    }

    /**
     * @return AuthenticationInfo
     */
    public function getAuth()
    {
      return $this->auth;
    }

    /**
     * @param AuthenticationInfo $auth
     * @return \Panopto\Session\ListNotes
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
      return $this;
    }

    /**
     * @return string 
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \Panopto\Session\ListNotes
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return Pagination
     */
    public function getPagination()
    {
      return $this->pagination;
    }

    /**
     * @param Pagination $pagination
     * @return \Panopto\Session\ListNotes
     */
    public function setPagination($pagination)
    {
      $this->pagination = $pagination;
      return $this;
    }

    /**
     * @return string 
     */
    public function getCreatorId()
    {
      return $this->creatorId;
    }

    /**
     * @param string $creatorId
     * @return \Panopto\Session\ListNotes
     */
    public function setCreatorId($creatorId)
    {
      $this->creatorId = $creatorId;
      return $this;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
      return $this->channel;
    }

    /**
     * @param string $channel
     * @return \Panopto\Session\ListNotes
     */
    public function setChannel($channel)
    {
      $this->channel = $channel;
      return $this;
    }

    /**
     * @return string
     */
    public function getSearchQuery()
    {
      return $this->searchQuery;
    }

    /**
     * @param string $searchQuery
     * @return \Panopto\Session\ListNotes
     */
    public function setSearchQuery($searchQuery)
    {
      $this->searchQuery = $searchQuery;
      return $this;
    }

}
