<?php

$page_title = "Check registration";

include 'includes/config.php';

if (isset ($_SESSION['username'])){
	header('location: index.php');
}
else{
	
    $username = $_POST['username'];
    $password = $_POST['pass'];


    $sql1 = "SELECT username, userpassword FROM users WHERE username = '{$username}' AND userpassword = '{$password}'";
    $sql2 = "INSERT INTO users (username, userpassword) VALUES ('$username', '$password')";

    $result1 = mysqli_query ($connection, $sql1) or die (mysqli_error ($connection));

    if (mysqli_num_rows ($result1) == 0){
        if (mysqli_query ($connection, $sql2)){
            include 'includes/navbar.php';
            echo "New registration: '" . $username . "'<br>";
            header ('location: index.php');
            
        }
        else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }
    else{
        echo "You are not register! Please try again " . "<a href='register.php'>registration</a>";
    }
}

mysqli_close ($connection);
