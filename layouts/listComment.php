<?php
session_start();

require $_GET['urlPage'] . 'config/database.php';
require $_GET['urlPage'] . 'models/Database.php';
require $_GET['urlPage'] . 'models/Comment.php';
require '../layouts/components/ListComment.php';
require '../layouts/components/CommentItem.php';
require '../layouts/components/DateUp.php';

$comment = new Comment();
if (!empty($_GET['idPost'])) {
    $listComment = $comment->getByIDPost($_GET['idPost']);

    echo ListComment::view($listComment);

    if (!empty($_SESSION['comment']['post'])){
        echo $_SESSION['comment']['post'];
        unset($_SESSION['comment']['post']);
    }
}