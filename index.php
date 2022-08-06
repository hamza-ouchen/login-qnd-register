<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel='stylesheet' href="css/main.css">
</head>
<body>
<div class="main">

<h1>Log in</h1>
<i>nft space</i><br><br>




<br>
<form action="login.php" method="POST">
<?php if(isset($user_error)){
    echo $user_error;
}
?>



<input type="text" name="username" id="username" placeholder="username" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'] ; ?>"><br>

<?php if(isset($pass_error)){
    echo $pass_error;
}
?>

<input type="password" name="password" id="password" placeholder='password' value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'] ; ?>"><br>

<label> <input type="checkbox" name="keep" id="keep" value="1">Keep me signed in</label>
<br>

<input type="submit" name="submit" id="submit" value='Log in'><br>
</form>

<a href="">Forgot password?</a>


<h3>Or</h3><br>

<a id='login' href="register.php">Register</a>




</div>
</body>
</html>