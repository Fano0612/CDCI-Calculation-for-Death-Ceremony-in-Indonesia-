<?php

$Host = "localhost";
$User = "root";
$Password = "";
$Name = "counting";

if(!$Connection = mysqli_connect($Host,$User,$Password,$Name))
{

	die("failed to connect!");
}
