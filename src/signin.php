<?php
    include('../config/database.php');

    session_start();

    if(isset($_SESSION['user_id'])) {
        header('Refresh: 0; URL=http://localhost/schoolar/src/home.php');
    }

    $email = $_POST['e_mail'];
    $passw = $_POST['p_sswd'];
    $enc_pass = sha1($passw);

    $sql = "
        SELECT 
            id,
            COUNT(id) as total
        FROM 
            users
        WHERE
            email = '$email' and
            password = '$enc_pass' and
            status = true
        GROUP BY
            id
    ";

    $res = pg_query($conn, $sql);

    if($res){
        $row = pg_fetch_assoc($res);
        if($row['total'] > 0){
            //echo "Login OK";
            $_SESSION['user_id'] = $row['id'];
            header('Refresh: 0; URL=http://localhost/schoolar/src/home.php');
        }else{
            echo "Login failed";
        }
    }
?>