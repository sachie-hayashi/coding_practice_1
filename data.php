<?php

// $file = fopen('contact_data.csv', 'a');
// $lineNum = count(file('contact_data.csv'));
    
// $headings = array(
//   'line_num' => '番号',
//   'nameKanji' => '名前（漢字）',
//   'nameKana' => '名前（ふりがな）',
//   'tel' => '電話番号',
//   'paxCount' => '人数',
//   'budge' => '予算',
//   'message' => 'その他'
// );

// fputcsv($file, $headings);
// fclose($file);


function cleanText($text) {
  $text = trim($text);
  $text = stripslashes($text);
  $text = htmlspecialchars($text);
  return $text;
}

$errClass = 'background-light-red';

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_POST['submit'])) {
  $_SESSION['nameKanjiErr'] = $_SESSION['nameKanaErr'] = $_SESSION['telErr'] = $_SESSION['paxCountErr'] = $_SESSION['budgetErr'] = '';
  $_SESSION['nameKanji'] = $_SESSION['nameKana'] = $_SESSION['tel'] = $_SESSION['paxCount'] = $_SESSION['budget'] = $_SESSION['message'] = '';

  if (empty($_POST['name-kanji'])) {
    $_SESSION['nameKanjiErr'] = 'お名前を入力してください';
  } else {
    $_SESSION['nameKanji'] = cleanText($_POST['name-kanji']);
  }

  if (empty($_POST['name-kana'])) {
    $_SESSION['nameKanaErr'] = 'ふりがなを入力してください';
  } else {
    $_SESSION['nameKana'] = cleanText($_POST['name-kana']);   
  }

  if (empty($_POST['tel'])) {
    $_SESSION['telErr'] = 'お電話番号を入力してください';
  } else {
    $_SESSION['tel'] = cleanText($_POST['tel']);
  }

  if (empty($_POST['pax-count'])) {
    $_SESSION['paxCountErr'] = '人数を入力してください';
  } else {
    $_SESSION['paxCount'] = cleanText($_POST['pax-count']);
    if (!is_numeric($_POST['pax-count'])) {
    $_SESSION['paxCountErr'] = '人数は半角数字で入力してください';
    }
  }
  
  $_SESSION['budget'] = cleanText($_POST['budget']);
  if (!empty($_POST['budget'])) {
    if (!is_numeric($_POST['budget'])) {
      $_SESSION['budgetErr'] = 'ご予算は半角数字で入力してください';
    }
  }

  $_SESSION['message'] = cleanText($_POST['message']);

  $err = $_SESSION['nameKanjiErr'] || $_SESSION['nameKanaErr'] || $_SESSION['telErr'] || $_SESSION['paxCountErr'] || $_SESSION['budgetErr'];

  if (empty($err)) {
    $file = fopen('contact_data.csv', 'a');
    
    $lineNum = count(file('contact_data.csv'));
        
    $data = array(
      'line_num' => $lineNum,
      'name_kanji' => $_SESSION['nameKanji'],
      'name_kana' => $_SESSION['nameKana'],
      'tel' => $_SESSION['tel'],
      'pax_count' => $_SESSION['paxCount'],
      'budge' => $_SESSION['budget'],
      'message' => preg_replace('/\n|\r/', '', $_SESSION['message'])
    );
    
    fputcsv($file, $data);
    
    fclose($file);

    header('Location: confirm.php');
    exit;

    // $_SESSION['confMsg'] = 'お問い合わせありがとうございます。<br>2営業日以内にご返信いたします。';

    // foreach ($_SESSION as $key => $val) {
    //   if ($key !== 'confMsg') {
    //     unset($_SESSION[$key]);
    //   }
    // }

  }

  header('Location: '.$_SERVER['PHP_SELF']);
  exit;
}

?>