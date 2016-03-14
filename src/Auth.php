<?php

namespace Panopto\Session;

class Auth
{
	public static function generateAuthCode($userKey, $serverName, $appKey)
	{
		$payload = $userKey . "@" . $serverName;
		$signedpayload = $payload . "|" . $appKey;
		$authcode = strtoupper(sha1($signedpayload));
		return $authcode;
	}
}
