<?php

//function list:
//connect to db
//perform select query
//perform update query
//perform a delete query

function makeDbConn($host, $user, $pass, $dbname)
{
	$dbconn = mysqli_connect($host, $user, $pass, $dbname);
	if(mysqli_connect_error($dbconn))
		return false;
	else
		return $dbconn;
}

function doQuery($conn, $querystr)
{
	$res = mysqli_query($conn, $querystr);
	if($res == false)
		return false;
	$numrows = mysqli_num_rows($res);
	if($numrows<=0)
		return false;
	else
		return $res;
}

//php include
//$thispage=$server[php_self] or something, use as action instead of page name in case page name is changed

//blah blah blah

?>