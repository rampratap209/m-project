<?php

 $Server = "localhost";
 $username = "root";
 $password ="";
 $dbname = "uv";

 $conn = new mysqli ($Server,$username,$password,$dbname);

 if (!$conn) {
    echo "db is not connected";
 }


?>


