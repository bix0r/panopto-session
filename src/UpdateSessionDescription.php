<?php

namespace Panopto\Session;

class UpdateSessionDescription
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
     * @var string $description
     */
    protected $description = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $sessionId
     * @param string $description
     */
    public function __construct($auth, $sessionId, $description)
    {
      $this->auth = $auth;
      $this->sessionId = $sessionId;
      $this->description = $description;
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
     * @return \Panopto\Session\UpdateSessionDescription
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
     * @return \Panopto\Session\UpdateSessionDescription
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Panopto\Session\UpdateSessionDescription
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
