<?php

$dbPassword = "PHPForm";
$dbUserName = "PHPForm";
$dbServer = "localhost";
$dbName = "phpform";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

//print_r($connection); used to check if connection worked in the first place

if($connection->connect_errno) 
{
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

// $connection->close();
