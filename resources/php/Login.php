<?php
//Load in the server connection information
require 'Excluded.php';

//This is the query to be executed.  It grabs the info from the user table which will later be stored in a global SessionHandler
$query = "SELECT UserFirst, UserLast, UserEmail, UserID FROM Users WHERE Username = $_POST['txtUsername'] AND Password = $_POST['txtPassword']"

//Connect to the sql server
$conn = sqlsrv_connect($serverName, $connectionInfo);

//If the connection fails throw an error
if ($conn === false)
{
  print_r( sqlsrv_errors());
}

//Get the results
$stmt = sqlsrv_query($conn, $query);

//Form them in an array
$row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

//Start the PHP Session
session_start();

//Set the session variables to results from the query above
$_SESSION['UserFirst'] = $row["UserFirst"];
$_SESSION['UserLast'] = $row["UserLast"];
$_SESSION['UserEmail'] = $row["UserEmail"];
$_SESSION['UserID'] = $row["UserID"];
?>
