<?php
require 'Excluded.php';

//Command to join the server name and connection string and connect
$conn = sqlsrv_connect($serverName, $connectionInfo);

//If connection is RIP then display an error code
if ($conn === false) {
  die(print_r(sqlsrv_errors(), true));
}

//SQL query, ? represent a param that will be filled below
$sql = "INSERT INTO Reviews (CollegeID, Author, UserID, Main, ScoreOne, ScoreTwo, ScoreThree) VALUES (?,?,?,?,?,?,?)";
$params = array($_POST['CollegeID'], $_POST['txtAuthor'],$_POST['UserID'], $_POST['txtReview'], $_POST['ScoreOne'], $_POST['ScoreTwo'], $_POST['ScoreThree']);

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
