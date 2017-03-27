 <?php
    

      
//If(isset($_POST["submit"])){
 
 $con = mysqli_connect("localhost", "root", "", "gothere");
    //check connection...
    if ($con === false) {
        die ("couldn't connect to SQL Server");
    }
    //$dbs = mysqli_select_db($con,"blank") or die("Couldnt connect to database");
    
 $name = $_POST['name'];
 $uname = $_POST['username'];
 $email = $_POST['unique'];
 $pass = $_POST['secret'];
 $sex = $_POST['sex'];
 
  //mysqli_query($con, "INSERT INTO people (people_id, people_name, people_username) VALUES (NULL, '$name', '$uname')");
  mysqli_query($con, "INSERT INTO people (people_id, people_name, people_username, people_email, people_password, people_sex ) VALUES (NULL, '$name', '$uname', '$email', '$pass', '$sex')");

    echo "<p>data inserted</p>";
//}

?>