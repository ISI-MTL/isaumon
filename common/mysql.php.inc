<?php
function createConnection()
{
	$host 	= "localhost";
	$dbUser = "root";
	$dbPw 	= "";

	return mysql_connect($host, $dbUser, $dbPw);
}

function readData($dbName, $query)
{
	//create the db connection
	$connection = createConnection();

	// select the table
	mysql_select_db($dbName);

	// send the query
	try
	{
		$results = mysql_query($query);
	}
	catch(Exception $e)
	{
		var_dump($e);
	}

	// format result data for php
	$data = array();

	if( isset($results) )
	{
		// loop on every entries
		while( $line = mysql_fetch_assoc( $results ) )
		{
			// read 1 line
			$entity = array();

			foreach( $line as $key => $value )
			{
				$entity[$key] = $value;
			}

			$data[] = $entity; 
		}
		
		// close connection
		mysql_close($connection);
		
		return $data;
	}
}

function insertUpdateData($dbName, $query)
{
	//create the db connection
	$connection = createConnection();

	// select the table
	mysql_select_db($dbName);


	// send the query
	try
	{
		$results = mysql_query($query);
	}
	catch(Exception $e)
	{
		var_dump($e);
	}

	// close connection
	mysql_close($connection);
	
	return $results;
}

?>