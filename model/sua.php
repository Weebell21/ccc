<?php
    $id = $_GET['sid'];
    require_once '../connection.php';

    $sua_sql = "SELECT * FROM cathang WHERE id=$id";
    $result = mysqli_query($conn,$sua_sql);
    $row = mysqli_fetch_assoc($result);
?>
<!-- <!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Homepage</title>
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg-dark-subtle text-dark-emphasis shadow body-tertiary rounded" style="height: 100px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row sidebar h-100 ">
            <nav class="col-md-2 d-none d-md-block bg-body-secondary sidebar h-100" style=" max-height: 100%;">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column" style="padding-bottom: 50px;">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <li class="bi bi-house"></li>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <li class="bi bi-speedometer2"></li>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <li class="bi bi-table"></li>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <li class="bi bi-people"></li>
                                Customers
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-md-2">
<div class="container mx-my-4">
      <form action="./update.php" method="post">
        <div class="row">
            <input type="" name="id" value="<?php echo $id ?>" hidden>
          <div class=" mb-my-4">    
            <label for="input1" class="form-label">Số Bàn</label>
            <input type="text" class="form-control" id="soban" name="soban" value="<?php echo $row['so_ban']?>" required>
          </div>
          <div class=" mb-my-4">
            <label for="input2" class="form-label">Ngày</label>
            <input type="date" class="form-control" id="ngay" name="ngay" value="<?php echo $row['ngay']?>" required>
          </div>
          <div class="mb-my-4">
            <label for="input3" class="form-label">Loại</label>
            <select type="text" class="form-control" id="loai" name="loai" value="<?php echo $row['loai']?>" required>
                <option value="com">Cơm</option>
                <option value="pho">Phở</option>
                <option value="Bun">Bún</option>
                <option value="4"></option>
            </select>
          </div>
          <div class=" mb-my-4">
            <label for="input4" class="form-label">Mẫu</label>
            <input type="text" class="form-control" id="mau" name="mau" value="<?php echo $row['mau']?>" required>
          </div>
          <div class=" mb-my-4">
                <label for="input4" class="form-label">Size</label>
                <input type="text" class="form-control" id="ksize" name="ksize" value="<?php echo $row['ksize']?>" required>
            </div>
          <div class=" mb-my-4">
            <label for="input5" class="form-label">Số lượng</label>
            <input type="text" class="form-control" id="tsoluong" name="tsoluong" value="<?php echo $row['tongsl']?>" required>
          </div>
          <div class="col-5 py-3 ">
            <button type="submit" class="btn btn-primary btn-lg mb-my-4">Thêm</button>
          </div>
        </div>
      </form>
    </div>
        </div>
    </div>
</main>
</body>
</html> -->































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
                      Nhập
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Cắt Hàng</a></li>
                      <li><a class="dropdown-item" href="#">May Gia Công</a></li>
                      <li><a class="dropdown-item" href="#">Kho Hàng</a></li>
                      <li><a class="dropdown-item" href="#">Xuất Hàng</a></li>
                    </ul>
                  </div>
                  <!-- </li> -->
                  <!-- <li class="nav-item px-3"> -->
                    <div class="dropdown px-3">
                        <button class="btn btn-outline-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Xuất
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Cắt Hàng</a></li>
                          <li><a class="dropdown-item" href="#">May Gia Công</a></li>
                          <li><a class="dropdown-item" href="#">Kho Hàng</a></li>
                          <li><a class="dropdown-item" href="#">Xuất Hàng</a></li>
                        </ul>
                      </div>
                      <!-- <h4><a class="nav-link" href="#">Liên Hệ</a></h4> -->
                    </div>    
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 mb-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bảng Dữ Liệu</h5>
                        <div class="table-responsive px-3 py-3">
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
                                <!-- <th scope="col">Header</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th> -->
                            </tr>   
                        </thead>
                        <tbody>
                            <tr>

                            <?php 
            require_once '../connection.php';
    $lietke_sql = "SELECT * FROM cathang"; 
    // -- order by tensp, loai, donvi, soluong, dongia, tong";
    $result = mysqli_query($conn, $lietke_sql);
    while ($r = mysqli_fetch_assoc($result)){?>
                <td><?php echo $r['so_ban'];?></td>
                <!-- <td><?php echo $r['soban'];?></td> -->
                <td><?php echo $r['ngay'];?></td>
                <td><?php echo $r['loai'];?></td>
                <td><?php echo $r['mau'];?></td>
                <td><?php echo $r['ksize'];?></td>
                <td><?php echo $r['tongsl'];?></td>
                <td>
          <!-- <a onclick="return confirm('Bạn có chắc chắn xóa dữ liệu');" href="../../model/xoa.php?sid=<?php echo $r['STT'];?>">Xóa</a> -->
                    <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa dữ liệu');" href="../../model/xoa.php?sid=<?php echo $r['id'];?>">Xóa</a>
         <!-- <a onclick="return confirm('Bạn có chắc chắn sửa dữ liệu');" href="../../model/sua.php?sid=<?php echo $r['STT'];?>">Sửa</a> -->
                   <a class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn sửa dữ liệu');" href="../../model/sua.php?sid=<?php echo $r['id'];?>">Sửa</a>
                </td>
                    </tr>
                    <?php }?>
                    </tbody>
                    </table>
                </div>
                        </div>
                    </div>
                </div>
                <!--input -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nhập Dữ Liệu</h5>
                            <div class="container mx-my-4">
      <form action="update.php" method="post">
        <div class="row">
            <input type="" name="id" value="<?php echo $id ?>" hidden>
          <div class=" mb-my-4">    
            <label for="input1" class="form-label">Số Bàn</label>
            <input type="text" class="form-control" id="soban" name="soban" value="<?php echo $row['so_ban']?>" required>
          </div>
          <div class=" mb-my-4">
            <label for="input2" class="form-label">Ngày</label>
            <input type="date" class="form-control" id="ngay" name="ngay" value="<?php echo $row['ngay']?>">
          </div>
          <div class="mb-my-4">
            <label for="input3" class="form-label">Loại</label>
            <select type="text" class="form-control" id="loai" name="loai" value="<?php echo $row['loai']?>" required>
                        <option></option>
                        <option value="Kaki">Kaki</option>
                        <option value="Jean">Jean</option>
                        <option value="Kaki nhí">Kaki Nhí</option>
                        <option value="Jean Nhí">Jean Nhí</option>
            </select>
          </div>
          <div class=" mb-my-4">
            <label for="input4" class="form-label">Mẫu</label>
            <input type="text" class="form-control" id="mau" name="mau" value="<?php echo $row['mau']?>" required>
          </div>
          <div class=" mb-my-4">
                <label for="input4" class="form-label">Size</label>
                <input type="text" class="form-control" id="ksize" name="ksize" value="<?php echo $row['ksize']?>" required>
            </div>
          <div class=" mb-my-4">
            <label for="input5" class="form-label">Số lượng</label>
            <input type="text" class="form-control" id="tsoluong" name="tsoluong" value="<?php echo $row['tongsl']?>" required>
          </div>
          <div class="col-5 py-3 ">
            <button type="submit" class="btn btn-primary btn-lg mb-my-4">Thêm</button>
          </div>
        </div>
      </form>
    </div>  
                        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bao gồm thư viện Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

