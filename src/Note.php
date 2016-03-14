<?php

namespace Panopto\Session;

class Note
{

    /**
     * @var string $Channel
     */
    protected $Channel = null;

    /**
     * @var string $CreatorId
     */
    protected $CreatorId = null;

    /**
     * @var string $ID
     */
    protected $ID = null;

    /**
     * @var string $SessionID
     */
    protected $SessionID = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var float $Timestamp
     */
    protected $Timestamp = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getChannel()
    {
      return $this->Channel;
    }

    /**
     * @param string $Channel
     * @return \Panopto\Session\Note
     */
    public function setChannel($Channel)
    {
      $this->Channel = $Channel;
      return $this;
    }

    /**
     * @return string 
     */
    public function getCreatorId()
    {
      return $this->CreatorId;
    }

    /**
     * @param string $CreatorId
     * @return \Panopto\Session\Note
     */
    public function setCreatorId($CreatorId)
    {
      $this->CreatorId = $CreatorId;
      return $this;
    }

    /**
     * @return string 
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param string $ID
     * @return \Panopto\Session\Note
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string 
     */
    public function getSessionID()
    {
      return $this->SessionID;
    }

    /**
     * @param string $SessionID
     * @return \Panopto\Session\Note
     */
    public function setSessionID($SessionID)
    {
      $this->SessionID = $SessionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \Panopto\Session\Note
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return float
     */
    public function getTimestamp()
    {
      return $this->Timestamp;
    }

    /**
     * @param float $Timestamp
     * @return \Panopto\Session\Note
     */
    public function setTimestamp($Timestamp)
    {
      $this->Timestamp = $Timestamp;
      return $this;
    }

}
