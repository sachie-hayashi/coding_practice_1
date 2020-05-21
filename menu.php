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
    <header class="page-header background-menupage-img">
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
      <div class="mobile-header-background background-menupage-img"></div>
      <div class="header-bottom-container">
        <div class="header-bottom-semicircle background-white">
          <img src="img/logo_black.png" alt="logo" class="logo-black-small">
        </div>
      </div>
    </header>

    <div class="main-wrapper">
      <div class="container">
        <button onclick="goBack()" class="previous-pagelink background-white color-darkgray">前のページ</button>
        <h1 class="color-darkgray">お品書き</h1>
        <img src="img/oshinagaki.png" alt="menu icon" class="menu-icon">
        <p class="page-subtitle menu-subtitle color-indian-red">和匠ではその日仕入れた食材とその日の天候からもっ とも適しているメニューを提供しております。<br><br> 選びぬいた本日の「最膳」をお楽しみください。</p>

        <div class="food-container color-darkgray">
          <div class="food-box">
            <div class="icon-box">
              <img src="img/food_01_grain.png" alt="grain">
            </div>
            <p>穀</p>
          </div>
          <div class="food-box">
            <div class="icon-box">
              <img src="img/food_02_vegetable.png" alt="vegetable">
            </div>
            <p>菜</p>
          </div>
          <div class="food-box">
            <div class="icon-box">
              <img src="img/food_03_fish.png" alt="fish">
            </div>
            <p>魚</p>
          </div>
          <div class="food-box">
            <div class="icon-box">
              <img src="img/food_04_meat.png" alt="meat">
            </div>
            <p>肉</p>
          </div>
          <div class="food-box">
            <div class="icon-box">
              <img src="img/food_05_soup.png" alt="soup">
            </div>
            <p>汁</p>
          </div>
        </div>

        <div class="menu-container color-darkgray">
          <div class="menu-box">
            <img src="img/menu_01-komatsuna_and_kinoko-min.JPG" alt="komatsuna and kinoko">
            <div class="menu-text-box">
              <h2>小松菜とキノコの和風炒め</h2>
              <p>瑞々しい小松菜と肉厚のキノコをさっとお出汁で炒めました。</p>
              <p class="price color-yellow-green">1,000円</p>
            </div>
          </div>
          <div class="menu-box">
              <img src="img/menu_02-renkon_kimpira-min.jpg" alt="renkon-kimpira">
              <div class="menu-text-box">
                  <h2>蓮根金平</h2>
                  <p>繊維質たっぷりの蓮根をごま油でさっと炒め、ごまベースの出汁でさっと炒めました。</p>
                  <p class="price color-yellow-green">1,250円</p>
              </div>
          </div>
          <div class="menu-box">
              <img src="img/menu_03-hamburg_steak-min.jpg" alt="hamburg steak">
              <div class="menu-text-box">
                  <h2>猪ハンバーグ</h2>
                  <p>みかんをたくさん食べた猪を豚肉と合挽きにしてハンバーグに。</p>
                  <p class="price color-yellow-green">1,350円</p>
              </div>
          </div>
        </div>

        <div class="food-container color-darkgray">
          <div class="food-box">
            <div class="icon-box">
              <img src="img/food_01_grain.png" alt="grain">
            </div>
            <p>穀</p>
          </div>
          <div class="food-box">
            <div class="icon-box">
              <img src="img/food_02_vegetable.png" alt="vegetable">
            </div>
            <p>菜</p>
          </div>
          <div class="food-box">
            <div class="icon-box">
              <img src="img/food_03_fish.png" alt="fish">
            </div>
            <p>魚</p>
          </div>
          <div class="food-box">
            <div class="icon-box">
              <img src="img/food_04_meat.png" alt="meat">
            </div>
            <p>肉</p>
          </div>
          <div class="food-box">
            <div class="icon-box">
              <img src="img/food_05_soup.png" alt="soup">
            </div>
            <p>汁</p>
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