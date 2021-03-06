<?php
session_start();

if(!$_SESSION){
    echo 'Vui lòng đăng nhập'.'<br/>'.'<a href="../login/login.php">Login</a>';
    die;
}
$user = $_SESSION['AUTH'];
if ($user['role'] != 1) {	//check quyền phải admin k
    header("Location:./404.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Hello: <?php echo $_SESSION['AUTH']['name'] ?></h1>
        <div class="form-group">
        <a href="../home/home.php" class="btn btn-primary">Home</a>
        <a href="product.php" class="btn btn-primary">Product</a>
        <a href="listuser.php" class="btn btn-success">List User</a>
        <a href="../logout.php" class="btn btn-danger">Log out</a>
        </div>
    </div>
</body>
</html>