<?php
//xu ly xoa 3 bang
//neu  get id -> xoa items
//neu get cate_id -> xoa categories
//neu author_id -> xoa authors
include "config.php";
include "models/db.php";
include "models/item.php";
$item = new Item;

if(isset($_GET['id'])){
    //xu ly xoa id trong bang items
    $id = $_GET['id'];
    $item->delete($id);
    header('location:items.php');
}
elseif(isset($_GET['cate_id'])){
    //xu ly xoa id trong bang catagories
}
elseif(isset($_GET['author_id'])){
    //xu ly xoa id trong bang author
}