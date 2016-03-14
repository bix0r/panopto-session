<?php

namespace Panopto\Session;

class SessionManagement extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AuthenticationInfo' => 'Panopto\\Session\\AuthenticationInfo',
      'ListSessionsRequest' => 'Panopto\\Session\\ListSessionsRequest',
      'Pagination' => 'Panopto\\Session\\Pagination',
      'ArrayOfSessionState' => 'Panopto\\Session\\ArrayOfSessionState',
      'ListFoldersRequest' => 'Panopto\\Session\\ListFoldersRequest',
      'RecorderDownloadUrlResponse' => 'Panopto\\Session\\RecorderDownloadUrlResponse',
      'Note' => 'Panopto\\Session\\Note',
      'ListNotesResponse' => 'Panopto\\Session\\ListNotesResponse',
      'ArrayOfNote' => 'Panopto\\Session\\ArrayOfNote',
      'ArrayOfguid' => 'Panopto\\Session\\ArrayOfguid',
      'ArrayOfstring' => 'Panopto\\Session\\ArrayOfstring',
      'Session' => 'Panopto\\Session\\Session',
      'ArrayOfSession' => 'Panopto\\Session\\ArrayOfSession',
      'ArrayOfFolderWithExternalContext' => 'Panopto\\Session\\ArrayOfFolderWithExternalContext',
      'FolderWithExternalContext' => 'Panopto\\Session\\FolderWithExternalContext',
      'DateTimeOffset' => 'Panopto\\Session\\DateTimeOffset',
      'Folder' => 'Panopto\\Session\\Folder',
      'FolderBase' => 'Panopto\\Session\\FolderBase',
      'ArrayOfFolder' => 'Panopto\\Session\\ArrayOfFolder',
      'ListSessionsResponse' => 'Panopto\\Session\\ListSessionsResponse',
      'ListFoldersResponse' => 'Panopto\\Session\\ListFoldersResponse',
      'ListFoldersResponseWithExternalContext' => 'Panopto\\Session\\ListFoldersResponseWithExternalContext',
      'FoldersWithAvailabilitySettings' => 'Panopto\\Session\\FoldersWithAvailabilitySettings',
      'ArrayOfFolderAvailabilitySettings' => 'Panopto\\Session\\ArrayOfFolderAvailabilitySettings',
      'FolderAvailabilitySettings' => 'Panopto\\Session\\FolderAvailabilitySettings',
      'SessionsWithAvailabilitySettings' => 'Panopto\\Session\\SessionsWithAvailabilitySettings',
      'ArrayOfSessionAvailabilitySettings' => 'Panopto\\Session\\ArrayOfSessionAvailabilitySettings',
      'SessionAvailabilitySettings' => 'Panopto\\Session\\SessionAvailabilitySettings',
      'AddFolder' => 'Panopto\\Session\\AddFolder',
      'AddFolderResponse' => 'Panopto\\Session\\AddFolderResponse',
      'AddSession' => 'Panopto\\Session\\AddSession',
      'AddSessionResponse' => 'Panopto\\Session\\AddSessionResponse',
      'GetFoldersById' => 'Panopto\\Session\\GetFoldersById',
      'GetFoldersByIdResponse' => 'Panopto\\Session\\GetFoldersByIdResponse',
      'GetFoldersWithExternalContextById' => 'Panopto\\Session\\GetFoldersWithExternalContextById',
      'GetFoldersWithExternalContextByIdResponse' => 'Panopto\\Session\\GetFoldersWithExternalContextByIdResponse',
      'GetFoldersByExternalId' => 'Panopto\\Session\\GetFoldersByExternalId',
      'GetFoldersByExternalIdResponse' => 'Panopto\\Session\\GetFoldersByExternalIdResponse',
      'GetFoldersWithExternalContextByExternalId' => 'Panopto\\Session\\GetFoldersWithExternalContextByExternalId',
      'GetFoldersWithExternalContextByExternalIdResponse' => 'Panopto\\Session\\GetFoldersWithExternalContextByExternalIdResponse',
      'GetAllFoldersByExternalId' => 'Panopto\\Session\\GetAllFoldersByExternalId',
      'GetAllFoldersByExternalIdResponse' => 'Panopto\\Session\\GetAllFoldersByExternalIdResponse',
      'GetAllFoldersWithExternalContextByExternalId' => 'Panopto\\Session\\GetAllFoldersWithExternalContextByExternalId',
      'GetAllFoldersWithExternalContextByExternalIdResponse' => 'Panopto\\Session\\GetAllFoldersWithExternalContextByExternalIdResponse',
      'GetSessionsById' => 'Panopto\\Session\\GetSessionsById',
      'GetSessionsByIdResponse' => 'Panopto\\Session\\GetSessionsByIdResponse',
      'GetSessionsByExternalId' => 'Panopto\\Session\\GetSessionsByExternalId',
      'GetSessionsByExternalIdResponse' => 'Panopto\\Session\\GetSessionsByExternalIdResponse',
      'GetSessionsList' => 'Panopto\\Session\\GetSessionsList',
      'GetSessionsListResponse' => 'Panopto\\Session\\GetSessionsListResponse',
      'GetFoldersList' => 'Panopto\\Session\\GetFoldersList',
      'GetFoldersListResponse' => 'Panopto\\Session\\GetFoldersListResponse',
      'GetFoldersWithExternalContextList' => 'Panopto\\Session\\GetFoldersWithExternalContextList',
      'GetFoldersWithExternalContextListResponse' => 'Panopto\\Session\\GetFoldersWithExternalContextListResponse',
      'GetCreatorFoldersList' => 'Panopto\\Session\\GetCreatorFoldersList',
      'GetCreatorFoldersListResponse' => 'Panopto\\Session\\GetCreatorFoldersListResponse',
      'GetCreatorFoldersWithExternalContextList' => 'Panopto\\Session\\GetCreatorFoldersWithExternalContextList',
      'GetCreatorFoldersWithExternalContextListResponse' => 'Panopto\\Session\\GetCreatorFoldersWithExternalContextListResponse',
      'UpdateSessionName' => 'Panopto\\Session\\UpdateSessionName',
      'UpdateSessionNameResponse' => 'Panopto\\Session\\UpdateSessionNameResponse',
      'UpdateSessionDescription' => 'Panopto\\Session\\UpdateSessionDescription',
      'UpdateSessionDescriptionResponse' => 'Panopto\\Session\\UpdateSessionDescriptionResponse',
      'UpdateSessionIsBroadcast' => 'Panopto\\Session\\UpdateSessionIsBroadcast',
      'UpdateSessionIsBroadcastResponse' => 'Panopto\\Session\\UpdateSessionIsBroadcastResponse',
      'UpdateSessionOwner' => 'Panopto\\Session\\UpdateSessionOwner',
      'UpdateSessionOwnerResponse' => 'Panopto\\Session\\UpdateSessionOwnerResponse',
      'MoveSessions' => 'Panopto\\Session\\MoveSessions',
      'MoveSessionsResponse' => 'Panopto\\Session\\MoveSessionsResponse',
      'UpdateSessionExternalId' => 'Panopto\\Session\\UpdateSessionExternalId',
      'UpdateSessionExternalIdResponse' => 'Panopto\\Session\\UpdateSessionExternalIdResponse',
      'UpdateFolderName' => 'Panopto\\Session\\UpdateFolderName',
      'UpdateFolderNameResponse' => 'Panopto\\Session\\UpdateFolderNameResponse',
      'UpdateFolderDescription' => 'Panopto\\Session\\UpdateFolderDescription',
      'UpdateFolderDescriptionResponse' => 'Panopto\\Session\\UpdateFolderDescriptionResponse',
      'UpdateFolderEnablePodcast' => 'Panopto\\Session\\UpdateFolderEnablePodcast',
      'UpdateFolderEnablePodcastResponse' => 'Panopto\\Session\\UpdateFolderEnablePodcastResponse',
      'UpdateFolderAllowPublicNotes' => 'Panopto\\Session\\UpdateFolderAllowPublicNotes',
      'UpdateFolderAllowPublicNotesResponse' => 'Panopto\\Session\\UpdateFolderAllowPublicNotesResponse',
      'UpdateFolderAllowSessionDownload' => 'Panopto\\Session\\UpdateFolderAllowSessionDownload',
      'UpdateFolderAllowSessionDownloadResponse' => 'Panopto\\Session\\UpdateFolderAllowSessionDownloadResponse',
      'UpdateFolderParent' => 'Panopto\\Session\\UpdateFolderParent',
      'UpdateFolderParentResponse' => 'Panopto\\Session\\UpdateFolderParentResponse',
      'UpdateFolderExternalId' => 'Panopto\\Session\\UpdateFolderExternalId',
      'UpdateFolderExternalIdResponse' => 'Panopto\\Session\\UpdateFolderExternalIdResponse',
      'UpdateFolderExternalIdWithProvider' => 'Panopto\\Session\\UpdateFolderExternalIdWithProvider',
      'UpdateFolderExternalIdWithProviderResponse' => 'Panopto\\Session\\UpdateFolderExternalIdWithProviderResponse',
      'DeleteSessions' => 'Panopto\\Session\\DeleteSessions',
      'DeleteSessionsResponse' => 'Panopto\\Session\\DeleteSessionsResponse',
      'DeleteFolders' => 'Panopto\\Session\\DeleteFolders',
      'DeleteFoldersResponse' => 'Panopto\\Session\\DeleteFoldersResponse',
      'ProvisionExternalCourse' => 'Panopto\\Session\\ProvisionExternalCourse',
      'ProvisionExternalCourseResponse' => 'Panopto\\Session\\ProvisionExternalCourseResponse',
      'SetExternalCourseAccess' => 'Panopto\\Session\\SetExternalCourseAccess',
      'SetExternalCourseAccessResponse' => 'Panopto\\Session\\SetExternalCourseAccessResponse',
      'GetRecorderDownloadUrls' => 'Panopto\\Session\\GetRecorderDownloadUrls',
      'GetRecorderDownloadUrlsResponse' => 'Panopto\\Session\\GetRecorderDownloadUrlsResponse',
      'CreateNoteByRelativeTime' => 'Panopto\\Session\\CreateNoteByRelativeTime',
      'CreateNoteByRelativeTimeResponse' => 'Panopto\\Session\\CreateNoteByRelativeTimeResponse',
      'CreateNoteByAbsoluteTime' => 'Panopto\\Session\\CreateNoteByAbsoluteTime',
      'CreateNoteByAbsoluteTimeResponse' => 'Panopto\\Session\\CreateNoteByAbsoluteTimeResponse',
      'EditNote' => 'Panopto\\Session\\EditNote',
      'EditNoteResponse' => 'Panopto\\Session\\EditNoteResponse',
      'DeleteNote' => 'Panopto\\Session\\DeleteNote',
      'DeleteNoteResponse' => 'Panopto\\Session\\DeleteNoteResponse',
      'GetNote' => 'Panopto\\Session\\GetNote',
      'GetNoteResponse' => 'Panopto\\Session\\GetNoteResponse',
      'ListNotes' => 'Panopto\\Session\\ListNotes',
      'AreUsersNotesPublic' => 'Panopto\\Session\\AreUsersNotesPublic',
      'AreUsersNotesPublicResponse' => 'Panopto\\Session\\AreUsersNotesPublicResponse',
      'SetNotesPublic' => 'Panopto\\Session\\SetNotesPublic',
      'SetNotesPublicResponse' => 'Panopto\\Session\\SetNotesPublicResponse',
      'IsDropbox' => 'Panopto\\Session\\IsDropbox',
      'IsDropboxResponse' => 'Panopto\\Session\\IsDropboxResponse',
      'CreateCaptionByRelativeTime' => 'Panopto\\Session\\CreateCaptionByRelativeTime',
      'CreateCaptionByRelativeTimeResponse' => 'Panopto\\Session\\CreateCaptionByRelativeTimeResponse',
      'CreateCaptionByAbsoluteTime' => 'Panopto\\Session\\CreateCaptionByAbsoluteTime',
      'CreateCaptionByAbsoluteTimeResponse' => 'Panopto\\Session\\CreateCaptionByAbsoluteTimeResponse',
      'UploadTranscript' => 'Panopto\\Session\\UploadTranscript',
      'UploadTranscriptResponse' => 'Panopto\\Session\\UploadTranscriptResponse',
      'GetFoldersAvailabilitySettings' => 'Panopto\\Session\\GetFoldersAvailabilitySettings',
      'GetFoldersAvailabilitySettingsResponse' => 'Panopto\\Session\\GetFoldersAvailabilitySettingsResponse',
      'GetSessionsAvailabilitySettings' => 'Panopto\\Session\\GetSessionsAvailabilitySettings',
      'GetSessionsAvailabilitySettingsResponse' => 'Panopto\\Session\\GetSessionsAvailabilitySettingsResponse',
      'UpdateFoldersAvailabilityStartSettings' => 'Panopto\\Session\\UpdateFoldersAvailabilityStartSettings',
      'UpdateFoldersAvailabilityStartSettingsResponse' => 'Panopto\\Session\\UpdateFoldersAvailabilityStartSettingsResponse',
      'UpdateFoldersAvailabilityEndSettings' => 'Panopto\\Session\\UpdateFoldersAvailabilityEndSettings',
      'UpdateFoldersAvailabilityEndSettingsResponse' => 'Panopto\\Session\\UpdateFoldersAvailabilityEndSettingsResponse',
      'UpdateSessionsAvailabilityStartSettings' => 'Panopto\\Session\\UpdateSessionsAvailabilityStartSettings',
      'UpdateSessionsAvailabilityStartSettingsResponse' => 'Panopto\\Session\\UpdateSessionsAvailabilityStartSettingsResponse',
      'UpdateSessionsAvailabilityEndSettings' => 'Panopto\\Session\\UpdateSessionsAvailabilityEndSettings',
      'UpdateSessionsAvailabilityEndSettingsResponse' => 'Panopto\\Session\\UpdateSessionsAvailabilityEndSettingsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://SERVER_NAME/Panopto/PublicAPI/4.6/SessionManagement.svc?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param AddFolder $parameters
     * @return AddFolderResponse
     */
    public function AddFolder(AddFolder $parameters)
    {
      return $this->__soapCall('AddFolder', array($parameters));
    }

    /**
     * @param AddSession $parameters
     * @return AddSessionResponse
     */
    public function AddSession(AddSession $parameters)
    {
      return $this->__soapCall('AddSession', array($parameters));
    }

    /**
     * @param GetFoldersById $parameters
     * @return GetFoldersByIdResponse
     */
    public function GetFoldersById(GetFoldersById $parameters)
    {
      return $this->__soapCall('GetFoldersById', array($parameters));
    }

    /**
     * @param GetFoldersWithExternalContextById $parameters
     * @return GetFoldersWithExternalContextByIdResponse
     */
    public function GetFoldersWithExternalContextById(GetFoldersWithExternalContextById $parameters)
    {
      return $this->__soapCall('GetFoldersWithExternalContextById', array($parameters));
    }

    /**
     * @param GetFoldersByExternalId $parameters
     * @return GetFoldersByExternalIdResponse
     */
    public function GetFoldersByExternalId(GetFoldersByExternalId $parameters)
    {
      return $this->__soapCall('GetFoldersByExternalId', array($parameters));
    }

    /**
     * @param GetFoldersWithExternalContextByExternalId $parameters
     * @return GetFoldersWithExternalContextByExternalIdResponse
     */
    public function GetFoldersWithExternalContextByExternalId(GetFoldersWithExternalContextByExternalId $parameters)
    {
      return $this->__soapCall('GetFoldersWithExternalContextByExternalId', array($parameters));
    }

    /**
     * @param GetAllFoldersByExternalId $parameters
     * @return GetAllFoldersByExternalIdResponse
     */
    public function GetAllFoldersByExternalId(GetAllFoldersByExternalId $parameters)
    {
      return $this->__soapCall('GetAllFoldersByExternalId', array($parameters));
    }

    /**
     * @param GetAllFoldersWithExternalContextByExternalId $parameters
     * @return GetAllFoldersWithExternalContextByExternalIdResponse
     */
    public function GetAllFoldersWithExternalContextByExternalId(GetAllFoldersWithExternalContextByExternalId $parameters)
    {
      return $this->__soapCall('GetAllFoldersWithExternalContextByExternalId', array($parameters));
    }

    /**
     * @param GetSessionsById $parameters
     * @return GetSessionsByIdResponse
     */
    public function GetSessionsById(GetSessionsById $parameters)
    {
      return $this->__soapCall('GetSessionsById', array($parameters));
    }

    /**
     * @param GetSessionsByExternalId $parameters
     * @return GetSessionsByExternalIdResponse
     */
    public function GetSessionsByExternalId(GetSessionsByExternalId $parameters)
    {
      return $this->__soapCall('GetSessionsByExternalId', array($parameters));
    }

    /**
     * @param GetSessionsList $parameters
     * @return GetSessionsListResponse
     */
    public function GetSessionsList(GetSessionsList $parameters)
    {
      return $this->__soapCall('GetSessionsList', array($parameters));
    }

    /**
     * @param GetFoldersList $parameters
     * @return GetFoldersListResponse
     */
    public function GetFoldersList(GetFoldersList $parameters)
    {
      return $this->__soapCall('GetFoldersList', array($parameters));
    }

    /**
     * @param GetFoldersWithExternalContextList $parameters
     * @return GetFoldersWithExternalContextListResponse
     */
    public function GetFoldersWithExternalContextList(GetFoldersWithExternalContextList $parameters)
    {
      return $this->__soapCall('GetFoldersWithExternalContextList', array($parameters));
    }

    /**
     * @param GetCreatorFoldersList $parameters
     * @return GetCreatorFoldersListResponse
     */
    public function GetCreatorFoldersList(GetCreatorFoldersList $parameters)
    {
      return $this->__soapCall('GetCreatorFoldersList', array($parameters));
    }

    /**
     * @param GetCreatorFoldersWithExternalContextList $parameters
     * @return GetCreatorFoldersWithExternalContextListResponse
     */
    public function GetCreatorFoldersWithExternalContextList(GetCreatorFoldersWithExternalContextList $parameters)
    {
      return $this->__soapCall('GetCreatorFoldersWithExternalContextList', array($parameters));
    }

    /**
     * @param UpdateSessionName $parameters
     * @return UpdateSessionNameResponse
     */
    public function UpdateSessionName(UpdateSessionName $parameters)
    {
      return $this->__soapCall('UpdateSessionName', array($parameters));
    }

    /**
     * @param UpdateSessionDescription $parameters
     * @return UpdateSessionDescriptionResponse
     */
    public function UpdateSessionDescription(UpdateSessionDescription $parameters)
    {
      return $this->__soapCall('UpdateSessionDescription', array($parameters));
    }

    /**
     * @param UpdateSessionIsBroadcast $parameters
     * @return UpdateSessionIsBroadcastResponse
     */
    public function UpdateSessionIsBroadcast(UpdateSessionIsBroadcast $parameters)
    {
      return $this->__soapCall('UpdateSessionIsBroadcast', array($parameters));
    }

    /**
     * @param UpdateSessionOwner $parameters
     * @return UpdateSessionOwnerResponse
     */
    public function UpdateSessionOwner(UpdateSessionOwner $parameters)
    {
      return $this->__soapCall('UpdateSessionOwner', array($parameters));
    }

    /**
     * @param MoveSessions $parameters
     * @return MoveSessionsResponse
     */
    public function MoveSessions(MoveSessions $parameters)
    {
      return $this->__soapCall('MoveSessions', array($parameters));
    }

    /**
     * @param UpdateSessionExternalId $parameters
     * @return UpdateSessionExternalIdResponse
     */
    public function UpdateSessionExternalId(UpdateSessionExternalId $parameters)
    {
      return $this->__soapCall('UpdateSessionExternalId', array($parameters));
    }

    /**
     * @param UpdateFolderName $parameters
     * @return UpdateFolderNameResponse
     */
    public function UpdateFolderName(UpdateFolderName $parameters)
    {
      return $this->__soapCall('UpdateFolderName', array($parameters));
    }

    /**
     * @param UpdateFolderDescription $parameters
     * @return UpdateFolderDescriptionResponse
     */
    public function UpdateFolderDescription(UpdateFolderDescription $parameters)
    {
      return $this->__soapCall('UpdateFolderDescription', array($parameters));
    }

    /**
     * @param UpdateFolderEnablePodcast $parameters
     * @return UpdateFolderEnablePodcastResponse
     */
    public function UpdateFolderEnablePodcast(UpdateFolderEnablePodcast $parameters)
    {
      return $this->__soapCall('UpdateFolderEnablePodcast', array($parameters));
    }

    /**
     * @param UpdateFolderAllowPublicNotes $parameters
     * @return UpdateFolderAllowPublicNotesResponse
     */
    public function UpdateFolderAllowPublicNotes(UpdateFolderAllowPublicNotes $parameters)
    {
      return $this->__soapCall('UpdateFolderAllowPublicNotes', array($parameters));
    }

    /**
     * @param UpdateFolderAllowSessionDownload $parameters
     * @return UpdateFolderAllowSessionDownloadResponse
     */
    public function UpdateFolderAllowSessionDownload(UpdateFolderAllowSessionDownload $parameters)
    {
      return $this->__soapCall('UpdateFolderAllowSessionDownload', array($parameters));
    }

    /**
     * @param UpdateFolderParent $parameters
     * @return UpdateFolderParentResponse
     */
    public function UpdateFolderParent(UpdateFolderParent $parameters)
    {
      return $this->__soapCall('UpdateFolderParent', array($parameters));
    }

    /**
     * @param UpdateFolderExternalId $parameters
     * @return UpdateFolderExternalIdResponse
     */
    public function UpdateFolderExternalId(UpdateFolderExternalId $parameters)
    {
      return $this->__soapCall('UpdateFolderExternalId', array($parameters));
    }

    /**
     * @param UpdateFolderExternalIdWithProvider $parameters
     * @return UpdateFolderExternalIdWithProviderResponse
     */
    public function UpdateFolderExternalIdWithProvider(UpdateFolderExternalIdWithProvider $parameters)
    {
      return $this->__soapCall('UpdateFolderExternalIdWithProvider', array($parameters));
    }

    /**
     * @param DeleteSessions $parameters
     * @return DeleteSessionsResponse
     */
    public function DeleteSessions(DeleteSessions $parameters)
    {
      return $this->__soapCall('DeleteSessions', array($parameters));
    }

    /**
     * @param DeleteFolders $parameters
     * @return DeleteFoldersResponse
     */
    public function DeleteFolders(DeleteFolders $parameters)
    {
      return $this->__soapCall('DeleteFolders', array($parameters));
    }

    /**
     * @param ProvisionExternalCourse $parameters
     * @return ProvisionExternalCourseResponse
     */
    public function ProvisionExternalCourse(ProvisionExternalCourse $parameters)
    {
      return $this->__soapCall('ProvisionExternalCourse', array($parameters));
    }

    /**
     * @param SetExternalCourseAccess $parameters
     * @return SetExternalCourseAccessResponse
     */
    public function SetExternalCourseAccess(SetExternalCourseAccess $parameters)
    {
      return $this->__soapCall('SetExternalCourseAccess', array($parameters));
    }

    /**
     * @param GetRecorderDownloadUrls $parameters
     * @return GetRecorderDownloadUrlsResponse
     */
    public function GetRecorderDownloadUrls(GetRecorderDownloadUrls $parameters)
    {
      return $this->__soapCall('GetRecorderDownloadUrls', array($parameters));
    }

    /**
     * @param CreateNoteByRelativeTime $parameters
     * @return CreateNoteByRelativeTimeResponse
     */
    public function CreateNoteByRelativeTime(CreateNoteByRelativeTime $parameters)
    {
      return $this->__soapCall('CreateNoteByRelativeTime', array($parameters));
    }

    /**
     * @param CreateNoteByAbsoluteTime $parameters
     * @return CreateNoteByAbsoluteTimeResponse
     */
    public function CreateNoteByAbsoluteTime(CreateNoteByAbsoluteTime $parameters)
    {
      return $this->__soapCall('CreateNoteByAbsoluteTime', array($parameters));
    }

    /**
     * @param EditNote $parameters
     * @return EditNoteResponse
     */
    public function EditNote(EditNote $parameters)
    {
      return $this->__soapCall('EditNote', array($parameters));
    }

    /**
     * @param DeleteNote $parameters
     * @return DeleteNoteResponse
     */
    public function DeleteNote(DeleteNote $parameters)
    {
      return $this->__soapCall('DeleteNote', array($parameters));
    }

    /**
     * @param GetNote $parameters
     * @return GetNoteResponse
     */
    public function GetNote(GetNote $parameters)
    {
      return $this->__soapCall('GetNote', array($parameters));
    }

    /**
     * @param ListNotes $parameters
     * @return ListNotesResponse
     */
    public function ListNotes(ListNotes $parameters)
    {
      return $this->__soapCall('ListNotes', array($parameters));
    }

    /**
     * @param AreUsersNotesPublic $parameters
     * @return AreUsersNotesPublicResponse
     */
    public function AreUsersNotesPublic(AreUsersNotesPublic $parameters)
    {
      return $this->__soapCall('AreUsersNotesPublic', array($parameters));
    }

    /**
     * @param SetNotesPublic $parameters
     * @return SetNotesPublicResponse
     */
    public function SetNotesPublic(SetNotesPublic $parameters)
    {
      return $this->__soapCall('SetNotesPublic', array($parameters));
    }

    /**
     * @param IsDropbox $parameters
     * @return IsDropboxResponse
     */
    public function IsDropbox(IsDropbox $parameters)
    {
      return $this->__soapCall('IsDropbox', array($parameters));
    }

    /**
     * @param CreateCaptionByRelativeTime $parameters
     * @return CreateCaptionByRelativeTimeResponse
     */
    public function CreateCaptionByRelativeTime(CreateCaptionByRelativeTime $parameters)
    {
      return $this->__soapCall('CreateCaptionByRelativeTime', array($parameters));
    }

    /**
     * @param CreateCaptionByAbsoluteTime $parameters
     * @return CreateCaptionByAbsoluteTimeResponse
     */
    public function CreateCaptionByAbsoluteTime(CreateCaptionByAbsoluteTime $parameters)
    {
      return $this->__soapCall('CreateCaptionByAbsoluteTime', array($parameters));
    }

    /**
     * @param UploadTranscript $parameters
     * @return UploadTranscriptResponse
     */
    public function UploadTranscript(UploadTranscript $parameters)
    {
      return $this->__soapCall('UploadTranscript', array($parameters));
    }

    /**
     * @param GetFoldersAvailabilitySettings $parameters
     * @return GetFoldersAvailabilitySettingsResponse
     */
    public function GetFoldersAvailabilitySettings(GetFoldersAvailabilitySettings $parameters)
    {
      return $this->__soapCall('GetFoldersAvailabilitySettings', array($parameters));
    }

    /**
     * @param GetSessionsAvailabilitySettings $parameters
     * @return GetSessionsAvailabilitySettingsResponse
     */
    public function GetSessionsAvailabilitySettings(GetSessionsAvailabilitySettings $parameters)
    {
      return $this->__soapCall('GetSessionsAvailabilitySettings', array($parameters));
    }

    /**
     * @param UpdateFoldersAvailabilityStartSettings $parameters
     * @return UpdateFoldersAvailabilityStartSettingsResponse
     */
    public function UpdateFoldersAvailabilityStartSettings(UpdateFoldersAvailabilityStartSettings $parameters)
    {
      return $this->__soapCall('UpdateFoldersAvailabilityStartSettings', array($parameters));
    }

    /**
     * @param UpdateFoldersAvailabilityEndSettings $parameters
     * @return UpdateFoldersAvailabilityEndSettingsResponse
     */
    public function UpdateFoldersAvailabilityEndSettings(UpdateFoldersAvailabilityEndSettings $parameters)
    {
      return $this->__soapCall('UpdateFoldersAvailabilityEndSettings', array($parameters));
    }

    /**
     * @param UpdateSessionsAvailabilityStartSettings $parameters
     * @return UpdateSessionsAvailabilityStartSettingsResponse
     */
    public function UpdateSessionsAvailabilityStartSettings(UpdateSessionsAvailabilityStartSettings $parameters)
    {
      return $this->__soapCall('UpdateSessionsAvailabilityStartSettings', array($parameters));
    }

    /**
     * @param UpdateSessionsAvailabilityEndSettings $parameters
     * @return UpdateSessionsAvailabilityEndSettingsResponse
     */
    public function UpdateSessionsAvailabilityEndSettings(UpdateSessionsAvailabilityEndSettings $parameters)
    {
      return $this->__soapCall('UpdateSessionsAvailabilityEndSettings', array($parameters));
    }

}
