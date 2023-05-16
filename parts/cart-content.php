<?php session_start(); ?>
    <div class="c_card  animate__animated ">
        <div class="card_title d-flex mx-5 pt-4">
            <i class="fa-solid fa-cart-shopping pt-1 pe-2"></i>
            <p class="p-0 product_quantity"></p>
        </div>
        <?php
        if (empty($_SESSION['cart'])) {
        ?>
            <P class="text-white mx-5">購物車空空如也</P>
            <div class="card_btn px-5 d-flex justify-content-between mt-3">
            <a  class="back_btn me-4 position-relative text-decoration-none text-center d-flex justify-content-center align-items-center" href="#">
                    <svg class="back_btn_svg" width="283" height="50" viewBox="0 0 283 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 29.9232V19.0192L19.7723 0.5H31.1198L0.5 29.9232Z" stroke="#66FEE6"/>
                        <path d="M1.04062 49.5L52.0333 0.5H281.5V12.0381L242.515 49.5H1.04062Z" stroke="#66FEE6"/>
                        <path d="M281.501 49.5004H263.429L281.501 32.1348V49.5004Z" stroke="#66FEE6"/>
                    </svg>
                    
                </a>
            </div>
        <?php
        } else {
        ?>
            <div class="card_product_group mx-5 pe-1 ">
                <?php foreach ($_SESSION['cart'] as $item) : ?>
                    <?php $item['imgs-f'] = explode(',', $item['img']); ?>
                    <div class="p_card cart-item row py-3 gx-0" data-pid="<?= $item['sid'] ?>">
                        <div class="col-4  ">
                            <div class="card_img">
                                <img src="./imgs/products-imgs/<?= $item['brand'] ?>/<?= $item['imgs-f'][1] ?>" alt="">
                            </div>
                        </div>
                        <div class="col-7 px-2">
                            <div class="card_text ">
                                <p class="f_small f-md-p p_title pb-2 m-0"><?= $item['name'] ?></p>
                                <p class="f_small f-md-p p_color pb-2 m-0"><?= $item["color_zh"] ?></p>
                                <p class="f_small f-md-p p_price pb-2 m-0" data-val="<?= $item['price'] ?>"></p>
                                <p class="f_small f-md-p p_quantity pb-1 " data-qua="<?= $item['quantity'] ?>">數量 : <?= $item['quantity'] ?></p>
                            </div>
                        </div>
                        <div class="col-1 card_btn pt-2 text-center">
                            <a class="" href="javascript: removeItem(<?= $item['sid'] ?>)">
                                <i class="fa-solid fa-trash-can " style="color: #ffffff;"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <div class="card_detail mx-5 p-2 d-flex flex-column justify-content-between ">
                <div class="detail_group">
                    <div class="d-flex justify-content-between">
                        <p class="mb-1 text-black">商品總金額</p>
                        <p class="mb-1 totalPrice text-black"></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="mb-1 text-black">運費總金額</p>
                        <p class="mb-1"><span class="text-decoration-line-through text-black">NT.300</span>NT.0</p>
                    </div>
                    <div class="text-end">
                        <p class="mb-1 f_small text-black border text-black">5/1-5/31周年慶全館免運</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-3 border-top">
                    <p class="mb-1 text-black">應付總金額</p>
                    <p class="mb-1 totalPrice text-black"></p>
                </div>
            </div>
            <div class="card_btn px-5 d-flex justify-content-between mt-3">
                <a  class="back_btn me-4 position-relative text-decoration-none text-center d-flex justify-content-center align-items-center" href="#">
                    <svg class="back_btn_svg" width="283" height="50" viewBox="0 0 283 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 29.9232V19.0192L19.7723 0.5H31.1198L0.5 29.9232Z" stroke="#66FEE6"/>
                        <path d="M1.04062 49.5L52.0333 0.5H281.5V12.0381L242.515 49.5H1.04062Z" stroke="#66FEE6"/>
                        <path d="M281.501 49.5004H263.429L281.501 32.1348V49.5004Z" stroke="#66FEE6"/>
                    </svg>
                    
                </a>
                <a class="pay_btn position-relative text-decoration-none text-black d-flex justify-content-center align-items-center" href="cart1-1.php">
                    <svg class="pay_btn_svg" width="282" height="50" viewBox="0 0 282 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_825_12777)">
                            <path d="M19.571 0L0 18.8062V31.0971L32.3617 0H19.571Z" fill="#66FEE6"/>
                            <path d="M282 0H51.8321L0 49.8065V50H242.716L282 12.2511V0Z" fill="#66FEE6"/>
                            <path d="M281.999 30.9609L262.186 50.0004H281.999V30.9609Z" fill="#66FEE6"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_825_12777">
                                <rect width="282" height="50" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    
                </a>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="c_return animate__animated"></div>

   