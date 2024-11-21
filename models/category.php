<?php
class Category extends Db{
    public function getAllCates(){
        $sql = self::$connection->prepare("SELECT * FROM `categories`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getNameById($cate_id){
        $sql = self::$connection->prepare("SELECT `name` FROM `categories`
        WHERE `id` = ?");
        $sql->bind_param("i",$cate_id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}