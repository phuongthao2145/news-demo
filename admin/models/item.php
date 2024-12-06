<?php
class Item extends Db
{
    //Hien thi danh sach cac item theo thu tu moi nhat
    function getAllItems()
    {
        $sql = self::$connection->prepare("SELECT `items`.`id`,`title`,`excerpt`,`content`,`image`,`categories`.`name` AS catename,`author`.`name` AS authname,`featured`,`views`,`created_at`
                                            FROM `items`,`categories`,`author`
                                            WHERE `items`.`category` = `categories`.`id`
                                            AND `items`.`author` = `author`.`id`
                                            ORDER BY `created_at` DESC;");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function search($keyword, $page, $count)
    {
        // Tính số thứ tự trang bắt đầu
        $start = ($page - 1) * $count;
        $sql = self::$connection->prepare("SELECT * FROM `items` 
        WHERE `content` LIKE ?
        LIMIT ?,?");
        $keyword = "%$keyword%";
        $sql->bind_param("sii", $keyword, $start, $count);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    public function searchCount($keyword)
    {
        $sql = self::$connection->prepare("SELECT * FROM `items` 
        WHERE `content` LIKE ?");
        $keyword = "%$keyword%";
        $sql->bind_param("s", $keyword);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    function paginate($url, $total, $count, $page)
    {
        $totalLinks = ceil($total / $count);
        $link = "";
        for ($j = 1; $j <= $totalLinks; $j++) {
            if ($page == $j) {
                $link = $link . "<li class='active'><a href='$url&page=$j'> $j </a></li>";
            } else {
                $link = $link . "<li><a href='$url&page=$j'> $j </a></li>";
            }
        }
        return $link;
    }
    function delete($id){
        $sql = self::$connection->prepare("DELETE FROM `items` WHERE `id`=?");
        $sql->bind_param("i",$id);
        return $sql->execute();
    }
    function addItem($title,$excerpt,$content,$image,$category,$featured,$views,$author){
        $sql = self::$connection->prepare("INSERT 
        INTO `items`(`title`, `excerpt`, `content`, `image`, `category`, `featured`, `views`, `author`)
        VALUES (?,?,?,?,?,?,?,?)");
        $sql->bind_param("ssssiiii",$title,$excerpt,$content,$image,$category,$featured,$views,$author);
        return $sql->execute();
    }
}
