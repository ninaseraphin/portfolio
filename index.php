<?php
    include "vues/header.php";

    
    $host_name = 'db5000290828.hosting-data.io';
    $database = 'dbs284114';
    $user_name = 'dbu503856';
    $password = '4-Tartines25675';
    $connect = mysqli_connect($host_name, $user_name, $password, $database);
  
    if (mysqli_connect_errno()) {
      die('<p>Failed to connect to MySQL: '.mysqli_connect_error().'</p>');
    } else {
      echo '<p>Connection to MySQL server successfully established.</p >';
    }

?>