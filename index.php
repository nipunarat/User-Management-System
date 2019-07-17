<?php require_once('inc/connection.php'); ?>
<?php
    //check for form submision
    if(isset($_POST['submit']))
    {
    //check if the user name and password has entered
        if(isset($_POST['email']) || strlen(trim($_POST['email'])) < 1)
    //check if there are any errors in the form

        //save user name and password into variables

        //prepare database query

        //check if the user is valid

        //redirect to user.php

        //if not display the error

    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logging in - User Management System</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="login"><
        <form action="index.php" method="post">
            <fieldset>
                <legend><h1>Log In</h1></legend>


                <p class="error">Invaid Username / Password</p>

                <p>
                    <label for="">Username :</label>
                    <input type="text" name="email" id="" placeholder="Email Address">
                </p>
                    
                <p>
                    <label for="">Password :</label>
                    <input type="password" name="password" id="" placeholder="Password">

                </p>

            </fieldset>


        </form>
    </div><!-- login -->
</body>
</html>
<?php mysqli_close($connection) ?>