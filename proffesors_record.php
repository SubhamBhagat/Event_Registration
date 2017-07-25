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
            Professor's entry
        </div>
        <br>
        <form method="post" action="p_entry.php">
            <div class="container  " style="background-color: #6666ff;text-align: center;border-radius: 10px;">

                <div class="form-group ">
                    <br><br>
                    <label class="pull-left">Name &emsp;&emsp;&emsp;&emsp;</label>
                    <div class="col-xs-3">

                        <input class="form-control" type="text" placeholder="first_name" name="fname"> 
                    </div> 
                    <div class="col-xs-3">
                        <input class="form-control" type="text" placeholder="last_name" name="lname">
                    </div>
                    <br>
                    <br>
                    <br>
                    <label class="pull-left">Email-ID  &emsp;&emsp;&nbsp;   </label>
                    <div class="col-xs-4">
                        <input class="form-control" type="email" name="email">
                    </div>
                    <br>
                    <br>
                    <br>
                    <label class="pull-left">Company &emsp;&emsp;&nbsp;&nbsp;  </label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" name="company">
                    </div>
                    <br>
                    <br>
                    <br>
                    <label class="pull-left">Title  &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class="col-xs-4">
                        
                        <input class="form-control" type="text" name="title">
                    </div>
                    <br>
                    <br>
                    <br>
                    <label class="pull-left">Date  &emsp;&emsp;&emsp;&nbsp;&emsp; </label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" name="date" id="datepicker" >
                    </div>
                    <br>
                    <br>
                    <br>
                    <label class="pull-left">Address  &emsp;&emsp;&nbsp;&nbsp; </label>
                    <div class="col-xs-4">
                        <input class="form-control" placeholder="Street address"type="text" name="s_addr1">
                    </div>
                    <br><br>
                    <div class="col-xs-4">
                        <input class="form-control" placeholder="Street address line 2 "type="text" name="s_addr2">
                    </div>
                    <br><br>
                    <label class="pull-left">   &emsp;&emsp;&nbsp;&nbsp;&nbsp; &emsp;&nbsp;&nbsp; &nbsp;&nbsp; </label>
                    <div class="col-xs-3">
                        <input class="form-control" placeholder="City "type="text" name="city">
                    </div>
                    <div class="col-xs-3">
                        <input class="form-control" placeholder="State/Province "type="text" name="state">
                    </div>
                    <br><br>
                    <div class="col-xs-3">
                        <input class="form-control" placeholder="Pincode "type="number" name="pin" maxlength="6">
                    </div>

                    <br>
                    <br>
                    <br>
                    <label class="pull-left">Phone  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                    <div class="col-xs-4">
                        <input class="form-control" type="number" name="contact">
                    </div>
                    <br>
                    <br>
                    <br>

                    <input class="btn btn-warning" type="submit" value="submit" />
                </div>
            </div>
        </form> 
        

    </body>

</html>
