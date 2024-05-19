<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" sqltent="IE=edge">
    <meta name="viewport" sqltent="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="css/edit.css" />
    <link  rel="stylesheet" href="css/style.css" />
    <title>Login</title>
</head>

<body>
    <div class="sqltainer">
        <div class="box form-box">
            <?php

            include("dbcon.php");
            if (isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($sql, $_POST['email']);
                $password = mysqli_real_escape_string($sql, $_POST['password']);

                $result = mysqli_query($sql, "SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if (is_array($row) && !empty($row)) {
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                } else {
                    echo "<div class='message'>
                      <p>Wrong Username or Password</p>
                       </div> <br>";
                    echo "<a href='index.php'><button class='btn'>Go Back</button>";

                }
                if (isset($_SESSION['valid'])) {
                    header("Location: home.php");
                }
            } else {


                ?>
                <div class="edit-form-container">

                    <form action="" method="post">
                        <h3>Login</h3>
                        <div class="field input">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" autocomplete="off" required>
                        </div>

                        <div class="field input">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" autocomplete="off" required>
                        </div>

                        <div class="field">

                            <input type="submit" class="btn" name="submit" value="Login" required>
                        </div>
                        <div class="links">
                            Don't have account? <a href="register.php">Sign Up Now</a>
                        </div>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>