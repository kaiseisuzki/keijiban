<?php
    mb_internal_encoding("utf8");

    $pdo = new PDO("mysql:dbname=lesson01; host=localhost;", "root", "mysql");
    $pdo -> exec("
    insert into 4each_keijiban values
    ('".$_POST['handlename']."', '".$_POST['title']."', '".$_POST['comments']."');
    ");

    header("Location:http://localhost/4each_keijiban/index.php");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>掲示板</title>
</head>
<body>
    
</body>
</html>