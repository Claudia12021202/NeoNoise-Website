<?php include './parts/db-connect.php';
$title = '推薦系統';
$pageName = 'Recommend_Game';

?>
<?php
require "./parts/html-head.php";
?>
<?php
require "./parts/navbar.php";
?>

<link rel="stylesheet" href="./style/claudia/Recommend_Game_Website.css" />
<link rel="stylesheet" href="./style/claudia/Recommend_Game_Mobile.css" />

<body>
  <form name="form1" novalidate action="Recommend_Game_Result.php" method="post">
    <div style="display: block">
      <section class="hero hero-section p-0" onclick="nextpage()">
        <video autoplay muted loop class="hero-video">
          <source src="imgs/claudia/video/herosection-video.mp4" />
        </video>
        <div class="hero-title d-flex flex-column">
          <h1 class="mb-2 mb-md-4">專屬你的搖滾電吉他</h1>
          <div class="start-btn mt-5 mt-md-0 px-2">[ 點擊畫面開始 ]</div>
        </div>
      </section>
      <section class="s1 section">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1 class="title m-0 mb-3">[ 預算 ]</h1>
              <p class="title-qus m-0 mb-1 px-3 px-md-5">
                預計花多少錢在購買電吉他？
              </p>
              <div class="remain-frame-small d-block d-md-none m-0 px-3">
                <span>
                  <小提醒>
                </span>
                <p>預算區間僅限購買電吉他，不包含其他配件。不包含其他配件。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="remain-frame d-none d-md-block text-center">
          <h2>[ 小提醒 ]</h2>
          <p>預算區間僅限購買電吉他，不包含其他配件。</p>
        </div>
        <div class="s1-content">
          <div class="wrapper">
            <div class="values">
              <span id="range1">10000</span>
              <span> &dash; </span>
              <span id="range2">100000</span>
            </div>
            <div class="s1-container">
              <div class="slider-track"></div>
              <input type="range" min="0" max="100000" value="30000" step="5000" id="slider-1" name="slider-1" oninput="slideOne()" />
              <input type="range" min="0" max="100000" value="50000" step="5000" id="slider-2" name="slider-2" oninput="slideTwo()" />
              <div class="price-range-scale-group d-flex w-100 justify-content-between">
                <span class="price-range-scale"></span>
                <span class="price-range-scale-dot"></span>
                <span class="price-range-scale"></span>
                <span class="price-range-scale-dot"></span>
                <span class="price-range-scale"></span>
                <span class="price-range-scale-dot"></span>
                <span class="price-range-scale"></span>
                <span class="price-range-scale-dot"></span>
                <span class="price-range-scale"></span>
                <span class="price-range-scale-dot"></span>
                <span class="price-range-scale"></span>
                <span class="price-range-scale-dot"></span>
                <span class="price-range-scale"></span>
                <span class="price-range-scale-dot"></span>
                <span class="price-range-scale"></span>
                <span class="price-range-scale-dot"></span>
                <span class="price-range-scale"></span>
                <span class="price-range-scale-dot"></span>
                <span class="price-range-scale"></span>
                <span class="price-range-scale-dot"></span>
                <span class="price-range-scale"></span>
              </div>
            </div>

            <di0v class="price-range-p d-flex w-100 text-white justify-content-between">
              <p>NT$0</p>
              <p>NT$100,000</p>
            </di0v>
            <div class="guitar-count">
              [ 這區間裡有 <span id="countNum"></span> 把電吉他 ]
            </div>
          </div>
        </div>
        <a herf="#" class="btn-next step1" onclick="nextpage()">[ 下一步 ] <i class="fa-solid fa-caret-right"></i></a>
        <div class="process-bar">
          <div class="large-process-bg d-none d-md-flex">
            <div class="large-process-bar step-pb1"></div>
          </div>
          <div class="large-pb-uikits-group d-none d-md-flex">
            <div class="uikits1 large-pb-uikits d-flex justify-content-center align-items-center">
              <i class="fa-solid fa-dollar-sign"></i>
            </div>
            <div class="uikits2 large-pb-uikits d-flex justify-content-center align-items-center">
              <i class="fa-solid fa-palette"></i>
            </div>
            <div class="uikits3 large-pb-uikits d-flex justify-content-center align-items-center">
              <i class="fa-solid fa-compact-disc"></i>
            </div>
            <div class="uikits4 large-pb-uikits d-flex justify-content-center align-items-center">
              <i class="fa-solid fa-headphones-simple"></i>
            </div>
            <div class="uikits5 large-pb-uikits d-flex justify-content-center align-items-center">
              <i class="fa-solid fa-expand"></i>
            </div>
            <div class="uikits6 large-pb-uikits d-flex justify-content-center align-items-center">
              <i class="fa-solid fa-hand"></i>
            </div>
          </div>

          <div class="small-process-bg d-md-none">
            <div class="small-process-bar"></div>
          </div>
        </div>
      </section>
      <section class="s2 section">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1 class="title m-0 mb-3">[ 顏色 ]</h1>
              <p class="title-qus m-0 mb-1 px-3 px-md-5">選擇你所喜愛的顏色</p>
              <div class="remain-frame-small d-block d-md-none m-0 px-3">
                <span>
                  <小提醒>
                </span>
                <p>選越多 會有更多選擇</p>
              </div>
            </div>
          </div>
        </div>
        <div class="remain-frame d-none d-md-block">
          <h2>[ 小提醒 ]</h2>
          <p>選越多 會有更多選擇</p>
        </div>
        <div class="s2-content m-auto d-flex flex-column flex-md-row align-items-md-end justify-content-md-center">
          <div class="color-group d-flex flex-wrap justify-content-evenly align-content-between">
            <div class="color-circle d-flex flex-colum justify-content-center align-items-center ">
              <div class="color-shoot"></div>
              <label for="CC1" class="color-label" style="
                  background: linear-gradient(
                    40.34deg,
                    rgb(231, 29, 8) 3.49%,
                    rgb(139, 0, 24) 180.91%
                  ); ">
                <input id="CC1" type="checkbox" value="1" name="color[]">
              </label>
            </div>

            <div class="color-circle d-flex flex-colum justify-content-center align-items-center ">
              <div class="color-shoot"></div>
              <label for="CC2" class="color-label" style="
                    background: linear-gradient(
                    144.09deg,
                    rgb(255, 158, 88) -5.26%,
                    rgb(238, 97, 12) 138.96%
                  );
                ">
                <input id="CC2" type="checkbox" value="4" name="color[]">
              </label>
            </div>

            <div class="color-circle d-flex flex-colum justify-content-center align-items-center">
              <div class="color-shoot"></div>
              <label for="CC3" class="color-label" style="
                  background: linear-gradient(
                    208.38deg,
                    rgb(222, 200, 0) -92.96%,
                    rgb(255, 200, 114) 118.57%
                  );
                ">
                <input id="CC3" type="checkbox" value="2" name="color[]">
              </label>
            </div>

            <div class="color-circle d-flex flex-colum justify-content-center align-items-center">
              <div class="color-shoot"></div>
              <label for="CC4" class="color-label" style="
                  background-image: linear-gradient(
                    to top,
                    #0ba360 0%,
                    #3cba92 100%
                  );
                ">
                <input id="CC4" type="checkbox" value="5" name="color[]">
              </label>
            </div>

            <div class="color-circle d-flex flex-colum justify-content-center align-items-center">
              <div class="color-shoot"></div>
              <label for="CC5" class="color-label" style="
                  background-image: linear-gradient(
                    to top,
                    #4481eb 0%,
                    #04befe 100%
                  );">
                <input id="CC5" type="checkbox" value="3" name="color[]">
              </label>
            </div>

            <div class="color-circle d-flex flex-colum justify-content-center align-items-center">
              <div class="color-shoot"></div>
              <label for="CC6" class="color-label" style="
                  background-image: linear-gradient(
                    to top,
                    #8f0dc7 0%,
                    #b224ef 100%
                  );
                ">
                <input id="CC6" type="checkbox" value="6" name="color[]">
              </label>
            </div>

            <div class="color-circle d-flex flex-colum justify-content-center align-items-center">
              <div class="color-shoot"></div>
              <label for="CC7" class="color-label" style="
                  background: linear-gradient(
                    204.8deg,
                    rgb(228, 224, 214) -54.17%,
                    rgb(255, 255, 255) 178.23%
                  );
                ">
                <input id="CC7" type="checkbox" value="7" name="color[]">
              </label>
            </div>

            <div class="color-circle d-flex flex-colum justify-content-center align-items-center">
              <div class="color-shoot"></div>
              <label for="CC8" class="color-label" style="
                  background: linear-gradient(
                    330.43deg,
                    rgb(0, 0, 0) 0%,
                    rgb(104, 104, 104) 223.01%
                  );
                ">
                <input id="CC8" type="checkbox" value="8" name="color[]">
              </label>
            </div>

            <div class="color-circle d-flex flex-colum justify-content-center align-items-center">
              <div class="color-shoot"></div>
              <label for="CC9" class="color-label" style="
          background: linear-gradient(58deg, rgba(238, 174, 202, 1) 0%, rgba(206, 219, 177, 1) 21%, rgba(209, 178, 212, 1) 31%, rgba(181, 219, 205, 1) 50%, rgba(199, 181, 220, 1) 66%, rgba(167, 227, 185, 1) 79%, rgba(148, 187, 233, 1) 100%);
                ">
                <input id="CC9" type="checkbox" value="12" name="color[]">
              </label>
            </div>

            <div class="color-circle d-flex flex-colum justify-content-center align-items-center">
              <div class="color-shoot"></div>
              <label for="CC10" class="color-label" style="
                  background-image: url(imgs/claudia/natural.svg);
                  background-size: cover;
                ">
                <input id="CC10" type="checkbox" value="9" name="color[]">
              </label>
            </div>

            <div class="color-circle d-flex flex-colum justify-content-center align-items-center">
              <div class="color-shoot"></div>
              <label for="CC11" class="color-label" style="
                  background: rgb(142,67,6);
                  background: linear-gradient(200deg, rgba(142,67,6,1) 34%, rgba(112,62,20,1) 86%);
                ">
                <input id="CC11" type="checkbox" value="10" name="color[]">
              </label>
            </div>

            <div class="color-circle d-flex flex-colum justify-content-center align-items-center">
              <div class="color-shoot"></div>
              <label for="CC12" class="color-label" style="
                background: linear-gradient(54deg, rgba(2, 0, 36, 1) 0%, rgba(121, 72, 9, 1) 47%, rgba(255, 241, 0, 1) 100%);
                ">
                <input id="CC12" type="checkbox" value="11" name="color[]">
              </label>
            </div>


          </div>
          <label for="checkedAll" id="checkedLabel" class="btn-select-all rounded px-3 py-2" >選取全部
            <input id="checkedAll" class="" type="checkbox" id="checkAll" >
          </label>
            
        </div>
        <a herf="#" class="btn-previous" onclick="prepage()"><i class="fa-solid fa-caret-left"></i> [ 上一步 ]</a>
        <a herf="#" class="btn-next step2" onclick="nextpage()">[ 略過 ] <i class="fa-solid fa-caret-right"></i></a>
      </section>
      <section class="s3 section">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1 class="title m-0 mb-3">[ 曲風 ]
              </h1>
              <p class="title-qus m-0 mb-1 px-3 px-md-5">
                選擇你所喜愛的歌曲風格
                <button class="s3-sound" type="button">
                  <i class="fa-solid fa-volume-high" style="opacity: 1;"></i>
                  <i class="fa-solid fa-volume-xmark"></i>
                </button>
              </p>


              <!-- [複選] -->
              <div class="remain-frame-small d-block d-md-none m-0 px-3">
                <span>
                  <小提醒>
                </span>
                <p>
                  點選曲風會播放音樂 ; 曲風會影響電吉他的木頭&拾音器&琴頸形狀。
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="remain-frame d-none d-md-block">
          <h2>[ 小提醒 ]</h2>
          <p>點選曲風會播放音樂 ; 曲風會影響電吉他的木頭&拾音器&琴頸形狀。</p>
        </div>

        <div class="s3-content row d-flex align-items-center justify-content-md-evenly m-md-auto">
          <div class="col col-md-5 song-group row m-0">
            <div class="col-6 px-0">
              <button class="btn-music rounded rounded-1 px-0 px-md-2 my-3 " type="button" data-val="1">
                [ Alt & Indie Rock ]
                <audio class="Alt_mp3" src="./imgs/claudia/mp3/Music/Genre_Indie_Electric.mp3" loop="true" preload="auto" muted="true"></audio>
              </button>

              <button class="btn-music rounded rounded-1 px-0 px-md-2 my-3" type="button" data-val="2">
                [ Punk & Metal ]
                <audio class="Alt_mp3" src="./imgs/claudia/mp3/Music/Genre_Punk_Electric.mp3" loop="true" preload="auto" muted="true"></audio>
              </button>

              <button class="btn-music rounded rounded-1 px-0 px-md-2 my-3" type="button" data-val="3">
                [ Mainstream & Pop ]
                <audio class="Alt_mp3" src="./imgs/claudia/mp3/Music/Genre_Pop_Electric.mp3" loop="true" preload="auto" muted="true"></audio>
              </button>

              <button class="btn-music rounded rounded-1 px-0 px-md-2 my-3" type="button" data-val="4">
                [ Electronic / Dance ]
                <audio class="Alt_mp3" src="./imgs/claudia/mp3/Music/Genre_EDM_Electric.mp3" loop="true" preload="auto" muted="true"></audio>
              </button>

              <button class="btn-music rounded rounded-1 px-0 px-md-2 my-3" type="button" data-val="5">
                [ Classic Rock ]
                <audio class="Alt_mp3" src="./imgs/claudia/mp3/Music/Genre_ClassicRock_Electric.mp3" loop="true" preload="auto" muted="true"></audio>
              </button>

              <button class="btn-music rounded rounded-1 px-0 px-md-2 my-3" type="button" data-val="6">
                [ R&B/ Soul ]
                <audio class="Alt_mp3" src="./imgs/claudia/mp3/Music/Genre_RBSoul_Electric.mp3" loop="true" preload="auto" muted="true"></audio>
              </button>

            </div>
            <div class="col-6 px-0">
              <button class="btn-music rounded rounded-1 px-0 px-md-2 my-3" type="button" data-val="7">
                [ Country ]
                <audio class="Alt_mp3" src="./imgs/claudia/mp3/Music/Genre_Country_Electric.mp3" loop="true" preload="auto" muted="true"></audio>
              </button>

              <button class="btn-music rounded rounded-1 px-0 px-md-2 my-3" type="button" data-val="8">
                [ Hip-Hop ]
                <audio class="Alt_mp3" src="./imgs/claudia/mp3/Music/Genre_HipHop_Electric.mp3" loop="true" preload="auto" muted="true"></audio>
              </button>

              <button class="btn-music rounded rounded-1 px-0 px-md-2 my-3" type="button" data-val="9">
                [ Jazz ]
                <audio class="Alt_mp3" src="./imgs/claudia/mp3/Music/Genre_Jazz_Electric.mp3" loop="true" preload="auto" muted="true"></audio>
              </button>

              <button class="btn-music rounded rounded-1 px-0 px-md-2 my-3" type="button" data-val="10">
                [ Blues ]
                <audio class="Alt_mp3" src="./imgs/claudia/mp3/Music/Genre_Blues_Electric.mp3" loop="true" preload="auto" muted="true"></audio>
              </button>

              <button class="btn-music rounded rounded-1 px-0 px-md-2 my-3" type="button" data-val="11">
                [ Funk ]
                <audio class="Alt_mp3" src="./imgs/claudia/mp3/Music/Genre_Funk_Electric.mp3" loop="true" preload="auto" muted="true"></audio>
              </button>
            </div>
          </div>
          <div class="vinyl-records col-md-7 col d-none d-md-block mx-3">
            <div class="vinyl-records-img-group">
              <img src="./imgs/claudia/Music_Img/Alt&Indie_Rock.jpeg" alt="">
              <img src="./imgs/claudia/Music_Img/Punk&Metal.jpeg" alt="">
              <img src="./imgs/claudia/Music_Img/Mainstream&Pop.jpeg" alt="">
              <img src="./imgs/claudia/Music_Img/Eletronic_Dance.jpeg" alt="">
              <img src="./imgs/claudia/Music_Img/Classic_Rock.jpeg" alt="">
              <img src="./imgs/claudia/Music_Img/R&B_Soul.jpeg" alt="">
              <img src="./imgs/claudia/Music_Img/Country.jpeg" alt="">
              <img src="./imgs/claudia/Music_Img/Hip_Hop.jpeg" alt="">
              <img src="./imgs/claudia/Music_Img/Jazz.jpeg" alt="">
              <img src="./imgs/claudia/Music_Img/Blues.jpeg" alt="">
              <img src="./imgs/claudia/Music_Img/Funk.jpeg" alt="">
            </div>
            <!-- <div class="default-records"></div> -->
          </div>
        </div>
        <a herf="#" class="btn-previous" onclick="prepage()"><i class="fa-solid fa-caret-left"></i> [ 上一步 ]</a>
        <a herf="#" class="btn-next step1" onclick="nextpage()">[ 略過 ] <i class="fa-solid fa-caret-right"></i></a>
      </section>

      <section class="s4 section">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1 class="title m-0 mb-3">[ 音色 ]</h1>
              <p class="title-qus m-0 mb-1 px-3 px-md-5">
                選擇你所喜愛的電吉他音色
                <button class="s4-sound" type="button">
                  <i class="fa-solid fa-volume-high" style="opacity: 1;"></i>
                  <i class="fa-solid fa-volume-xmark"></i>
                </button>
              </p>
              <div class="remain-frame-small d-block d-md-none m-0 px-3">
                <span>
                  <小提醒>
                </span>
                <p>聽聽喜愛的音色，音色會影響拾音器＆木頭的選擇。</p>
              </div>
            </div>
          </div>
        </div>
        <div class="remain-frame d-none d-md-block">
          <h2>[ 小提醒 ]</h2>
          <p>聽聽喜愛的音色，音色會影響拾音器＆木頭的選擇。</p>
        </div>
        <div class="s4-content d-flex align-items-center justify-content-md-center justify-content-between m-auto">

          <div class="tone-pink d-flex flex-column justify-content-between text-center py-4 mx-md-4">
            <input id="myInput_pink" class="tone-input" type="range" min="0" max="100" step="50" value="50" onchange="Pick1(event)">
            <p>厚實</p>
            <p>中間</p>
            <p class="tone-p-dark">清脆</p>
            <span id="Pick_green" class="tone-point-g">
              <svg width="38" height="33" viewBox="0 0 38 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.93567 1.38803C9.08009 0.516059 11.4918 0.420822 13.7952 0.902488C18.3474 1.85438 23.6842 4.37946 28.1653 7.27623C30.4024 8.72238 32.4136 10.2531 33.997 11.7134C35.5903 13.1829 36.7138 14.548 37.2221 15.6579C37.4602 16.1779 37.4311 16.7613 37.1384 17.2329C36.5577 18.1682 35.3828 19.4361 33.769 20.8592C32.1643 22.2742 30.1554 23.817 27.937 25.3041C23.4908 28.2845 18.251 31.0087 13.7765 32.0519C11.4937 32.5841 9.08067 32.4842 6.93567 31.612C3.85173 30.358 2.25484 28.1577 1.41577 25.4895C0.566908 22.7902 0.499999 19.6312 0.499999 16.5C0.499999 13.3688 0.566908 10.2098 1.41577 7.51048C2.25484 4.84231 3.85173 2.64203 6.93567 1.38803Z" fill="#66fee6"></path>
              </svg>
            </span>
          </div>
          <div class="tone-green d-flex flex-column justify-content-between text-center py-4 mx-md-4">
            <input id="myInput_green" class="tone-input" type="range" min="0" max="100" step="50" value="50" onchange="Pick2(event)">
            <p class="tone-p-dark">溫暖</p>
            <p>中間</p>
            <p>原聲</p>
            <span id="Pick_pink" class="tone-point-p">
              <svg width="38" height="33" viewBox="0 0 38 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.93567 1.38803C9.08009 0.516059 11.4918 0.420822 13.7952 0.902488C18.3474 1.85438 23.6842 4.37946 28.1653 7.27623C30.4024 8.72238 32.4136 10.2531 33.997 11.7134C35.5903 13.1829 36.7138 14.548 37.2221 15.6579C37.4602 16.1779 37.4311 16.7613 37.1384 17.2329C36.5577 18.1682 35.3828 19.4361 33.769 20.8592C32.1643 22.2742 30.1554 23.817 27.937 25.3041C23.4908 28.2845 18.251 31.0087 13.7765 32.0519C11.4937 32.5841 9.08067 32.4842 6.93567 31.612C3.85173 30.358 2.25484 28.1577 1.41577 25.4895C0.566908 22.7902 0.499999 19.6312 0.499999 16.5C0.499999 13.3688 0.566908 10.2098 1.41577 7.51048C2.25484 4.84231 3.85173 2.64203 6.93567 1.38803Z" fill="#f595f0"></path>
              </svg>
            </span>
          </div>


        </div>

        <a herf="#" class="btn-previous" onclick="prepage()"><i class="fa-solid fa-caret-left"></i> [ 上一步 ]</a>
        <a herf="#" class="btn-next" onclick="nextpage()">[ 略過 ] <i class="fa-solid fa-caret-right"></i></a>
      </section>
      <section class="s5 section">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1 class="title m-0 mb-3">[ 尺寸 ]</h1>
              <p class="title-qus m-0 px-3 px-md-5">
                如果你的身高低於155公分，會建議選擇小尺寸的電吉他
              </p>
              <!-- <div class="remain-frame-small d-block d-md-none m-0 px-3">
              <span><小提醒></span>
              <p>-</p>
            </div> -->
            </div>
          </div>
        </div>
        <div class="remain-frame d-none d-md-block">
          <h2>[ 小提醒 ]</h2>
          <p>-</p>
        </div>
        <div class="d-flex flex-column justify-content-evenly s5-container">
          <div class="d-flex justify-content-around justify-content-md-around mb-5 w-100 m-auto">
            <h6>[ 小尺寸 ]</h6>
            <h6>[ 標準型 ]</h6>
          </div>
          <div class="d-flex justify-content-evenly justify-content-md-around w-100">
            <div class="guitar-size-small">
              <label for="guitar-size-small" class="size-label">
                <img class="ele-s-size" src="imgs/claudia/ele-size.svg" alt="" />
              </label>
              <input id="guitar-size-small" class="guitar-size-input" name="size" type="radio" />
            </div>

            <div class="guitar-size-large">
              <label for="guitar-size-large" class="size-label">
                <img class="ele-l-size" src="imgs/claudia/ele-size.svg" alt="" />
              </label>
              <input id="guitar-size-large" class="guitar-size-input" name="size" type="radio" />
            </div>
          </div>
        </div>
        <a herf="#" class="btn-previous" onclick="prepage()"><i class="fa-solid fa-caret-left"></i> [ 上一步 ]</a>
        <a herf="#" class="btn-next" onclick="nextpage()"></i></a>
      </section>
      <section class="s6 section">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1 class="title m-0 mb-3">[ 慣用手 ]</h1>
              <p class="title-qus m-0 mb-1 px-3 px-md-5">
                請選擇平常使用的慣用手
              </p>
              <!-- <div class="remain-frame-small d-block d-md-none m-0 px-3">
              <span><小提醒></span>
              <p>-</p>
            </div> -->
            </div>
          </div>
        </div>
        <div class="remain-frame d-none d-md-block">
          <h2>[ 小提醒 ]</h2>
          <p>-</p>
        </div>
        <div class="d-flex flex-column justify-content-evenly s6-container">
          <div class="d-flex justify-content-evenly justify-content-md-around mb-5 w-100 m-auto">
            <h6>[ 左撇子 ]</h6>
            <h6>[ 右撇子 ]</h6>
          </div>
          <div class="d-flex justify-content-around justify-content-md-around w-100">
            <div class="left-hand-group">
              <label for="left" class="hand-choose-label">
                <img class="left-hand-img" src="imgs/claudia/left-hand.svg" alt="" />
              </label>
              <input id="left" class="hand-choose-input" name="size" type="radio" />
            </div>

            <div class="right-hand-group">
              <label for="right" class="hand-choose-label">
                <img class="right-hand-img" src="imgs/claudia/right-hand.svg" alt="" />
              </label>
              <input id="right" class="hand-choose-input" name="size" type="radio" />

            </div>
          </div>
        </div>
        <a herf="#" class="btn-previous" onclick="prepage()"><i class="fa-solid fa-caret-left"></i> [ 上一步 ]</a>
        <button type="button" herf="#" class="btn-next" onclick="nextpage()"></button>
      </section>
  </form>
  <section id="s7_Loading" class="s7 section">
    <div class="s7-content">
      <h1 id="TypingH1"> [ 載入中 . . . ] </h1>
      <svg width="87" height="95" viewBox="0 0 87 95" fill="none" xmlns="http://www.w3.org/2000/svg" opacity="1">
        <path d="M85.4011 22.3065C85.9841 24.7018 86.1697 27.1811 85.9149 29.628C84.8078 40.2565 79.2729 53.3797 72.2641 65.1315C65.2545 76.8847 56.8231 87.1787 49.9909 92.1807C46.1246 95.0112 41.0735 94.6522 37.423 91.4988C31.2213 86.1415 22.7449 75.8829 15.5099 64.3323C8.27051 52.7747 2.32384 40.0018 1.10947 29.6195C0.824246 27.181 1.01538 24.7028 1.59853 22.3065C4.16282 11.7692 10.1627 6.34687 17.7264 3.53111C25.3381 0.697482 34.5422 0.5 43.4998 0.5C52.4575 0.5 61.6616 0.697482 69.2732 3.53111C76.8369 6.34687 82.8368 11.7692 85.4011 22.3065Z" fill="rgba(255, 255, 255, 0.6)" class="plectrum-fill" opacity="0.7"></path>
        <path d="M85.4011 22.3065C85.9841 24.7018 86.1697 27.1811 85.9149 29.628C84.8078 40.2565 79.2729 53.3797 72.2641 65.1315C65.2545 76.8847 56.8231 87.1787 49.9909 92.1807C46.1246 95.0112 41.0735 94.6522 37.423 91.4988C31.2213 86.1415 22.7449 75.8829 15.5099 64.3323C8.27051 52.7747 2.32384 40.0018 1.10947 29.6195C0.824246 27.181 1.01538 24.7028 1.59853 22.3065C4.16282 11.7692 10.1627 6.34687 17.7264 3.53111C25.3381 0.697482 34.5422 0.5 43.4998 0.5C52.4575 0.5 61.6616 0.697482 69.2732 3.53111C76.8369 6.34687 82.8368 11.7692 85.4011 22.3065Z" stroke="rgba(255, 255, 255, 0.6)" class="plectrum-stroke" opacity="1" stroke-dashoffset="0px" stroke-dasharray="278.72467041015625px 278.72467041015625px"></path>
      </svg>
    </div>
  </section>
  </div>
  <header></header>
  <div class="bg-frame"></div>
  <div class="tag-top d-none d-md-inline-block">[ FIND_YOUR_GUITAR ]</div>
  </div>
  <?php
  require "./parts/script.php";
  ?>

  <script>
    //-------------------------Process_Bar---------------------------------
    $(".hero-video").click(function() {
      $(".large-process-bar")
        .css("width", "14.3%")
        .css("transition", "1s")
        .css("transition-delay", "0.5s")
        .css("transition-timing-function", "ease-in");
      $(".uikits1")
        .css("border", "2px solid var(--pink)")
        .css("box-shadow", "0 0 0.2em var(--pink), 0 0 5px 0 var(--pink)")
        .css("transition-delay", "1s")
        .css("transition-duration", "1s")
        .css("transition-timing-function", "ease-out")
        .css("background-color", "var(--purple)");
      $(".small-process-bar").css("width", "14.3%").css('transition', '1s');
    });

    var length = 14.3;
    var UikitsCircle = 1;

    $(".btn-next").on("click", function() {
      length += 14.3;
      $(".large-process-bar").css("width", length + "%");
      $(".small-process-bar").css("width", length + "%").css('transition', '1s');

      UikitsCircle++;
      $(".uikits" + UikitsCircle).addClass("active");
    });

    $(".btn-previous").on("click", function() {
      length -= 14.3;
      if (length < 0) {
        length = 0;
      }
      $(".large-process-bar").css("width", length + "%");
      $(".small-process-bar").css("width", length + "%").css('transition', '1s');

      $(".uikits" + UikitsCircle).removeClass("active");
      UikitsCircle--;
      $(".uikits" + UikitsCircle).addClass("active");
    });
    // -------------------Previous_BTN& Next_Page----------------------------

    //First Page
    function start() {
      nextpage();
    }

    let ScrollScreen = $(window).height() - 50;

    function prepage() {
      window.scrollBy({
        top: -ScrollScreen,
        left: 0,
        behavior: "instant"
      });
    }

    function nextpage() {
      window.scrollBy({
        top: ScrollScreen,
        left: 0,
        behavior: "instant"
      });
    }

    // ---------------------------S1_Price_Slider(O)---------------------------------

    $(function() {
      slideOne();
      slideTwo();
    });

    let sliderOne = document.getElementById("slider-1");
    let sliderTwo = document.getElementById("slider-2");
    // input

    // let displayValOne = document.getElementById(`dollarCommas(${range1})`);
    // let displayValTwo  = document.getElementById(`dollarCommas(${range2})`);
    let displayValOne = document.getElementById("range1");
    let displayValTwo = document.getElementById("range2");
    // 上面的數值
    let minGap = 0;
    let sliderTrack = document.querySelector(".slider-track");
    let sliderMaxValue = document.getElementById("slider-1").max;
    // 100000
    let guitarCount = document.getElementById("countNum");

    function slideOne() {
      if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderOne.value = parseInt(sliderTwo.value) - minGap;
      }
      displayValOne.textContent = "NT$" + dollarCommas(sliderOne.value);
      fillColor();
    }

    function slideTwo() {
      if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
        sliderTwo.value = parseInt(sliderOne.value) + minGap;
      }
      displayValTwo.textContent = "NT$" + dollarCommas(sliderTwo.value);
      fillColor();
    }

  function mapValue(value, inMin, inMax, outMin, outMax) {
  // 將輸入值映射到0-1之間
  var normalizedValue = (value - inMin) / (inMax - inMin);
  // 非線性映射，這裡使用平方根函數作為範例
  var mappedValue = Math.sqrt(normalizedValue);
  // 將值映射到輸出範圍
  return outMin + (outMax - outMin) * mappedValue;
  }

  function fillColor() {
    percent1 = (sliderOne.value / sliderMaxValue) * 100;
    percent2 = (sliderTwo.value / sliderMaxValue) * 100;
    sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , var(--pink) ${percent1}% , var(--pink) ${percent2}%, #dadae5 ${percent2}%)`;
    // guitarCount.innerHTML = parseInt((percent2 - percent1)/5*3-1);
    var guitarCountValue = mapValue(percent2 - percent1,1 ,100 ,1 ,100); // 調整輸入範圍
    var randomOffset = Math.floor(Math.random() * 10) - 5; // 添加隨機偏移

    guitarCount.innerHTML = Math.floor(guitarCountValue) + randomOffset;
  }

    // --------------------------S2_Color_Cirle (O）----------------------------------

    $(".color-circle").find("input").change(function(e) {
      // console.log(111);

      if ($(window).width() < 768) {
        $(".color-shoot").css('background-image', 'url(./imgs/claudia/color-shoot.svg)')
      }
      if ($(window).width() > 768) {
        $(".color-shoot").css('background-image', 'url(./imgs/claudia/color-shoot-large.svg)').css('height', '130%')
      }

      let Checked = $(e.target).prop('checked');
      // console.log($(e.target).prop('checked'));
      console.log($(e.target).val());
      //確定抓到val值 
      if (Checked) {
        $(e.target).parent().prevAll(".color-shoot").addClass("active1");
      } else {
        $(e.target).parent().prevAll(".color-shoot").removeClass("active1");
      }

    })

    // 全部選取
    const checkAll = document.getElementById('checkedAll');
    const checkLabel = document.getElementById('checkedLabel');
    checkAll.onclick = function()
		{
      if ($(window).width() < 768) {
        $(".color-shoot").css('background-image', 'url(./imgs/claudia/color-shoot.svg)')
      }
      if ($(window).width() > 768) {
        $(".color-shoot").css('background-image', 'url(./imgs/claudia/color-shoot-large.svg)').css('height', '130%')
      }

			var colorAll = document.getElementsByName('color[]');
			if (this.checked) {
				for(var i = 0 ; i < colorAll.length ; i++ ){
					var AllColors = colorAll[i];
					AllColors.checked = "checked";
          $(AllColors).parent().prevAll(".color-shoot").addClass("active1");
				}
        checkLabel.style.backgroundColor = 'var(--green)';
        checkLabel.style.color = 'var(--purple)';
			}
			else{
				for(var i = 0 ; i < colorAll.length ; i++ ){
					var AllColors = colorAll[i];
					AllColors.checked = null;
          $(AllColors).parent().prevAll(".color-shoot").removeClass("active1");
				}
        checkLabel.style.backgroundColor = 'transparent';
        checkLabel.style.color = 'var(--green)';
			}

		}
    
    $(".color-circle").find("input").change(function(e) {
      $('.btn-next').eq(1).html('[ 下一步 ] <i class="fa-solid fa-caret-right"></i>')
    })

    // --------------------------S3 Music (O)----------------------------------
    let musicPlaying = true;
    let mData = [];
    let currentPlay = '';
    const allBtns = $('.btn-music');
    const allAudio = $('.btn-music audio')
    const playing_icon = `<div class="playing_icon">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
              </div>`;

    const stopAllAudio = () => {
      allAudio.each(function() {
        this.muted = true;
        this.pause();
      })
    };

    const playSomeMusic = (audioNum) => {
      const aud = $(`.btn-music[data-val=${audioNum}] audio`);
      if (aud.length) {
        aud[0].muted = false;
        aud[0].play();
      }
    };

    $('.s3-sound').click(function() {
      musicPlaying = !musicPlaying;

      if (musicPlaying) {
        $('.s3-sound').find('i').eq(1).css('opacity', '0');
        $('.s3-sound').find('i').eq(0).css('opacity', '1');

        stopAllAudio();

        if (currentPlay) {
          playSomeMusic(currentPlay);
        }

        // $(".btn-music[data-val=3] audio").play();

      } else {
        $('.s3-sound').find('i').eq(1).css('opacity', '1');
        $('.s3-sound').find('i').eq(0).css('opacity', '0');

        // $(".btn-music audio").each(function() {
        //   this.pause();
        // }); 
        stopAllAudio();
      }
    })


    allBtns.click(function() {
      // console.log($(this).attr('val'));
      // 音樂都先暫停在播放當前音樂
      $(".btn-music audio").each(function() {
        this.pause();
      });

      var Audio = $(this).find("audio")[0];
      Audio.currentTime = 0;
      Audio.play();

      // 按Btn重複點選
      let MusicVal = $(this).attr('data-val');
      if (!mData.includes(MusicVal)) {
        mData.push(MusicVal);
        currentPlay = MusicVal; 
        $('.btn-next').eq(2).html('[ 下一步 ] <i class="fa-solid fa-caret-right"></i>');

      } else {
        mData = mData.filter(item => item !== MusicVal);

        if (mData.length) {
          currentPlay = mData[mData.length - 1];
        } else {
          currentPlay = '';
        }
      }
      stopAllAudio();
      if (currentPlay && musicPlaying) {
        playSomeMusic(currentPlay);
      }

      allBtns.each(function() {
        $(this).removeClass('active4');
        $(this).find('.playing_icon').remove();
        // 全部都沒有照片;
        // console.log('test',$(this).parent().parent().next().find('img'));

        const v = $(this).attr('data-val');
        if (mData.includes(v)) {
          $(this).addClass('active3');
        } else {
          $(this).removeClass('active3');
        }
        if (currentPlay == v) {
          $(this).addClass('active4');
          // console.log($(this));
          $(this).prepend(playing_icon);
          const aud = $(this).find('audio');
          console.log('this:', aud)
          // aud[0].muted = false;
          aud[0].play();

          // 黑膠唱片換圖片
          $('.vinyl-records-img-group img').eq(currentPlay - 1).css('opacity', '1').css('animation', 'Vinyl_Rotate 4s linear infinite').siblings().css('opacity', '0');
          // $('.vinyl-records-img-group img').eq(currentPlay - 1).addClass('active2').siblings().removeClass('active2');
        }
      });

      var isAnyBtnClicked = false;
      // 檢查按鈕是否被點擊
      if (allBtns.hasClass('active4')) {
        isAnyBtnClicked = true;
          }
        ;

      // 如果沒有任何按鈕被點擊，則隐藏图片
      if (!isAnyBtnClicked) {
          $('.vinyl-records-img-group img').hide();
      }else{
        $('.vinyl-records-img-group img').show();
      }

      // console.log({mData})
      // console.log({currentPlay});
      // 按[下一步]的時候音樂會關掉
      $(".btn-next").eq(2).click(function() {
        Audio.pause();
      })

    })

    // ---------------------------S4(Tone)------------------

    // 抓到0 50 100
    // 當value=0時 箭頭會上下移動
    const InputPink = document.getElementById("myInput_pink");
    const PickGreen = document.getElementById("Pick_green");

    function Pick1(e) {
      const currentValue1 = InputPink.value;
      $("#Pick_green").css("top", `${currentValue1}%`).css("transition", "0.5s")
      console.log(currentValue1);
      if (currentValue1 == 0) {
        $("#Pick_green").css("top", "10%");

      }
      if (currentValue1 == 100) {
        $("#Pick_green").css("top", "90%")
      }
    }

    const InputGreen = document.getElementById("myInput_green");
    const PickPink = document.getElementById("Pick_pink");

    function Pick2(e) {
      const currentValue2 = InputGreen.value;
      $("#Pick_pink").css("top", `${currentValue2}%`).css("transition", "0.5s")
      // console.log(currentValue);
      if (currentValue2 == 0) {
        $("#Pick_pink").css("top", "10%")
      }
      if (currentValue2 == 100) {
        $("#Pick_pink").css("top", "90%")
      }
    }
    const audio = new Audio();

    // 綁定 input 元素的 change 事件監聽器
    InputPink.addEventListener("change", () => {
      
      let nowSecond = audio.currentTime;
      if (InputPink.value == 0) {
        audio.src = "./imgs/claudia/mp3/Tone/Sound_FatThick_Electric.mp3";
      } else if (InputPink.value == 50) {
        audio.src = "./imgs/claudia/mp3/Tone/Sound_FatThick-Balanced_Electric.mp3";
      } else if (InputPink.value == 100) {
        audio.src = "./imgs/claudia/mp3/Tone/Sound_ClearCrisp_Electric.mp3";
      }

      audio.currentTime = nowSecond;
      audio.loop = true;
      audio.play();

      $('.btn-next').eq(3).html('[ 下一步 ] <i class="fa-solid fa-caret-right"></i>');
    });

    InputGreen.addEventListener("change", () => {
      let nowSecond = audio.currentTime;
      if (InputGreen.value == 0) {
        audio.src = "./imgs/claudia/mp3/Tone/Sound_WarmRound_Electric.mp3";
      } else if (InputGreen.value == 50) {
        audio.src = "./imgs/claudia/mp3/Tone/Sound_WarmTwang-Balanced_Electric.mp3";
      } else if (InputGreen.value == 100) {
        audio.src = "./imgs/claudia/mp3/Tone/Sound_Twang_Electric.mp3";
      }
      audio.currentTime = nowSecond;
      audio.loop = true; // 設置 loop 屬性為 true
      audio.play();

      $('.btn-next').eq(3).html('[ 下一步 ] <i class="fa-solid fa-caret-right"></i>');
    });
    // 按下一步時會取消撥放音調
    $(".btn-next").eq(3).click(function() {
      audio.pause();
    })
    // --------------------------S4(音量按鈕)_-----------------------------
    let tonePlaying = false;
    $('.s4-sound').click(function() {
      tonePlaying = !tonePlaying;

      if (tonePlaying) {
        $('.s4-sound').find('i').eq(1).css('opacity', '1');
        $('.s4-sound').find('i').eq(0).css('opacity', '0');

        audio.muted = tonePlaying;
        console.log(audio.muted);
        audio.pause();
        // stopToneAudio();

      } else {
        $('.s4-sound').find('i').eq(1).css('opacity', '0');
        $('.s4-sound').find('i').eq(0).css('opacity', '1');

        audio.muted = tonePlaying;
        console.log(audio.muted);
        audio.play();
      }
    })

    // ---------------------S5--------------------------------
    const checkSize = `<div class="check-gs-circle"></div>`;

    $(".s5").find("input").change(function(e) {
      $(this).parent().parent().find('.check-gs-circle').remove();

      let Checked = $(e.target).prop('checked');
      // console.log($(e.target).prop('checked'));
      $('.btn-next').eq(4).html('[ 下一步 ] <i class="fa-solid fa-caret-right"></i>');
      if (Checked) {
        $(this).parent().prepend(checkSize);
      }
      
    })
    // ---------------------S6--------------------------------
    const checkHnad = `<div class="check-hand-circle"></div>`;

    $(".s6").find("input").change(function(e) {
      $(this).parent().parent().find('.check-hand-circle').remove();

      let Checked = $(e.target).prop('checked');
      // console.log($(e.target).prop('checked'));
      $('.btn-next').eq(5).html('[ 結果 ] <i class="fa-solid fa-caret-right"></i>');
      if (Checked) {
        $(this).parent().prepend(checkHnad);
      }

    })
    // ---------------------------S7(OK)---------------

    $('.btn-next').eq(5).click(function() {
      $('.s7 h1').css("animation", "BlinkCaret 0.5s step-end infinite,Typing 3.5s steps(7, end) 2")

      setTimeout(() => {
        document.form1.submit();
      }, 4000)
    })
  </script>

</body>