<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    define('urlPage', '../');
    require urlPage . 'layouts/head.php';

    $post = new Post();

    $postDetail = [];

    if (!isset($_GET['idPost']) || empty($_GET['idPost'])) {
        header('location: ../');
    } else {
        $postDetail = $post->getByID($_GET['idPost']);
    }

    $arrPostMore = $post->getByCategory($postDetail['id_category']);
    ?>
</head>

<body>
    <!-- Header -->
    <header>
        <?php include urlPage . "layouts/components/nav.php"; ?>
    </header>
    <!-- /Header -->

    <!-- Content Details-->
    <div class="content" style="margin: 100px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-detail">
                        <p class="category"><?php echo $postDetail['NAME'] ?></p>
                        <hr>
                        <h1 class="post-title">
                            <?php echo $postDetail['TITLE'] ?>
                        </h1>
                        <p class="date-up" style="text-align: right; opacity: 0.7;">
                            <?php DateUp::view($postDetail['DATE_UP']) ?></p>

                        <img src="../public/images/<?php echo $postDetail['IMAGE1'] ?>" class="w-100" alt="">

                        <p class="post-sapo">
                            <?php echo $postDetail['SAPO'] ?>
                        </p>

                        <p class="post-content">
                            <?php echo substr($postDetail['CONTENT'], 0, strlen(($postDetail['CONTENT'])) / 2) ?>
                        </p>

                        <img src="../public/images/<?php echo !empty($postDetail['IMAGE2']) ? ($postDetail['IMAGE2']) : '' ?>"
                            class="w-100" alt="">

                        <p class="post-content">
                            <?php echo substr($postDetail['CONTENT'], strlen(($postDetail['CONTENT'])) / 2, strlen($postDetail['CONTENT'])) ?>
                        </p>
                    </div>

                    <hr>

                    
                </div>

                <!--Related Posts  bai viet lien quan-->
                <div class="col-md-4">
                    <h5 style="margin-top: 30px; margin-bottom: 20px;">Tin liên quan</h5>

                    <?php
                $listPostMore = [];

                if (!empty($arrPostMore[0])) {
                    array_push($listPostMore, $arrPostMore[0]);
                }
                if (!empty($arrPostMore[1])) {
                    array_push($listPostMore, $arrPostMore[1]);
                }
                if (!empty($arrPostMore[2])) {
                    array_push($listPostMore, $arrPostMore[2]);
                }

                echo ListPost::view($listPostMore, urlPage);

                if (!empty($arrPostMore[3]))
                    echo PostNormal::view($arrPostMore[3], urlPage);
                if (!empty($arrPostMore[4]))
                    echo PostNormal::view($arrPostMore[4], urlPage);
                ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /Content -->

    <?php require '../layouts/footer.php' ?>

    <!-- Go to top -->
    <div class="go-top top">
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </div>
    <!-- /Go to top -->

    <?php
require '../layouts/script.php';
?>

</body>

</html>