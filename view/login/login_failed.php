<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container-lg">
<div class="row justify-content-center" style="padding-top: 80px;">
<div class="col-md-4">
<div class="card mt-5">
<div class="card-header text-center" style="background-color: #5E72EB;color: white;">
            <h3>ĐĂNG NHẬP</h3>
        </div>
        <div class="card-body form-control-lg">
            <div>
            <form action="../../controller/login_controller.php" method="post">
                <div class="mb-3">
                    <label class="form-label" for="username">Số điện thoại</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Mật Khẩu</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <h6 class="form-label text-center" style="color: red;">Sai mật khẩu hoặc tài khoản</h6>
                <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg btn-bubble">Đăng Nhập</button>
                </div>
            </form>
            </div>
        </div>
</div>
</div>
</div>
</div>
</body>
</html>

<style>
    .btn-bubble:hover {
  background-color: #007bff;
  border-color: #007bff;
  box-shadow: 0 0 0 0.2rem rgba(183, 28, 28, 0.5);
}

.btn-bubble:hover::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  right: -50%;
  bottom: -50%;
  z-index: -1;
  border-radius: 50%;
  border: 1px solid #007bff;
  opacity: 0;
  transition: all 0.5s ease;
}

.btn-bubble:hover::after {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  right: -50%;
  bottom: -50%;
  z-index: -1;
  border-radius: 50%;
  border: 1px solid #007bff;
  opacity: 0;
  transition: all 0.5s ease;
  animation: bubble-animation 2s infinite;
}

@keyframes bubble-animation {
  0% {
    transform: scale(1);
    opacity: 0.5;
  }
  50% {
    transform: scale(2);
    opacity: 0.2;
  }
  100% {
    transform: scale(1);
    opacity: 0.5;
  }
}
</style>