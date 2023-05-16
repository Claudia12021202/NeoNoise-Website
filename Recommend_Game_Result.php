<?php
include './parts/db-connect.php';
$title = '推薦結果';
$pageName = 'Recommend-Result';

$output = [
  'success' => false,
  'error' => '',
  'postData' => $_POST,
];

$pid = isset($_GET['pid']) ? $_GET['pid'] : "";

if ($pid) {
  $pid = count($_GET['pid']) ? ($_GET['pid']) : [];
  $pidQuery = implode(',', $pid);
  $rows = [];
  $rc_sql = "SELECT * FROM `products_view` WHERE `sid` IN ($pidQuery) ORDER BY FIELD(`sid`,$pidQuery)";
  $rows = $pdo->query($rc_sql)->fetchall();
} else {

  $s1 = isset($_POST['slider-1']) ? intval($_POST['slider-1']) : 30000;
  $s2 = isset($_POST['slider-2']) ? intval($_POST['slider-2']) : 50000;

  $where = " WHERE `price` BETWEEN $s1 AND $s2 ";

  $color = isset($_POST['color']) ? $_POST['color'] : [];      // 篩選 顏色

  if (!empty($color)) {
    $colorStr = implode(",", $color);
    $where .= " AND `color_sid` IN ({$colorStr}) ";
  }

  $rows = [];
  // $sql = "SELECT * FROM `products_view` WHERE `price` BETWEEN $s1 AND $s2 AND `color_sid`= 1 OR `price` BETWEEN $s1 AND $s2 AND `color_sid`= 8 ORDER BY RAND() LIMIT 3" ;
  $sql = "SELECT * FROM `products_view` $where ";
  $rows = $pdo->query($sql)->fetchAll();
}



$rows[1]['imgs-f'] = explode(',', $rows[1]['img']);
$rows[2]['imgs-f'] = explode(',', $rows[2]['img']);
$rows[0]['imgs-f'] = explode(',', $rows[0]['img']);


//顏色

$model_id = substr($rows[0]['model-id'], 0, 6);
$color_sql = "SELECT * FROM `products_view` WHERE `model-id` like  '{$model_id}%' ";
$c_rows = $pdo->query($color_sql)->fetchall();

$model_id_1 = substr($rows[1]['model-id'], 0, 6);
$color_sql_1 = "SELECT * FROM `products_view` WHERE `model-id` like  '{$model_id_1}%' ";
$c_rows1 = $pdo->query($color_sql_1)->fetchall();

$model_id_2 = substr($rows[2]['model-id'], 0, 6);
$color_sql_2 = "SELECT * FROM `products_view` WHERE `model-id` like  '{$model_id_2}%' ";
$c_rows2 = $pdo->query($color_sql)->fetchall();



// $output['success'] = !!$stmt->rowCount(); // 有無新增成功


// header("Content-Type: application/json");
// echo json_encode($rows);
?>

<?php include './parts/html-head.php' ?>
<link rel="stylesheet" href="./style/claudia/Recommend_Game_Result.css">
<link rel="stylesheet" href="./style/claudia/Result_Popup.css">

<?php include './parts/navbar.php' ?>
<section class="ranking_section">
  <h1 class="ranking-title">[ 專為您推薦 ]</h1>
  <div class="ranking-content m-auto row">
    <div class="ranking-no2 col-1 col-md-4">
      <button type="button" class="btn" onclick="qkview(0)">
        <div class="ranking-num d-flex align-items-center justify-content-center mb-2 m-auto">
          2
        </div>
        <p class="ranking-title-2">
          <span>[ <?= $rows[1]['brand'] ?> ]</span><br /><?= $rows[1]['name'] ?>
        </p>
        <p class="price-2" data-val="<?= $rows[1]['price'] ?>"></p>
        <img src="./imgs/products-imgs/product-list/<?= $rows[1]['brand'] ?>/<?= $rows[1]['imgs-f'][1] ?>" alt="" />
        <div class="guitar-shadow mt-3 m-auto"></div>
      </button>
    </div>

    <div class="ranking-no1 col-10 col-md-4">
      <button type="button" class="btn" onclick="qkview(1)">
        <div class="ranking-num d-flex align-items-center justify-content-center mb-2 m-auto">
          1
        </div>
        <p class="ranking-title-1">
          <span>[ <?= $rows[0]['brand'] ?> ]</span><br /><?= $rows[0]['name'] ?>
        </p>
        <p class="price-1" data-val="<?= $rows[0]['price'] ?>"></p>
        <img src="./imgs/products-imgs/product-list/<?= $rows[0]['brand'] ?>/<?= $rows[0]['imgs-f'][1] ?>" alt="" />
        <div class="guitar-shadow mt-3 m-auto"></div>
      </button>
    </div>

    <div class="ranking-no3 col-1 col-md-4">
      <button type="button" class="btn" onclick="qkview(2)">
        <div class="ranking-num d-flex align-items-center justify-content-center mb-2 m-auto">
          3
        </div>
        <p class="ranking-title-2">
          <span> [ <?= $rows[2]['brand'] ?> ] </span><br /><?= $rows[2]['name'] ?>
        </p>
        <p class="price-3" data-val="<?= $rows[2]['price'] ?>"></p>
        <img src="./imgs/products-imgs/product-list/<?= $rows[2]['brand'] ?>/<?= $rows[2]['imgs-f'][1] ?>" alt="" />
        <div class="guitar-shadow mt-3 m-auto"></div>
      </button>
    </div>
    <div class="button-group d-flex flex-column">
      <button class="rounded seemore-btn">
        <i class="fa-solid fa-ranking-star"></i> &nbsp; 查看更多排行
      </button>
      <form action="./Recommend_Game.php" class="d-flex justify-content-center">
        <button class="rounded seemore-btn">
          <i class="fa-solid fa-rotate-left"></i> &nbsp;再玩一次
        </button>
      </form>
      <button class="rounded">
        <a class="text-decoration-none" style="color:#fff" href="./prod-compare.php?pid[]=<?= $rows[1]['sid'] ?>&pid[]=<?= $rows[0]['sid'] ?>&pid[]=<?= $rows[2]['sid'] ?>"><i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp;比較系統</a>
      </button>
    </div>
  </div>
</section>

<div class="row qkViewSec">
  <div class="col viewbg  d-flex justify-content-center align-items-md-center ">
    <div class="col d-flex justify-content-center align-items-md-center">
      <div class="qkview">
        <div class="qkviewFram">
          <div class="dataSec d-flex ">

            <div class="viewdata view2 container py-0 m-auto p-unit" data-pid="<?= $rows[1]['sid'] ?>">
              <div class="d-flex mb-2 mt-md-3">
                <div class="me-auto font-Chakra">Model : <?= $rows[1]['model-id'] ?></div>
                <div class="font-Chakra"><?= $rows[1]['brand'] ?> Collection</div>
              </div>
              <span class="text-line"></span>
              <div class="row">
                <div class="col-md-7">
                  <div class="prod-name font-Chakra d-none d-md-block col-12 mt-md-3 mb-md-4">
                    <h1><?= $rows[1]['name'] ?></h1>
                  </div>
                  <div class="prod-img col-12 d-md-none ">
                    <div class="imgWrap d-flex justify-content-center align-items-center">
                      <img src="./imgs/products-imgs/product-list/<?= $rows[1]['brand'] ?>/<?= $rows[1]['imgs-f'][1] ?>" alt="">
                    </div>
                    <span class="prodImg-like">
                      <i class="fa-regular fa-heart" style="color: #f595f0; font-size: 28px;"></i>
                      <i class="d-none fa-solid fa-heart" style="color: #f595f0;font-size: 28px;"></i>
                    </span>
                    <ul class="slider-dots p-0 d-flex justify-content-center w-100 d-md-none">
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                  </div>
                  <div class="prod-content col-12 d-flex flex-wrap">
                    <div class="content-item col-6 col-md-4 pe-3">
                      <h5 class="pb-md-2 p-0">品牌</h5>
                      <p class="pt-md-3 pt-0"><?= $rows[1]['brand'] ?></p>
                    </div>
                    <div class="content-item col-6 col-md-4 ps-3 pe-md-3 ">
                      <h5 class="pb-md-2 p-0">拾音器</h5>
                      <p class="pt-md-3 pt-0"><?= $rows[1]['configuration'] ?></p>
                    </div>
                    <div class="content-item col-8 pe-3 pe-md-5 d-md-none">
                      <h5 class="pb-md-2 p-0">顏色</h5>
                      <div class="color-option pt-3 d-flex">
                        <?php foreach ($c_rows1 as $k => $cr) : ?>
                          <div class="color <?= $cr['color'] ?>"></div>
                        <?php endforeach ?>
                      </div>
                    </div>
                    <div class="content-item col-4 col-md-4 ps-3 ">
                      <h5 class="pb-md-2 p-0">價格</h5>
                      <p class="pt-3 price-2" data-value="<?= $rows[1]['price'] ?>"></p>
                    </div>
                  </div>
                  <div class="row ctafixed d-md-none ">
                    <div class="col-6 mybtn p-0">
                      <svg width="160" height="100" xmlns="http://www.w3.org/2000/svg" viewBox="0.7 -3.3 13.6 3.6">
                        <path d="M 1 0 L 1 0 V -3 H 14 L 14 -1 L 13 0 Z" stroke="#90bdb6" stroke-width="0.2" fill="#6F7184" stroke-linecap="square" stroke-linejoin="round" />
                      </svg>
                      <span class="goProdBtn ">
                        <i class="fa-solid fa-eye" style="color: #66FEE6;"></i> 查看商品
                      </span>
                    </div>
                    <div class="col-6 mybtn p-0">
                      <svg width="160" height="100" xmlns="http://www.w3.org/2000/svg" viewBox="0.7 -3.3 13.6 3.6">
                        <path d="M 1 0 L 1 0 V -3 H 14 L 14 -1 L 13 0 Z" stroke="#66FEE6" stroke-width="0.2" fill="#66FEE6" stroke-linecap="square" stroke-linejoin="round" />
                      </svg>
                      <span class="cartBtn d-flex align-items-center">
                        <img class="me-2" src="./imgs/joyce/Icons/Cart.svg" alt="">
                        加入購物車
                      </span>
                    </div>
                  </div>
                  <div class="content-item prod-feature d-none d-md-block col-12 mb-1 ">
                    <h5 class="pb-2">產品特色</h5>
                    <ul class="pt-3 ps-3">
                      <li>Alder琴身搭配限量"Diamond Anniversary metallic"漆面。</li>
                      <li>搭載"Vintage-style'50s Telecaster"拾音器。</li>
                      <li>琴頸琴身接柄處鎖上刻有75周年紀念的金屬標誌。</li>
                      <li>琴頭與琴身使用相同配色的漆面。</li>
                    </ul>
                  </div>
                  <div class="col d-none d-md-flex">
                    <div class="content-item col-md-4 pe-3 ">
                      <h5 class="pb-2">顏色</h5>
                      <div class="color-option pt-3 d-flex">
                        <?php foreach ($c_rows as $k => $cr) : ?>
                          <div class="color <?= $cr['color'] ?>"></div>
                        <?php endforeach ?>
                      </div>
                    </div>
                    <div class="content-item col-md-8 ps-3 ">
                      <h5 class="pb-2">產品細節</h5>
                      <div class="detail-imgwrap pt-3">
                        <?php foreach ($rows[1]['imgs-f'] as $g) : ?>
                          <img src="./imgs/products-imgs/<?= $rows[1]['brand'] ?>/<?= $g ?>" alt="">
                        <?php endforeach ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 d-none d-md-block">
                  <div class="prod-img p-0 col-md-4 d-flex justify-content-end ">
                    <div class="imgWrap-web d-flex justify-content-end ">
                      <img src="./imgs/products-imgs/product-list/<?= $rows[1]['brand'] ?>/<?= $rows[1]['imgs-f'][1] ?>" alt="">
                    </div>
                    <span class="prodImg-like">
                      <i class="fa-regular fa-heart" style="color: #f595f0; font-size: 28px;"></i>
                      <i class="d-none fa-solid fa-heart" style="color: #f595f0;font-size: 28px;"></i>
                    </span>
                  </div>
                  <div class="d-flex ps-md-4 ">
                    <div class="col-6 mybtn p-0 d-flex justify-content-end ">
                      <svg width="160" height="100" xmlns="http://www.w3.org/2000/svg" viewBox="0.7 -3.3 13.6 3.6">
                        <path d="M 1 0 L 1 0 V -3 H 14 L 14 -1 L 13 0 Z" stroke="#90bdb6" stroke-width="0.2" fill="#6F7184" stroke-linecap="square" stroke-linejoin="round" />
                      </svg>
                      <span class="goProdBtn ">
                        <i class="fa-solid fa-eye" style="color: #66FEE6;"></i> 查看商品
                      </span>
                    </div>
                    <div class="col-6 mybtn p-0 d-flex justify-content-end ">
                      <svg width="160" height="100" xmlns="http://www.w3.org/2000/svg" viewBox="0.7 -3.3 13.6 3.6">
                        <path d="M 1 0 L 1 0 V -3 H 14 L 14 -1 L 13 0 Z" stroke="#66FEE6" stroke-width="0.2" fill="#66FEE6" stroke-linecap="square" stroke-linejoin="round" />
                      </svg>
                      <span class="cartBtn d-flex align-items-center" onclick="addToCart(event)">
                        <img class="me-2" src="./imgs/joyce/Icons/Cart.svg" alt="">
                        加入購物車
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="viewdata view1 container py-0 m-auto p-unit" data-pid="<?= $rows[0]['sid'] ?>">
              <div class="d-flex mb-2 mt-md-3">
                <div class="me-auto font-Chakra">Model :<?= $rows[0]['model-id'] ?></div>
                <div class="font-Chakra"><?= $rows[0]['brand'] ?> Collection</div>
              </div>
              <span class="text-line"></span>
              <div class="row">
                <div class="col-md-7">
                  <div class="prod-name font-Chakra d-none d-md-block col-12 mt-md-3 mb-md-4">
                    <h1><?= $rows[0]['name'] ?></h1>
                  </div>
                  <div class="prod-img col-12 d-md-none ">
                    <div class="imgWrap d-flex justify-content-center align-items-center">
                      <img src="./imgs/products-imgs/product-list/<?= $rows[0]['brand'] ?>/<?= $rows[0]['imgs-f'][1] ?>" alt="">
                    </div>
                    <span class="prodImg-like">
                      <i class="fa-regular fa-heart" style="color: #f595f0; font-size: 28px;"></i>
                      <i class="d-none fa-solid fa-heart" style="color: #f595f0;font-size: 28px;"></i>
                    </span>
                    <ul class="slider-dots p-0 d-flex justify-content-center w-100 d-md-none">
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                  </div>
                  <div class="prod-content col-12 d-flex flex-wrap">
                    <div class="content-item col-6 col-md-4 pe-3">
                      <h5 class="pb-md-2 p-0">品牌</h5>
                      <p class="pt-3"><?= $rows[0]['brand'] ?></p>
                    </div>
                    <div class="content-item col-6 col-md-4 ps-3 pe-md-3 ">
                      <h5 class="pb-md-2 p-0">拾音器</h5>
                      <p class="pt-3"><?= $rows[0]['configuration'] ?></p>
                    </div>
                    <div class="content-item col-8 pe-3 pe-md-5 d-md-none">
                      <h5 class="pb-md-2 p-0">顏色</h5>
                      <div class="color-option pt-3 d-flex">
                        <?php foreach ($c_rows as $k => $cr) : ?>
                          <div class="color <?= $cr['color'] ?>"></div>
                        <?php endforeach ?>
                      </div>
                    </div>
                    <div class="content-item col-4 col-md-4 ps-3 ">
                      <h5 class="pb-md-2 p-0">價格</h5>
                      <p class="pt-3 price-1" data-value="<?= $row[0]['price'] ?>"></p>
                    </div>
                  </div>
                  <div class="row ctafixed d-md-none ">
                    <div class="col-6 mybtn p-0">
                      <svg width="160" height="100" xmlns="http://www.w3.org/2000/svg" viewBox="0.7 -3.3 13.6 3.6">
                        <path d="M 1 0 L 1 0 V -3 H 14 L 14 -1 L 13 0 Z" stroke="#90bdb6" stroke-width="0.2" fill="#6F7184" stroke-linecap="square" stroke-linejoin="round" />
                      </svg>
                      <span class="goProdBtn ">
                        <i class="fa-solid fa-eye" style="color: #66FEE6;"></i> 查看商品
                      </span>
                    </div>
                    <div class="col-6 mybtn p-0">
                      <svg width="160" height="100" xmlns="http://www.w3.org/2000/svg" viewBox="0.7 -3.3 13.6 3.6">
                        <path d="M 1 0 L 1 0 V -3 H 14 L 14 -1 L 13 0 Z" stroke="#66FEE6" stroke-width="0.2" fill="#66FEE6" stroke-linecap="square" stroke-linejoin="round" />
                      </svg>
                      <span class="cartBtn d-flex align-items-center">
                        <img class="me-2" src="./imgs/joyce/Icons/Cart.svg" alt="">
                        加入購物車
                      </span>
                    </div>
                  </div>
                  <div class="content-item prod-feature d-none d-md-block col-12 mb-1 ">
                    <h5 class="pb-2">產品特色</h5>
                    <ul class="pt-3 ps-3">
                      <li>Alder琴身搭配限量"Diamond Anniversary metallic"漆面。</li>
                      <li>搭載"Vintage-style'50s Telecaster"拾音器。</li>
                      <li>琴頸琴身接柄處鎖上刻有75周年紀念的金屬標誌。</li>
                      <li>琴頭與琴身使用相同配色的漆面。</li>
                    </ul>
                  </div>
                  <div class="col d-none d-md-flex">
                    <div class="content-item col-md-4 pe-3 ">
                      <h5 class="pb-2">顏色</h5>
                      <div class="color-option pt-3 d-flex">
                        <?php foreach ($c_rows as $k => $cr) : ?>
                          <div class="color <?= $cr['color'] ?>"></div>
                        <?php endforeach ?>
                      </div>
                    </div>
                    <div class="content-item col-md-8 ps-3 ">
                      <h5 class="pb-2">產品細節</h5>
                      <div class="detail-imgwrap pt-3">
                        <?php foreach ($rows[0]['imgs-f'] as $g) : ?>
                          <img src="./imgs/products-imgs/<?= $rows[0]['brand'] ?>/<?= $g ?>" alt="">
                        <?php endforeach ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 d-none d-md-block">
                  <div class="prod-img p-0 col-md-4 d-flex justify-content-end ">
                    <div class="imgWrap-web d-flex justify-content-end ">
                      <img src="./imgs/products-imgs/product-list/<?= $rows[0]['brand'] ?>/<?= $rows[0]['imgs-f'][1] ?>" alt="">
                    </div>
                    <span class="prodImg-like">
                      <i class="fa-regular fa-heart" style="color: #f595f0; font-size: 28px;"></i>
                      <i class="d-none fa-solid fa-heart" style="color: #f595f0;font-size: 28px;"></i>
                    </span>
                  </div>
                  <div class="d-flex ps-md-4 ">
                    <div class="col-6 mybtn p-0 d-flex justify-content-end ">
                      <svg width="160" height="100" xmlns="http://www.w3.org/2000/svg" viewBox="0.7 -3.3 13.6 3.6">
                        <path d="M 1 0 L 1 0 V -3 H 14 L 14 -1 L 13 0 Z" stroke="#90bdb6" stroke-width="0.2" fill="#6F7184" stroke-linecap="square" stroke-linejoin="round" />
                      </svg>
                      <span class="goProdBtn ">
                        <i class="fa-solid fa-eye" style="color: #66FEE6;"></i> 查看商品
                      </span>
                    </div>
                    <div class="col-6 mybtn p-0 d-flex justify-content-end ">
                      <svg width="160" height="100" xmlns="http://www.w3.org/2000/svg" viewBox="0.7 -3.3 13.6 3.6">
                        <path d="M 1 0 L 1 0 V -3 H 14 L 14 -1 L 13 0 Z" stroke="#66FEE6" stroke-width="0.2" fill="#66FEE6" stroke-linecap="square" stroke-linejoin="round" />
                      </svg>
                      <span class="cartBtn d-flex align-items-center" onclick="addToCart(event)">
                        <img class="me-2" src="./imgs/joyce/Icons/Cart.svg" alt="">
                        加入購物車
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="viewdata view3 container py-0 m-auto p-unit" data-pid="<?= $rows[2]['sid'] ?>">
              <div class="d-flex mb-2 mt-md-3">
                <div class="me-auto font-Chakra">Model : <?= $rows[2]['model-id'] ?></div>
                <div class="font-Chakra"><?= $rows[2]['brand'] ?> Collection</div>
              </div>
              <span class="text-line"></span>
              <div class="row">
                <div class="col-md-7">
                  <div class="prod-name font-Chakra d-none d-md-block col-12 mt-md-3 mb-md-4">
                    <h1><?= $rows[2]['name'] ?></h1>
                  </div>
                  <div class="prod-img col-12 d-md-none ">
                    <div class="imgWrap d-flex justify-content-center align-items-center">
                      <img src="./imgs/products-imgs/product-list/<?= $rows[2]['brand'] ?>/<?= $rows[2]['imgs-f'][1] ?>" alt="">
                    </div>
                    <span class="prodImg-like">
                      <i class="fa-regular fa-heart" style="color: #f595f0; font-size: 28px;"></i>
                      <i class="d-none fa-solid fa-heart" style="color: #f595f0;font-size: 28px;"></i>
                    </span>
                    <ul class="slider-dots p-0 d-flex justify-content-center w-100 d-md-none">
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                  </div>
                  <div class="prod-content col-12 d-flex flex-wrap">
                    <div class="content-item col-6 col-md-4 pe-3">
                      <h5 class="pb-md-2 p-0">品牌</h5>
                      <p class="pt-3"><?= $rows[2]['brand'] ?></p>
                    </div>
                    <div class="content-item col-6 col-md-4 ps-3 pe-md-3 ">
                      <h5 class="pb-md-2 p-0">拾音器</h5>
                      <p class="pt-3"><?= $rows[2]['configuration'] ?></p>
                    </div>
                    <div class="content-item col-8 pe-3 pe-md-5 d-md-none">
                      <h5 class="pb-md-2 p-0">顏色</h5>
                      <div class="color-option pt-3 d-flex">
                        <?php foreach ($c_rows2 as $k => $cr) : ?>
                          <div class="color <?= $cr['color'] ?>"></div>
                        <?php endforeach ?>
                      </div>
                    </div>
                    <div class="content-item col-4 col-md-4 ps-3 ">
                      <h5 class="pb-md-2 p-0">價格</h5>
                      <p class="pt-3 price-3"  data-value="<?= $row[2]['price'] ?>"></p>
                    </div>
                  </div>
                  <div class="row ctafixed d-md-none ">
                    <div class="col-6 mybtn p-0">
                      <svg width="160" height="100" xmlns="http://www.w3.org/2000/svg" viewBox="0.7 -3.3 13.6 3.6">
                        <path d="M 1 0 L 1 0 V -3 H 14 L 14 -1 L 13 0 Z" stroke="#90bdb6" stroke-width="0.2" fill="#6F7184" stroke-linecap="square" stroke-linejoin="round" />
                      </svg>
                      <span class="goProdBtn ">
                        <i class="fa-solid fa-eye" style="color: #66FEE6;"></i> 查看商品
                      </span>
                    </div>
                    <div class="col-6 mybtn p-0">
                      <svg width="160" height="100" xmlns="http://www.w3.org/2000/svg" viewBox="0.7 -3.3 13.6 3.6">
                        <path d="M 1 0 L 1 0 V -3 H 14 L 14 -1 L 13 0 Z" stroke="#66FEE6" stroke-width="0.2" fill="#66FEE6" stroke-linecap="square" stroke-linejoin="round" />
                      </svg>
                      <span class="cartBtn d-flex align-items-center">
                        <img class="me-2" src="./imgs/joyce/Icons/Cart.svg" alt="">
                        加入購物車
                      </span>
                    </div>
                  </div>
                  <div class="content-item prod-feature d-none d-md-block col-12 mb-1 ">
                    <h5 class="pb-2">產品特色</h5>
                    <ul class="pt-3 ps-3">
                      <li>Alder琴身搭配限量"Diamond Anniversary metallic"漆面。</li>
                      <li>搭載"Vintage-style'50s Telecaster"拾音器。</li>
                      <li>琴頸琴身接柄處鎖上刻有75周年紀念的金屬標誌。</li>
                      <li>琴頭與琴身使用相同配色的漆面。</li>
                    </ul>
                  </div>
                  <div class="col d-none d-md-flex">
                    <div class="content-item col-md-4 pe-3 ">
                      <h5 class="pb-2">顏色</h5>
                      <div class="color-option pt-3 d-flex">
                        <?php foreach ($c_rows2 as $k => $cr) : ?>
                          <div class="color <?= $cr['color'] ?>"></div>
                        <?php endforeach ?>
                      </div>
                    </div>
                    <div class="content-item col-md-8 ps-3 ">
                      <h5 class="pb-2">產品細節</h5>
                      <div class="detail-imgwrap pt-3">
                        <?php foreach ($rows[2]['imgs-f'] as $g) : ?>
                          <img src="./imgs/products-imgs/<?= $rows[2]['brand'] ?>/<?= $g ?>" alt="">
                        <?php endforeach ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5 d-none d-md-block">
                  <div class="prod-img p-0 col-md-4 d-flex justify-content-end ">
                    <div class="imgWrap-web d-flex justify-content-end ">
                      <img src="./imgs/products-imgs/product-list/<?= $rows[2]['brand'] ?>/<?= $rows[2]['imgs-f'][1] ?>" alt="">
                    </div>
                    <span class="prodImg-like">
                      <i class="fa-regular fa-heart" style="color: #f595f0; font-size: 28px;"></i>
                      <i class="d-none fa-solid fa-heart" style="color: #f595f0;font-size: 28px;"></i>
                    </span>
                  </div>
                  <div class="d-flex ps-md-4 ">
                    <div class="col-6 mybtn p-0 d-flex justify-content-end ">
                      <svg width="160" height="100" xmlns="http://www.w3.org/2000/svg" viewBox="0.7 -3.3 13.6 3.6">
                        <path d="M 1 0 L 1 0 V -3 H 14 L 14 -1 L 13 0 Z" stroke="#90bdb6" stroke-width="0.2" fill="#6F7184" stroke-linecap="square" stroke-linejoin="round" />
                      </svg>
                      <span class="goProdBtn ">
                        <i class="fa-solid fa-eye" style="color: #66FEE6;"></i> 查看商品
                      </span>
                    </div>
                    <div class="col-6 mybtn p-0 d-flex justify-content-end ">
                      <svg width="160" height="100" xmlns="http://www.w3.org/2000/svg" viewBox="0.7 -3.3 13.6 3.6">
                        <path d="M 1 0 L 1 0 V -3 H 14 L 14 -1 L 13 0 Z" stroke="#66FEE6" stroke-width="0.2" fill="#66FEE6" stroke-linecap="square" stroke-linejoin="round" />
                      </svg>
                      <span class="cartBtn d-flex align-items-center" onclick="addToCart(event)">
                        <img class="me-2" src="./imgs/joyce/Icons/Cart.svg" alt="">
                        加入購物車
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="switchItem d-none d-md-block">
            <div class="prevbtn">
              <img src="./imgs/joyce/web-qkviewbtn-prev.svg" alt="">
            </div>
            <div class="nextbtn">
              <img src="./imgs/joyce/web-qkviewbtn-Next.svg" alt="">
            </div>
          </div>
        </div>
        <div class="Xbtn">
          <img style="width: 44px;" src="./imgs/claudia/xmark_pink.svg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>




<?php include './parts/script.php' ?>
<script>
  $(".qkViewSec .Xbtn").click(function() {
    $(".qkViewSec").hide();
    $('body').css('overflow', 'auto');
  })

  // ----------------$字號-----------------------

  let Price1 = $(".price-1").attr('data-val');
  $(".price-1").html('NT$' + dollarCommas(Price1));


  let Price2 = $(".price-2").attr('data-val');
  $(".price-2").html('NT$' + dollarCommas(Price2));

  let Price3 = $(".price-3").attr('data-val');
  $(".price-3").html('NT$' + dollarCommas(Price3));

  // let PopPrice1 = $(".popup-price1").attr('data-val');
  // $(".popup-price1").html('NT$' + dollarCommas(PopPrice1));


  function qkview(r) {
    const $dataSec = $('.dataSec');
    const viewData = $(".dataSec .viewdata");
    const dataLength = viewData.length;
    console.log("dataLength", dataLength);

    $(".qkViewSec").show();
    viewData.eq(r).show().siblings().hide();

    $('.switchItem .nextbtn').click(function() {
      r++;
      r %= dataLength;
      viewData.eq(r).show().siblings().hide();

    })
    $('.switchItem .prevbtn').click(function() {
      r += dataLength - 1;
      r %= dataLength;
      viewData.eq(r).show().siblings().hide();
    })

    $('body').css('overflow', 'hidden');
  }

  //加入購物車功能

  function addToCart(event) {
    const btn = event.currentTarget;
    const unit = btn.closest('.p-unit');
    const pid = unit.getAttribute('data-pid');
    const quantity = 1;

    console.log({
      pid,
      quantity
    })

    fetch(`cart-api.php?cmd=add&pid=${pid}&quantity=${quantity}`)
      .then(r => r.json())
      .then(cart => {
        console.log(cart);
      })
  }
</script>

</body>