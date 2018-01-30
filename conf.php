<?php

if (empty($_POST)) {
  header('Location: ./index.php');
  exit;
} else {
$id = $_POST['id'];
if (!isset($_POST['job_category'])) {
  $job_category = "";
} else {
  $job_category = $_POST['job_category'];
}
if (!isset($_POST['employment'])) {
  $employment = "";
} else {
  $employment = $_POST['employment'];
}
if (!isset($_POST['sex'])) {
  $sex = "";
} else {
  $sex = $_POST['sex'];
}
if (!isset($_POST['now'])) {
  $now = "";
} else {
  $now = $_POST['now'];
}
$entry_name = $_POST['entry_name'];
$hurigana = $_POST['hurigana'];
$birth_date_1 = $_POST['birth_date_1'];
$birth_date_2 = $_POST['birth_date_2'];
$birth_date_3 = $_POST['birth_date_3'];
$address = $_POST['address'];
$tel_1 = $_POST['tel_1'];
$tel_2 = $_POST['tel_2'];
$tel_3 = $_POST['tel_3'];
$email = $_POST['email'];
$start_date_1 = $_POST['start_date_1'];
$start_date_2 = $_POST['start_date_2'];
$start_date_3 = $_POST['start_date_3'];
}

// バリデーション
$err_array = array();

if($job_category == "") {
  $err_array[] = '【希望職種】が選択されていません。';
}

if ($employment == "") {
  $err_array[] = '【雇用形態】が選択されていません。';
}

if ($entry_name == "") {
  $err_array[] = '【お名前】が入力されていません。';
} else {
  if ($entry_name > 32) {
    $err_array[] = '【お名前】が長すぎます。';
  }
  if (!preg_match("/^[ぁ-んァ-ヶー一-龠]+$/u", $entry_name)) {
    $err_array[] = '【お名前】が正しく入力されていません。';
  }
}

if ($hurigana == "") {
  $err_array[] = '【ふりがな】が入力されていません。';
} else {
  if ($hurigana > 32) {
    $err_array[] = '【ふりがな】が長すぎます。';
  }
  if (!preg_match("/^[ぁ-ん]+$/u", $hurigana)) {
    $err_array[] = '【ふりがな】が正しく入力されていません。';
  }
}

if ($sex == "") {
  $err_array[] ='【性別】が選択されていません。';
}

if ($birth_date_1 == ""){
  $err_array[] = '【生年月日(年)】が入力されていません。';
}
if (!preg_match("/^[0-9]{4}+$/", $birth_date_1)) {
  $err_array[] = '【生年月日(年)】が正しく入力されていません。';
}
if ($birth_date_2 == ""){
  $err_array[] = '【生年月日(月)】が入力されていません。';
}
if (strlen($birth_date_2) == 1) {
 $birth_date_2 = '0' . $birth_date_2;
}
if (!preg_match("/^[0-9]{2}+$/", $birth_date_2)) {
  $err_array[] = '【生年月日(月)】が正しく入力されていません。';
}

if ($birth_date_3 == ""){
  $err_array[] = '【生年月日(日)】が入力されていません。';
}
if (strlen($birth_date_3) == 1) {
 $birth_date_3 = '0' . $birth_date_3;
}
if (!preg_match("/^[0-9]{2}+$/", $birth_date_3)) {
  $err_array[] = '【生年月日(日)】が正しく入力されていません。';
}

if (checkdate($birth_date_2, $birth_date_3, $birth_date_1) == false) {
  $err_array[] = '【生年月日】が実在しない年月日です。';
}
$birth_date = ($birth_date_1 . '年' . $birth_date_2 . '月' . $birth_date_3 . '日');

if ($address == "") {
  $err_array[] = '【ご住所】が入力されていません。';
} else {
  if ($address > 32) {
    $err_array[] = '【ご住所】が長すぎます。';
  }
  if (!preg_match( "/(?:\xEF\xBD[\xA1-\xBF]|\xEF\xBE[\x80-\x9F])|[\x20-\x7E]/", $email)) {
    $err_array[] = '【ご住所】が正しく入力されていません。';
  }
}

if ($tel_1 == "") {
  $err_array[] = '【電話番号1】が入力されていません。';
}
if (!preg_match("/^[0-9]{1,4}+$/", $tel_1)) {
  $err_array[] = '【電話番号1】が正しく入力されていません。';
}
if ($tel_2 == "") {
  $err_array[] = '【電話番号2】が入力されていません。';
}
if (!preg_match("/^[0-9]{1,4}+$/", $tel_2)) {
  $err_array[] = '【電話番号2】が正しく入力されていません。';
}
if ($tel_3 == "") {
  $err_array[] = '【電話番号3】が入力されていません。';
}
if (!preg_match("/^[0-9]{1,4}+$/", $tel_3)) {
  $err_array[] = '【電話番号3】が正しく入力されていません。';
}

if ($email == "") {
  $err_array[] = '【メールアドレス】が入力されていません。';
} else {
  if ($email > 256) {
    $err_array[] = '【メールアドレス】が長すぎます。';
  }
  if (!preg_match( '/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/', $email)) {
    $err_array[] = '【メールアドレス】が正しく入力されていません。';
  }
}
if ($now == "") {
  $err_array[] = '【現在】が選択されていません。';
}

$today = date("Y/m/d");
$start_date = ($start_date_1 . '年' . $start_date_2 . '月' . $start_date_3 . '日');

if ($start_date_1 == ""){
  $err_array[] = '【就業開始希望日(年)】が入力されていません。';
}
if (!preg_match("/^[0-9]{4}+$/", $start_date_1)) {
  $err_array[] = '【就業開始希望日(年)】が正しく入力されていません。';
}
if ($start_date_2 == ""){
  $err_array[] = '【就業開始希望日(月)】が入力されていません。';
}
if (strlen($start_date_2) == 1) {
 $start_date_2 = '0' . $start_date_2;
}
if (!preg_match("/^[0-9]{2}+$/", $start_date_2)) {
  $err_array[] = '【就業開始希望日(月)】が正しく入力されていません。';
}

if ($start_date_3 == ""){
  $err_array[] = '【就業開始希望日(日)】が入力されていません。';
}
if (strlen($start_date_3) == 1) {
 $start_date_3 = '0' . $start_date_3;
}
if (!preg_match("/^[0-9]{2}+$/", $start_date_3)) {
  $err_array[] = '【就業開始希望日(日)】が正しく入力されていません。';
}

if (checkdate($start_date_2, $start_date_3, $start_date_1) == false) {
  $err_array[] = '【就業開始希望日】が実在しない年月日です。';
} elseif (strtotime($today) < strtotime($start_date)){
  $err_array[] = '【就業開始希望日】が今日よりも前の年月日です。';
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>エントリーフォーム</title>
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/style_conf.css">
  <script type="text/javascript">

  function check() {
    document.rewrite.submit();
  }
  function go() {
    document.entry.submit();
  }
  </script>
</head>

<? if(empty($err_array)):?>
<body>
  <div class="page_top">
    <h2>入力内容のご確認</h2>
    <p>以下の内容で送信します。内容をご確認いただき、問題がない場合は「この内容で応募する」ボタンを押してください。修正をご希望の場合は「内容を修正する」ボタンを押して入力内容を修正してください。</p>
  </div>
    <div class="entry_form">
        <div class="contents job_category">
          <div class="contents_topic">
            <p>希望職種</p>
          </div>
          <div class="contents_item job_category_item">
            <?php
              foreach ($job_category as $joblist) {
                if ($joblist == 1) echo "<p>メディア事業本部 編集</p>\n";
                if ($joblist == 2) echo "<p>メディア事業本部 広告事業</p>\n";
                if ($joblist == 3) echo "<p>メディア事業本部 制作</p>\n";
                if ($joblist == 4) echo "<p>コマース事業本部 ディレクター</p>\n";
                if ($joblist == 5) echo "<p>コマース事業本部 アートディレクター</p>\n";
                if ($joblist == 6) echo "<p>コマース事業本部 オペレーションリーダー</p>\n";
                if ($joblist == 7) echo "<p>コマース事業本部 制作</p>\n";
              }
            ?>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>雇用形態</p>
          </div>
          <div class="contents_item">
            <div class="contents_item_tb">
              <?php
                if ($employment == 1) echo "<p>正社員</p>\n";
                if ($employment == 2) echo "<p>アルバイト</p>\n";
              ?>
            </div>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>お名前</p>
          </div>
          <div class="contents_item">
            <?php
              echo htmlspecialchars($entry_name, ENT_QUOTES, 'UTF-8');
            ?>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>ふりがな</p>
          </div>
          <div class="contents_item">
            <?php
              echo htmlspecialchars($hurigana, ENT_QUOTES, 'UTF-8');
            ?>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>性別</p>
          </div>
          <div class="contents_item">
            <?php
              if ($sex == 1) echo "<p>男性</p>\n";
              if ($sex == 2) echo "<p>女性</p>\n";
            ?>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>生年月日</p>
          </div>
          <div class="contents_item">
            <?php
            echo htmlspecialchars($birth_date_1, ENT_QUOTES, 'UTF-8') . "年\n";
            echo htmlspecialchars($birth_date_2, ENT_QUOTES, 'UTF-8') . "月\n";
            echo htmlspecialchars($birth_date_3, ENT_QUOTES, 'UTF-8') . "日\n";
            ?>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>ご住所</p>
          </div>
          <div class="contents_item">
            <?php
              echo htmlspecialchars($address, ENT_QUOTES, 'UTF-8');
            ?>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>電話番号</p>
          </div>
          <div class="contents_item">
            <?php
              echo htmlspecialchars($tel_1, ENT_QUOTES, 'UTF-8');
              echo htmlspecialchars($tel_2, ENT_QUOTES, 'UTF-8');
              echo htmlspecialchars($tel_3, ENT_QUOTES, 'UTF-8');
            ?>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>メールアドレス</p>
          </div>
          <div class="contents_item">
            <?php
              echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
            ?>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>現在</p>
          </div>
          <div class="contents_item">
            <?php
              if ($now == 1) echo "<p>就業中</p>\n";
              if ($now == 2) echo "<p>就業していない
              </p>\n";
              if ($now == 3) echo "<p>その他</p>\n";
            ?>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>就業開始希望日</p>
          </div>
          <div class="contents_item">
            <?php
              echo htmlspecialchars($start_date_1, ENT_QUOTES, 'UTF-8') . "年\n";
              echo htmlspecialchars($start_date_2, ENT_QUOTES, 'UTF-8') . "月\n";
              echo htmlspecialchars($start_date_3, ENT_QUOTES, 'UTF-8') . "日\n";
            ?>
          </div>
        </div>
      <div class="confirm">
        <div class="confirm_btn confirm_btn_left">
          <form method="post" action="./index.php" name="rewrite">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="job_category" value="<?php echo implode("\t", $job_category); ?>">
            <input type="hidden" name="employment" value="<?php echo $employment; ?>">
            <input type="hidden" name="sex" value="<?php echo $sex; ?>">
            <input type="hidden" name="now" value="<?php echo $now; ?>">
            <input type="hidden" name="entry_name" value="<?php echo $entry_name; ?>">
            <input type="hidden" name="hurigana" value="<?php echo $hurigana; ?>">
            <input type="hidden" name="birth_date_1" value="<?php echo $birth_date_1; ?>">
            <input type="hidden" name="birth_date_2" value="<?php echo $birth_date_2; ?>">
            <input type="hidden" name="birth_date_3" value="<?php echo $birth_date_3; ?>">
            <input type="hidden" name="address" value="<?php echo $address; ?>">
            <input type="hidden" name="tel_1" value="<?php echo $tel_1; ?>">
            <input type="hidden" name="tel_2" value="<?php echo $tel_2; ?>">
            <input type="hidden" name="tel_3" value="<?php echo $tel_3; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="start_date_1" value="<?php echo $start_date_1; ?>">
            <input type="hidden" name="start_date_2" value="<?php echo $start_date_2; ?>">
            <input type="hidden" name="start_date_3" value="<?php echo $start_date_3; ?>">
            <input class="button" type="button" name="" onclick="return check()" value="内容を修正する">
          </form>
        </div>
        <div class="confirm_btn confirm_btn-right">
          <form method="post" action="./regist.php" name="entry">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="job_category" value="<?php echo implode("\t", $job_category); ?>">
            <input type="hidden" name="employment" value="<?php echo $employment; ?>">
            <input type="hidden" name="sex" value="<?php echo $sex; ?>">
            <input type="hidden" name="now" value="<?php echo $now; ?>">
            <input type="hidden" name="entry_name" value="<?php echo $entry_name; ?>">
            <input type="hidden" name="hurigana" value="<?php echo $hurigana; ?>">
            <input type="hidden" name="birth_date_1" value="<?php echo $birth_date_1; ?>">
            <input type="hidden" name="birth_date_2" value="<?php echo $birth_date_2; ?>">
            <input type="hidden" name="birth_date_3" value="<?php echo $birth_date_3; ?>">
            <input type="hidden" name="address" value="<?php echo $address; ?>">
            <input type="hidden" name="tel_1" value="<?php echo $tel_1; ?>">
            <input type="hidden" name="tel_2" value="<?php echo $tel_2; ?>">
            <input type="hidden" name="tel_3" value="<?php echo $tel_3; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="start_date_1" value="<?php echo $start_date_1; ?>">
            <input type="hidden" name="start_date_2" value="<?php echo $start_date_2; ?>">
            <input type="hidden" name="start_date_3" value="<?php echo $start_date_3; ?>">
            <input class="button" type="button" name="" onclick="return go()" value="この内容で応募する">
          </form>
        </div>
      </div>
    </div>
</body>

<? else:?>
<body>
  <div class="page_top">
    <h2>入力内容のご確認</h2>
    <p>ご入力ありがとうございます。申し訳ございません。入力内容に不備があるようです。該当箇所をご確認のうえ「内容を修正する」ボタンを押して入力内容を修正してください。</p>
  </div>
  <div class="error_block">
    <?php
      foreach ($err_array as $err_list) {
        echo '<p class="error_m">' . $err_list . '</p>';
      }
     ?>
  </div>
  <div class="confirm_btn confirm_btn_error">
    <form method="post" action="./index.php" name="rewrite">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <input type="hidden" name="job_category" value="<?php echo implode("\t", $job_category); ?>">
      <input type="hidden" name="employment" value="<?php echo $employment; ?>">
      <input type="hidden" name="sex" value="<?php echo $sex; ?>">
      <input type="hidden" name="now" value="<?php echo $now; ?>">
      <input type="hidden" name="entry_name" value="<?php echo $entry_name; ?>">
      <input type="hidden" name="hurigana" value="<?php echo $hurigana; ?>">
      <input type="hidden" name="birth_date_1" value="<?php echo $birth_date_1; ?>">
      <input type="hidden" name="birth_date_2" value="<?php echo $birth_date_2; ?>">
      <input type="hidden" name="birth_date_3" value="<?php echo $birth_date_3; ?>">
      <input type="hidden" name="address" value="<?php echo $address; ?>">
      <input type="hidden" name="tel_1" value="<?php echo $tel_1; ?>">
      <input type="hidden" name="tel_2" value="<?php echo $tel_2; ?>">
      <input type="hidden" name="tel_3" value="<?php echo $tel_3; ?>">
      <input type="hidden" name="email" value="<?php echo $email; ?>">
      <input type="hidden" name="start_date_1" value="<?php echo $start_date_1; ?>">
      <input type="hidden" name="start_date_2" value="<?php echo $start_date_2; ?>">
      <input type="hidden" name="start_date_3" value="<?php echo $start_date_3; ?>">
      <input class= "button" type="button" name="" onclick="return check()" value="内容を修正する">
    </form>
  </div>
</body>
<? endif;?>
</html>
