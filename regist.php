<?php

if (empty($_POST)) {
  header('Location: ./index.php');
  exit;
} else {
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

mb_language('Japanese');
mb_internal_encoding('UTF-8');
$entry_data = array();

$job_array = array();
foreach ($job_category as $joblist) {
  if ($joblist == 1) {
    $job_array[] = "メディア事業本部 編集";
  }
  if ($joblist == 2) {
    $job_array[] = "メディア事業本部 広告事業";
  }
  if ($joblist == 3) {
    $job_array[] = "メディア事業本部 制作";
  }
  if ($joblist == 4) {
    $job_array[] = "コマース事業本部 ディレクター";
  }
  if ($joblist == 5) {
    $job_array[] = "コマース事業本部 アートディレクター";
  }
  if ($joblist == 6) {
    $job_array[] = "コマース事業本部 オペレーションリーダー";
  }
  if ($joblist == 7) {
    $job_array[] = "コマース事業本部 制作";
  }
}
foreach ($job_array as $job_list) {
  $entry_data[] = "希望職種: " . $job_list . "\r\n";
}

if ($employment == 1) {
  $employment_done = "正社員";
}
if ($employment == 2) {
  $employment_done = "アルバイト";
}
$entry_data[] = "雇用形態: " . $employment_done . "\r\n";

$entry_data[] = "お名前: " . htmlspecialchars($entry_name, ENT_QUOTES, 'UTF-8') . "\r\n";

$entry_data[] = "ふりがな: " . htmlspecialchars($hurigana, ENT_QUOTES, 'UTF-8') . "\r\n";

if ($sex == 1) {
  $sex_done = "男性";
}
if ($sex == 2) {
  $sex_done = "女性";
}
$entry_data[] = "性別: " . $sex_done . "\r\n";

$birth_date_done = "生年月日: " . htmlspecialchars($birth_date_1, ENT_QUOTES, 'UTF-8') . "年" . htmlspecialchars($birth_date_2, ENT_QUOTES, 'UTF-8') . "月" . htmlspecialchars($birth_date_3, ENT_QUOTES, 'UTF-8') . "日";
$entry_data[] = $birth_date_done . "\r\n";

$entry_data[] = "ご住所: " . htmlspecialchars($address, ENT_QUOTES, 'UTF-8') . "\r\n";

$tel_done = "電話番号: " . htmlspecialchars($tel_1, ENT_QUOTES, 'UTF-8') . htmlspecialchars($tel_2, ENT_QUOTES, 'UTF-8') . htmlspecialchars($tel_3, ENT_QUOTES, 'UTF-8');
$entry_data[] = $tel_done . "\r\n";

$entry_data[] = "メールアドレス: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "\r\n";

if ($now == 1) {
  $now_done = "就業中";
}
if ($now == 2) {
  $now_done = "就業していない";
}
if ($now == 3) {
  $now_done = "その他";
}
$entry_data[] = "現在: " . $now_done . "\r\n";

$start_date_done = "就業開始希望日: " . htmlspecialchars($start_date_1, ENT_QUOTES, 'UTF-8') . "年" . htmlspecialchars($start_date_2, ENT_QUOTES, 'UTF-8') . "月" . htmlspecialchars($start_date_3, ENT_QUOTES, 'UTF-8') . "日";
$entry_data[] = $start_date_done . "\r\n";

$entry_list = implode("", $entry_data);

$to = $email;
$subject = 'エントリーありがとうございます。';
$message = $entry_name . "様\r\n" . "この度は当社への採用エントリーにご応募いただきありがとうございます。" . "\r\n" . "下記内容でエントリー登録いたしました。" . "\r\n" . $entry_list . "\r\n" . "ご登録いただいたエントリー内容は当社の採用担当が確認のうえ、ご連絡さしあげます。" . "\r\n" . "万一、数日が経過しても連絡がない場合は、お手数おかけしますが、下記電話番号までご連絡ください。" . "\r\n" . "採用担当〇〇: 03-1234-1234";
$headers = 'From: info@entryform.co.jp' . "\r\n";
$headers .= 'Bcc: isogai9025@yahoo.co.jp' . "\r\n";

// メール送信出来た場合 end.phpへ
// メール送信出来なかった場合　uncaught_error.phpへ
if (mb_send_mail($to, $subject, $message, $headers)) {
  header('Location: ./end.php');
} else {
header('Location: ./uncaught_error_php');
}
exit();
}
?>
