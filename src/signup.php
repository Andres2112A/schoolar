<?php
   
    $firstname  = $_POST['f_name'];
    $lastname  = $_POST['l_name'];
    $email  = $_POST['e_mail'];
    $password = $_POST['passw'];

    //$enc_pass = md5($password);
    $enc_pass = sha1($password);
    
    $sql_email_exist = "
        SELECT 
            COUNT(email) as total 
        FROM 
            users 
        WHERE 
            email = '$email' 
            LIMIT 1 
    ";
    $res = pg_query($conn, $sql_email_exist);

    if($res){
        $row = pg_fetch_assoc($res);
        if($row['total'] > 0){
            echo "Email already exists";
        }else{
            $sql = "INSERT INTO users (firstname, lastname, email, password)
                VALUES('$firstname','$lastname','$email','$enc_pass')
            ";

            $res = pg_query($conn, $sql);

            if ($res){
                echo "User has been created succesfully";
                echo "<script>alert('User has been created. Go to login!')</script>";
                header('Refresh: 0; URL=http://localhost/schoolar/src/signin.html');
            }else{
                echo "Error";
            }
        }
    }
?>