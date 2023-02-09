<?php
$post = $wp_query->post;

if ( in_category(array( 'foodadditive',  )) ) {
    include(STYLESHEETPATH.'/category-foodadditive.php');
} elseif ( in_category(array( 'originalformulation' )) ) {
    include(STYLESHEETPATH.'/category-originalformulation.php');
} elseif ( in_category(array( 'spice' )) ) {
    include(STYLESHEETPATH.'/category-spice.php');
} elseif ( in_category(array( 'foodmaterials' )) ) {
    include(STYLESHEETPATH.'/category-foodmaterials.php');
}

$cat_id = get_query_var( 'cat' );
$cat = get_category( $cat_id );
if ( $cat->category_parent == 3 )
    include(STYLESHEETPATH.'/category-foodadditive.php');
if ( $cat->category_parent == 4 )
    include(STYLESHEETPATH.'/category-originalformulation.php');
if ( $cat->category_parent == 5 )
    include(STYLESHEETPATH.'/category-spice.php');
if ( $cat->category_parent == 6 )
    include(STYLESHEETPATH.'/category-foodmaterials.php');

?>