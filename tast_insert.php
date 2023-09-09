<?php
    $Student = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($Student,"vipulsir");

if(isset($_POST['sumbit'])){ 
    
    // error_reporting(0);
    $txtname = $_POST['firstname'];
    $txtmidd = $_POST['middlename'];
    $txtlast = $_POST['lastname'];
    $fname = $_POST['f_name'];
    $txtenroll = $_POST['enrollment'];
    $txtbirth = $_POST['birthdate'];
    $txtgender = $_POST['gender'];
    $txtmobile = $_POST['mobile_no'];
    $txtemail = $_POST['email'];
    $txtwork = $_POST['Work'];
    $txtstate = $_POST['state'];

   $a = "INSERT INTO `student` (`first_name`, `middle_name`, `last_name`, `father_name`, `enrollment_no`, `dob`, `gender`, `mobile_no`, `email`, `work`, `state`) VALUES ('$txtname', '$txtmidd', '$txtlast', '$fname', '$txtenroll', '$txtbirth', '$txtgender', '$txtmobile', '$txtemail ', '$txtwork', '$txtstate')";
    mysqli_query($Student,$a);

    // echo $a;
    
    //     echo "connect okay";
   
    //header("location:task.php");


}
?>  































<!-- 
$run = mysqli_query($con,$query);
if($run)
{
    header("location:login.php");
}
else
{
    echo'<script>alter("register failed")</script>';
} -->