<?php

require 'vendor/autoload.php';

$apiVersion = '4.6';
$serverName = '';
if (!$serverName) {
	die("Error: Must set serverName\n");
}

$generator = new \Wsdl2PhpGenerator\Generator();
$generator->generate(
	new \Wsdl2PhpGenerator\Config(array(
		'inputFile' => "https://$serverName/Panopto/PublicAPI/$apiVersion/SessionManagement.svc?wsdl",
		'outputDir' => __DIR__ . '/output',
		'namespaceName' => 'Panopto\\Session',
	))
);
