
<?php get_header('page'); ?>


<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();


        remove_filter('the_content', 'wpautop');
        the_content();
    endwhile;
else:


    echo "ページがみつかりませんでした。";
endif;
?>


<?php get_footer(); ?>