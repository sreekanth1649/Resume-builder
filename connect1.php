<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','contact') or die("Connection Failed");

        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message= $_POST['message'];

            $sql = "INSERT INTO `contacttable` (`name`, `email`, `message`)  VALUES ('$name','$email','$message')";

          

            if(mysqli_query($conn,$sql))
            {
                echo "message sent";
            }
            else
            {
                echo "Error Occured";
            }

        }
    }



?>