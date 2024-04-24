<!-- data -->
<?php
    class ModelProduct {
        public function getAll($conn) {
            $sql = "SELECT * FROM cathang";
            $result = $conn->query($sql);
            return $result;
        }
        public function insertProduct($conn, $soban, $ngay, $loai, $mau,$size, $tsoluong) {
            $sql = "INSERT INTO cathang (so_ban, ngay, loai, mau, ksize, tongsl) 
            VALUES ($soban,'$ngay', '$loai', '$mau', '$size', $tsoluong)";
            $result = $conn->query($sql); // Thuc hien cau lenh $sql va tra ve true/false va gan ve $result
            if($result) {
                return 1;
            } else {
                return 0;
            }
        }

        public function updateProduct($conn, $id, $soban, $ngay, $loai, $mau, $size, $tsoluong) {
            $sql = "UPDATE cathang SET so_ban= $soban, ngay='$ngay', loai='$loai', mau='$mau', ksize='$size', tongsl='$tsoluong' WHERE id='$id'";
            $result = $conn->query($sql); // Thuc hien cau lenh $sql va tra ve true/false va gan ve $result
            if($result) {
                return 1;
            } else {
                return 0;
            }
        }
    }

    // search and sort function
 
    class CathangModel {
        public function getCathangData($conn, $search) {
            $query = "SELECT * FROM cathang WHERE so_ban = '$search'";
            // if ($search) {
            //     $query .= " WHERE so_ban = '$search'";
            // }
            $result = mysqli_query($conn, $query); // true/false
            while ($row = mysqli_fetch_assoc($result)) {
                return $row;
            }
        }
    }
    
    
?>
        
    
    <?php
    // if (isset($_GET['search'])) { {
    //     $sql = "SELECT * FROM cathang";
    //     $result = $conn->query($sql);
    //     return $result;}}
    // else 
    ?>