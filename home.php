<?php

session_start();
include('inc/connections.php');
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    $id = $_SESSION['id'];
    $user = $_SESSION['username'];
}

$info = mysqli_query($conn,"select * from users where username='$user'");
while($data = mysqli_fetch_array($info)){



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    

<a href="logout.php">Log out</a>



<div class="photo">
<?php echo "<img src='images/".$data['profile_picture']."' alt='profile picture not found'>";?>
<?php } ?>
</div>



<h1>Hello , <?php echo $user; ?></h1>


</body>
</html>

