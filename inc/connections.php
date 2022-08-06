<?php

$conn = mysqli_connect('localhost','root','','nftusers');
if(!$conn){
    die('Error '.mysqli_connect_error());

}

