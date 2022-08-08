<?php 
    if(isset($data['click_honda'])){ 
        $arrHD = json_decode($data['click_honda']);
        // var_dump($arrHD);
    }
?>
<div class="row">
    <?php              
        if(is_array($arrHD) || is_object($arrHD)){       
            foreach($arrHD as $key => $hd){ ?>
    <!-- item -->

    <div class="product-item card-pd col-6 col-md-6 col-lg-4 text-center">
        <div class="item-info mb-3 p-2 border-s position-relative">
            <!-- Không được xoá đoạn code comment dưới này !!! -->
            <!-- <div class="tag-item position-absolute top-5 start-10">
                            <div class="discout-item mb-1">
                                <span> - 10% </span>
                            </div>
                            <div class="new-item mb-1">
                                <span> Mới </span>
                            </div>
                        </div> -->
            <div class="img-thumbnail">
                <img class="mw-100" height="" src="public/images/<?= $hd[16] ?>" alt="">
            </div>
            <div class="mb-2 mt-2">
                <div class="product-name">
                    <a class="fs-5" href="spct/sayhi/<?= $hd[0] ?>" target="_self">
                        <?= $hd[1] ?>
                    </a>
                </div>
                <div class="product-cate">
                    <span><?= $hd[18] ?></span>
                </div>
                <div class="product-price">
                    Giá: <span><?= $hd[2] ?></span>
                </div>
                <div class="product-nsx">
                    <Span><?= $hd[17] ?></Span>
                </div>
                <div class="product-info">
                    Mô tả:
                    <Span>
                        <?= $hd[7] ?>
                    </Span>
                </div>
            </div>


            <div class="product-btn d-flex justify-content-around">
                <a class="btn buy fs-4" href="cart" target="_self">
                    <i class="bi bi-cart"></i>
                </a>
                <a class="btn follow fs-4" href="#">
                    <i class="bi bi-suit-heart-fill"></i>
                </a>
                <a class="btn view fs-4" href="spct/sayhi/<?= $hd[0] ?>" target="_self">
                    <i class="bi bi-eye-fill"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- end item -->
    <?php     
            }
        }else{
            echo '<h1>Không tìm thấy sản phẩm nèo :((</h1>';
        }
?>
</div>