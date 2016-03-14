<?php

namespace Panopto\Session\Tests;

use Panopto\Session\Auth;
use Panopto\Session\AuthenticationInfo;
use Panopto\Session\GetFoldersList;
use Panopto\Session\GetSessionsList;
use Panopto\Session\ListFoldersRequest;
use Panopto\Session\ListSessionsRequest;
use Panopto\Session\SessionManagement;
use Panopto\Session\SessionSortField;

class MainTest extends \PHPUnit_Framework_TestCase
{
	private $server = 'testserver';
	private $user = '';
	private $password = '';
	private $appKey = '00000000-0000-0000-0000-000000000000';

	public static function setUpBeforeClass()
	{
		parent::setUpBeforeClass();
		require_once __DIR__ . '/../../../lib/Panopto/src/autoload.php';
	}

	public function testFolderList()
	{
		$client = $this->getClient();
		$res = $client->GetFoldersList(
			new GetFoldersList(
				$this->getAuth(),
				(new ListFoldersRequest())->setPublicOnly(false),
				''
			)
		);
		$results = $res->getGetFoldersListResult()->getResults();
		foreach ($results as $folder) {
			echo implode(' : ', [
					$folder->getName(),
					$folder->getId(),
					$folder->getExternalId(),
					$folder->getIsPublic() ? "true" : "false",
				]) . "\n";
		}
	}

	public function testSessionList()
	{
		$client = $this->getClient();
		$res = $client->GetSessionsList(new GetSessionsList(
			$this->getAuth(),
			(new ListSessionsRequest())
				->setStartDate((new \DateTime())->setDate(2013, 1, 1))
				->setSortBy(SessionSortField::Date)
				->setSortIncreasing(false),
			''
		));
		$sessions = $res->getGetSessionsListResult()->getResults();
		echo "Total of " . count($sessions) . " sessions\n\n";
		foreach ($sessions as $session) {
			echo implode(' : ', [
					$session->getId(),
					$session->getName(),
					$session->getDuration(),
					$session->getFolderName(),
					$session->getMP4Url(),
				]) . "\n";
		}
	}

	private function getAuth()
	{
		$ret = new AuthenticationInfo();
		$ret->setAuthCode($this->getAuthCode())
			->setPassword($this->password)
			->setUserKey($this->user);
		return $ret;
	}

	private function getAuthCode()
	{
		return Auth::generateAuthCode($this->user, $this->server, $this->appKey);
	}

	private function getClient()
	{
		return new SessionManagement(array(), "https://{$this->server}/Panopto/PublicAPI/4.6/SessionManagement.svc?wsdl");
	}
}
