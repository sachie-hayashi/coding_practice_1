<?php include 'clear_session.php'; ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>XD Kotohajime</title>
    <meta name="description" content="Adobe XD Kotohajime Design Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/e73c9f8b45.js"></script>
    <script>
      (function(d) {
        var config = {
          kitId: 'cbx6shy',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
  </head>
  
  <body>
    <header class="home-header background-homepage-img">
      <nav class="navbar">
        <div class="toggle-navbar background-white">
          <img src="img/mobile_logo_black.png" alt="mobile logo">
            <i id="toggle-icon-open" class="fas fa-bars fa-2x color-darkgray toggle-icon"></i>
            <i id="toggle-icon-close" class="fas fa-times fa-2x color-darkgray toggle-icon"></i>
        </div>
        <ul id="navbar-nav">
          <li><a class="background-charcoal-gray color-white" href="index.php">入り口</a></li>
          <li><a class="background-charcoal-gray color-white" href="menu.php">お品書き</a></li>
          <li><a class="background-charcoal-gray color-white" href="contact.php">ご予約</a></li>            
        </ul>
      </nav>

      <div class="mobile-header-background background-homepage-img">
        <div class="header-box-container">
          <div class="box top-left background-charcoal-gray">
            <p class="color-white">和食で<br>ほほえむ</p>
          </div>
          <div class="box top-right background-charcoal-gray">
            <p class="color-white">和食に<br>したしむ</p>
          </div>
          <div class="box center background-charcoal-gray">
            <img src="img/logo_white.png" alt="logo">
          </div>
          <div class="box bottom-left background-charcoal-gray">
            <p class="color-white">和食を<br>たしなむ</p>
          </div>
          <div class="box bottom-right background-charcoal-gray">
            <p class="color-white">和食を<br>たのしむ</p>
          </div>
        </div>
      </div>

      <div class="header-bottom-container">
        <div class="header-bottom-semicircle background-white"></div>
      </div>
    </header>

    <div class="main-wrapper">
      <div class="container">
        <img src="img/itadakimasu.png" alt="start dining with ITADAKIMASU" class="dining-icon">
        <img src="img/logo_black.png" alt="logo" class="logo-black">
        <h1 class="color-darkgray">和食屋「和匠」の食卓</h1>
        <div class="about-box-container color-darkgray">
          <div class="about-row background-light-gray">
            <div class="about-box order-2">
              <img src="img/menu_ocha-min.jpeg" alt="tea" class="image">
            </div>
            <div class="about-box order-1">
              <img src="img/text_icon_ocha.png" alt="ocha text/icon" class="text-icon">
            </div>
            <div class="about-box order-3">
              <p>茶を入れる。<br><br> お茶は食前、食後、食中と飲み方や種類も変えてご用意しております。<br>さらに和食に合うお茶、甘味に合うお茶など、コースだけでなくお客様のお選びになったお食事により種類や温度の最適なものをひとりひとりご用意しております。</p>
            </div>
          </div>
          <div class="about-row">
              <div class="about-box order-3">
                <p>味をつける。<br><br> 和食の基本は出汁です。和匠では選びぬいた昆布と鰹を、名水に使い低温で煮出した黄金出汁を柱に据え、その日仕入れた食材と、その日の気候により味付けも変えて、常に最善を追求し続けております。<br> 私たちの調味料へのこだわりは、お客様へ提供する味へのこだわりです。</p>
              </div>
              <div class="about-box order-2">
                <img src="img/menu_chomiryo-min.jpeg" alt="seasoning" class="image">
              </div>
              <div class="about-box order-1">
                <img src="img/text_icon_aji.png" alt="aji text/icon" class="text-icon">
              </div>
          </div>
          <div class="about-row background-gradation-gray">
              <div class="about-box order-1">
                <img src="img/text_icon_irodori.png" alt="irodori text/icon" class="text-icon">
              </div>
              <div class="about-box order-3">
                <p>彩りを加える。<br><br> 食は味覚だけではありません。 食は五感全て、舌と、香りと、音と、食感と、目で味わいます。<br> とりわけて見た目の彩りは食にとって味の次に大事な感覚です。 いろとりどりの色彩と、それを支える器にも職人のこだわりが表現されます。</p>
              </div>
              <div class="about-box order-2">
                <img src="img/menu_irodori.jpg" alt="colors" class="image">
              </div>
          </div>          
        </div>

      </div>
    </div>
    
    <footer>
      <div class="footer-bottom-container">
          <div class="footer-bottom-semicircle background-yellow-green">
            <img src="img/logo_white.png" alt="logo">
          </div>
      </div>
    </footer>

    <script src="js/script.js"></script>
  </body>
</html>