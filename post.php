<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "heros";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //create
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //real_escape_string() creats legal SQL string 
  $name = $conn->real_escape_string($_POST['name']);
  $about_me = $conn->real_escape_string($_POST['about_me']);
  $biography = $conn->real_escape_string($_POST['biography']);
  $sql = "INSERT INTO heroes (name, about_me, biography) VALUES ('$name', '$about_me', '$biography')";
}

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// delete
// if ( name == "delete") {

//}

$conn->close();

//west virgina 
if ($sql != null) {
  header('Location: index.php');
  exit;
}

?>


// "; dropalltables