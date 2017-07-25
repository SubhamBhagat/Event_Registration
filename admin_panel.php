<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
        <link href="custom_styling.css" rel="stylesheet" type="text/css">

        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.eot"></script>

        <meta charset="UTF-8">
        <title>Event Registration</title>
    </head>
    <header>
        <a href="index.php" style="text-decoration: none"><h1 class="jumbotron" style="text-align: center;font-family: cursive;font-weight: bold;">Automated Event Registration</h1></a>
    </header>
    <body>
        <div class="container-fluid">
            <div class="well well-lg"><h2 style="font-weight: bold;">ADMIN panel</h2> 
                <a href="index.php" style="text-decoration: none"><button class="btn btn-warning btn-lg pull-right">Logout 
                    <!--
                <?php
                /* include './dbConnect.php';
                session_start();
                session_destroy();
                header("location: index.php");
                 */
                ?>
                 
                -->
                </button></a>  </div><br>
            <div class="well well-sm col col-sm-3"> <h3 style="font-family:Comic Sans MS;font-weight: bold;text-align: center">Professor Details</h3></div>
        <div class="container" style="background-color: tomato;color: whitesmoke;font-weight: 500;font-size: larger;border-radius: 10px;">
            <br>
            <br>
                
            <table class="table" >
                
                <?php
// put your code here

                require './dbConnect.php';

                $query = "select fname,lname,company,title from proffesor_record;";
                echo '<thead>';
                echo '<tr>';
                echo '<th> FirstName </th>';
                echo '<th> LastName  </th>';
                echo '<th> Company   </th>';
                echo '<th> Title  </th>';
                echo '</tr>';
                echo '</thead>';
                if ($result = mysqli_query($con, $query)) {
                    if (mysqli_num_rows($result) > 0) {
                  //echo 'FirstName &emsp;&emsp; LastName &emsp;&emsp; Company &emsp;&emsp; Title <br><br><br>';
                        echo '<tbody>';
                        while ($row = mysqli_fetch_array($result)) {
                            
                            echo '<tr>';
                            echo '<td>'. $row['fname']. '</td>';
                            echo '<td>' . $row['lname']. '</td>';
                            echo '<td>' . $row['company']. '</td>';
                            echo '<td>' . $row['title']. '</td>';
                            echo '</tr>';
                        }
                        echo '</tbody>';
                          mysqli_free_result($result);
                    } else {
                        echo 'No such records found &emsp;&emsp;&emsp;' . mysqli_error($con);
                    }
                } else {
                    echo 'ERROR: Cannot execute the statement &emsp;&emsp;&emsp;' . mysqli_error($con);
                }
                mysqli_close($con);
                ?>

            </table>
        </div>
            <br>
            <br>
            <br>
            <br>
            
            <div class="well well-sm col col-sm-3"> <h3 style="font-family:Comic Sans MS;font-weight: bold;text-align: center">Student Details</h3></div>
        <div class="container" style="background-color: tomato;color: whitesmoke;font-weight: 500;font-size: larger;border-radius: 10px;">
            <br>
                
            <table class="table" >
                
                <?php
// put your code here

                require './dbConnect.php';

                $query = "select fname,lname,c_name,event,date,reward from stud_event;";
                echo '<thead>';
                echo '<tr>';
                echo '<th> FirstName </th>';
                echo '<th> LastName  </th>';
                echo '<th> College Name   </th>';
                echo '<th> Event Name   </th>';
                echo '<th> Event Date   </th>';
                echo '<th> Reward  </th>';
                echo '</tr>';
                echo '</thead>';
                if ($result = mysqli_query($con, $query)) {
                    if (mysqli_num_rows($result) > 0) {
                  //echo 'FirstName &emsp;&emsp; LastName &emsp;&emsp; Company &emsp;&emsp; Title <br><br><br>';
                        echo '<tbody>';
                        while ($row = mysqli_fetch_array($result)) {
                            
                            echo '<tr>';
                            echo '<td>'. $row['fname']. '</td>';
                            echo '<td>' . $row['lname']. '</td>';
                            echo '<td>' . $row['c_name']. '</td>';
                            echo '<td>' . $row['event']. '</td>';
                            echo '<td>' . $row['date']. '</td>';
                            echo '<td>' . $row['reward']. '</td>';
                            echo '</tr>';
                        }
                        echo '</tbody>';
                          mysqli_free_result($result);
                    } else {
                        echo 'No such records found &emsp;&emsp;&emsp;' . mysqli_error($con);
                    }
                } else {
                    echo 'ERROR: Cannot execute the statement &emsp;&emsp;&emsp;' . mysqli_error($con);
                }
                mysqli_close($con);
                ?>

            </table>
        </div>
            </div>
    </body>
</html>