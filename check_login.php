<?php

$page_title = 'Check login';

include 'includes/header.php';

include 'includes/navbar.php';

include 'includes/config.php';

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
            echo "You are logged in with name '" . $row['username'] . "', please move on " . '<a href="index.php">pictures</a>';
	 
        }
    }
    else{
        include 'includes/navbar.php';
        echo "You are not logged in. Please login " . "<a href='login.php'>here.</a>";
    }
}

mysqli_close($connection);

include 'includes/footer.php';
?>