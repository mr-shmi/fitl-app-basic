<?php
$id = $_REQUEST["id"];

$object = array(
    "title" => "",
    "question" => "",
    "description" => "",
    "code" => "",
    "date" => "",
);

// Database login
$servername = "localhost";
$username = "homestead";
$password = "secret";

// connection
$connection = new mysqli($servername,$username,$password);

// check for an error
if ($connection->connect_error) {
    echo "Connection failed: " . $connection->connect_error;
    exit;
}
//echo "Connected";

$connection->select_db("fitl");
$sql = "SELECT * FROM questions WHERE id = " . $id;

$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $object = $result->fetch_assoc();
    //echo "<pre>";
    //print_r($object);
    //echo "</pre>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo $object["title"]; ?></title>
    <body>
        <h1><?php echo $object["title"]; ?></h1>
        <p><?php echo $object["description"]; ?></p>
        <pre>
           <?php echo $object["code"]; ?> 
        </pre>
        <p>Question Date: <?php echo $object["submitted_at"]; ?></p>
    </body>
</head>
</html>