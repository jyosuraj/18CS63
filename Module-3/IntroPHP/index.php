<?php 
    $user = "Suraj"
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to php
        <?php 
            echo $user;
         ?>
        Have a great start
    </h1>
    <?php
        echo date("H:i:S");
    ?>
</body>
</html>
