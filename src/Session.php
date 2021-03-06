<?php

namespace Panopto\Session;

class Session
{

    /**
     * @var string $CreatorId
     */
    protected $CreatorId = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var float $Duration
     */
    protected $Duration = null;

    /**
     * @var string $EditorUrl
     */
    protected $EditorUrl = null;

    /**
     * @var string $ExternalId
     */
    protected $ExternalId = null;

    /**
     * @var string $FolderId
     */
    protected $FolderId = null;

    /**
     * @var string $FolderName
     */
    protected $FolderName = null;

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $IosVideoUrl
     */
    protected $IosVideoUrl = null;

    /**
     * @var boolean $IsBroadcast
     */
    protected $IsBroadcast = null;

    /**
     * @var boolean $IsDownloadable
     */
    protected $IsDownloadable = null;

    /**
     * @var string $MP3Url
     */
    protected $MP3Url = null;

    /**
     * @var string $MP4Url
     */
    protected $MP4Url = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $NotesURL
     */
    protected $NotesURL = null;

    /**
     * @var string $OutputsPageUrl
     */
    protected $OutputsPageUrl = null;

    /**
     * @var ArrayOfguid $RemoteRecorderIds
     */
    protected $RemoteRecorderIds = null;

    /**
     * @var string $SharePageUrl
     */
    protected $SharePageUrl = null;

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;

    /**
     * @var SessionState|string $State
     */
    protected $State = null;

    /**
     * @var string $StatusMessage
     */
    protected $StatusMessage = null;

    /**
     * @var string $ThumbUrl
     */
    protected $ThumbUrl = null;

    /**
     * @var string $ViewerUrl
     */
    protected $ViewerUrl = null;

    
    public function __construct()
    {
    
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
     * @return \Panopto\Session\Session
     */
    public function setCreatorId($CreatorId)
    {
      $this->CreatorId = $CreatorId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Panopto\Session\Session
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return float
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param float $Duration
     * @return \Panopto\Session\Session
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
      return $this;
    }

    /**
     * @return string
     */
    public function getEditorUrl()
    {
      return $this->EditorUrl;
    }

    /**
     * @param string $EditorUrl
     * @return \Panopto\Session\Session
     */
    public function setEditorUrl($EditorUrl)
    {
      $this->EditorUrl = $EditorUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->ExternalId;
    }

    /**
     * @param string $ExternalId
     * @return \Panopto\Session\Session
     */
    public function setExternalId($ExternalId)
    {
      $this->ExternalId = $ExternalId;
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
     * @return \Panopto\Session\Session
     */
    public function setFolderId($FolderId)
    {
      $this->FolderId = $FolderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFolderName()
    {
      return $this->FolderName;
    }

    /**
     * @param string $FolderName
     * @return \Panopto\Session\Session
     */
    public function setFolderName($FolderName)
    {
      $this->FolderName = $FolderName;
      return $this;
    }

    /**
     * @return string 
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param string $Id
     * @return \Panopto\Session\Session
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getIosVideoUrl()
    {
      return $this->IosVideoUrl;
    }

    /**
     * @param string $IosVideoUrl
     * @return \Panopto\Session\Session
     */
    public function setIosVideoUrl($IosVideoUrl)
    {
      $this->IosVideoUrl = $IosVideoUrl;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBroadcast()
    {
      return $this->IsBroadcast;
    }

    /**
     * @param boolean $IsBroadcast
     * @return \Panopto\Session\Session
     */
    public function setIsBroadcast($IsBroadcast)
    {
      $this->IsBroadcast = $IsBroadcast;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDownloadable()
    {
      return $this->IsDownloadable;
    }

    /**
     * @param boolean $IsDownloadable
     * @return \Panopto\Session\Session
     */
    public function setIsDownloadable($IsDownloadable)
    {
      $this->IsDownloadable = $IsDownloadable;
      return $this;
    }

    /**
     * @return string
     */
    public function getMP3Url()
    {
      return $this->MP3Url;
    }

    /**
     * @param string $MP3Url
     * @return \Panopto\Session\Session
     */
    public function setMP3Url($MP3Url)
    {
      $this->MP3Url = $MP3Url;
      return $this;
    }

    /**
     * @return string
     */
    public function getMP4Url()
    {
      return $this->MP4Url;
    }

    /**
     * @param string $MP4Url
     * @return \Panopto\Session\Session
     */
    public function setMP4Url($MP4Url)
    {
      $this->MP4Url = $MP4Url;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Panopto\Session\Session
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotesURL()
    {
      return $this->NotesURL;
    }

    /**
     * @param string $NotesURL
     * @return \Panopto\Session\Session
     */
    public function setNotesURL($NotesURL)
    {
      $this->NotesURL = $NotesURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutputsPageUrl()
    {
      return $this->OutputsPageUrl;
    }

    /**
     * @param string $OutputsPageUrl
     * @return \Panopto\Session\Session
     */
    public function setOutputsPageUrl($OutputsPageUrl)
    {
      $this->OutputsPageUrl = $OutputsPageUrl;
      return $this;
    }

    /**
     * @return ArrayOfguid
     */
    public function getRemoteRecorderIds()
    {
      return $this->RemoteRecorderIds;
    }

    /**
     * @param ArrayOfguid $RemoteRecorderIds
     * @return \Panopto\Session\Session
     */
    public function setRemoteRecorderIds($RemoteRecorderIds)
    {
      $this->RemoteRecorderIds = $RemoteRecorderIds;
      return $this;
    }

    /**
     * @return string
     */
    public function getSharePageUrl()
    {
      return $this->SharePageUrl;
    }

    /**
     * @param string $SharePageUrl
     * @return \Panopto\Session\Session
     */
    public function setSharePageUrl($SharePageUrl)
    {
      $this->SharePageUrl = $SharePageUrl;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
      if ($this->StartTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartTime
     * @return \Panopto\Session\Session
     */
    public function setStartTime(\DateTime $StartTime = null)
    {
      if ($StartTime == null) {
       $this->StartTime = null;
      } else {
        $this->StartTime = $StartTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return SessionState|string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param SessionState|string $State
     * @return \Panopto\Session\Session
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
      return $this->StatusMessage;
    }

    /**
     * @param string $StatusMessage
     * @return \Panopto\Session\Session
     */
    public function setStatusMessage($StatusMessage)
    {
      $this->StatusMessage = $StatusMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getThumbUrl()
    {
      return $this->ThumbUrl;
    }

    /**
     * @param string $ThumbUrl
     * @return \Panopto\Session\Session
     */
    public function setThumbUrl($ThumbUrl)
    {
      $this->ThumbUrl = $ThumbUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getViewerUrl()
    {
      return $this->ViewerUrl;
    }

    /**
     * @param string $ViewerUrl
     * @return \Panopto\Session\Session
     */
    public function setViewerUrl($ViewerUrl)
    {
      $this->ViewerUrl = $ViewerUrl;
      return $this;
    }

}
