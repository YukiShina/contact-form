<?php

require_once "/var/www/form/app/Models/ModelBase.php";

class MessageModel extends ModelBase
{

    public function __construct()
    {
        ModelBase::__construct();
    }

    private $name = 'MESSAGE';

    public function getList()
    {
        $sql = sprintf('SELECT * FROM %s ', $this->name);
        $stmt = $this->db->query($sql);
        $rows = $stmt->fetchAll();
        return $rows;
    }

    public function insert($param)
    {
        $sql = "INSERT INTO MESSAGE (NAME, NAME_KANA, EMAIL_ADDRESS, TEL, POST_CODE, ADDRESS, TEXT) VALUES (:name, :name_kana, :email_address, :tel, :post_code, :address, :text)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($param);
    }

}

?>
