<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datamahasiswa";

$k = new mysqli($servername, $username, $password, $dbname);

if ($k->connect_error) {
    die("Connection failed: " . $k->connect_error);
}
?>