<?php

require_once "/var/www/form/app/Models/ModelBase.php";

$connInfo = array(
  'host'     => 'localhost',
  'dbname'   => 'FORM',
  'dbuser'   => 'XXXXXX',
  'password' => 'XXXXXX'
);
ModelBase::setConnectionInfo($connInfo);

?>
