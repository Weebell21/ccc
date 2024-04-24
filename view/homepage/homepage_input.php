<?php
    require("../../controller/homepage_controller.php");
    require("../../connection.php");
    require('../../model/homepage_model.php') ;

    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $modelSearch = new HomepageController();
        $array_search = $modelSearch->index($conn, $search);
    }
?>

<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang Chủ</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height: 100px;">
    <div class="container">
    <a class="navbar-brand" href="#">Trang Chủ</a>
        <div class="collapse justify-content-end navbar-collapse navbar-nav" id="navbarNav">
        <div class="dropdown px-3">
            <button class="btn btn-outline-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Công Đoạn
            </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Cắt Hàng</a></li>
                    <li><a class="dropdown-item" href="homepage_mgc.php">May Gia Công</a></li>
                    <li><a class="dropdown-item" href="#">Kho Hàng</a></li>
                    <li><a class="dropdown-item" href="#">Xuất Hàng</a></li>
                </ul>
        </div>
        </div>    
    </div>
</nav>

<!-- Content -->
<div class="container mt-5" >
    <div class="row">
    <div class="col-md-8 mb-0">
        <div class="card m-2">
        <div class="card-body">
            <div class="row text-center">
            <h5 class="card-title col-4  align-middle" style="padding:5px">Bảng Cắt Hàng</h5>
            <!-- function tìm kiếm -->
                <form method="get" action="" class="card-title col ">
                    <label class="form-label">Tìm bàn cắt</label>
                    <input class="" type="text" name="search" value=""/> 
                    <button type="submit" class="btn btn-outline-secondary">Tìm</button>
                </form>
            </div>
            <!-- end tìm kiếm -->
        <div class="table-responsive px-3 py-3" style="max-height: 380px; overflow-x: auto;">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                    <th scope="col">Số bàn</th>
                    <th scope="col">Thời gian</th>
                    <th scope="col">Loại</th>
                    <th scope="col">Mẫu</th>
                    <th scope="col">Size</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Chức năng</th>
                    </tr>   
                </thead>
                <tbody>
                    <tr>
                    <?php 
                        if($array_search) { ?>
                            <td><?php echo $array_search['so_ban'];?></td>
                            <td><?php echo $array_search['ngay'];?></td>
                            <td><?php echo $array_search['loai'];?></td>
                            <td><?php echo $array_search['mau'];?></td>
                            <td><?php echo $array_search['ksize'];?></td>
                            <td><?php echo $array_search['tongsl'];?></td>
                            <td>
                                <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa dữ liệu');" href="../../model/xoa.php?sid=<?php echo $array_search['id'];?>">Xóa</a>
                                <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn sửa dữ liệu');" href="../../model/sua.php?sid=<?php echo $array_search['id'];?>">Sửa</a>
                            </td>
                        <?php } else { ?>
                        <?php
                            $sql = "SELECT * FROM cathang";
                            $result = $conn->query($sql);
                            while($r = $result->fetch_assoc()) { ?>
                                <td><?php echo $r['so_ban'];?></td>
                                <td><?php echo $r['ngay'];?></td>
                                <td><?php echo $r['loai'];?></td>
                                <td><?php echo $r['mau'];?></td>
                                <td><?php echo $r['ksize'];?></td>
                                <td><?php echo $r['tongsl'];?></td>
                                <td>
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa dữ liệu');" href="../../model/xoa.php?sid=<?php echo $r['id'];?>">Xóa</a>
                                    <!-- <a onclick="return confirm('Bạn có chắc chắn sửa dữ liệu');" href="../../model/sua.php?sid=<?php echo $r['STT'];?>">Sửa</a> -->
                                    <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn sửa dữ liệu');" href="../../model/sua.php?sid=<?php echo $r['id'];?>">Sửa</a>
                                </td>
                                    
                            
                        <!-- <a onclick="return confirm('Bạn có chắc chắn xóa dữ liệu');" href="../../model/xoa.php?sid=<?php echo $r['STT'];?>">Xóa</a> -->
                    </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
        </div>
        </div>  
    </div>



    <!-- input -->
    <div class="col-md-4">
    <div class="card">
    <div class="card-body">
    <h5 class="card-title">Nhập Cắt Hàng</h5>
        <form action="../../controller/homepage_controller.php" method="post">
            <div class="row">
                <div class=" mb-my-4">
                    <label for="input1" class="form-label">Số Bàn</label>
                    <input type="text" class="form-control" id="soban" name="soban" required>
                </div>
                    <div class=" mb-my-4">
                    <label for="input2" class="form-label">Ngày</label>
                    <input type="date" class="form-control" id="ngay" name="ngay" required>
                </div>
                    <div class="mb-my-4">
                    <label for="input3" class="form-label">Loại</label>
                    <select type="text" class="form-control" id="loai" name="loai" required>
                    <option></option>
                    <option value="Kaki">Kaki</option>
                    <option value="Jean">Jean</option>
                    <option value="Kaki nhí">Kaki Nhí</option>
                    <option value="Jean Nhí">Jean Nhí</option>
                    </select>
                </div>
                    <div class=" mb-my-4">
                    <label for="input4" class="form-label">Mẫu</label>
                    <input type="text" class="form-control" id="mau" name="mau" required>
                    </div>
                    <div class=" mb-my-4">
                    <label for="input4" class="form-label">Size</label>
                    <input type="text" class="form-control" id="ksize" name="ksize" required>
                   </div>
                    <div class=" mb-my-4">
                    <label for="input5" class="form-label">Số lượng</label>
                    <input type="text" class="form-control" id="tsoluong" name="tsoluong" required>
                    </div>
            </div>
                    <div class="col-5 py-3 ">
                    <button type="submit" class="btn btn-primary btn-lg mb-my-4">Thêm</button>
                    </div>
        </form>
    </div>
    </div>
    </div>  
    </div>  
</div>
</body>
</html>
