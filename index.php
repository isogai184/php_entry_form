<?php

if (!empty($_POST)) {
$id = $_POST['id'];
$job_category = explode("\t", $_POST['job_category']);
$employment = $_POST['employment'];
$sex = $_POST['sex'];
$now  = $_POST['now'];
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
  <div>
    <div class="page_top">
      <h2>エントリー</h2>
      <p>こちらのエントリーフォームよりエントリーしてください。当社の採用担当がエントリーの内容を確認のうえ、ご連絡さしあげます。＊入力欄はすべて必須項目となっております。</p>
    </div>
    <div class="entry_form">
      <form method="post" action="./conf.php" name="entry_form">
        <input type="hidden" name="id" value="1">
        <div class=" contents">
          <div class="contents_topic">
            <p>希望職種</p>
          </div>
          <div class="contents_item job_category_item">
            <div>
              <p>メディア事業本部</p>
              <p>
                <input class="job_category radio_btn" type="checkbox" name="job_category[]" value="1"  <?php if ((!empty($_POST)) && (in_array(1, $job_category))) echo 'checked'; ?>>編集
              </p>
              <p>
                <input class="job_category radio_btn" type="checkbox" name="job_category[]" value="2" <?php if ((!empty($_POST)) && (in_array(2, $job_category))) echo 'checked'; ?>>広告事業
              </p>
              <p>
                <input class="job_category radio_btn" type="checkbox" name="job_category[]" value="3" <?php if ((!empty($_POST)) && (in_array(3, $job_category))) echo 'checked'; ?>>制作
              </p>
            </div>
            <div>
              <p>コマース事業本部</p>
              <p>
                <input class="job_category radio_btn" type="checkbox" name="job_category[]" value="4" <?php if ((!empty($_POST)) && (in_array(4, $job_category))) echo 'checked'; ?>>ディレクター
              </p>
              <p>
                <input class="job_category radio_btn" type="checkbox" name="job_category[]" value="5" <?php if ((!empty($_POST)) && (in_array(5, $job_category))) echo 'checked'; ?>>アートディレクター
              </p>
              <p>
                <input class="job_category radio_btn" type="checkbox" name="job_category[]" value="6" <?php if ((!empty($_POST)) && (in_array(6, $job_category))) echo 'checked'; ?>>オペレーションリーダー
              </p>
              <p>
                <input class="job_category radio_btn" type="checkbox" name="job_category[]" value="7" <?php if ((!empty($_POST)) && (in_array(7, $job_category))) echo 'checked'; ?>>制作
              </p>
            </div>
            <p class="job_category_error error_m">【希望職種】が選択されていません。</p>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>雇用形態</p>
          </div>
          <div class="contents_item">
            <div class="contents_item_tb">
              <p>
                <input class="employment radio_btn" type="radio" name="employment" value="1" <?php if ((!empty($_POST)) && ($employment == 1)) echo 'checked'; ?>>正社員
              </p>
              <p>
                <input class="employment radio_btn" type="radio" name="employment" value="2" <?php if ((!empty($_POST)) && ($employment == 2)) echo 'checked'; ?>>アルバイト
              </p>
            </div>
            <p class="employment_error error_m">【雇用形態】が選択されていません。</p>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>お名前</p>
          </div>
          <div class="contents_item">
            <p class="">
              <input class="input_text entry_name" type="text" name="entry_name" value="<?php if(!empty($_POST)) { echo htmlspecialchars($entry_name, ENT_QUOTES, 'UTF-8');} ?>" size="32" maxlength="32" required>
              <p>
                <span class="entry_name_error_1 error_m">【名前】が入力されていません。</span>
                <span class="entry_name_error_2 error_m">【名前】が正しく入力されていません。</span>
              </p>
            </p>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>ふりがな</p>
          </div>
          <div class="contents_item">
            <p>
              <input class="input_text hurigana" type="text" name="hurigana" value="<?php if(!empty($_POST)) { echo htmlspecialchars($hurigana, ENT_QUOTES, 'UTF-8');} ?>" size="32" maxlength="32" required>
              <p>
                <span class="hurigana_error_1 error_m">【ふりがな】が入力されていません。</span>
                <span class="hurigana_error_2 error_m">【ふりがな】が正しく入力されていません。</span>
              </p>
            </p>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>性別</p>
          </div>
          <div class="contents_item">
            <div class="contents_item_tb">
              <p>
                <input class="sex radio_btn" type="radio" name="sex" value="1" <?php if ((!empty($_POST)) && ($sex == 1)) echo 'checked'; ?>>男性
              </p>
              <p>
                <input class="sex radio_btn" type="radio" name="sex" value="2" <?php if ((!empty($_POST)) && ($sex == 2)) echo 'checked'; ?>>女性
              </p>
            </div>
            <p class="sex_error error_m">【性別】が選択されていません。</p>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>生年月日</p>
          </div>
          <div class="contents_item">
            <p class="input_number">
              <input class="input_text ibirth_date_1" type="number" name="birth_date_1" value="<?php if(!empty($_POST)) { echo htmlspecialchars($birth_date_1, ENT_QUOTES, 'UTF-8');} ?>" size="6" maxlength="4" required><span class="text_space">年</span>
              <input class="input_text birth_date_2" type="number" name="birth_date_2" value="<?php if(!empty($_POST)) { echo htmlspecialchars($birth_date_2, ENT_QUOTES, 'UTF-8');} ?>" size="5" maxlength="2" required><span class="text_space">月</span>
              <input class="input_text birth_date_3" type="number" name="birth_date_3" value="<?php if(!empty($_POST)) { echo htmlspecialchars($birth_date_3, ENT_QUOTES, 'UTF-8');} ?>" size="5" maxlength="2" required><span class="text_space">日</span>
              <span class="birth_date_1_error_1 error_m">【年月日(年)】が入力されていません。</span>
              <span class="birth_date_1_error_2 error_m">【年月日(年)】が正しく入力されていません。</span>
              <span class="birth_date_2_error_1 error_m">【年月日(月)】が入力されていません。</span>
              <span class="birth_date_2_error_2 error_m">【年月日(月)】が正しく入力されていません。</span>
              <span class="birth_date_3_error_1 error_m">【年月日(日)】が入力されていません。</span>
              <span class="birth_date_3_error_2 error_m">【年月日(日)】が正しく入力されていません。</span>
            </p>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>ご住所</p>
          </div>
          <div class="contents_item">
            <p>
              <input class="input_text address" type="text" name="address" value="<?php if(!empty($_POST)) { echo htmlspecialchars($address, ENT_QUOTES, 'UTF-8');} ?>" size="32" maxlength="128" required>
              <p>
                <span class="address_error_1 error_m">【ご住所】が入力されていません。</span>
                <span class="address_error_2 error_m">【ご住所】が正しく入力されていません。</span>
              </p>
            </p>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>電話番号</p>
          </div>
          <div class="contents_item">
            <p>
              <input class="input_text tel_1" type="tel" name="tel_1" value="<?php if(!empty($_POST)) { echo htmlspecialchars($tel_1, ENT_QUOTES, 'UTF-8');} ?>" size="6" maxlength="4" required><span class="text_hiphen">ー</span>
              <input class="input_text tel_2" type="tel" name="tel_2" value="<?php if(!empty($_POST)) { echo htmlspecialchars($tel_2, ENT_QUOTES, 'UTF-8');} ?>" size="6" maxlength="4" required><span class="text_hiphen">ー</span>
              <input class="input_text tel_3" type="tel" name="tel_3" value="<?php if(!empty($_POST)) { echo htmlspecialchars($tel_3, ENT_QUOTES, 'UTF-8');} ?>" size="6" maxlength="4" required>
              <span class="tel_1_error_1 error_m">【電話番号1】が入力されていません。</span>
              <span class="tel_1_error_2 error_m">【電話番号1】が正しく入力されていません。</span>
              <span class="tel_2_error_1 error_m">【電話番号2】が入力されていません。</span>
              <span class="tel_2_error_2 error_m">【電話番号2】が正しく入力されていません。</span>
              <span class="tel_3_error_1 error_m">【電話番号3】が入力されていません。</span>
              <span class="tel_3_error_2 error_m">【電話番号3】が正しく入力されていません。</span>
            </p>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>メールアドレス</p>
          </div>
          <div class="contents_item">
            <p>
              <input class="input_text email" type="text" name="email" value="<?php if(!empty($_POST)) { echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8');} ?>" size="32" maxlength="256" required>
              <p>
                <span class="email_error_1 error_m">【メールアドレス】が入力されていません。</span>
                <span class="email_error_2 error_m">【メールアドレス】が正しく入力されていません。</span>
              </p>
            </p>
          </div>
        </div>

        <div class="contents">
          <div class="contents_topic">
            <p>現在</p>
          </div>
          <div class="contents_item">
            <div class="contents_item_tb_now">
              <p>
                <input class="now radio_btn" type="radio" name="now" value="1" <?php if ((!empty($_POST)) && ($now == 1)) echo 'checked'; ?>>就業中
              </p>
              <p>
                <input class="now radio_btn" type="radio" name="now" value="2" <?php if ((!empty($_POST)) && ($now == 2)) echo 'checked'; ?>>就業してない
              </p>
              <p>
                <input class="now radio_btn" type="radio" name="now" value="3" <?php if ((!empty($_POST)) && ($now == 3)) echo 'checked'; ?>>その他
              </p>
            </div>
            <p class="now_error error_m">【現在】が選択されていません。</p>
          </div>
        </div>
        <div class="contents">
          <div class="contents_topic">
            <p>就業開始希望日</p>
          </div>
          <div class="contents_item">
            <p class="input_number">
              <input class="input_text start_date_1" type="number" name="start_date_1" value="<?php if(!empty($_POST)) { echo htmlspecialchars($start_date_1, ENT_QUOTES, 'UTF-8');} ?>" size="6" maxlength="4" required><span class="text_space">年</span>
              <input class="input_text start_date_2" type="number" name="start_date_2" value="<?php if(!empty($_POST)) { echo htmlspecialchars($start_date_2, ENT_QUOTES, 'UTF-8');} ?>" size="5" maxlength="2" required><span class="text_space">月</span>
              <input class="input_text start_date_3" type="number" name="start_date_3" value="<?php if(!empty($_POST)) { echo htmlspecialchars($start_date_3, ENT_QUOTES, 'UTF-8');} ?>" size="5" maxlength="2" required><span class="text_space">日</span>
              <span class="start_date_1_error_1 error_m">【就業開始希望日(年)】が入力されていません。</span>
              <span class="start_date_1_error_2 error_m">【就業開始希望日(年)】が正しく入力されていません。</span>
              <span class="start_date_2_error_1 error_m">【就業開始希望日(月)】が入力されていません。</span>
              <span class="start_date_2_error_2 error_m">【就業開始希望日(月)】が正しく入力されていません。</span>
              <span class="start_date_3_error_1 error_m">【就業開始希望日(日)】が入力されていません。</span>
              <span class="start_date_3_error_2 error_m">【就業開始希望日(日)】が正しく入力されていません。</span>
            </p>
          </div>
        </div>
      <div class="confirm">
        <p>個人情報の取り扱いについてご同意いただける場合は、確認画面へお進みください。</p>
        <div class="confirm_btn">
          <input class="button" type="button" name="" value="確認画面へ" onclick="return check()">
        </div>
      </div>
    </form>
    </div>
  </div>
<script src="./js/jquery-3.2.1.min.js"></script>
<script src="./js/app.js"></script>
</body>
</html>
