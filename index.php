<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "heros";

$postData = $_POST;//['state']; // if post != then post data 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, about_me, biography FROM heroes"; 
$result = $conn->query($sql);

 $output = "";

if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        
        // $sql = "SELECT id, name, about_me, biography FROM heroes WHERE id = '$_POST";
        

        // var_dump($row);
        // $output .= "<h2 class= text-center > " . $row["name"] . "</h2>" .
        // "<div class= text-center> 
        // id:" . $row["id"] .
        // " - Name: " . $row["name"] .
        // " " . $row["about_me"] .
        // " " . $row["biography"] .
        // "</div>";
        
        //function getHeroByID
        //

        $nameoutput .=
        //"<h2 class= text-center pb-4> "  . $row["name"] ."</h2>";
        //'<a href='index.php/Users/jamesdavies/Sites/heroes_php/img/bestchillman.jpg'</a> '
        //somw how fix pictures

        '<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">' . $row["name"] .'</a>';
  


        $output .=
        "<h2 class= text-center > " . $row["name"] . "</h2>" .
        // "<hr>" .
        // "<p class=lead> id: " . $row["id"] .
        // " - Name: " . $row["name"] .
        " " . $row["about_me"] .
        " " . $row["biography"] .
        "</p>";
        "<hr>";
        "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>





<!doctype html>
<html lang="en">

<head>
    <title>SuperHero</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<div>
<h1>
SUPER FRIENDS   
 </h1>
      </div>
<body class="text-center">

    <form class='col-3 container text-center' action="'post.php', 'heroprofile.php' " method="post">
        Name:<hr> <input class="form-control" type="text" name="name"><br>
        About Me:<hr> <input  class="form-control"type="text" name="about_me"><br>
        Biography:<hr> <textarea class="form-control" type="text" name="biography"></textarea><br>
        <!-- <input type= "hidden" name="create_new_hero"> -->
        <input type="submit">
    </form>
    <div class=jumbotron>
        <?php
        echo $nameoutput;
        ?>
        <hr class=my-4>
    </div>

    <div class=jumbotron>
        <?php
        echo $output;
        ?>
        <hr class=my-4>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include 'footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>