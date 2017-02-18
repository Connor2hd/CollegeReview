<?php
//Connection info required to connect to Azure
require 'Excluded.php';

//Command to join the server name and connection string and connect
$conn = sqlsrv_connect($serverName, $connectionInfo);

//If connection is RIP then display an error code
if ($conn === false) {
  die(print_r(sqlsrv_errors(), true));
}

//SQL query, ? represent a param that will be filled below
$sql = "INSERT INTO Users (Username, UserPassword, UserEmail, UserFirst, UserLast) VALUES (?, ?, ?)";
$params = array($_POST['txtUsername'], $_POST['txtPassword'], $_POST['txtEmail'], $_POST['txtFirst'], $_POST['txtLast']);

//Run the query, if it dies display an error, else display success msg
$stmt = sqlsrv_query($conn, $sql, $params);
if ($stmt === false) {
  die(print_r(sqlsrv_errors(), true));
}
else {
  echo "Record Added";
}

//Free the statement
sqlsrv_free_stmt($stmt);

//Close the connection
sqlsrv_close($conn);
?>
