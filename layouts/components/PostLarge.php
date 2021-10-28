<?php


class PostLarge
{
    public static function view($post, $urlPage)
    {
        return '
                    <div class="card post post-large">
                        <div class="inner">
                            <a href="' . $urlPage . 'pages/detail.php?idPost=' . $post['ID_POST'] . '">
                                <img src="' . $urlPage . 'public/images/' . $post['IMAGE1'] . '" class="img-post" alt="">
                            </a>
                        </div>
                        <div class="card-body post-body">
                            <p class="category">' . $post['NAME'] . '</p>
                            <h5 class="post-title hv-l">
                                <a href="' . $urlPage . 'pages/detail.php?idPost=' . $post['ID_POST'] . '">
                                    ' . $post['TITLE'] . '
                                </a>
                            </h5>
                            <p class="card-text post-sapo">
                                ' . $post['SAPO'] . '
                            </p>
                            <p class="post-date-up">
                                '. DateUp::view($post['DATE_UP']) .'
                            </p>
                        </div>
                    </div>
        ';
    }
}