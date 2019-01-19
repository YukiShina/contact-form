<?php


class Sendmail {

  public function __construct() {
  }

  public function index($param) {
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $to      = $param[':email_address'];
    $subject = 'お問い合わせありがとうございます。';
    $message = 'お問い合わせありがとうございます。';
    $headers = 'From: XXXX@XXXX' . "\r\n";
    $header = "Bcc: XXXX@XXXX";

    $sendFlg = mb_send_mail($to, $subject, $message, $headers);

    return $sendFlg;
  }
}

?>
