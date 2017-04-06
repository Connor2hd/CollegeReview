<?php
$sender_name = stripslashes($_POST["sender_name"]);
$sender_email = stripslashes($_POST["sender_email"]);
$sender_message = stripslashes($_POST["sender_message"]);
$response = $_POST["g-recaptcha-response"];
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
	'secret' => 'YOUR_SECRET',
	'response' => $_POST["g-recaptcha-response"]
	);
    $options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
      )
	);
    $context  = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success=json_decode($verify);
    if ($captcha_success->success==false)
    {

      }
  else if ($captcha_success->success==true)
  {
    require 'Excluded.php';

    //Command to join the server name and connection string and connect
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    //If connection is RIP then display an error code
    if ($conn === false) {
      die(print_r(sqlsrv_errors(), true));
    }

    //SQL query, ? represent a param that will be filled below
    $sql = "INSERT INTO Reviews (CollegeID, Author, Main, ScoreOne, ScoreTwo, ScoreThree) VALUES (?,?,?,?,?,?)";
    $params = array($_POST['CollegeID'], $_POST['txtAuthor'],  $_POST['txtReview'], $_POST['ScoreOne'], $_POST['ScoreTwo'], $_POST['ScoreThree']);

    //Run the query, if it dies display an error, else display success msg
    $stmt = sqlsrv_query($conn, $sql, $params);
    if ($stmt === false) {
      die(print_r(sqlsrv_errors(), true));
    }
    else {
      echo "Record Added";
      header("location:javascript://history.go(-1)");
    }

    //Free the statement
    sqlsrv_free_stmt($stmt);

    //Close the connection
    sqlsrv_close($conn);

	}

  ?>
