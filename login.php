<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <?php
            include("php/Main.php");
            if (isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);

                $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if (is_array($row) && !empty($row)) {
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['UserName'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                } else {
                    echo "<div class='MessageError'>
                    <p>Wrong UserName And Password</p>
                    </div> <br>";

                    echo "<a href='login.php'><button class='btn'>Go Back</button>";
                }
                if (!isset($_SESSION['valid'])) {
                    header('Location:login.php');
                } else {
                    header("location:Home.php");
                }
            } else {

            ?>

                <h1>Login</h1>
                <form action="" method="post">
                    <div class="filed input">
                        <label for="email">Enter Email</label>
                        <input type="text" name="email" id="email" placeholder="Enter Email" required>
                    </div>
                    <div class="filed input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Password" required>
                    </div>
                    <div class="filed button">
                        <input type="submit" value="Login" name="submit" class="btn" required>
                    </div>
                    <div class="link">
                        Don't Have Account ? <a href="register.php">Sign Up</a>
                    </div>
                </form>

        </div>
    <?php } ?>
    </div>

</body>

</html>