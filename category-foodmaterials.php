<?php get_header();

?>

    <div class="page-wrapper">
        <section class="breadcrumb">
            <div class="section-content">
                <ul>
                    <li><a href="../../">HOME</a></li>
                    <li><span>取り扱い製品</span></li>
                    <li><span>一般 / 機能性食品素材</span></li>
                  </ul>
            </div>
        </section>
        <section class="main-header">
            <div class="section-title">
                <h3>PRODUCTS<span>取り扱い製品</span></h3>
            </div>
            <div class="section-content">
                <div class="keyword-input">
                    <div class="input">
                        <?php get_search_form( true ); ?>
                    </div>
                    <ul class="keyword-list">
                        <li><a>#キサンタンガム</a></li>
                        <li><a>#キサンタンガム1</a></li>
                        <li><a>#キサンタンガム2</a></li>
                        <li><a>#キサンタンガム3</a></li>
                        <li><a>#キサンタンガム4</a></li>
                        <li><a>#キサンタンガム5</a></li>
                        <li><a>#キサンタンガム6</a></li>
                        <li><a>#キサンタンガム7</a></li>
                        <li><a>#キサンタンガム8</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="main-panel">
            <div class="center-box">
                <figure class="section-banner">
                    <img class="img" src="<?php echo get_template_directory_uri() ?>/assets/img/foodmaterials.png">
                    <figcaption class="caption"><h4>General / functional food materials<span>一般 / 機能性食品素材</span></h4></figcaption>
                </figure>
                <dl>
                    <dt>取扱商品を見る</dt>
                    <dd>
                        <ul class="product-list">
                            <?php
								query_posts('cat=' . get_query_var( 'cat' ));
								if ( has_post_thumbnail() ) {
									$image_id = get_post_thumbnail_id ();
									$image_url = wp_get_attachment_image_src ($image_id, true);
									$ec_url = $image_url[0];
								} else {
									$ec_url = get_template_directory_uri() . '/assets/img/no-image.png';
								}
								if (have_posts()): while(have_posts()):the_post();
							?>
							<li>
                                <dl>
                                    <dt>
                                        <a href="<?php the_permalink();?>">
                                            <figure class="product-image">
                                                <img class="img" src="<?php echo $ec_url;?>">
                                                <figcaption class="caption"><?php the_title();?></figcaption>
                                            </figure>
                                        </a>
                                    </dt>
                                    <dd>
										<?php
											$categories = get_the_category();
											if ($categories) {
												foreach($categories as $category) {
													echo "<span>$category->cat_name</span>";
												}
											}
										?>
                                    </dd>
                                </dl>
                            </li>
							<?php 
								endwhile; endif;
								wp_reset_query();
							?>
                        </ul>
                    </dd>
                </dl>
				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
            </div>
            <div class="sidebar">
                <dl class="categories">
                    <dt>CATEGORY</dt>
                    <dd>
                        <ul class="main-category">
                            <li>
                                <dl>
                                    <dt class="collapsed">
                                        <a href="../foodadditive">食品添加物</a>
                                        <span>＞</span>
                                    </dt>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt class="collapsed">
                                        <a href="../originalformulation">食品添加物製剤</a>
                                        <span>＞</span>
                                    </dt>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt class="collapsed">
                                        <a href="../spice">香辛料</a>
                                        <span>＞</span>
                                    </dt>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>
                                        <a href="../foodmaterials">一般・機能性食品素材</a>
                                        <span>＞</span>
                                    </dt>
                                </dl>
                            </li>
                        </ul>
                    </dd>
                </dl>
            </div>
        </section>
    </div>

<?php get_footer(); ?>