<?php


class PostSmall
{
    public static function view($post, $urlPage)
    {
        return '
            <li class="media post post-small">
                <div class="inner">
                    <a href="' . $urlPage . 'pages/detail.php?idPost=' . $post['ID_POST'] . '">
                       <img src="' . $urlPage . 'public/images/' . $post['IMAGE1'] . '" class="img-post" alt="">
                    </a>
                </div>
                <div class="ml-md-3 media-body post-body">
                    <h5 class="hv-l">
                        <a href="' . $urlPage . 'pages/detail.php?idPost=' . $post['ID_POST'] . '">
                           ' . $post['TITLE'] . '
                        </a>
                    </h5>
                </div>
            </li>
        ';
    }
}