<?php
class Item extends Db{
    public function getAllItems(){
        $sql = self::$connection->prepare("SELECT * FROM `items`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getNewItem($start,$count){
        $sql = self::$connection->prepare("SELECT * FROM `items` 
        ORDER BY `created_at` DESC 
        LIMIT ?,?");
        $sql->bind_param("ii",$start,$count);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function getFeaturedItem($start,$count){
        $sql = self::$connection->prepare("SELECT * FROM `items` 
        WHERE `featured` = 1
        ORDER BY `created_at` DESC 
        LIMIT ?,?");
        $sql->bind_param("ii",$start,$count);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function search($keyword,$start,$count){
        $sql = self::$connection->prepare('SELECT * FROM `items` 
        WHERE `content` 
        LIKE ? LIMIT ?,?');
        $keyword = "%$keyword%";
        $sql->bind_param("sii",$keyword,$start,$count);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function searchAll($keyword){
        $sql = self::$connection->prepare('SELECT * FROM `items` 
        WHERE `content` 
        LIKE ?');
        $keyword = "%$keyword%";
        $sql->bind_param("s",$keyword);
        $sql->execute();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}