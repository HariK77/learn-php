<?php
   

   $connection = mysqli_connect('localhost', 'root', 'rgukt123', 'temp123');  
    if(!$connection) {
        die("Database connection failed");
    }