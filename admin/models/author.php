<?php
class Author extends Db
{
    function getAllAuthors()
    {
        $sql = self::$connection->prepare("SELECT * FROM `author`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
}
