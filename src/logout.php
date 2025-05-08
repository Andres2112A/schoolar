<?php
    session_start();
    session_destroy();

    header('Refresh: 0; URL=http://localhost/schoolar/src/signin.html');
?>