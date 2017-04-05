<?php

    $con = mysqli_connect("localhost", "root", "", "gothere");
    //check connection...
    if ($con === false) {
        die ("couldn't connect to SQL Server");
    }
    //$dbs = mysqli_select_db($con,"blank") or die("Couldnt connect to database");
    
    $selectdata = "SELECT people_name, people_username, people_email FROM people WHERE people_username='$name'";
    
    $query = mysqli_query($con, $selectdata);
    
    while ($row = mysqli_fetch_array($query)) {
        
        echo "<p>".$row['people_name']."</p>";
        echo "<p>".$row['people_username']."</p>";
        echo "<p>".$row['people_email']."</p>";
    }
?>

<!--

<div class="ui fluid card">
                        <div class="image">
                            <img src="/images/avatar2/large/kristy.png">
                        </div>
                        <div class="content">
                            <a class="header">Kristy</a>
                                <div class="meta">
                                    <span class="date">Joined in 2013</span>
                                </div>
                            <div class="description">
                                Kristy is an art director living in New York.
                            </div>
                        </div>
                        <div class="extra content">
                            <a><i class="send icon"></i>22 Friends</a>
                            <a><i class="alarm icon"></i>22 Friends</a>
                            
                        </div>
                    </div> 
                    
                    <div class="ui fluid card">
                        <div class="content">
                            <div class="description">
                                <p><i class="user icon"></i>Location.<i class="user icon"></i></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="ui fluid card">
                        <div class="content">
                            <div class="description">
                                <p><i class="user icon"></i>Phone no.<i class="user icon"></i></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="ui fluid card">
                        <div class="content">
                            <div class="description ">
                                <p id="h"><i class="user icon"></i>Website.<i class="user icon"></i></p>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>

-->