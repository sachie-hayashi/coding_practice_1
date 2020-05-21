<?php include 'clear_session.php'; ?>
<?php include 'data.php'; ?>

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
        <button onclick="goBack()" class="previous-pagelink background-white color-darkgray">前のページ</button>
        <h1 class="color-darkgray">ご予約</h1>
        <img src="img/phone.png" alt="phone-icon">        
        <p class="page-subtitle color-indian-red">ご予約はご予約フォーム、またはお電話でのみ受け付けております。<br> ご不明な点、ご相談などもお気軽にご連絡ください。</p>

        <div class="form-container color-darkgray">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="contact-form" class="contact-form">
            <div class="form-grid">
              <div class="form-item">
                <label for="name-kanji">お名前（漢字）</label>
                <span class="error"><?php echo isset($_SESSION['nameKanjiErr']) ? $_SESSION['nameKanjiErr']: ''; ?></span>
                <input type="text" name="name-kanji" value="<?php echo isset($_SESSION['nameKanji']) ? $_SESSION['nameKanji']: ''; ?>" class="<?php echo !empty($_SESSION['nameKanjiErr']) ? $errClass : ''; ?>">
              </div>

              <div class="form-item">
                <label for="name-kana">お名前（ふりがな）</label>
                <span class="error"><?php echo isset($_SESSION['nameKanaErr']) ? $_SESSION['nameKanaErr']: ''; ?></span>
                <input type="text" name="name-kana" value="<?php echo isset($_SESSION['nameKana']) ? $_SESSION['nameKana']: ''; ?>" class="<?php echo !empty($_SESSION['nameKanaErr']) ? $errClass: ''; ?>">
              </div>

              <div class="form-item">
                <label for="tel">お電話番号</label>
                <span class="error"><?php echo isset($_SESSION['telErr']) ? $_SESSION['telErr']: ''; ?></span>
                <input type="text" name="tel" value="<?php echo isset($_SESSION['tel']) ? $_SESSION['tel']: ''; ?>" class="<?php echo !empty($_SESSION['telErr']) ? $errClass: ''; ?>">
              </div>

              <div class="form-item">
                <label for="pax-count">人数</label>
                <span class="error"><?php echo isset($_SESSION['paxCountErr']) ? $_SESSION['paxCountErr']: ''; ?></span>
                <input type="text" name="pax-count" value="<?php echo isset($_SESSION['paxCount']) ? $_SESSION['paxCount']: ''; ?>" class="pax-count <?php echo !empty($_SESSION['paxCountErr']) ? $errClass: ''; ?>">
                <p>人</p>
                <p class="note">※ご不明な場合はおおよそで結構です。</p>
              </div>

              <div class="form-item">
                <label for="budget">ご予算</label>
                <span class="error"><?php echo isset($_SESSION['budgetErr']) ? $_SESSION['budgetErr']: ''; ?></span>
                <input type="text" name="budget" value="<?php echo isset($_SESSION['budget']) ? $_SESSION['budget']: ''; ?>" class="budget <?php echo !empty($_SESSION['budgetErr']) ? $errClass: ''; ?>">
                <p>円</p>
                <p class="note">※ご不明な場合は未記入で結構です。</p>
              </div>

              <div class="form-item">
                <label for="message">その他ご要望等</label>
                <textarea name="message"><?php echo isset($_SESSION['message']) ? $_SESSION['message']: ''; ?></textarea>
              </div>
            </div>
            <input type="reset" name="reset" value="削除" id="reset" class="btn-white background-white color-darkgray">
            <input type="submit" name="submit" value="送信" id="submit" class="btn-yellow-green background-yellow-green color-white">
            <?php
            if (isset($_SESSION)) {
              session_unset();
              session_destroy();
            }
            ?>
          </form>
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