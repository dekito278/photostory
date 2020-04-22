<?php

$page_title = "Cek registrasi pameris";

include 'includes/config.php';

if (isset ($_SESSION['username'])){
	header ('location: index.php');
}
else{
	
    $username = $_POST['username'];
    $full_name = $_POST['full_name'];
    $password_pam = $_POST['password_pam'];


    $sql1 = " SELECT username, full_name, password_pam FROM users_pameris "; 
    $sql2 = " INSERT INTO users_pameris ( username, full_name, password_pam )  VALUES ( '$username', '$full_name', '$password_pam' ) "; 


    $result1 = mysqli_query ($connection, $sql1) or die (mysqli_error ($connection));

    if (mysqli_num_rows ($result1) == 0){
        if (mysqli_query ($connection, $sql2)){
            include 'includes/navbar.php';
            echo "New registration: '" . $full_name . "'<br>"."<a href='index.php'>Move</a>";
            
            
        }
        else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }
    else{
        echo "You are not register! Please try again " . "<a href='reg_pam.php'>registration</a>";
    }
}

mysqli_close ($connection);
