<?php
include 'config.php';
error_reporting(0);
session_start();
if(isset($_SESSION['username'])){
    header("Location: index.php");
}
if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email =$_POST['email'];
    $password =md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    if ($password == $cpassword){
    } else {
        echo "<script>alert('Password Not Matched.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <!-- bootsrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- css -->
    <link rel="stylesheet" href="css/main.css">

</head>

<body class="signup">
    <div>
        <div class="card left-right">
            <img src="img/logo.png" alt="" srcset="">
            <h3 class="text-center">Sign Up</h3>
            <div class="form-content">
                <form action="">
                    <div class="row">
                        <div class="col">
                            <label for="fname" >First Name:</label>
                            <input id="fname" type="text" placeholder="Enter First Name" name="fname" value="<?php echo $fname; ?>" required>
                        </div>
                        <div class="col">
                            <label for="lname">Last Name:</label>
                            <input id="lname" type="text" placeholder="Enter Last Name" name="lname" value="<?php echo $lname?>" required>
                        </div>
                    </div>
                    <div>
                        <label for="email">Username:</label>
                        <input type="text" id="username" placeholder="username" name="username" value="<?php $username?>" required>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" placeholder="example@gmail.com" name="email" value="<?php $email?>" required>
                    </div>
                    <div class="row">
                        <div class="col ">
                            <label for="pwd">Password:</label>
                            <input id="password" type="password" placeholder="Enter password" name="password" value="<?php echo $_POST['password'];?>" required>
                        </div>
                        <div class="col ">
                            <label for="confirmpwd">Confirm:</label>
                            <input id="confirm" type="password" placeholder="confirm password" name="cpassword" value="<?php echo $_POST['password'];?>" required>
                        </div>
                    </div>
                    <button class="text-center" type="submit">Register</button><p class="text-center">Already have an accout?<a class="login-link" href="index.php">Login?</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>