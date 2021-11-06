<?php
    include_once('posts_connect.php');
    if(isset($_REQUEST['ID_POST']) and $_REQUEST['ID_POST']!=""){
        $id=$_GET['ID_POST'];
        $sql = "DELETE FROM post WHERE ID_POST='$id'";
        if ($conn->query($sql) === TRUE) {
            echo "Xoá thành công!";
            ?>
            <form method="get" action="posts_view.php">
                <button type="submit">OK</button>
            </form>
            <?php
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();
    }
?>