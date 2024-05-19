<?php
session_start();

include("dbcon.php");
if (!isset($_SESSION['valid'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TAPROBANA</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- custom css file link-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/edit.css" />
    <link rel="stylesheet" href="css/about.css" />
    <link rel="stylesheet" href="css/package.css" />
</head>

<body>
    <?php include('header.php'); ?>
    <div class="sqltainer">
        <div class="box form-box">
            <?php
            if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $age = $_POST['age'];

                $id = $_SESSION['id'];

                $edit_query = mysqli_query($sql, "UPDATE users SET Username='$username', Email='$email', Age='$age' WHERE Id=$id ") or die("error occurred");

                if ($edit_query) {
                    echo "<br><br><br><br><div class='heading-title'>
                    <p>Profile Updated!</p>
                </div> <br><br><br>";

                }
            } else {

                $id = $_SESSION['id'];
                $query = mysqli_query($sql, "SELECT*FROM users WHERE Id=$id ");

                while ($result = mysqli_fetch_assoc($query)) {
                    $res_Uname = $result['Username'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['Age'];
                }

                ?>
                <div class="edit-form-container">
                    <i class="fas fa-time" id="form-close"></i>
                    <form action="" method="post">
                        <h3>Change Profile</h3>
                        <div class="field input">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" value="<?php echo $res_Uname; ?>"
                                autocomplete="off" required>
                        </div>

                        <div class="field input">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" value="<?php echo $res_Email; ?>" autocomplete="off"
                                required>
                        </div>

                        <div class="field input">
                            <label for="age">Age</label>
                            <input type="number" name="age" id="age" value="<?php echo $res_Age; ?>" autocomplete="off"
                                required>
                        </div>

                        <div class="field">

                            <input type="submit" class="btn" name="submit" value="Update" required>
                        </div>

                    </form>
                </div>
            </div>
        <?php } ?>
        <!-- custom js file link-->
        <script src="js/script.js"></script>
        <script src="js/login.js"></script>
        <?php include('footer.php'); ?>
    </div>
</body>

</html>