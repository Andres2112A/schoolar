<?php
    //Config connection
    $host       = "db.vstgqxaihboejukieiju.supabase.co";
    $port       = "5432";
    $dbname     = "postgres";
    $user       = "postgres";
    $password   = "Santiago123";
    
    /*
    $host       = "localhost";
    $port       = "5432";
    $dbname     = "schoolar";
    $user       = "postgres";
    $password   = "unicesmag";
    */

    //Create connection
    $conn = pg_connect("
        host=$host
        port=$port
        dbname=$dbname
        user=$user
        password=$password
    ");

    if(!$conn){
        //die("Connection error: " . pg_last_error());
    }else{
        //echo "Success connection";
    }

    //pg_close();
?>