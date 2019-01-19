<?php

require_once "/var/www/form/app/Models/MessageModel.php";
require_once "/var/www/form/app/Mail/Sendmail.php";

class MessageaddController {

  public function __construct() {
    $this->index();
  }

  public function index() {

    $param = $_POST['message'];
    $messageInstance = new MessageModel();
    $messageInstance->insert($param);

    $sendmailInstance = new Sendmail();
    $sendFlg = $sendmailInstance->index($param);

    if($sendFlg) {
      echo "<div style='text-align:center; margin:30px;'>お問い合わせありがとうございました。</div>";
    } else {
      echo "<div style='text-align:center; margin:30px;'>送信エラーが発生しました。</div>";
    }
  }
}

?>
