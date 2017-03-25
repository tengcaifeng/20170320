<!doctype html>
<html >
  <head>
    <meta charset="utf-8"/>
     <style type="text/css">
     *{margin:0px;padding:0;}
      body{
        background:url("image/bg.jpg");
        -webkit-background-size : cover;
        background-size: cover;;
        overflow: hidden;
      }
      .dengziqi{
        width:235px;
        height:235px;
        position:absolute;
        bottom:90px;
        right:0;
        left:0;
        margin:auto;
        perspective:1000px;/*视距*/
      }
      .dengziqi .scene{
        transform-style:preserve-3D;/*子元素为3d模式*/
        width:240px;
        height:240px;
        transform-origin:50%;/* 设置旋转的中心点*/
        float:left; margin-right:60px;
        -webkit-animation:slide 18s linear infinite;
        animation:slide 18s linear infinite;
      }
      .dengziqi .scene ul li{
        list-style:none;
        width:235px;
        height:235px;
        border:5px solid #FE98D9;
        position:absolute;
      }
      .dengziqi .scene ul li img{
        width:235px;
        height:235px;
      }
      .dengziqi .scene ul li:nth-child(1){
        transform: rotateY(0deg) translateZ(260px);
      }
      .dengziqi .scene ul li:nth-child(2){
        transform:rotateY(60deg) translateZ(260px);
      }
      .dengziqi .scene ul li:nth-child(3){
        transform:rotateY(120deg) translateZ(260px);
      }
      .dengziqi .scene ul li:nth-child(4){
        transform:rotateY(180deg) translateZ(260px);
      }
        .dengziqi .scene ul li:nth-child(5){
          transform:rotateY(240deg) translateZ(260px);
        }
      .dengziqi .scene ul li:nth-child(6){
        transform:rotateY(300deg) translateZ(260px);
      }
      /*CSS3动画开始*/
      @-webkit-keyframes  slide{
        from{transform:rotateY(0deg);
        }
        to{transform:rotateY(360deg);
        }
      }
        @keyframes  slide{
        from{transform:rotateY(0deg);
        }
        to{transform:rotateY(360deg);
        }
      }
      .dengziqi .scene:hover{
          -webkit-animation-play-state:paused;
              animation-play-state:paused;
            }
             .dengziqi .scene li:hover img{
              transform:scale(1.2);
              border:5px solid rgba(255,255,255,0.5)
            }
             .xin{
              position:fixed;
              bottom:50px;
              left:60px;
              opacity:0;
              -webkit-animation:xin 8s linear infinite;
              animation:xin 8s linear infinite;
            }
             @-webkit-keyframes xin{
        0%{opacity:1;}/*从什么时候开始*/
                20%{bottom:300px; left:300px;opacity:0;}
                40%{bottom:460px; left:680px;opacity:1;}
                60%{bottom:300px; left:900px;opacity:0;}
                80%{bottom:50px; left:1100px;opacity:1;}
        100%{bottom:-150px; left:760px;opacity:0;}
      } @keyframes xin{
        0%{opacity:1;}/*从什么时候开始*/
                20%{bottom:300px; left:300px;opacity:0;}
                40%{bottom:460px; left:680px;opacity:1;}
                60%{bottom:300px; left:900px;opacity:0;}
                80%{bottom:50px; left:1100px;opacity:1;}
        100%{bottom:-150px; left:760px;opacity:0;}
      }
             audio{display:none;}
     </style>
   </head>
 <body>
    <div class="dengziqi">
            <audio src="like.mp3" autoplay controls   loop="loop">
            </audio>
      <div class="scene">
        <ul>
          <li><img src="images/2.jpg"/></li>
          <li><img src="images/3.jpg"/></li>
          <li><img src="images/4.jpg"/></li>
          <li><img src="images/5.jpg"/></li>
                    <li><img src="images/6.jpg"/></li>
          <li><img src="images/1.jpg"/></li>
        </ul>
      </div>
    </div>
     <div class="xin">
        <img src="images/xin.png"/>
     </div> <div class="xin">
        <img src="images/xin.png"/>
     </div> <div class="xin">
        <img src="images/xin.png"/>
     </div>
 </body>
</html>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/snowfall.jquery.js"></script>
<script>
  $(document).snowfall('clear');
  $(document).snowfall({
    image: "images/huaban.png",
    flakeCount:0,
    minSize: 2,
    maxSize: 15
  });
</script>

