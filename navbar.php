<!-- Julien Ngo Jun Ang 19007457 -->
<div id="menu">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="index.php"><b>Yishun Community Hospital</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php if (isset($_SESSION['username'])) { ?>
                    <li> <a href="index.php">Home</a></li>
                    <li> <a href="addExercise.php">Add Exercise Entry</a></li>
                    <li> <a href="exerciseSummary.php">Exercise Summary</a></li>
                    <li> <a href="logout.php">Log out</a></li>
                <?php } else { ?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                <?php } ?>

            </ul>
        </div>
    </nav>
</div>
<!-- Julien Ngo Jun Ang 19007457 -->