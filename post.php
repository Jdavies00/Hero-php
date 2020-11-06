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
  $name = $conn->real_escape_string($_POST['name']);
  $about_me = $conn->real_escape_string($_POST['about_me']);
  $biography = $conn->real_escape_string($_POST['biography']);
  $sql = "INSERT INTO heroes (name, about_me, biography) VALUES ('$name', '$about_me', '$biography')";
}
//Note: If a column is AUTO_INCREMENT (like the "id" column) or TIMESTAMP with default update of current_timesamp (like the "reg_date" column), it is no need to be specified in the SQL query; MySQL will automatically add the value.
// echo $_POST['userInput'];

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//west virgina 
if ($sql != null) {
  header('Location: index.php');
  exit;
}

?>


// "; dropalltables