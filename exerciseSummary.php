<!DOCTYPE html>
<!-- Julien Ngo Jun Ang 19007457 -->
<?php
session_start();
include("dbFunctions.php");
$username = $_SESSION['username'];
$querySummary = "SELECT type, duration
                 FROM entry
                 WHERE name = '$username'";

$resultSummary = mysqli_query($link, $querySummary);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <title>Your Exercise Summary</title>
        <style>
            table{
                margin-top: 50px;
            }
            .green {
                background-color: #99ff99;
            }
            .red {
                background-color: #ff6666;
            }
        </style>
        <script>
            $(document).ready(function () {
                $("#eTypes").change(function () {
                    var eType = $(this).val();
                    if (eType == 0) {
                        $('tr').show();
                    } else {
                        $('tr').hide();
                        $('.header').show();
                        $('.' + eType).show();
                    }
                    //console.log(eType);
                });

            });
        </script>
    </head>
    <body>
        <?php
        include 'navbar.php';
        ?>

        <div class="container">
            <h3>Exercise Summary</h3>
            <form>
                <div class="form-group">
                    <label for="eTypes">Show:</label>
                    <select id="eTypes" class="form-control">
                        <option value="0">
                            Show All
                        </option>
                        <option value="Walk">
                            Walk
                        </option>
                        <option value="Run">
                            Run
                        </option>
                        <option value="Cycle">
                            Cycle
                        </option>
                    </select>
                </div>
            </form>

            <div>
                <h5>Legend:</h5>
                <a style="background-color: #99ff99; margin-left: 15px;">&#8226; Adequate Exercise</a><br>
                <a style="background-color: #ff6666; margin-left: 15px;">&#8226; Inadequate Exercise</a>
            </div>
            
            <table id="summaryTable" class="table table-hover table-bordered">
                <tr class="header">
                    <th>Exercise Type</th>
                    <th>Duration</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($resultSummary)) {
                    $type = $row['type'];
                    $duration = $row['duration'];
                    ?>
                    <tr class="<?php echo $type; ?>">
                        <td>
                            <?php echo $type; ?>
                        </td>


                        <?php
                        $adequate = "<td class='green'>$duration</td>";
                        $inadequate = "<td class='red'>$duration</td>";
                        if ($type == "Walk") {
                            if ($duration < 30) {
                                echo $inadequate;
                            } else {
                                echo $adequate;
                            }
                        }
                        if ($type == "Run") {
                            if ($duration < 10) {
                                echo $inadequate;
                            } else {
                                echo $adequate;
                            }
                        }
                        if ($type == "Cycle") {
                            if ($duration < 20) {
                                echo $inadequate;
                            } else {
                                echo $adequate;
                            }
                        }
                        ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>    
            </table>
        </div>
    </body>
</html>
<!-- Julien Ngo Jun Ang 19007457 -->