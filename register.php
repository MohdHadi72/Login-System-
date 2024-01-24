<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <?php
            include("php/Main.php");
            if (isset($_POST['submit'])) {
                $username = $_POST['UserName'];
                $email = $_POST['Email'];
                $age = $_POST['Age'];
                $password = $_POST['password'];


                $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email' ");

                if (mysqli_num_rows($verify_query) != 0) {
                    echo "<div class='MessageError'>
                    <p>This Email is Olready Used , Plese Try Another One Plz.</p>
                    </div> <br>";

                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                } else {
                    mysqli_query($con, "INSERT INTO users(UserName,Email,Age,Password)
                     VALUES ('$username','$email','$age','$password')") or die("Error Occued");

                    echo "<div class='message'>
                          <p>Registration Successfully</p>
                         </div> <br>";

                    echo "<a href='login.php'><button class='btn'>Login Now</button>";
                }
            } else {

            ?>
                <h1>Sign Up</h1>
                <form action="" method="post">
                    <div class="filed input">
                        <label for="UserName">User Name</label>
                        <input type="text" name="UserName" id="username" placeholder="Enter Name" autocomplete="off" required>
                    </div>
                    <div class="filed input">
                        <label for="Email"> User Email </label>
                        <input type="text" name="Email" id="email" placeholder="Enter Email" autocomplete="off" required>
                    </div>
                    <div class="filed input">
                        <label for="Age"> User Age</label>
                        <input type="number" name="Age" id="Age" placeholder="Enter Age" autocomplete="off" required>
                    </div>
                    <div class="filed input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Password" autocomplete="off" required>
                    </div>
                    <div class="filed button">
                        <input type="submit" value="Login" name="submit" class="btn" required>
                    </div>
                    <div class="link">
                        Already a Member ? <a href="login.php">Login</a>
                    </div>
                </form>

        </div>
    <?php } ?>
    </div>

</body>

</html>