<?php
session_start();
if (!isset($_SESSION['username'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Welcome student-shelve</title>
</head>
<body>
    <?php echo "<h1>Welcome " .$_SESSION['username'] ."<h1>"; ?>
    <a href="logout.php"></a>
</body>
</html>
