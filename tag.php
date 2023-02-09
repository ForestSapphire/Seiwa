<?php
$post = $wp_query->post;
if ( has_tag(array( '全取扱商品' )) ) {
    echo '全取扱商品';
}
?>