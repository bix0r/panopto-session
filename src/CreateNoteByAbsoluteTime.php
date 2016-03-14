<?php

namespace Panopto\Session;

class CreateNoteByAbsoluteTime
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
     * @var string $text
     */
    protected $text = null;

    /**
     * @var string $channel
     */
    protected $channel = null;

    /**
     * @var \DateTime $timestamp
     */
    protected $timestamp = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $sessionId
     * @param string $text
     * @param string $channel
     * @param \DateTime $timestamp
     */
    public function __construct($auth, $sessionId, $text, $channel, \DateTime $timestamp)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->text = $text;
      $this->channel = $channel;
      $this->timestamp = $timestamp->format(\DateTime::ATOM);
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
     * @return \Panopto\Session\CreateNoteByAbsoluteTime
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
     * @return \Panopto\Session\CreateNoteByAbsoluteTime
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->text;
    }

    /**
     * @param string $text
     * @return \Panopto\Session\CreateNoteByAbsoluteTime
     */
    public function setText($text)
    {
      $this->text = $text;
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
     * @return \Panopto\Session\CreateNoteByAbsoluteTime
     */
    public function setChannel($channel)
    {
      $this->channel = $channel;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
      if ($this->timestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->timestamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $timestamp
     * @return \Panopto\Session\CreateNoteByAbsoluteTime
     */
    public function setTimestamp(\DateTime $timestamp)
    {
      $this->timestamp = $timestamp->format(\DateTime::ATOM);
      return $this;
    }

}
