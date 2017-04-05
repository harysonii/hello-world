<?php
$con = mysqli_connect("localhost", "root", "", "gothere");
    //check connection...
    if ($con === false) {
        die ("couldn't connect to SQL Server");
    }
    //$dbs = mysqli_select_db($con,"blank") or die("Couldnt connect to database");

  $selectdata = "SELECT * FROM people" ;
    
    $query = mysqli_query($con, $selectdata);
    
    while ($row = mysqli_fetch_array($query)) {
        
        

         echo '<div class="ui fluid card">';
           echo              '<div class="image">';
               echo              '<img src="/images/avatar2/large/kristy.png">';
            echo             '</div>';
               echo          '<div class="content">';
               echo              '<a class="header">'.$row['people_name'].'</a>';
                echo                 '<div class="meta">';
                 echo                    '<span class="date">'.$row['people_name'].'</span>';
                 echo                '</div>';
                 echo            '<div class="description">'.$row['people_email'].'</div>';
                     echo    '</div>';
                     echo    '<div class="extra content">';
                      echo       '<a><i class="send icon"></i>'.$row['people_username'].'</a>';
                      echo       '<a><i class="alarm icon"></i>'.$row['people_username'].'</a>';
                            
                       echo  '</div>';
                    echo '</div>' ;


        
        
    }

?>