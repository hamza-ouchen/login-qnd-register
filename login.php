<?php
session_start();
include('inc/connections.php');
if(isset($_POST['username']) && isset($_POST['password'])){
  // $username = stripcslashes(strtolower($_POST['username'])) ;
    $md5_pass = md5($_POST['password']);
    $username = filter_input(INPUT_POST,'username');
    $password =  stripcslashes(strtolower($_POST['password']));
    $username  =  htmlentities(mysqli_real_escape_string($conn,$_POST['username']));
    $passsword  = htmlentities(mysqli_real_escape_string($conn,$_POST['password']));

if(isset($_POST['keep'])){
    $keep = htmlentities(mysqli_real_escape_string($conn,$_POST['keep']));
    if($keep == 1){
        setcookie('username',$username,time()+3600,"/");
        setcookie('password',$passsword,time()+3600,"/");


    }
}


if(empty($username)) {
    $user_error = '<p id="error" >Please insert username <p>';
    $err_s = 1 ;

}

if(empty($passsword)){
    $pass_error = '<p id="error" >Please insert Password <p>';
    $err_s = 1 ;
    include('index.php');
    
}
if(!isset($err_s)){
    $sql = "SELECT id,username FROM users WHERE username='$username' AND md5_pass='$md5_pass' limit 1";
    $result = mysqli_query($conn,$sql);
    $num_rows = mysqli_num_rows($result);
    if($num_rows != 0){
        $row = mysqli_fetch_assoc($result);
        if ($row['username'] === $username && $row['password'] === $password){
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            header('location:home.php');  //aymen here you can add the user page 
            exit();
    }


    
    }else{
        $user_error = '<p id="error">worng password or username ! </p> <br>';
        include('index.php');
        exit();
    }
}

}else{
    header('Location:index.php');
    exit();
}


?>