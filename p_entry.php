 <?php
// put your code here

require './dbConnect.php';
error_reporting(E_ERROR | E_PARSE);
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$company = mysqli_real_escape_string($con, $_POST['company']);
$title = mysqli_real_escape_string($con, $_POST['title']);
$s_addr1 = mysqli_real_escape_string($con, $_POST['s_addr1']);
$s_addr2 = mysqli_real_escape_string($con, $_POST['s_addr2']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$state = mysqli_real_escape_string($con, $_POST['state']);
$pin = mysqli_real_escape_string($con, $_POST['pin']);
$contact = mysqli_real_escape_string($con, $_POST['contact']);

$sql = "insert into proffesor_record (s_on,fname,lname,email,company,title,s_addr1,s_addr2,city,state,pin,contact) values ('','$fname','$lname','$email','$company','$title','$s_addr1','$s_addr2','$city','$state','$pin','$contact');";

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