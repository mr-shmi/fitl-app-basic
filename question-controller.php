<?php
$page = $_REQUEST["page"];

// Database login
$servername = "localhost";
$username = "homestead";
$password = "secret";

// connection
$connection = new mysqli($servername, $username, $password);

// check for an error
if ($connection->connect_error) {
    echo "Connection failed: " . $connection->connect_error;
    exit;
}
//echo "Connected";

$connection->select_db("fitl");

// choose page
if ($page == "show") {
    $id = $_REQUEST["id"];
    show($id);

} elseif ($page == "create") {
    create();
}

// Load the show page
function show($id)
{
    global $connection;

    $object = array(
        "title" => "",
        "question" => "",
        "description" => "",
        "code" => "",
        "date" => "",
    );

    $sql = "SELECT * FROM questions WHERE id = " . $id;

    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        $object = $result->fetch_assoc();
        //echo "<pre>";
        //print_r($object);
        //echo "</pre>";
    }
    
    //load view file
    include "question-show-view.php";
}

//load create
function create() {
    include "question-create-view.php";
}

?>