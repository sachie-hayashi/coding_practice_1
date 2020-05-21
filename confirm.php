<?php include 'data.php'; ?>
<?php $_SESSION['previousPage'] = basename($_SERVER['PHP_SELF']); ?>

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
  
  <body id="confirm-page">
    <header class="page-header background-contactpage-img">
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
      <div class="mobile-header-background background-contactpage-img"></div>
      <div class="header-bottom-container">
        <div class="header-bottom-semicircle background-white">
          <img src="img/logo_black.png" alt="logo" class="logo-black-small">
        </div>
      </div>
    </header>

    <div class="main-wrapper">
      <div class="container">
        <h1 class="color-darkgray">お問い合わせ内容</h1>
        <img src="img/phone.png" alt="phone-icon">        
        <?php// if ($_SESSION['confMsg']): ?>
          <p class="page-subtitle color-yellow-green">お問い合わせありがとうございます。<br>下記内容にて受付いたしました。2営業日以内に改めてご連絡いたします。</p>
        <?php// endif; ?>

        <div class="form-container color-darkgray background-whitesmoke">
          <div>
            <div class="conf-grid">
              <div class="form-item">
                <p class="label">お名前（漢字）</p>
                <p class="conf-text"><?php echo $_SESSION['nameKanji']; ?></p>
              </div>

              <div class="form-item">
                <p class="label">お名前（ふりがな）</p>
                <p class="conf-text"><?php echo $_SESSION['nameKana']; ?></p>
              </div>

              <div class="form-item">
                <p class="label">お電話番号</p>
                <p class="conf-text"><?php echo $_SESSION['tel']; ?></p>
              </div>

              <div class="form-item">
                <p class="label">人数</p>
                <p class="conf-text"><?php echo $_SESSION['paxCount']; ?>  人</p>
              </div>

              <div class="form-item">
                <p class="label">ご予算</p>
                <?php if ($_SESSION['budget']) :?>
                <p class="conf-text"><?php echo $_SESSION['budget']; ?>  円</p>
                <?php endif; ?>
              </div>

              <div class="form-item">
                <p class="label">その他ご要望等</p>
                <p class="conf-text"><?php echo $_SESSION['message']; ?></p>
              </div>
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