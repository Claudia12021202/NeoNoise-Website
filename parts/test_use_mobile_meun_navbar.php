<?php
if (!isset($pageName)) {
    $pageName = '';
}
?>

<style>
    :root {
        --dark: #292560;
        --light: #66fee6;
        --pink: #f595f0;
        --gray: #dfdfdf;
        --white: #ffffff;
        --black: #000000;
    }

    /* navbar css 開始*/


    /* body{
    background-color: rgba(41, 37, 96, 1);
    } */

    /* header {
    background-color: #292560;

    } */

    .navbar_all {
        /* font-family: 'Noto Sans TC'; */
        /* font-weight: 100; */
        letter-spacing: 1px;
    }

    .control_scaling_wrap {
        height: 40px;
        width: 40px;
        cursor: pointer;
    }

    .control_scaling_icon {

        font-size: 24px;
        color: rgb(255, 255, 255);
        /* width: 24px !important;
        height: 24px !important; */

    }


    .logo {
        height: 40px;
        width: 40px;
        background-color: white;

    }

    .logo-icon {
        font-size: 24px;
        color: rgb(0, 0, 0);
        /* width: 24px !important;
        height: 24px !important; */
        width: 32px !important;
        height: 32px !important;
    }

    .navbar_all {
        position: fixed;
        top: 0px;
        left: 0px;
        z-index: 999;
        transition: all 0.5s ease;
    }

    /* Eddie : 手機版隱藏按鈕 */
    .navbar_all.hidden {
        transform: translateX(calc(100% - 79px));
    }

    .navbar-glass {
        background-color: hsla(0, 0%, 100%, 0.064) !important;
        backdrop-filter: blur(5px) !important;
        /* border-top: 1px solid hsla(0,0%,100%,.1); */
        border-bottom: 1px solid hsla(0, 0%, 100%, .1);

    }

    .navbar_button {
        font-size: 16px !important;
        /* background-color: hsla(0, 0%, 100%, 0.064) !important;
        backdrop-filter:blur(5px) !important;  */

    }

    .navbar_button_icon {
        font-size: 16px !important;
        width: 5.3333333% !important;

    }

    .border-line-left {
        border-left: 1px solid hsla(0, 0%, 100%, .1);
    }



    /* navbar 控制橫幅 開始 */


    /* Eddie : 電腦版隱藏按鈕 */
    @media screen and (min-width:768px) {

        .navbar_all {
            margin-top: 10px;
            height: 40px !important;
            padding-left: 130px;
            padding-right: 130px;

        }

        .navbar_all.hidden {
            transform: translateX(calc(100% - 211px));
            /* transform: calc() translateX(); */
        }
    }

    /* navbar 控制橫幅 結束 */

    /* 手機板 漢堡打開選單 開始 */
    .hamburger {
        width: 22px;
        height: 23px;
        position: relative;
        cursor: pointer;
        /* display: inline-block; */
        z-index: 100;
    }

    .hamburger span {
        background: #fff;
        display: block;
        position: absolute;
        height: 2.3px;
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-transition: all .25s cubic-bezier(0.22, 0.61, 0.36, 1);
        -moz-transition: all .25s cubic-bezier(0.22, 0.61, 0.36, 1);
        -o-transition: all .25s cubic-bezier(0.22, 0.61, 0.36, 1);
        transition: all .25s cubic-bezier(0.22, 0.61, 0.36, 1);
        opacity: 1;
        width: 100%;
        left: 0;
    }

    .hamburger span:nth-child(1) {
        top: 0px;
    }

    .hamburger span:nth-child(2) {
        top: 8px;
    }

    .hamburger span:nth-child(3) {
        top: 16px;
    }

    .hamburger.open span:nth-child(1) {
        top: 9px;
        -webkit-transform: rotate(135deg);
        -moz-transform: rotate(135deg);
        -o-transform: rotate(135deg);
        transform: rotate(135deg);
    }

    .hamburger.open span:nth-child(2) {
        opacity: 0;
        left: -60px;
    }

    .hamburger.open span:nth-child(3) {
        top: 9px;
        -webkit-transform: rotate(-135deg);
        -moz-transform: rotate(-135deg);
        -o-transform: rotate(-135deg);
        transform: rotate(-135deg);
    }

    /* 點擊事件 */

    .menu-overlay {
        position: fixed;
        left: 0;
        top: -200vw;
        width: 100%;
        height: 100vh;
        background: #292560;
        opacity: 0;
        visibility: visible;
        z-index: 111 !important;
        text-align: center;
        display: table;
        -webkit-transition: visibility 0.5s ease, opacity 1s ease;
        -moz-transition: visibility 0.5s ease, opacity 1s ease;
        -o-transition: visibility 0.5s ease, opacity 1s ease;
        transition: visibility 0.5s ease, opacity 1s ease;
        /* display: none; */
    }

    .menu-overlay.open {
        opacity: 1;
        /* display: block; */
        top: 0px;
        visibility: visible;
    }

    .nav {
        display: block;
        position: relative;
        top: 50%;
        transform: translateY(-50%);




    }

    .nav li {
        margin: 20px 0;
        -moz-transform: translateY(-40px);
        -webkit-transform: translateY(-40px);
        transform: translateY(-40px);
        opacity: 0;
        /* display: none; */

        -webkit-transition: all 0.4s ease;
        -moz-transition: all 0.4s ease;
        transition: all 0.4s ease;
    }

    .open .nav li {
        -moz-transform: translateY(0);
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
        /* display: block; */


    }

    .open .nav li:nth-child(1) {
        -webkit-transition-delay: 100ms;
        transition-delay: 100ms;
    }

    .open .nav li:nth-child(2) {
        -webkit-transition-delay: 200ms;
        transition-delay: 200ms;
    }

    .open .nav li:nth-child(3) {
        -webkit-transition-delay: 300ms;
        transition-delay: 300ms;
    }

    .open .nav li:nth-child(4) {
        -webkit-transition-delay: 400ms;
        transition-delay: 400ms;
    }

    .open .nav li:nth-child(5) {
        -webkit-transition-delay: 500ms;
        transition-delay: 500ms;
    }

    .open .nav li:nth-child(6) {
        -webkit-transition-delay: 600ms;
        transition-delay: 600ms;
    }

    .open .nav li:nth-child(7) {
        -webkit-transition-delay: 700ms;
        transition-delay: 700ms;
    }

    .open .nav li:nth-child(8) {
        -webkit-transition-delay: 800ms;
        transition-delay: 800ms;
    }

    .nav a {
        display: block;
        color: #fff;
        font-size: 24px;
        text-decoration: none;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .nav a:hover {
        opacity: 0.6;
    }

    .menu-overlay {
        font-family: 'Noto Sans TC', sans-serif;
        font-weight: 100;
        letter-spacing: 2.5px;
    }





    /* 服務項目彈跳其他分頁 開始*/

    .service_items_action ul {
        width: 100% !important;
        /* position: absolute;
        top: 34px; */

    }

    .service_items_action02 ul {
        width: 100% !important;
        /* position: absolute;
        top: 34px; */

    }

    /* 服務項目彈跳其他分頁 結束*/


    /* navbar css 結尾 */




    /* -----------------------購物車視窗開始 --------------------------------*/
    .cart_window {
        position: absolute;
        z-index: 1;
        right: 130px;
        top: 50px;
        width: calc(600/1920*100vw);
        min-width: 453px;
        aspect-ratio: 10/12;
        margin-left: auto;
        overflow: hidden;
        display: none;

    }

    .c_card {
        width: 95%;
        height: 100%;
        background: url(imgs/pon/cart_window_card.svg) no-repeat;
        background-size: contain;
        transition: 0.5s;
        overflow: hidden;
        /* transform: translate3d(100%,0,0); */

    }

    .c_return {
        position: absolute;
        right: 0;
        top: 0;
        width: 6%;
        height: 98%;
        background: url(imgs/pon/cart_window_return.svg) no-repeat;
        background-size: cover;
        /* transform: translate3d(0,-100%,0); */
    }

    .f_small {
        font-family: 'Chakra Petch';
        font-style: normal;
        font-weight: 400;
        font-size: calc(12/1920*100vw);
        line-height: 16px;
        margin: 0;
        color: #ffffff;
    }

    .card_title {
        color: var(--light);
        border-bottom: var(--light)1px solid;
    }

    .card_product_group {
        height: 50%;
        overflow-y: scroll;
        position: relative;
    }

    .card_product_group::-webkit-scrollbar {
        width: 6px;
    }

    /* Track */
    .card_product_group::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    .card_product_group::-webkit-scrollbar-thumb {
        background: var(--pink);
    }

    /* Handle on hover */
    .card_product_group::-webkit-scrollbar-thumb:hover {
        background: var(--pink);
    }

    .p_card {
        height: 50%;
        border-bottom: var(--light) 1px solid;
    }

    .card_img {
        width: 100%;
        aspect-ratio: 1/1;
        background-color: var(--white);
    }

    .card_img img {
        width: 100%;
        height: 100%;
        object-fit: contain;

    }

    .card_detail {
        height: 25%;
        background-color: var(--white);
        font-weight: 700;
    }

    .card_btn {
        height: 6%;
    }

    .cart_window .pay_btn {
        width: 50%;
        background: url(imgs/pon/main_button.svg) no-repeat;
        background-size: contain;
        color: var(--light);
    }

    a:visited {
        color: var(--light);
    }

    .cart_window .back_btn {
        width: 50%;
        background: url(imgs/pon/main_button_empty.svg) no-repeat;
        background-size: contain;
    }

    /* ----------------------------購物車style結束------------------------------------------------ */
</style>



<!-- header -->
<header class="">

    <div class="container-fluid navbar_all gx-0  " id="control_navbar_all">

        <div class="row gx-0 navbar-glass  ">

            <div
                class="col-12 d-flex align-items-center   justify-content-md-center align-items-md-center text-md-center  ">


                <div class="border-line-left d-none d-md-block" style="width: 1px; height: 100%;"> </div>

                <div onclick="navbarMove();return false;"
                    class="col-auto control_scaling_wrap  d-flex align-items-center justify-content-center">
                    <a class="control_scaling">
                        <i class="bi bi-chevron-double-right control_scaling_icon"></i>

                    </a>

                    <a class="control_scaling_change">
                        <i class="bi bi-chevron-double-left  control_scaling_icon" style="display: none;"></i>
                    </a>
                </div>

                <div class="col-auto logo   d-flex align-items-center justify-content-center ">
                    <!-- <a href="#" class="logo-icon"><i class="fa-solid fa-bolt m-0  "></i></a> -->
                    <a href="./homepage.php" class="text-dark ">
                        <!-- <img src="./imgs/neo/bolt-solid.svg" alt="" class=" logo-icon"> -->
                        <!-- <i class="fa-solid fa-bolt logo-icon"></i> -->
                        <img src="./imgs/neo/no-background05.svg" alt="" class="logo-icon ">

                    </a>
                </div>

                <div class=" col-auto col-xl-5  frost ">


                </div>


                <div class="border-line-left d-none d-md-block" style="width: 1px; height: 100%;"> </div>
                <div class="col navbar_button d-none d-md-inline ">

                    <ul class="m-0  list-unstyled  ">
                        <li class="m-0">
                            <a href="./product-list-ajax.php" class="text-decoration-none text-white  ">電吉他</a>
                        </li>
                    </ul>
                </div>
                <div class="border-line-left d-none d-md-block" style="width: 1px; height: 100%;"> </div>


                <div class="col navbar_button d-none d-md-inline ">
                    <ul class="m-0 list-unstyled">
                        <li class="m-0">
                            <a href="./Recommend_Game.php" class="text-decoration-none text-white  ">推薦系統</a>
                        </li>
                    </ul>
                </div>
                <div class="border-line-left d-none d-md-block" style="width: 1px; height: 100%;"> </div>

                <div class="col navbar_button d-none d-md-inline">
                    <ul class="m-0 list-unstyled">
                        <li class="m-0">
                            <a href="./Customized_Guitar.php" class="text-decoration-none text-white  ">客製系統</a>
                        </li>
                    </ul>
                </div>
                <div class="border-line-left d-none d-md-block" style="width: 1px; height: 100%;"> </div>


                <div class="col navbar_button d-none d-md-inline">
                    <ul class="m-0 list-unstyled">
                        <li class="m-0">
                            <a href="./accessory-list-ajax.php" class="text-decoration-none text-white  ">配件</a>
                        </li>
                    </ul>
                </div>
                <div class="border-line-left d-none d-md-block" style="width: 1px; height: 100%;"> </div>

                <div class="col navbar_button d-none d-md-inline position-relative">
                    <ul class="m-0 list-unstyled ">
                        <li class="m-0 service_items">
                            <a href="#" class="text-decoration-none text-white "
                                onclick="neoitems();return false;">服務項目</a>
                        </li>
                        <!-- <li class="m-0 position-absolute " style="top: 40px ; left: 0px ;">
                            <a href="#" class="text-decoration-none text-white  ">自行保養</a>
                        </li>
                        <li class="m-0 position-absolute  " style="top: 80px; left: 0px; ">
                            <a href="#" class="text-decoration-none text-white  ">送件維修</a>
                        </li> -->
                    </ul>

                    <div class=" service_items_action" id="service_items_action01" style="display: none;">
                        <ul class="col m-0 list-unstyled position-absolute service_items01  navbar-glass d-flex flex-column align-items-center justify-content-center"
                            style="top: 32px; left: 0; height: 40px; width: 140px; ">

                            <li class="m-0 d-flex align-items-center " style="height: 40px;">
                                <a href="./neo_ article_list.php" class="text-decoration-none text-white  ">自行保養</a>
                            </li>

                        </ul>

                        <ul class="col m-0 list-unstyled position-absolute service_items02 navbar-glass d-flex flex-column align-items-center justify-content-center"
                            style="top: 72px; left: 0; height: 40px; width: 140px; ">

                            <li class="m-0 d-flex align-items-center" style="height: 40px;">
                                <a href="./neo_form_repair.php" class="text-decoration-none text-white  ">送件維修</a>
                            </li>

                        </ul>
                    </div>


                </div>



                <div class="border-line-left d-none d-md-block" style="width: 1px; height: 100%;"> </div>


                <div class="col-auto    col-md-1  navbar_button_icon ms-auto position-relative">

                    <ul class="m-0 list-unstyled ">

                        <li class="m-0">
                            <a href="#" class=" text-white  fs-5  " onclick="neoitemsmember();return false;">
                                <i class="fa-solid fa-user"></i>
                            </a>

                        </li>

                    </ul>

                    <div class=" service_items_action02" id="service_items_action02" style="display: none;">
                        <ul class="col m-0 list-unstyled position-absolute service_items02  navbar-glass d-flex flex-column align-items-center justify-content-center" style="top: 34px; left: 0; height: 40px;  min-width: 43px">
                            <li class="m-0 d-flex align-items-center " style="height: 40px;">
                                <a href="login.php" class="text-decoration-none text-white  ">登入</a>
                            </li>
                        </ul>

                        <ul class="col m-0 list-unstyled position-absolute service_items02 navbar-glass d-flex flex-column align-items-center justify-content-center" style="top: 74px; left: 0; height: 40px;  min-width: 43px">
                            <li class="m-0 d-flex align-items-center" style="height: 40px;">
                                <a href="logout.php" class="text-decoration-none text-white  ">登出</a>
                            </li>
                        </ul>

                        <ul class="col m-0 list-unstyled position-absolute service_items02 navbar-glass d-flex flex-column align-items-center justify-content-center" style="top: 114px; left: 0; height: 40px;  min-width: 43px">
                            <li class="m-0 d-flex align-items-center" style="height: 40px;">
                                <a href="like-collection.php" class="text-decoration-none text-white  ">我的收藏</a>
                            </li>
                        </ul>
                    </div>

                </div>


                <div class="border-line-left d-none d-md-block" style="width: 1px; height: 100%;"> </div>
                <!-- 加class name cart_btn -->
                <div class="col-auto  col-md-1  navbar_button_icon  me-2 me-md-0 cart_btn"
                    onclick="updateCartList(event)">
                    <ul class="m-0 list-unstyled">
                        <li class="m-0">
                            <a href="#" class=" text-white fs-5 ">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="col-auto col-md-1 navbar_button_icon me-2 me-md-0 d-md-none">
                    <div  class="hamburger1 hamburger" id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                </div>





                <div class="border-line-left d-none d-md-block" style="width: 1px; height: 100%;"> </div>

            </div>



        </div>
    </div>

    <div class="menu-overlay d-md-none"   id="menu-overlay">
        <ul class="nav">
            <li><a href="./product-list-ajax.php">電吉他</a></li>
            <li><a href="./Recommend_Game.php">推薦系統</a></li>
            <li><a href="#">客製系統</a></li>
            <li><a href="./neo_accessories_list.php">配件</a></li>
            <li><a href="./neo_ article_list.php">自行保養</a></li>
            <li><a href="./neo_form_repair.php">送件維修</a></li>
        </ul>
    </div>



    <!-- ----------------------------購物車視窗---------------------------------- -->
    <div class="cart_window animate__animated">

    </div>
    <!-- ----------------------------購物車視窗-結束--------------------------------- -->
    </div>
    </div>



    <script>
        // navbar 橫幅伸縮 JS開始
        const navbar = document.querySelector('.navbar_all');
        const controlIcon = document.querySelector('.control_scaling_icon');

        function navbarMove() {
            navbar.classList.toggle('hidden');
            controlIcon.classList.toggle('bi-chevron-double-right');
            controlIcon.classList.toggle('bi-chevron-double-left');

        };

        // navbar 橫幅伸縮 JS結束


        // 服務項目 點擊後下拉式出現 開始
        const itemsonoff = document.getElementById("service_items_action01");

        function neoitems(e) {
            //  console.log('test123');

            if (itemsonoff.style.display == 'none') {
                document.getElementById("service_items_action01").style.display = "block";
            } else {
                document.getElementById("service_items_action01").style.display = "none";
            }
        };
        // 服務項目 點擊後下拉式出現 結束



        //會員按鈕 點擊後下拉式 出現登入登出 開始

        const itemmemberoff = document.getElementById("service_items_action02");

        function neoitemsmember(e) {
            //  console.log('test123');

            if (itemmemberoff.style.display == 'none') {
                document.getElementById("service_items_action02").style.display = "block";
            } else {
                document.getElementById("service_items_action02").style.display = "none";
            }
        };

        // 會員按鈕 點擊後下拉式 出現登入登出 結束




        // 漢堡 JS原版 開始

        $(document).ready(function () {
            $('.hamburger').click(function () {
                $(this).toggleClass('open');
                $('.menu-overlay').toggleClass('open');
            });


        });

        
        // function hamburger() {
        //     $('.hamburger').click(function () {


        //         $(this).toggleClass('open');
        //         $('.menu-overlay').toggleClass('open');
        //     });


        // };









        // 漢堡 JS原版 結束



      


        // 漢堡 JS新版 開始

        // const meunallsulli = document.getElementById('menu-overlay')
        // const hamburgeract = document.getElementById('hamburger')
        
        // function hamburger(event) {

        //     console.log('tettt1111');
        //     if (meunallsulli.style.display == 'none') {
              
              
        //         document.getElementById("menu-overlay").style.display = "block";

        //         $('.hamburger').toggleClass('open');
        //         $('.menu-overlay').toggleClass('open')



        //     } else {
               
        //         document.getElementById("menu-overlay").style.display = "none";
              

        //     }

           
        //     };


    

        // 漢堡 JS新版 結束


        






        let window_status = false;

        function openCartWindow() {
            window_status = true
            $('.cart_window').show();
            $('.c_return').addClass("animate__slideInDown").one('animationend', function () {
                $('.c_return').show();
                $('.c_return').removeClass("animate__slideInDown");
                $('.c_card').show();
                $('.c_card').addClass("animate__slideInRight").one('animationend', function () {
                    $('.c_card').show();
                    $('.c_card').removeClass("animate__slideInRight");
                    $('.cart_window').css("background", "var(--dark)");
                })
            });
            $('.cart_btn').find('.fa-cart-shopping').addClass('fa-xmark').removeClass('fa-cart-shopping');
        }

        function closeCartWindow() {
            window_status = false
            $('.cart_window').css("background", "transparent");
            $('.c_card').addClass("animate__slideOutRight").one('animationend', function () {
                $('.c_card').hide();
                $('.c_card').removeClass("animate__slideOutRight");
                $('.c_return').addClass("animate__slideOutUp").one('animationend', function () {
                    $('.cart_window').hide();
                    $('.c_return').removeClass("animate__slideOutUp");
                })
            });
            $('.fa-xmark').addClass('fa-cart-shopping').removeClass('fa-xmark');
        }
        const dollarCommas = function (n) {
            return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        };


        function updateCartList() {
            if (window_status) {
                closeCartWindow();
            } else {
                fetch('parts/cart-content.php')
                    .then(r => r.text())
                    .then(txt => {
                        $('.cart_window').html(txt);
                        $('.c_card').hide();
                        openCartWindow();
                        calcTotal();
                    })
            }

        }


        // $('.c_card').hide();
        //--------------------------- 關閉購物車視窗-----------------
        // let window_status = false;



        // ------------開啟購物車視窗---------------------------
        function openCartWindow() {
            window_status = true
            $('.cart_window').show();
            $('.c_return').addClass("animate__slideInDown").one('animationend', function () {
                $('.c_return').show();
                $('.c_return').removeClass("animate__slideInDown");
                $('.c_card').show();
                $('.c_card').addClass("animate__slideInRight").one('animationend', function () {
                    $('.c_card').show();
                    $('.c_card').removeClass("animate__slideInRight");
                    $('.cart_window').css("background", "var(--dark)");
                })
            });
            $('.cart_btn').find('.fa-cart-shopping').addClass('fa-xmark').removeClass('fa-cart-shopping');
        }

        // --------nav上購物車按鈕------------
        // $('.cart_btn').click(function(){
        //     if(window_status){
        //         closeCartWindow();
        //     }else{
        //         openCartWindow();
        //     }
        // })
        // ----------購物車視窗 繼續逛逛按鈕------------
        $('.back_btn').click(function () {
            closeCartWindow();
        })

        // ----------------購物車金額顯示-----------------------------------



        function calcTotal() {
            const items = document.querySelectorAll('.cart_window .cart-item');
            let total = 0;
            let total_quantity = 0;
            for (let tr of items) {
                const price = +tr.querySelector('.p_price').getAttribute('data-val');
                const quantity = +tr.querySelector('.cart_window .p_quantity').getAttribute('data-qua');

                tr.querySelector('.p_price').innerHTML = dollarCommas(price);
                total += price * quantity;
                total_quantity += quantity
            }

            $('.totalPrice').html(`NT. ${dollarCommas(total)}`)
            $('.product_quantity').html(`商品總計[${total_quantity}]`)
        }




    </script>


</header>