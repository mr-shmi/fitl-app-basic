<?php 
$title = "A Question #2";
$question = "How do I make more friends";
$description = "My mum says i'm cool, but no one from school thinks so";
$code = "&lt;ul&gt;
    item 1
    item 2
    item 3
&lt;/ul&gt;";
$date = "June 16, 2015";
?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title ?></title>

    <body>
        <h1><?php echo $question; ?></h1>
        <p><?php echo $description; ?></p>
        <pre>
            <?php echo $code; ?>  
        </pre>
        <p>Question Date: <?php echo $date ?></p>
    </body>
</head>

</html>