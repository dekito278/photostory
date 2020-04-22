<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
date_default_timezone_set('Asia/Jakarta');
session_start();

$connection = new mysqli("localhost", "root", "", "storyphoto");
if ($connection->connect_errno) {
    echo die("Failed to connect to MySQL: " . $conn->connect_error);
}
mysqli_set_charset($connection, 'utf8');
?>