<?php

namespace Panopto\Session;

class AddFolder
{

    /**
     * @var AuthenticationInfo $auth
     */
    protected $auth = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $parentFolder
     */
    protected $parentFolder = null;

    /**
     * @var boolean $isPublic
     */
    protected $isPublic = null;

    /**
     * @param AuthenticationInfo $auth
     * @param string $name
     * @param string $parentFolder
     * @param boolean $isPublic
     */
    public function __construct($auth, $name, $parentFolder, $isPublic)
    {
      $this->auth = $auth;
      $this->name = $name;
      $this->parentFolder = $parentFolder;
      $this->isPublic = $isPublic;
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
     * @return \Panopto\Session\AddFolder
     */
    public function setAuth($auth)
    {
      $this->auth = $auth;
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
     * @return \Panopto\Session\AddFolder
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string 
     */
    public function getParentFolder()
    {
      return $this->parentFolder;
    }

    /**
     * @param string $parentFolder
     * @return \Panopto\Session\AddFolder
     */
    public function setParentFolder($parentFolder)
    {
      $this->parentFolder = $parentFolder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPublic()
    {
      return $this->isPublic;
    }

    /**
     * @param boolean $isPublic
     * @return \Panopto\Session\AddFolder
     */
    public function setIsPublic($isPublic)
    {
      $this->isPublic = $isPublic;
      return $this;
    }

}
