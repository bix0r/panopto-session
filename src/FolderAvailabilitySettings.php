<?php

namespace Panopto\Session;

class FolderAvailabilitySettings
{

    /**
     * @var DateTimeOffset $EndSettingDate
     */
    protected $EndSettingDate = null;

    /**
     * @var FolderEndSettingType|string $EndSettingType
     */
    protected $EndSettingType = null;

    /**
     * @var string $FolderId
     */
    protected $FolderId = null;

    /**
     * @var DateTimeOffset $StartSettingDate
     */
    protected $StartSettingDate = null;

    /**
     * @var FolderStartSettingType|string $StartSettingType
     */
    protected $StartSettingType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DateTimeOffset
     */
    public function getEndSettingDate()
    {
      return $this->EndSettingDate;
    }

    /**
     * @param DateTimeOffset $EndSettingDate
     * @return \Panopto\Session\FolderAvailabilitySettings
     */
    public function setEndSettingDate($EndSettingDate)
    {
      $this->EndSettingDate = $EndSettingDate;
      return $this;
    }

    /**
     * @return FolderEndSettingType|string
     */
    public function getEndSettingType()
    {
      return $this->EndSettingType;
    }

    /**
     * @param FolderEndSettingType|string $EndSettingType
     * @return \Panopto\Session\FolderAvailabilitySettings
     */
    public function setEndSettingType($EndSettingType)
    {
      $this->EndSettingType = $EndSettingType;
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
     * @return \Panopto\Session\FolderAvailabilitySettings
     */
    public function setFolderId($FolderId)
    {
      $this->FolderId = $FolderId;
      return $this;
    }

    /**
     * @return DateTimeOffset
     */
    public function getStartSettingDate()
    {
      return $this->StartSettingDate;
    }

    /**
     * @param DateTimeOffset $StartSettingDate
     * @return \Panopto\Session\FolderAvailabilitySettings
     */
    public function setStartSettingDate($StartSettingDate)
    {
      $this->StartSettingDate = $StartSettingDate;
      return $this;
    }

    /**
     * @return FolderStartSettingType|string
     */
    public function getStartSettingType()
    {
      return $this->StartSettingType;
    }

    /**
     * @param FolderStartSettingType|string $StartSettingType
     * @return \Panopto\Session\FolderAvailabilitySettings
     */
    public function setStartSettingType($StartSettingType)
    {
      $this->StartSettingType = $StartSettingType;
      return $this;
    }

}
