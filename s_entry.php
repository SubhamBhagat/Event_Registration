<?php
// put your code here

require './dbConnect.php';
error_reporting(E_ERROR | E_PARSE);
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$s_name = mysqli_real_escape_string($con, $_POST['s_name']);
$date = mysqli_real_escape_string($con, $_POST['date']);
$e_name = mysqli_real_escape_string($con, $_POST['e_name']);
$c_name = mysqli_real_escape_string($con, $_POST['c_name']);
$reward = mysqli_real_escape_string($con, $_POST['reward']);
$event = mysqli_real_escape_string($con, $_POST['event']);

$sql = "insert into stud_event (id,fname,lname,email,s_name,date,e_name,c_name,reward,event) values ('','$fname','$lname','$email','$s_name','$date','$e_name','$c_name','$reward','$event');";

$res = mysqli_query($con, $sql);
if ($res) {
    echo 'Added successfully';
} else {
    echo 'ERROR: could not add record!';
    echo '<br>';
    echo ''.mysqli_error($con);
}
mysqli_close($con);

header("location : index.php");
exit();
?>