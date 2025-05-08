<?php
    include('../config/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" aling = "center">
        <tr>
            <td>firstname</td>
            <td>lastname</td>
            <td>email</td>
            <td>status</td>
        </tr>
        <tr>
            <td>andres</td>
            <td>acosta</td>
            <td>sann@gmail.com</td>
            <td>active</td>
            <td>
                <img src="edit_icon.png" width="15">
                <img src="trash_icon.png" width="15">
                <img src="search_icon.png" width="15">
            </td>
        </tr>
    </table>
</body>

<?php
    $sqL = "SELECT * FROM users";
    $res = pg_query($conn, $sq);
?>