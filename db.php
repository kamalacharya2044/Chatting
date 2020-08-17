<?php

$hostname="mysql.kamalacharya.com.np";
$user="kamal1234";
$password="K@thmandu12#";
$database="db_chat_now";
$con = mysqli_connect($hostname,$user,$password,$database);
if (!$con)
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

function formatDate($date)
{
    return(date('g:i:a', strtotime($date)));
}
?>