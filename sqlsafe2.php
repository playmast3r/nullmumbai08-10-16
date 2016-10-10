<?php
//this is another workaround for safeguarding against sql injection
//parameterized query is 100% secure. But if you don't want to use it, then use this inbuilt mysqli_real_escape_string() function
//but this is not as secure as parameterized query
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'root');
   define('DB_DATABASE', 'null');
   //connect to database
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   //always set the charset of the mysql connection, as attacker can use utf-7 and easily bypass the escaping.
   mysqli_set_charset($db, "utf8");
   
   $input = "'sql injection";
   
   echo $input;  //will print 'sql injection
   echo "<br>";
   echo mysqli_real_escape_string($db, $input);   //will print \'sql injection
   
   ?>
