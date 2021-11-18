<?php
 require_once 'includes/database.php';

$sql = 'SELECT * FROM albums';
$result = $db-> query($sql);

$db->close();

session_start();
$_SESSION['username'] = "username";
 ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certified hood classics(?)</title>
</head>
<body>
<h1>Beste Albums 1845-2020</h1>
<hr/>
<button class="button button1"><a href="create.php">Add album</a></button>

</body>
</html>
