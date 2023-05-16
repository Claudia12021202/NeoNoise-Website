<?php include './parts/db-connect.php';
$title = '客製化商品';
$pageName = 'Customized_guitar_Index';

?>
<?php
require "./parts/html-head.php";
?>
<?php
require "./parts/navbar.php";
?>
<link rel="stylesheet" href="./style/claudia/Customized_Guitar.css" />

<body>
  <section class="custom-index pt-md-0">
    <!-- <div class="custom-background"></div> -->
    <div class="custom-content">

      <div class="custom-guitar GuitarNo1" data-val="301">
        <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.326/build/spline-viewer.js"></script>
        <spline-viewer url="https://prod.spline.design/36JhawupOa4BKjGz/scene.splinecode"></spline-viewer>
      </div>
      <div class="custom-guitar GuitarNo2" data-val="302">
        <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.329/build/spline-viewer.js"></script>
        <spline-viewer url="https://prod.spline.design/E54DFNEVnG46MYqo/scene.splinecode"></spline-viewer>
      </div>
      <div class="custom-guitar GuitarNo3" data-val="303">
        <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.329/build/spline-viewer.js"></script>
        <spline-viewer url="https://prod.spline.design/J4ZXS10XHzjSdjce/scene.splinecode"></spline-viewer>
      </div>
      <div class="custom-guitar GuitarNo4" data-val="304">
        <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.329/build/spline-viewer.js"></script>
        <spline-viewer url="https://prod.spline.design/Ver2PBymCjF4TE5i/scene.splinecode"></spline-viewer>
      </div>
      <div class="custom-guitar GuitarNo5" data-val="305">
        <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.329/build/spline-viewer.js"></script>
        <spline-viewer url="https://prod.spline.design/7aAExINVJSGwBvt8/scene.splinecode"></spline-viewer>
      </div>
      <div class="custom-guitar GuitarNo6" data-val="306">
        <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.329/build/spline-viewer.js"></script>
        <spline-viewer url="https://prod.spline.design/fCA4JSDy5A80iZhJ/scene.splinecode"></spline-viewer>
      </div>
      <div class="custom-guitar GuitarNo7" data-val="307">
        <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.329/build/spline-viewer.js"></script>
        <spline-viewer url="https://prod.spline.design/WM5aTBW5QjavPu8P/scene.splinecode"></spline-viewer>
      </div>
      <div class="custom-guitar GuitarNo8" data-val="308">
        <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.329/build/spline-viewer.js"></script>
        <spline-viewer url="https://prod.spline.design/vOgbn8CEkHAqmNA8/scene.splinecode"></spline-viewer>
      </div>
      <div class="custom-guitar GuitarNo9" data-val="309">
        <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.329/build/spline-viewer.js"></script>
        <spline-viewer url="https://prod.spline.design/akgFSWOVk42aBvXK/scene.splinecode"></spline-viewer>
      </div>
      <!-- Mobile版 -->
      <div class="custom-guitar GuitarNo1 small" data-val="301">
        <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.334/build/spline-viewer.js"></script>
        <spline-viewer url="https://prod.spline.design/5d0LMtrDCQKUCUxy/scene.splinecode"></spline-viewer>
      </div>
      <div class="custom-guitar GuitarNo1 small" data-val="302">
        <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.334/build/spline-viewer.js"></script>
        <spline-viewer url="https://prod.spline.design/W1dXcb5X7XW4fZIF/scene.splinecode"></spline-viewer>
      </div>


      <div class="choose-group col-md-3 col-12 justify-content-center align-items-center">
        <div class="custom-box-top d-flex justify-content-between align-items-center px-2">
          <h1 class="custom-box-top-title m-0">CUSTOM_GUITAR</h1>
          <div class="d-flex">
            <button class="custom-box-top-btn btn-minimize">
              <i class="fa-solid fa-window-minimize"></i>
            </button>
            <button class="custom-box-top-btn btn-maxmize">
              <i class="fa-regular fa-square"></i>
            </button>
            <button class="custom-box-top-btn">
              <i class="fa-solid fa-xmark"></i>
            </button>
          </div>
        </div>
        <div class="color-group-content d-md-flex justify-content-md-around px-md-5 py-md-5">
          <div class="BSoption d-flex flex-column flex-md-row">
            <div class="BSsec d-flex justify-content-around flex-md-column">
              <p class="text-center">[ 琴身 ]</p>
              <div class="body-choose-box mx-2 my-3 body-label">
                <div class="checked-img">
                  <img src="./imgs/claudia/checked-4.svg" alt="">
                </div>
                <label for="Body1" style="background:url(./imgs/claudia/Body1.jpg ) center center no-repeat;background-size:cover">
                  <input type="radio" name="Body" body-val="100" value="100" id="Body1" onchange="changeCP(event)" onclick="Big(event)" checked />
                </label>
              </div>
              <div class="body-choose-box mx-2 my-3 body-label">
                <div class="checked-img">
                  <img src="./imgs/claudia/checked-4.svg" alt="">
                </div>
                <label for="Body2" style="
                      background: url(imgs/claudia/Body2.png) center center
                        no-repeat;
                      background-size: cover;
                    ">
                  <input type="radio" name="Body" body-val="200" value="200" id="Body2" onchange="changeCP(event)" onclick="Big(event)" />
                </label>
              </div>
              <div class="body-choose-box mx-2 my-3 body-label">
                <div class="checked-img">
                  <img src="./imgs/claudia/checked-4.svg" alt="">
                </div>
                <label for="Body3" style="
                      background: url(imgs/claudia/Body3.png) center center
                        no-repeat;
                      background-size: cover;
                    ">
                  <input type="radio" name="Body" body-val="300" value="300" id="Body3" onchange="changeCP(event)" onclick="Big(event)" />
                </label>
              </div>
            </div>
            <div class="BSsec d-flex justify-content-center flex-md-column">
              <p class="text-center">[ 護板 ]</p>
              <div class="body-choose-box mx-2 my-3">
                <div class="checked-img">
                  <img src="./imgs/claudia/checked-4.svg" alt="">
                </div>
                <label for="Shape1" style="background:url(./imgs/claudia/shape-black.png) center center no-repeat;background-size:contain">
                  <input type="radio" name="Shape" shape-val="1" value="1" id="Shape1" onchange="changeCP(event)" onclick="Big(event)" checked />
                </label>
              </div>
              <div class="body-choose-box mx-2 my-3">
                <div class="checked-img">
                  <img src="./imgs/claudia/checked-4.svg" alt="">
                </div>
                <label for="Shape2" style="background:url(./imgs/claudia/shape-white.png) center center no-repeat;background-size:contain">
                  <input type="radio" name="Shape" shape-val="2" value="2" id="Shape2" onchange="changeCP(event)" onclick="Big(event)" />
                </label>
              </div>
              <div class="body-choose-box mx-2 my-3">
                <div class="checked-img">
                  <img src="./imgs/claudia/checked-4.svg" alt="">
                </div>
                <label for="Shape3" style="background:url(./imgs/claudia/shape-red.png) center center no-repeat;background-size:contain">
                  <input type="radio" name="Shape" shape-val="3" value="3" id="Shape3" onchange="changeCP(event)" onclick="Big(event)" />
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-big-frame-top">[ CUSTOM_GUITAR ]</div>
    <div class="card-big-frame">
      <div class="corner top-left"></div>
      <div class="frame-border top"></div>
      <div class="corner top-right"></div>
      <div class="frame-border right"></div>
      <div class="corner bottom-right"></div>
      <div class="frame-border bottom"></div>
      <div class="corner bottom-left"></div>
      <div class="frame-border left"></div>
    </div>
    <button type="submit" class="btn-next px-4 py-3 d-flex justify-content-center align-items-center" onclick="ClickData(event)">
      [ 下一步 ]<i class="fa-solid fa-caret-right"></i>
    </button>
  </section>
  <?php
  require "./parts/script.php";
  ?>

  <script>
    // localStorage 記錄吉他data-val
    function ClickData(event) {
      // console.log($('.active5'));
      const g = $('.active5').attr('data-val');
      console.log(g);

      localStorage.setItem('customGitar', g)
      location.href = './Customized_Guitar_Result.php'
    }

    // const CheckImg = `<div class="checked-img">
    //               <img src="./imgs/claudia/checked.svg" alt="">
    //             </div>`;
    $(document).ready(function() {
      $("input").eq(0).prop("checked", true).parent().prev().addClass('active');
      $("input").eq(3).prop("checked", true).parent().prev().addClass('active');
    });

    function Big(event) {

      if ($(event.target).prop("checked")) {
        $(event.target).parent().parent().parent().find('.checked-img').removeClass('active');
        $(event.target).parent().parent().css('transform', 'scale(1.1)').siblings().css('transform', 'scale(1)');
        $(event.target).parent().prev().addClass('active');
        // console.log('remove',$(event.target).parent().parent().parent().find('.checked-img'));

        $(event.target).parent()
      }
    }

    // ----------------------換吉他------------------------------
    let result = 101;
    let aValue = 0;
    let bValue = 0;

    function changeCP(event = null) {
      let result = 101;
      if (event) {
        const aValue = $(event.target).val();
        const bValue = $(event.target)
          .closest(".BSsec")
          .siblings()
          .find("input:checked")
          .val();

        result = parseInt(aValue) + parseInt(bValue);
      }

      console.log("result", result);

      switch (result) {
        case 101:
          if ($(window).width() > 768) {
            $(".custom-guitar")
              .eq(0)
              .addClass("active5")
              .siblings()
              .removeClass("active5");
          };
          if ($(window).width() < 768) {
            $(".custom-guitar")
              .eq(9)
              .addClass("active5")
              .siblings()
              .removeClass("active5");
          }
          break;
        case 102:
          if ($(window).width() > 768) {
            $(".custom-guitar")
              .eq(1)
              .addClass("active5")
              .siblings()
              .removeClass("active5");
          };
          if ($(window).width() < 768) {
            $(".custom-guitar")
              .eq(10)
              .addClass("active5")
              .siblings()
              .removeClass("active5");
          }
          break;
        case 103:
          $(".custom-guitar")
            .eq(2)
            .addClass("active5")
            .siblings()
            .removeClass("active5");
          break;
        case 201:
          $(".custom-guitar")
            .eq(3)
            .addClass("active5")
            .siblings()
            .removeClass("active5");
          break;
        case 202:
          $(".custom-guitar")
            .eq(4)
            .addClass("active5")
            .siblings()
            .removeClass("active5");
          break;
        case 203:
          $(".custom-guitar")
            .eq(5)
            .addClass("active5")
            .siblings()
            .removeClass("active5");
          break;
        case 301:
          $(".custom-guitar")
            .eq(6)
            .addClass("active5")
            .siblings()
            .removeClass("active5");
          break;
        case 302:
          $(".custom-guitar")
            .eq(7)
            .addClass("active5")
            .siblings()
            .removeClass("active5");
          break;
        case 303:
          $(".custom-guitar")
            .eq(8)
            .addClass("active5")
            .siblings()
            .removeClass("active5");
          break;

        default:
          // code block
      }

    }
    changeCP();
    console.log("RRresult", result);

    // const Result = bodyVal + shapeVal * 100;
    // let result = 0;
    // $(function () {

    //   $("input[name='Body']").change(function () {
    //     var bodyVal = parseInt($(this).attr("body-val"));
    //     var shapeVal = parseInt(
    //       $("input[name='Shape']:checked").attr("shape-val")
    //     );
    //     result = bodyVal + shapeVal * 100;
    //     // console.log("Result1:", result);
    //   });

    //   $("input[name='Shape']").change(function () {
    //     var bodyVal = parseInt(
    //       $("input[name='Body']:checked").attr("body-val")
    //     );
    //     var shapeVal = parseInt($(this).attr("shape-val"));
    //     result = bodyVal + shapeVal * 100;
    //     // console.log("Result2:", result);
    //   });
    //   console.log(result);

    //   if(result === 101){
    //     $(".custom-guitar").eq(0).css("opacity","1").siblings.css("opacity","0");
    //   }else if(result === 201){
    //     $(".custom-guitar").eq(1).css("opacity","1").siblings.css("opacity","0");
    //   // }else if(result === 301){

    //   // }else if(result === 102){

    //   // }else if(result === 202){

    //   // }else if(result === 302){

    //   // }else if(result === 103){

    //   // }else if(result === 203){

    //   // }else if(result === 303){

    //   }

    // });

    // $(function () {
    //   $("input[type='radio']").click(AttrDal);
    // });

    // function AttrDal() {
    //   let checkedValue = $("input[type='radio']:checked").val();

    //   if (checkedValue) {
    //     let bodyVal = $(this).attr("body-val");
    //     let shapeVal = $(this).attr("shape-val");
    //     console.log(bodyVal);
    //     console.log(shapeVal);
    //   } else {
    //     // 未選中的處理邏輯
    //   }
    // }

    // ---------------------------------
    $(".btn-minimize").click(function() {
      $(".color-group-content").hide("slow");
    });
    $(".btn-maxmize").click(function() {
      $(".color-group-content").show("slow");
    });

    //-----------------------------------------
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>

</html>