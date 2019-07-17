<?php require_once('inc/connection.php'); ?>
<?php
    //check for form submision
    if(isset($_POST['submit']))
    {
        $errors = array();

    //check if the user name and password has entered
        if(isset($_POST['email']) || strlen(trim($_POST['email'])) < 1)
        {
            $errors[] = 'Username is missing/invalid';
        }
        if(isset($_POST['password']) || strlen(trim($_POST['password'])) < 1)
        {
            $errors[] = 'Password is missing/invalid';
        }

        //check if there are any errors in the form
        if(empty($errors))
        {
            
            //save user name and password into variables
            $email = mysqli_real_escape_string($connection , $_POST['email']);
            $password = mysqli_real_escape_string($connection , $_POST['password']);
            $hashed_password = sha1($password);

            //prepare database query
            $query = "SELECT * FROM user
                    WHERE email = '{$email}'
                    AND password = '{$hashed_password}'
                    LIMIT 1";

            $result_set = mysqli_query($connection, $$query);

            if($result_set)
            {
                // query successfull

                if(mysqli_num_rows($result_set) == 1)
                {
                    //valid user found

                    //redirect to user.php
                    header('Location:users.php');
                }
                else 
                {
                    //user name and password invalid
                    $errors[] = 'Invalid username /password';
                }
            }else 
            {
                # code...
                $errors[] = 'Database query failed';
            }
            
        }

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

                <?php 
                    if(!isset($errors) && !empty($errors))
                    {
                        echo '<p class="error">Invaid Username / Password</p>';
                    }
                ?>

                

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