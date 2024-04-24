<?php
    require_once '../connection.php'; 
    $sid = $_GET['sid'];
    $conn = new mysqli($host, $user, $pass, $dtb);
    $xoa_sql = "DELETE FROM cathang WHERE id=$sid";
    mysqli_query($conn, $xoa_sql);
    header("Location:../view/homepage/homepage_input.php");
?>