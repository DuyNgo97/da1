<!DOCTYPE html>
<html>

<head>
    <title>Giỏ hàng </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href=" https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <base href="http://localhost/da1/" target="_blank">
    <link rel="icon" href="public/images/logo.png">
    <!-- Boostrap -->
    <link rel="stylesheet" type="text/css" href="public/css/main.css">


    <!-- Boostrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
    <?php
	require_once 'mvc/views/body/header.php'
	?>
    <main class="page-cart">
        <section class="shopping-cart dark">
            <div class="container">
                <div class="block-heading">
                    <h2>GIỎ HÀNG</h2>
                    <p>Mua thì mua không mua thì mua </p>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                <div class="product">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="img-fluid mx-auto d-block image"
                                                src="public/images/den-bi-xenon4.jpg">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="info">
                                                <div class="row">
                                                    <div class="col-md-5 product-name">
                                                        <div class="product-name">
                                                            <a href="#">Isuzu D max 2022 hilander neww</a>
                                                            <div class="product-info">
                                                                <div>Hãng :<span class="value">Isuzu</span></div>
                                                                <div>Số :<span class="value">Tự động</span></div>
                                                                <div>Sản xuất :<span class="value">2022</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 quantity">
                                                        <label for="quantity">Số lượng:</label>
                                                        <input id="quantity" type="number" value="1"
                                                            class="form-control quantity-input">
                                                            <a href="#" target="_self"><button type="button"
                                            class="delete mt-2 btn btn-danger">
                                            Xóa</button></a>
                                                    </div>
                                                    <div class="col-md-3 price">
                                                        <span>5.000.000.000 VND</span>
                                                    </div>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="img-fluid mx-auto d-block image"
                                                src="public/images/den-bi-xenon4.jpg">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="info">
                                                <div class="row">
                                                    <div class="col-md-5 product-name">
                                                        <div class="product-name">
                                                            <a href="#">Isuzu D max 2022 hilander neww</a>
                                                            <div class="product-info">
                                                                <div>Hãng :<span class="value">Isuzu</span></div>
                                                                <div>Số :<span class="value">Tự động</span></div>
                                                                <div>Sản xuất :<span class="value">2022</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 quantity">
                                                        <label for="quantity">Số lượng:</label>
                                                        <input id="quantity" type="number" value="1"
                                                            class="form-control quantity-input">
                                                            <a href="#" target="_self"><button type="button"
                                            class="delete mt-2 btn btn-danger">
                                            Xóa</button></a>
                                                    </div>
                                                    <div class="col-md-3 price">
                                                        <span>5.000.000.000 VND</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img class="img-fluid mx-auto d-block image"
                                                src="public/images/den-bi-xenon4.jpg">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="info">
                                                <div class="row">
                                                    <div class="col-md-5 product-name">
                                                        <div class="product-name">
                                                            <a href="#">Isuzu D max 2022 hilander neww</a>
                                                            <div class="product-info">
                                                                <div>Hãng :<span class="value">Isuzu</span></div>
                                                                <div>Số :<span class="value">Tự động</span></div>
                                                                <div>Sản xuất :<span class="value">2022</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 quantity">
                                                        <label for="quantity">Số lượng:</label>
                                                        <input id="quantity" type="number" value="1"
                                                            class="form-control quantity-input">
                                                            <a href="#" target="_self"><button type="button"
                                            class="delete mt-2 btn btn-danger">
                                            Xóa</button></a>    
                                                    </div>
                                                    <div class="col-md-3 price">
                                                        <span>5.000.000.000 VND</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="summary-main col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Tổng thanh toán</h3>
                                <div class="summary-item"><span class="text">Tổng phụ</span><span
                                        class="price">15.000.000.000 VND</span></div>
                                <div class="summary-item"><span class="text">Giảm giá</span><span class="price">0
                                        VND</span></div>
                                <div class="summary-item"><span class="text">Phí vận chuyển</span><span
                                        class="price">2.000.000.000 VND</span></div>
                                <div class="summary-item"><span class="text">Tổng cộng</span><span
                                        class="price">17.000.000.000 VND</span></div>
                                <div class="btn-b">
                                    <a href="checkout" target="_self"><button type="button"
                                            class="btn btn-primary btn-lg btn-block" style="background-color:#198754 ;">
                                            Thanh toán</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

<?php
include 'body/footer.php';
?>

</html>