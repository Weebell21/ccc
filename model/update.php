<?php
  
  $soban = $_POST['soban'];
  $ngay = $_POST['ngay'];
  $loai = $_POST['loai'];
  $mau = $_POST['mau'];
  $size = $_POST['ksize'];
  $tsoluong = $_POST['tsoluong'];
  $id = $_POST['id'];
 

    require_once("../connection.php");
    // require_once("../model/model_mainpage.php");
    // require_once("../model/model_mainpage_view.php");
    require_once("../model/homepage_model.php");

    $modelProduct = new ModelProduct();
    $r = $modelProduct->updateProduct($conn, $id, $soban, $ngay, $loai, $mau, $size, $tsoluong);

    if($r == 1) {
        header("Location:../view/homepage/homepage_input.php");
    } else {
        echo "chưa sửa dữ liệu";
    }

    
    //cần làm file liệt kê liên kết với mainpage.php r gán lệnh xuất while = mysqli_query vào bảng table
    //bỏ dữ liệu select dc $r['...'] vào <td> 
//liệt kê bảng//
    //kết nối 
    // $lietke_sql = "SELECT * FROM thunghiem order by tensp, loai, donvi, soluong, dongia, tong";
    // $result = mysqli_query($conn, $lietke_sql);
    // while ($r = mysqli_fetch_assoc($result)){
    //     echo $r['$tensp']." ".$r['$loai']." ".$r['$donvi']." ".$r['$soluong']." ".$r['$dongia']." ".$r['$tong']. "<br>";
    // }

?>