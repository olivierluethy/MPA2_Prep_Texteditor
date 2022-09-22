<?php

$server_name = 'localhost';
$server_user='root';
$server_pass='';
$db_name='texteditor';

$con = mysqli_connect($server_name, $server_user, $server_pass, $db_name);

if(!$con){
    echo "Failed to connect to the server";
    exit();
}

?>