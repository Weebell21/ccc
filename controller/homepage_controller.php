<?php
// $soban = $_POST['soban'];
// $ngay = $_POST['ngay'];
// $loai = $_POST['loai'];
// $mau = $_POST['mau'];
// $size = $_POST['ksize'];
// $tsoluong = $_POST['tsoluong'];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("../connection.php");
    require_once("../model/homepage_model.php");
    $soban = $_POST['soban'];
    $ngay = $_POST['ngay'];
    $loai = $_POST['loai'];
    $mau = $_POST['mau'];
    $size = $_POST['ksize'];
    $tsoluong = $_POST['tsoluong'];

    
    $modelProduct = new ModelProduct();
    $r = $modelProduct->insertProduct($conn, $soban, $ngay, $loai, $mau, $size, $tsoluong);
    
    if($r == 1) {
        header("location:../view/homepage/homepage_input.php");
    } else {
        echo "Loi con me no roi";
    }
}




class HomepageController {
    public function index($conn, $search) {
        $model = new CathangModel();
        if ($search) {
            $data = $model->getCathangData($conn, $search);
        } else {
            $data = $model->getCathangData($conn, '');
        }
        return $data;
    }
}

?>
