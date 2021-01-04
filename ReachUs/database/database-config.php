<?php
   // define database related variables
   $database = 'gsdb';
   $host = 'localhost';
   $user = 'root';
   $pass = '';

   // try to conncet to database
   $dbh = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);
   $pp = mysqli_connect($host, $user, $pass, $database) or die ('could not connect:'.mysql_error());
   $db = mysqli_connect($host, $user, $pass, $database) or die ('could not connect:'.mysql_error());
   if(!$dbh){

      echo "<script>alert('unable to connect to database');</script>";
   }
   if(!$pp){

      echo "<script>alert('unable to connect to database');</script>";
   }
   if(!$db){

      echo "<script>alert('unable to connect to database');</script>";
   }   
   
?>