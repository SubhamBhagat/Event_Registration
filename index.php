<?php
require './dbConnect.php';
session_start();
error_reporting(E_ERROR);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $uname = mysqli_real_escape_string($con, $_POST['uname']);
    $pwd = mysqli_real_escape_string($con, $_POST['pwd']);

    $search = "select id from admin where uname= '$uname' and pwd = '$pwd';";
    $retrieve = mysqli_query($con, $search);
    $rows = mysqli_fetch_array($retrieve, MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($retrieve);

    if ($count == 1) {
        //  session_register('uname');
        $_SESSION['login_user'] = $uname;


        header("location: admin_panel.php");
    } else {
        $error = "ERROR: Cannot login, bad username or password!";
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="custom_styling.css" rel="stylesheet" type="text/css">
        <script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

        <script src="bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.eot"></script>

        <meta charset="UTF-8">
        <title>Event Registration</title>
    </head>
    <header>
        <a href="index.php" style="text-decoration: none"><h1 class="jumbotron" style="text-align: center;font-family: cursive;font-weight: bold;">Automated Event Registration</h1></a>
    </header>
    <body>
        <?php
// put your code here
        ?>
        <br>

        <div class="container " style="background-color: #6666ff;border-radius: 10px" >
            <div class="row"  >
                <div class="col-sm-3" >
                    <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#login" style="padding: 0;border: none;background: none;"><h2 style="color: black;font-weight: bold">Admin Panel</h2>
                        <div class="thumbnail">
                            <img src="picts/Hacker.png" alt="Admin">
                        </div>
                    </button>
                </div>

                <div class="col-sm-3">
                    <a href="stud_event.php" style="text-decoration: none"><h2 style="color: black;font-weight: bold">Student Panel</h2>
                        <div class="thumbnail">
                            <img src="picts/student-icon-53587.png" alt="student">
                        </div>
                    </a>
                </div>
                <div class="col-sm-3">

                    <a href="proffesors_record.php" style="text-decoration: none"><h2 style="color: black;font-weight: bold">Professor Panel</h2>
                        <div class="thumbnail">
                            <img src="picts/teachers-icon-8.png" alt="Professor">
                        </div>
                    </a>
                </div>

            </div>


        </div>
        <div class="modal fade" id="login" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 style="text-align: center;font-family: cursive;font-weight: bold;color: red">ADMIN Login</h3>
                    </div>
                    <div class="modal-body">
                        <form action="index.php" method="post">
                            <input class="form-control input-lg " placeholder="username" type="text" name="uname" required="true"> <br>
                            <input class="form-control input-lg" placeholder="password" type="password" name="pwd" required="true"><br>
                            <button class="btn btn-warning pull-right" type="submit"> Login</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <h4 style="color: red"><?php echo $error; ?></h4>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
