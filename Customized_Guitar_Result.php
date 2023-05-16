<?php include './parts/db-connect.php';
$title = '客製化商品結果';
$pageName = 'Customized_guitar_Result';

?>
<?php
require "./parts/html-head.php";
?>
<?php
require "./parts/navbar.php";
?>
<link rel="stylesheet" href="./style/claudia/Customized_Guitar_Result.css">
<link rel="stylesheet" href="./style/claudia/Card_Animation.css">
<!-- alert css -->
<link rel="stylesheet" href="./style/alert.css">

<body>
    <!-- HTML alert 開始 -->
  <div class="row my_alert d-flex justify-content-center align-items-center">
      <div class="col-sm-12 col-md-2 mx-4 ">
          <div class="alert alert-simple alert-primary   rendered  " role="alert" data-brk-library="component__alert">
              
                  <div class="col-12 d-flex justify-content-center  align-items-center  ">
                      <i class="fa-solid fa-cart-plus me-2 "></i>
                      <p class="my_alert_text"></p>
                  </div>
          </div>
      </div>
  </div>
  <!-- HTML alert 結束 -->
    <video muted autoplay loop src="./imgs/pon/video/cyber_punk_animate.mp4"></video>
  <section class="card-result">

    <!-- <video muted autoplay loop style="opacity: 0.25;" src="./imgs/claudia/video/digital0.webm"></video> -->
    <div class="top-btn-group d-flex justify-content-between">
      <a href="./Customized_Guitar.php" class="right-top-btn px-4 py-3 rounded rounded-3">
        <i class="fa-solid fa-rotate-left"></i> 重新訂製
      </a>
      <a href="./product-list-ajax.php"  class="right-top-btn px-4 py-3 rounded rounded-3"> [ 電吉他首頁 ] </a>
    </div>
    <div class="card-content d-flex flex-column flex-md-row justify-content-md-evenly align-items-md-center">
      <div class="card-picture d-flex flex-column justify-content-center">
        <div class="card-text-title mt-4 my-md-2 d-block d-md-none">
          IT'S YOUR<span>NEO<br />NOISE</span>
        </div>
        <!-- <div class="card-change"></div> -->
        <style class="hover"></style>
        <svg class="svg" id="my-clip-path-svg" style="height:0">
          <clipPath id="my-clip-path" clipPathUnits="objectBoundingBox">
            <path d="M0.966,0.504 L0.923,0.531 V0.606 V0.647 C0.923,0.65,0.927,0.653,0.932,0.653 H0.935 H0.947 L0.962,0.662 V0.841 L0.999,0.863 V0.952 L0.923,1 H0.53 L0.458,0.956 H0.039 L0,0.931 V0.606 L0.032,0.584 V0.284 L0,0.263 V0.063 L0.046,0.033 H0.783 L0.835,0 H0.966 L1,0.025 V0.284 L0.966,0.304 V0.504"></path>
          </clipPath>
        </svg>
        <div class="card animated">
          <!-- <img class=" eevee w-100 h-100 position-absolute " src="./imgs/pon/recommend_card.svg" alt="" /> -->
        </div>
      </div>
      <div class="card-text d-flex flex-column justify-content-center m-md-auto">
        <div class="card-text-title my-2 d-none d-md-block">
          IT'S YOUR<span>NEO<br />NOISE</span>
        </div>
        <div class="card-text-frame d-flex flex-column m-md-auto my-2">
          <div class="card-text-frame-content my-md-2 mx-md-2">
            <h1>Customized_guitar</h1>
            <!-- <h6>品牌：NeoNoise</h6> -->
            <h6>價格：NT$55000</h6>
            <h6>拾音器類型：S-S-S</h6>
            <h6>琴身材質：碳纖維</h6>
            <p>
              與Fender廠牌相同品質之拾音器，
              客製化商品也可擁有高級品質。
            </p>

            <button class="chart-btn rounded rounded-3 px-md-5 py-md-5" onclick="addToCart(event)">[ 加入購物車 ]</button>
          </div>
        </div>
      </div>
    </div>

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

  </section>
  <?php
  require "./parts/script.php";
  ?>
  <script>
    const g = localStorage.getItem('customGitar');
    console.log({
      g
    })
    const cardChange = `<img class="eevee" src="./imgs/products-imgs/NeoNoise/CG${g}.svg" alt="">`;
    //     const cardChange = `<svg class="card eevee animated card-change"  width="356" height="562" viewBox="0 0 356 562" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    // <g clip-path="url(#clip0_2102_28954)">
    // <path d="M73.5471 513.422H54.8312L50.2518 508.838V494.967L54.7516 490.463H59.0125V495.884H56.7427L54.8711 497.757V505.968L56.9019 508.001H71.4764L73.5073 505.968V497.678L71.5561 495.725H67.2156V501.703H62.5963V490.463H73.5471L78.1265 495.047V508.838L73.5471 513.422ZM73.9453 486.486H58.2957V481.225H72.3127L73.6666 479.87V476.681L69.7641 472.775H58.2957V467.514H78.1265V472.377H74.7418L78.1265 475.804V482.301L73.9453 486.486ZM54.1543 462.937H51.6057L49.774 461.104V458.314L51.6057 456.48H54.1543L55.9861 458.314V461.104L54.1543 462.937ZM58.2957 462.339V457.078H78.1265V462.339H58.2957ZM74.0648 450.085H62.7158V453.672H58.2957V450.005H51.8447V444.823H58.2957V438.765H62.7556V444.823H72.3525L73.6666 443.468V438.765H78.1265V445.979L74.0648 450.085ZM74.463 435.972H69.9234L66.2599 432.306V422.221H63.7512L62.5167 423.457V429.436L63.7512 430.631H64.8661V435.813H62.5963L58.2957 431.548V421.305L62.5963 417.04H78.1265V421.783H75.2993L78.1265 424.732V432.306L74.463 435.972ZM74.0648 425.091L71.3172 422.221H70.0031V429.715L71.0782 430.791H73.0693L74.0648 429.794V425.091ZM58.2957 412.448V407.586H61.6008L58.2957 404.397V398.737H62.7556V403.321L66.7377 407.187H78.1265V412.448H58.2957ZM68.8881 363.158H78.1265V368.579H70.1225L67.4545 370.97V379.659H78.1265V385.08H50.2518V367.582L54.5525 363.317H62.9946L65.7422 366.028L68.8881 363.158ZM62.9946 379.659V370.053L61.6008 368.658H56.1852L54.7914 370.053V379.659H62.9946ZM74.0648 358.782H62.4371L58.2957 354.676V343.476L62.4371 339.331H69.9632V353.52H72.5118L73.8259 352.245V345.748L72.5914 344.552H71.5561V339.371H74.1444L78.1265 343.317V354.756L74.0648 358.782ZM66.2997 344.592H63.9901L62.5963 345.947V352.165L63.9901 353.52H66.2997V344.592ZM74.0648 335.544H62.3574L58.2957 331.519V320.597L62.4371 316.492H66.1006V321.753H64.1494L62.7556 323.148V328.888L64.1494 330.283H72.2729L73.6666 328.888V323.148L72.2729 321.753H70.3216V316.492H73.9852L78.1265 320.597V331.519L74.0648 335.544ZM73.9852 313.319H62.4371L58.2957 309.213V297.814L62.4371 293.708H73.9852L78.1265 297.814V309.213L73.9852 313.319ZM73.7462 300.365L72.3525 298.97H64.0697L62.676 300.365V306.662L64.0697 308.057H72.3525L73.7462 306.662V300.365ZM58.2957 289.332V284.469H61.561L58.2957 281.241V276.219L61.0433 273.508L58.2957 270.798V263.863L62.5963 259.598H78.1265V264.859H64.1494L62.7556 266.214V269.562L64.8661 271.675H78.1265V276.777H64.0697L62.7556 278.052V280.444L66.4192 284.071H78.1265V289.332H58.2957ZM58.2957 255.001V250.138H61.561L58.2957 246.909V241.887L61.0433 239.177L58.2957 236.466V229.531L62.5963 225.266H78.1265V230.528H64.1494L62.7556 231.883V235.231L64.8661 237.343H78.1265V242.445H64.0697L62.7556 243.721V246.112L66.4192 249.739H78.1265V255.001H58.2957ZM74.0648 221.068H62.4371L58.2957 216.963V205.763L62.4371 201.618H69.9632V215.807H72.5118L73.8259 214.532V208.035L72.5914 206.839H71.5561V201.658H74.1444L78.1265 205.604V217.043L74.0648 221.068ZM66.2997 206.879H63.9901L62.5963 208.234V214.452L63.9901 215.807H66.2997V206.879ZM58.2957 197.433V192.57H61.6008L58.2957 189.262V182.845L62.7158 178.42H78.1265V183.682H64.1494L62.7556 185.037V188.385L66.5785 192.171H78.1265V197.433H58.2957ZM73.9852 174.243H62.4371L58.2957 170.138V162.246L60.3265 159.894H49.6943V154.633H78.1265V159.575H75.0603L78.1265 162.644V170.138L73.9852 174.243ZM73.6666 163.123L70.3614 159.894H65.1847L62.7556 162.605V167.467L64.3086 168.982H72.1136L73.6666 167.467V163.123ZM74.463 150.465H69.9234L66.2599 146.798V136.714H63.7512L62.5167 137.95V143.929L63.7512 145.124H64.8661V150.306H62.5963L58.2957 146.041V135.798L62.5963 131.533H78.1265V136.276H75.2993L78.1265 139.225V146.798L74.463 150.465ZM74.0648 139.584L71.3172 136.714H70.0031V144.208L71.0782 145.284H73.0693L74.0648 144.287V139.584ZM74.0648 125.536H62.7158V129.124H58.2957V125.457H51.8447V120.275H58.2957V114.217H62.7556V120.275H72.3525L73.6666 118.92V114.217H78.1265V121.431L74.0648 125.536ZM54.1543 111.026H51.6057L49.774 109.192V106.402L51.6057 104.569H54.1543L55.9861 106.402V109.192L54.1543 111.026ZM58.2957 110.428V105.167H78.1265V110.428H58.2957ZM73.9852 100.365H62.4371L58.2957 96.2598V84.8604L62.4371 80.755H73.9852L78.1265 84.8604V96.2598L73.9852 100.365ZM73.7462 87.4113L72.3525 86.0163H64.0697L62.676 87.4113V93.7089L64.0697 95.104H72.3525L73.7462 93.7089V87.4113ZM58.2957 76.3787V71.516H61.6008L58.2957 68.2078V61.7906L62.7158 57.3663H78.1265V62.6276H64.1494L62.7556 63.9828V67.3309L66.5785 71.1174H78.1265V76.3787H58.2957Z" fill="#292560"/>`;

    $(".card").prepend(cardChange)


    //加入購物車功能

    function addToCart(event) {
      const quantity = 1;
      console.log({
        g,
        quantity
      })

      fetch(`cart-api.php?cmd=add&pid=${g}&quantity=${quantity}`)
        .then(r => r.json())
        .then(cart => {
          console.log(cart);
          calcCartItems(cart.data);
        })

      // ----已加入購入車ALERT-----
        
      
      $('.my_alert').css('transform','scaleX(1) scaleY(0.1)').css('opacity','1')
        setTimeout(() => {
          $('.my_alert').css('transform','scaleX(1) scaleY(1)')
          next()
          }, 500); 
          setTimeout(() => {
            $('.my_alert').css('transform','scaleX(0) scaleY(0)').css('opacity','1')
          }, 2500);
    };

    // 亂碼效果
    class TextScramble {
        constructor(el) {
            this.el = el
            this.chars = '!<>-_\\/[]{}—=+*^?#________'
            this.update = this.update.bind(this)
        }
        setText(newText) {
            const oldText = this.el.innerText
            const length = Math.max(oldText.length, newText.length)
            const promise = new Promise((resolve) => this.resolve = resolve)
            this.queue = []
            for (let i = 0; i < length; i++) {
              const from = oldText[i] || ''
              const to = newText[i] || ''
              const start = Math.floor(Math.random() * 40)
              const end = start + Math.floor(Math.random() * 40)
              this.queue.push({ from, to, start, end })
            }
            cancelAnimationFrame(this.frameRequest)
            this.frame = 0
            this.update()
            return promise
        }
        update() {
          let output = ''
          let complete = 0
          for (let i = 0, n = this.queue.length; i < n; i++) {
            let { from, to, start, end, char } = this.queue[i]
            if (this.frame >= end) {
                complete++
                output += to
            } else if (this.frame >= start) {
                if (!char || Math.random() < 0.28) {
                char = this.randomChar()
                this.queue[i].char = char
                }
                output += `<span class="dud">${char}</span>`
            } else {
                output += from
            }
          }
          this.el.innerHTML = output
          if (complete === this.queue.length) {
            this.resolve()
          } else {
            this.frameRequest = requestAnimationFrame(this.update)
            this.frame++
          }
        }
        randomChar() {
            return this.chars[Math.floor(Math.random() * this.chars.length)]
        }
    }


    const phrases = ['已加入購物車!']

    const el = document.querySelector('.my_alert_text')
    const fx = new TextScramble(el)

    let counter = 0
    const next = () => {
        fx.setText(phrases[counter]).then(() => {
            setTimeout(next, 800)
        })
        
        counter = (counter + 1) % phrases.length
    }
  
  

    // ---------------------卡片效果------------------------

    var x;
    var $cards = $(".card");
    var $style = $(".hover");

    $cards
      .on("mousemove touchmove", function(e) {
        // normalise touch/mouse
        var pos = [e.offsetX, e.offsetY];
        e.preventDefault();
        if (e.type === "touchmove") {
          pos = [e.touches[0].clientX, e.touches[0].clientY];
        }
        var $card = $(this);
        // math for mouse position
        var l = pos[0];
        var t = pos[1];
        var h = $card.height();
        var w = $card.width();
        var px = Math.abs(Math.floor(100 / w * l) - 100);
        var py = Math.abs(Math.floor(100 / h * t) - 100);
        var pa = (50 - px) + (50 - py);
        // math for gradient / background positions
        var lp = (50 + (px - 50) / 1.5);
        var tp = (50 + (py - 50) / 1.5);
        var px_spark = (50 + (px - 50) / 7);
        var py_spark = (50 + (py - 50) / 7);
        var p_opc = 20 + (Math.abs(pa) * 1.5);
        var ty = ((tp - 50) / 2) * -1;
        var tx = ((lp - 50) / 1.5) * .5;
        // css to apply for active card
        var grad_pos = `background-position: ${lp}% ${tp}%;`
        var sprk_pos = `background-position: ${px_spark}% ${py_spark}%;`
        var opc = `opacity: ${p_opc/100};`
        var tf = `transform: rotateX(${ty}deg) rotateY(${tx}deg)`
        // need to use a <style> tag for psuedo elements
        var style = `
      .card:hover:before { ${grad_pos} }  /* gradient */
      .card:hover:after { ${sprk_pos} ${opc} }   /* sparkles */ 
    `
        // set / apply css class and style
        $cards.removeClass("active");
        $card.removeClass("animated");
        $card.attr("style", tf);
        $style.html(style);
        if (e.type === "touchmove") {
          return false;
        }
        // clearTimeout(x);
      }).on("mouseout touchend touchcancel", function() {
        // remove css, apply custom animation on end
        var $card = $(this);
        $style.html("");
        $card.removeAttr("style");
        // x = setTimeout(function() {
        //   $card.addClass("animated");
        // },2500);
      });
  </script>
</body>

</html>