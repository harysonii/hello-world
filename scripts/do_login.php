<?php
    
session_start();
if(isset($_POST['do_login']))
{
 
 $con = mysqli_connect("localhost", "root", "", "gothere");
    //check connection...
    if ($con === false) {
        die ("couldn't connect to SQL Server");
    }
    //$dbs = mysqli_select_db($con,"blank") or die("Couldnt connect to database");
     
 $email=$_POST['email'];
 $pass=$_POST['password'];
 $select_data=mysqli_query($con, "select * from people where people_email='$email' and people_password='$pass'");
 if($row=mysqli_fetch_array($select_data))
 {
  $_SESSION['people_email']=$row['people_email'];
  echo "success";
 }
 else
 {
  echo "fail";
 }
 exit();
}
?>
