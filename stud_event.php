
<!DOCTYPE html>

<html>

   <head>
         <meta name="viewport" content="width=device-width , initial-scale=1">
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
        <link href="custom_styling.css" rel="stylesheet" type="text/css">
        <link href="jquery/picker-ui.css" rel="stylesheet" type="text/css">
        <link href="jquery/picker-ui.css/resources/demos/style.css" rel="stylesheet" type="text/css">
        
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/fonts/glyphicons-halflings-regular.eot"></script>
        <script src="jquery/jquery.js"></script>
        <script src="jquery/jquery-ui.js"></script>
        <script>
            $ (function(){
                $("#datepicker").datepicker();
            });
        </script>
        <meta charset="UTF-8">
        <title>Event Registration</title>
    </head>
    <header>
        <a href="index.php" style="text-decoration: none"><h1 class="jumbotron" style="text-align: center;font-family: cursive;font-weight: bold;">Automated Event Registration</h1></a>
    </header>
    <body>
        <div class="well well-sm">
            Student's event entry
        </div>

        <form method="post" action="s_entry.php">
            <div class="container  " style="background-color: #6666ff;text-align: center;border-radius: 10px;">

                <div class="form-group ">
                    <br><br>
                    <label class="pull-left">Name &emsp;&emsp;&emsp;&emsp;&emsp;</label>
                    <div class="col-xs-3">

                       <input class="form-control" type="text" placeholder="first_name" name="fname"> 
                    </div> 
                    <div class="col-xs-3">
                        <input class="form-control" type="text" placeholder="last_name" name="lname">
                    </div>
                    <br>
                    <br>
                    <br>
                    <label class="pull-left">Email-ID  &emsp;&emsp;&emsp;&nbsp;   </label>
                    <div class="col-xs-4">
                        <input class="form-control" type="email" name="email">
                    </div>
                    <br>
                    <br>
                    <br>
                    <label class="pull-left">Symposium Name    </label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" name="s_name">
                    </div>
                     <br>
                    <br>
                    <br>
                    <label class="pull-left">Date   &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;  </label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" name="date" id="datepicker">
                    </div>
                    <br>
                    <br>
                    <br>
                    <label class="pull-left">Event Name &emsp;&emsp;</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" name="e_name">
                    </div>
                    <br>
                    <br>
                    <br>
                    <label class="pull-left"> College Name  &emsp;&nbsp;</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" name="c_name">
                    </div>

                    <br>
                    <br>
                    <br>
                    <label class="pull-left">Reward   </label>

                    &nbsp;&nbsp;First place <input  type="radio" class="radio-inline" name="reward" value="first place"><br>
                    Second Place <input type="radio" name="reward" class="radio-inline" value="second place"><br>
                    &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;   Third Place<input type="radio" class="radio-inline" name="reward" value="third place"><br>
                    &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp; Participant <input type="radio" name="reward" class="radio-inline" value="participant">

                    <br>
                    <br>
                    <br>

                    <label class="pull-left">Events  </label>
                    Paper presentation &emsp;<input type="radio" class="checkbox-inline" name="event" value="Paper presentation">
                    &emsp; Multimedia presentation &emsp;<input type="radio" class="checkbox-inline" name="event" value="Multimedia presentation">
                    &emsp;  Project presentation &emsp;<input type="radio" class="checkbox-inline" name="event" value="Project presentation">
                    &emsp; Technical quiz &emsp;<input type="radio" class="checkbox-inline" name="event" value="Technical quiz">
                    <br>
                    <br>
                    <br>
                    <input class="btn btn-warning" type="submit" value="Enter" />
                </div>
            </div>
        </form> 

    </body>
</html>