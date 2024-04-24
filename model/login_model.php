<?php 

    class Login_model {
        public function login($conn, $acc, $password,) {
            $sql = "SELECT * FROM taikhoan WHERE account = '$acc' AND pass = '$password'";
            if($result = $conn->query($sql)) {
                $r = mysqli_num_rows($result);
            };
             return $r;
        }
    }
?>