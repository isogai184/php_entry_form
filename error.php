<?php

var_dump($_POST);
$id = $_POST['id'];
$job_category = $_POST['job_category'];
$employment = $_POST['employment'];
$sex = $_POST['sex'];
$now = $_POST['current'];
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

 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>エントリーフォーム</title>
  <link rel="stylesheet" href="./css/normalize.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="page_top">
    <h2>入力内容のご確認</h2>
    <p>ご入力ありがとうございます。申し訳ございません。入力内容に不備があるようです。該当箇所をご確認のうえ「内容を修正する」ボタンを押して入力内容を修正してください。</p>
  </div>
  <div>
<?php

?>
  </div>
  <div class="error_block">
    <?php

foreach ($err_array as $list) {
  echo $list . "<br>";
}

    if ($job_category == "") {
        echo '<p class="error_m">【希望職種】が入力されていません。</p>';
    }
    if ($entry_name == "") {
      echo '<p class="error_m">【お名前】が入力されていません。</p>';
    }
    if ($hurigana == "") {
      echo '<p class="error_m">【ふりがな】が入力されていません。</p>';
    }
    if ($birth_date_1 == "") {
      echo '<p class="error_m">【年月日(年)】が入力されていません。</p>';
    }
    if ($birth_date_2 == "") {
      echo '<p class="error_m">【年月日(月)】が入力されていません。</p>';
    }
    if ($birth_date_3 == "") {
      echo '<p class="error_m">【年月日(日)】が入力されていません。</p>';
    }
    if ($address == "") {
      echo '<p class="error_m">【ご住所】が入力されていません。</p>';
    }
    if ($tel_1 == "") {
      echo '<p class="error_m">【電話番号1】が入力されていません。</p>';
    }
    if ($tel_1 == "") {
      echo '<p class="error_m">【電話番号2】が入力されていません。</p>';
    }
    if ($tel_1 == "") {
      echo '<p class="error_m">【電話番号3】が入力されていません。</p>';
    }
    if ($email == "") {
      echo '<p class="error_m">【メールアドレス】が入力されていません。</p>';
    }
    if ($start_date_1 == "") {
      echo '<p class="error_m">【就業開始希望日(年)】が入力されていません。</p>';
    }
    if ($start_date_1 == "") {
      echo '<p class="error_m">【就業開始希望日(月)】が入力されていません。</p>';
    }
    if ($start_date_1 == "") {
      echo '<p class="error_m">【就業開始希望日(日)】が入力されていません。</p>';
    }

     ?>
  </div>
  <div class="confirm_btn">
    <form method="post" action="./index.php">
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
      <input class="button" type="submit" name="" value="内容を修正する">
    </form>
  </div>
</body>
</html>
