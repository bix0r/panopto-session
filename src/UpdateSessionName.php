<?php

namespace Panopto\Session;

class UpdateSessionName
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
     * @var string $name
     */
    protected $name = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $sessionId
     * @param string $name
     */
    public function __construct($auth, $sessionId, $name)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->name = $name;
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
     * @return \Panopto\Session\UpdateSessionName
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
     * @return \Panopto\Session\UpdateSessionName
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Panopto\Session\UpdateSessionName
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
