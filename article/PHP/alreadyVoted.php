<?php

$hasVoted;
$dbname = $dbRate;
$currentUser = $_SESSION['username'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM ratings WHERE week = '$weekNumber' AND user = '$currentUser'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  $hasVoted = true;
    }
 else {
    $hasVoted = false;
}


mysqli_close($conn);


 ?>
