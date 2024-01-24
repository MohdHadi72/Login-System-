<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Change Profile</title>

</head>

<body>

    <div class="nav">
        <div class="logo">
            <a href="login.php">
                <p>Login System Form</p>
            </a>
        </div>

        <div class="right-link">
            <a href="register.php">Change Profile</a>
            <a href="logout.php"><button type="button" class="btn1">Log Out</button></a>
        </div>
    </div>

    <div class="container">
        <div class="box form-box">
            <h1>Change Profile</h1>
            <form action="" method="post">
                <div class="filed input">
                    <label for="UserName">User Name</label>
                    <input type="text" name="UserName" id="UserName" placeholder="Enter Name" autocomplete="off" required>
                </div>
                <div class="filed input">
                    <label for="Email"> User Email </label>
                    <input type="text" name="Email" id="Email" placeholder="Enter Email" autocomplete="off" required>
                </div>
                <div class="filed input">
                    <label for="Age"> User Age</label>
                    <input type="number" name="Age" id="Age" placeholder="Enter Age" autocomplete="off" required>
                </div>
                <div class="filed button">
                    <input type="submit" value="Update" name="submit" class="btn" required>
                </div>
            </form>

        </div>
    </div>

</body>

</html>