<?php
    if(isset($data['abc'])){
      $abc = json_decode($data['abc']);
    //   echo $abc['name_vaitro'];
    //   var_dump($abc);
    //   echo $abc[0][0];
    //   echo $abc[0][1];
    // var_dump($abc[0][5]);
    // if($abc[0][5] != null){
        
    @$_SESSION['vaitro'] = $abc[0][1];
    // }else{
    //   $_SESSION['vaitro'] = 'USER';
    // }
    @$_SESSION['idUS'] = $abc[0][0];
    @$_SESSION['nameUS'] = strtoupper($abc[0][2]);
    @$_SESSION['urlUS'] = 'public/images/my-do-toa.jpeg';
    // var_dump($_SESSION);
  }
?>
<!-- <?php
    $today = date('Y-m-d');
    $a = date('d-m-Y',strtotime($today));
    echo is_string($a); // 1 là chuỗi
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <base href="http://localhost/da1/" target="_blank">
    <link rel="stylesheet" href="./public/css/style.css" />
    <link rel="icon" href="public/images/logo.png">
    <title>Đăng nhập & Đăng ký</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <!-- form login -->
                <form action="login/dangnhap" class="sign-in-form" target="_self" method="POST">
                    <a href="home" target="_self"><img src="public/images/logo_shop.png" width="300px" height="100px"
                            alt=""></a>
                    <?php
                    
                        if(isset($data['check'])){
                        $kq = json_decode($data['check']);
                        if($kq){
                            echo '<h2 class="title" style="color:red">Đăng nhập thành công!</h2>';
                            echo '<h2>Chuyển trang sau: <span id="num"></span>s.</h2>';
                            echo '
                            <script>
                            var x = 3;
                            function dem(){ 
                            x--;
                            if(x != 0){
                                document.getElementById("num").innerHTML= x;
                                setTimeout("dem()",1000);
                                }else{
                                    document.getElementById("num").innerHTML= "";
                                    window.location.href ="home";
                                }
                            }
                            dem();
                            </script>
                            ';
                        }else{
                            echo '<h2 class="title" style="color:red;">Đăng nhập thất bại!</h2>';
                        }
                        }
                    ?>
                    <?php
                        if(isset($data['a'])){
                            $check = json_decode($data['a']);
                            if($check){
                                echo '<h3 class="title" style="color:red;">Đăng ký thành công!</h3>';
                            }else{
                                echo '<h3 class="title" style="color:red;">Đăng ký thất bại!</h3>';
                            }
                        }
                    ?>

                    <h2 class="title">Đăng nhập</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Tài khoản" name="taikhoan" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Mật khẩu" name="password" />
                    </div>
                    <input type="submit" value="Đăng nhập" class="btn solid" name="btn-dangnhap" />
                    <p class="social-text">Hoặc Đăng nhập bằng các nền tảng xã hội</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                <!-- form dang ky -->
                <form action="login/dangky" class="sign-up-form" target="_self" method="POST">
                    <h2 class="title">Đăng ký</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Tài khoản" name="taikhoan" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Mật khẩu" name="password" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Họ và tên" name="name" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Địa chỉ" name="diachi" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="number" placeholder="Số điện thoại" name="sdt" />
                    </div>
                    <input type="submit" class="btn" value="Đăng ký" name="btn-dangky" />
                    <p class="social-text">Hoặc Đăng ký với các nền tảng xã hội</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Tạo tài khoản mới ở đây?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Đăng ký
                    </button>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Một trong số chúng tôi ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Đăng nhập
                    </button>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="./public/js/app1.js"></script>
</body>

</html>