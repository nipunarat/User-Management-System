<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'userdb';

    $connection = mysqli_connect('localhost' , 'root' , '' , 'userdb');

    //cheaking the connection

    if(mysqli_connect_errno())
    {
        die('Database connection failed' . mysqli_connect_error());
    }
?>