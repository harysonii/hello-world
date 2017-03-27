<?php
    $con = mysqli_connect("localhost", "root", "", "gothere");
    //check connection...
    if ($con === false) {
        die ("couldn't connect to SQL Server");
    }
    //$dbs = mysqli_select_db($con,"blank") or die("Couldnt connect to database");
     
?>
<?php
     if (isset($_POST['submit'])) {
                    // Grab the user-entered log-in data
                    $user_username = mysqli_real_escape_string($con, trim($_POST['uname']));
                    $user_password = mysqli_real_escape_string($con, trim($_POST['pwd']));
                    if (!empty($user_username) && !empty($user_password)) {
                        // Look up the username and password in the database
                        $query = "SELECT people_id, people_username FROM people WHERE people_username = '$user_username' AND " .
                            "people_password = '$user_password'";
                        $data = mysqli_query($con, $query);
                        if (mysqli_num_rows($data) == 1) {
                            // The log-in is OK so set the user ID and username session/cookies, and redirect to the home page
                            $row = mysqli_fetch_array($data);
                            $_SESSION['user_id'] = $row['user_id'];
                            $_SESSION['username'] = $row['username'];
                            
                            
                            //$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
                            header("Location: home.php");
                        }
                        else {
                            // The username/password are incorrect so set an error message
                            $error_msg = 'Sorry, you must enter a valid username and password to log in.';
                        }
                    }
                    else {
                        // The username/password weren't entered so set an error message
                        $error_msg = 'Sorry, you must enter your username and password to log in.';
                    }
     }
    
    ?>