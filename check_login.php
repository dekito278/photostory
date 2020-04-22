<?php

$page_title = 'Check login';

include 'includes/config.php';

include 'includes/header.php';

if ($_SESSION['username']){
	header ('location: index.php');
}
else{
    $username = $_POST['username'];
    $password = $_POST['pass'];

    $sql1 = "SELECT username, userpassword FROM users WHERE username = '{$username}' AND userpassword = '{$password}'";

    $result = mysqli_query ($connection, $sql1) or die (mysqli_error ($connection));

    if (mysqli_num_rows ($result) > 0){
        while ($row = mysqli_fetch_assoc ($result)){
            $_SESSION['username'] = $row['username'];
            include 'includes/navbar.php';
            header ('location: index.php');
	 
        }
    }
    
}

mysqli_close($connection);

include 'includes/footer.php';
?>
