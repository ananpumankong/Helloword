<?php
    //$host = server, ip, computer - name;
    //$user = user;
    //$pass = password;
    $host = "localhost";
    $user = "root";
    $pass = "";
    $objConnect = mysql_connect($host, $user, $pass);
    $objSelectDB = mysql_select_db("my_database_gis");
    
  /*  if ($objSelectDB) {
        echo "Connect sure";
    } else {
        echo "Database Connect Failed.";
    }*/

    //mysql_close($objConnect); 

?>
   