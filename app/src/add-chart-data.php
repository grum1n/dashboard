
<?php
//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'grinlt_grumin');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}


 
if(!isset($_POST['submit']))   
    $score = $_POST['score'];
	
$result = mysqli_query($mysqli, "INSERT INTO score(score) VALUES('$score')");
   
if ($mysqli->query($result) === TRUE) {
    echo "Prideta";
} else {
    echo 'klaida' . $mysqli->error;
}

header("Location: ../../d-pages.php?page=d-column-charts");

$mysqli->close();

?>