
<?php
    if(isset($_POST['username']) && isset($_POST['password'])){
        require_once("../connection.php");
        require_once("../model/login_model.php");
        
        // $user = 'root';
        // $host = '127.0.0.1';
        // $password = ''; 
        // $dtb = 'mydtb'; 
        // $conn = new mysqli($host, $user, $password, $dtb);
        
        $acc = $_POST['username']; 
        $password = $_POST['password']; 
        $modelLogin = new Login_model();
        $result = $modelLogin->login($conn, $acc, $password);

        if ($result) {
            header("Location:../view/homepage/homepage_input.php");
            // echo "login";
        } else {
           header("location:../view/login/login_failed.php");
        }
    }
?>
