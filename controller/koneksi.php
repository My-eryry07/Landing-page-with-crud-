<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "db_belanja";

$db = mysqli_connect($hostname, $username, $password, $database_name);


if($db-> connect_error){
    echo " koneksi database eror";
    die("eror");

}

?>