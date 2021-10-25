<?php


class Category extends Database
{
    public function getAll(){
        $sql = self::$connect->prepare("SELECT * FROM category");
        $sql->execute();

        return $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}