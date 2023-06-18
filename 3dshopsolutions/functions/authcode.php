<?php

include('../config/dbcon.php');


if(isset($_POST['register_btn']))
{
    $name = mysqli_real_escape_string($con,$_POST['name']);//aagadi ko pato chai sql injection bata bachauna ko lagi ho
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

        if($password == $cpassword)
        {
                //inserting user data into database
                $insert_query = "INSERT INTO users(name,email,phone,password) VALUES ('$name','$email','$phone','$password')";
                $insert_query_run = mysqli_query($con, $insert_query);

                if($insert_query_run)
                {
                    $_SESSION['message'] = 'Registered successfylly';
                    header('Location: ../login.php');
                }
                else
                {
                    $_SESSION['message'] = 'something went wrong';
                    header('Location: register.php'); 
                }

        }
        else
        {
            $_SESSION['message'] = "Passwords do not match";//password namilesi message pathayeko
            header('Location: register.php');//register.php ma redirect gareko matrai ho
        }
}

?>