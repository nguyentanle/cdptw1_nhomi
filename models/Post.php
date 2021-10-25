<?php
class Post extends Database
{
    public function getAll(){
        $sql = self::$connect->prepare(
            "SELECT * FROM `post`, `category` 
                    WHERE post.ID_CATEGORY = category.ID_CATEGORY 
                    ORDER BY DATE_UP DESC");
        $sql->execute();

        return $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}
?>