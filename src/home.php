<?php
    session_start();
    
    if (!isset($_SESSION['user_id'])){
        header('Refresh: 0; URL=http://localhost/schoolar/src/signin.html');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Schoolar - Home</title>
        <link rel="icon" type="image/png" href="src/icons/academic_icon.png">
    </head>
    <body>
        <a href="signin.html">Logout</a> 
    </body>
</html>