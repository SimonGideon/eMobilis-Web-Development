<?php
include 'config.php';
session_start();
error_reporting(0);
if(isset($_SESSION['username'])){
    header("Location: welcome.php");
}
if (isset($_POST['submit'])){
    $email =$_POST['email'];
    $password =md5($_POST['password']);
    $sql = "SELECT * FROM users WHERE email=$email AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows >0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: welcome.php");
    }else{
        echo "<script>alert('woops! Email address or password is wrong.')</script>";
    }

}
?>
<!-- html starts here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootsrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- css  -->
    <link rel="stylesheet" href="css/main.css">
    <title>Login Form - Student Shelve</title>
</head>
<body>
<div class="login">
        <div class="card">
            <img class="center-block" src="img/logo.png" alt="">
            <div class="form-card-content">
                <h3 class="text-center">Log In</h3>
                <div class="text-center">
                    <form action="POST">
                        <label for="email"></label><br>
                        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required><br>
                        <label for="password"></label><br>
                        <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required><br>
                        <br><button type="submit">Login</button><br>
                        <p class="text-grey">Do you have an acount ? <a href="register.php">Register</a></p>
                    </form>
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>
