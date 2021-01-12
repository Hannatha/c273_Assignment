<!-- Julien Ngo Jun Ang 19007457 -->

<?php
include("dbFunctions.php");
session_start();

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE name='$username' AND password=SHA1('$password')";

    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $_SESSION['username'] = $row['name'];
        $msg = "<b>You have successfully logged in.<b><br>";
        $msg .= "<a href='index.php'>Return to main menu</a>";
    } else {
        $msg = "You have entered a wrong password.";
        $msg.= "<a href='login.php'>Login again</a>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>YCH - Login</title>
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <div class="card" style="width: 300px;height: 200px;margin: 0 auto; margin-top: 100px; padding: 10px; text-align: center;">
            Login
            <hr style="background-color: black;">
            <?php
                echo $msg;
            ?>
        </div>
    </body>
</html>

<!-- Julien Ngo Jun Ang 19007457 -->