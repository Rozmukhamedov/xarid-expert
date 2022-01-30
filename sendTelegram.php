<?php

$name = $_POST['name'];
$phone = $_POST['phone'];

$token = "1999510515:AAHZUgbMGCz27Uf_CrR34LkrXQSnNy1LDd0";
$chat_id = "-666346966";

$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
?>