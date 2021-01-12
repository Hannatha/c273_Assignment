<!DOCTYPE html>
<!-- Julien Ngo Jun Ang 19007457 -->
<?php
session_start();
include("dbFunctions.php");
session_destroy();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <title>You have been logged out.</title>
    </head>
    <body>
        <?php
        echo 'You have been logged out. Please wait while we redirect you back to the main page.';
        header('Refresh: 3; url=index.php');
        ?>
    </body>
</html>


<!-- Julien Ngo Jun Ang 19007457 -->