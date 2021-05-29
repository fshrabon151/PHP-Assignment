<?php
/**
 * Connect function
 */

 function connect(){
      return $connection = new mysqli(HOST, USER, PASS,DB);

     if ($connection === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
 }



