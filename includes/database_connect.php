<?php
$conn = mysqli_connect("127.0.0.1","root","","pglife");

if(mysqli_connect_error()){
    //Failed to connect to the database
    echo "Failed to connect to Mysql ! Please connect the Admin";
    return;
}
?>
