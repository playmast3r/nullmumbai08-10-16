<?php

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'root');
   define('DB_DATABASE', 'null');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   mysqli_set_charset($db, "utf8");
   
   $input = "'sql injection";
   
   echo $input;
   echo "<br>";
   echo mysqli_real_escape_string($db, $input);
   
   ?>