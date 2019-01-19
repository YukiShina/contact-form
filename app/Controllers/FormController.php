<?php

require_once "/var/www/form/app/Models/MessageModel.php";

class FormController {
  public function __construct() {
    $this->index();
  }

  public function index() {
    include '/var/www/form/app/Views/Form.php';
  }
}

?>
