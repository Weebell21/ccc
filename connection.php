<?php
    $user = 'root';
    $host = 'localhost';
    $pass = ''; 
    $dtb = 'mydtb'; 
    $conn = new mysqli($host, $user, $pass, $dtb);
           if ($conn->connect_error) {
               die('Kết nối không thành công: ' . $conn->connect_error);
            }
        //   if ($conn->connect_error) {
        //     die("Connection failed: ". $conn->connect_error);
        // } else {
        //     echo "Connected successfully";
        // }
        // $conn->close();
?>
