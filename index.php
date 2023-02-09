<?php get_header(); ?>

	<div class="page-wrapper">
        <section class="hero">
            <div class="hero-title">
                <div class="hero-title-wrapper">
                    <h2>星和の星は私たちの星、地球。</h2>
                    <p>
                        日本人が古来より<br>
                        大切にしてきた和の精神で<br>
                        私たちは食品で世界を<br class="sp tb">繋げていきたい。
                        <span>CREATE “FOODS” THAT MET THE NEEDS <br class="sp">FOR YOUR LIFESTYLE</span>
                    </p>
                </div>
            </div>
            <div class="hero-carousel">
                <div class="hero-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hero-01.png);">
                </div>
                <div class="hero-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hero-02.png);">
                </div>
                <div class="hero-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hero-03.png);">
                </div>
            </div>
        </section>
        <section class="information">
            <div class="section-title">
                <h3 id="info"><span>INFORMATION</span></h3>
            </div>
            <div class="section-content">
				<?php query_posts('cat=2&showposts=5'); ?>
				<?php if(have_posts()): while(have_posts()):the_post(); ?>
                <div class="item">
                    <div class="date"><span><?php the_time('Y/m/d');?></span></div>
                    <div class="body"><span><?php the_title();?></span></div>
                </div>
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
            </div>
        </section>
        <section class="company">
            <div class="section-title">
                <h3>COMPANY<span>星和について</span></h3>
            </div>
            <div class="section-content">
                <div class="block block--1">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img01.png">
                    </figure>
                    <div class="title">
                        <h4>あなたの<br>ライフスタイルに合った<br>食を創造します。<span>CREATE “FOOD” THAT MET THE NEEDS <br class="sp">FOR YOUR LIFESTYLE</span></h4>
                    </div>
                </div>
                <div class="block block--2">
                    <div class="txt">
                        <p>お客様が何を求めているか？<br>そのニーズにどう答えるか？<br>星和株式会社は常にこのことを<br class="sp">念頭に置き、<br class="pc tb">ジャンルにとらわれない<br class="sp">発想を心掛けています。</p>
                        <a href="#" class="btn"><span>詳しく見る　＞</span></a>
                    </div>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img02.png">
                    </figure>
                </div>
                <div class="block block--3">
                    <figure class="item item--1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img03.png">
                    </figure>
                    <figure class="item item--2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img04.png">
                    </figure>
                    <figure class="item item--3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img05.png">
                    </figure>
                    <figure class="item item--4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img06.png">
                    </figure>
                    <figure class="item item--5">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img07.png">
                    </figure>
                </div>
            </div>
        </section>
        <section class="products">
            <div class="section-title">
                <h3>PRODUCTS<span>主力 取り扱い製品</span></h3>
            </div>
            <div class="section-content">
                <div class="category-links">
                    <div class="item selected">
                        <a href="#food-additive"><span>食品添加物</span></a>
                    </div>
                    <div class="item selected">
                        <a href="#food-additive-formulation"><span>食品添加物製剤</span></a>
                    </div>
                    <div class="item selected">
                        <a href="#spices"><span>香辛料</span></a>
                    </div>
                    <div class="item selected">
                        <a href="#food-material"><span>一般食品・<br class="sp tb">機能性食品素材</span></a>
                    </div>
                </div>
                <div class="category-list">
                    <div class="label">
                        <h4 id="food-additive" class="name">食品添加物</h4>
                        <a href="#" class="link">一覧を見る</a>
                    </div>
                    <ul class="list">
						<?php
							query_posts('cat=3&showposts=2');
							if ( has_post_thumbnail() ) {
								$image_id = get_post_thumbnail_id ();
								$image_url = wp_get_attachment_image_src ($image_id, true);
								$ec_url = $image_url[0];
							} else {
								$ec_url = get_template_directory_uri() . '/assets/img/no-image.png';
							}
							if (have_posts()): while(have_posts()):the_post();
						?>
						<li class="item">
                            <figure class="img effect background-zoom1">
                                <a href="<?php the_permalink();?>"><img src="<?php echo $ec_url;?>"></a>
                            </figure>
                            <div class="detail">
                                <span class="name"><?php the_title();?></span>
                                <div class="use">
                                    <span class="label">用途</span>
                                    <span class="detail"><?php echo get_post_meta($post->ID, 'use', true); ?></span>
                                </div>
                                <div class="btn-panel">
                                    <a href="<?php the_permalink();?>" class="btn">詳しく見る　＞</a>
                                </div>
                            </div>
                        </li>
						<?php 
							endwhile; endif;
							wp_reset_query();
						?>
                    </ul>
                </div>
                <div class="category-list">
                    <div class="label">
                        <h4 id="food-additive-formulation" class="name">食品添加物製剤</h4>
                        <a href="#" class="link">一覧を見る</a>
                    </div>
                    <ul class="list">
                        <?php
							query_posts('cat=4&showposts=2');
							if ( has_post_thumbnail() ) {
								$image_id = get_post_thumbnail_id ();
								$image_url = wp_get_attachment_image_src ($image_id, true);
								$ec_url = $image_url[0];
							} else {
								$ec_url = get_template_directory_uri() . '/assets/img/no-image.png';
							}
							if (have_posts()): while(have_posts()):the_post();
						?>
						<li class="item">
                            <figure class="img effect background-zoom1">
                                <a href="<?php the_permalink();?>"><img src="<?php echo $ec_url;?>"></a>
                            </figure>
                            <div class="detail">
                                <span class="name"><?php the_title();?></span>
                                <div class="use">
                                    <span class="label">用途</span>
                                    <span class="detail"><?php echo get_post_meta($post->ID, 'use', true); ?></span>
                                </div>
                                <div class="btn-panel">
                                    <a href="<?php the_permalink();?>" class="btn">詳しく見る　＞</a>
                                </div>
                            </div>
                        </li>
						<?php 
							endwhile; endif;
							wp_reset_query();
						?>
                    </ul>
                </div>
                <div class="category-list">
                    <div class="label">
                        <h4 id="spices" class="name">香辛料</h4>
                        <a href="#" class="link">一覧を見る</a>
                    </div>
                    <ul class="list">
                        <?php
							query_posts('cat=5&showposts=2');
							if ( has_post_thumbnail() ) {
								$image_id = get_post_thumbnail_id ();
								$image_url = wp_get_attachment_image_src ($image_id, true);
								$ec_url = $image_url[0];
							} else {
								$ec_url = get_template_directory_uri() . '/assets/img/no-image.png';
							}
							if (have_posts()): while(have_posts()):the_post();
						?>
						<li class="item">
                            <figure class="img effect background-zoom1">
                                <a href="<?php the_permalink();?>"><img src="<?php echo $ec_url;?>"></a>
                            </figure>
                            <div class="detail">
                                <span class="name"><?php the_title();?></span>
                                <div class="use">
                                    <span class="label">用途</span>
                                    <span class="detail"><?php echo get_post_meta($post->ID, 'use', true); ?></span>
                                </div>
                                <div class="btn-panel">
                                    <a href="<?php the_permalink();?>" class="btn">詳しく見る　＞</a>
                                </div>
                            </div>
                        </li>
						<?php 
							endwhile; endif;
							wp_reset_query();
						?>
                        <li class="item item--special">
                            <figure class="img effect background-zoom1">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/product02.png"></a>
                            </figure>
                            <div class="detail">
                                <span class="name">星和特製カレー</span>
                                <div class="use">
                                    <span class="label">用途</span>
                                    <div class="detail">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        <div class="subcategory">
                                            <div class="item"><a href="#">星和特製カレーA5</a></div>
                                            <div class="item"><a href="#">星和特製カレーMF-1</a></div>
                                            <div class="item"><a href="#">星和特製カレーA8</a></div>
                                            <div class="item"><a href="#">星和特製カレーR-1</a></div>
                                            <div class="item"><a href="#">星和特製カレーST-1</a></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="btn-panel">
                                    <a class="btn">かレー一覧を見る　＞</a>
                                    <a href="<?php home_url(); ?>/inquiry" class="btn highlighted">お問い合わせはこちら　＞</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="category-list">
                    <div class="label">
                        <h4 id="food-material" class="name">一般・機能性食品素材</h4>
                        <a href="#" class="link">一覧を見る</a>
                    </div>
                    <ul class="list">
                        <?php
							query_posts('cat=6&showposts=2');
							if ( has_post_thumbnail() ) {
								$image_id = get_post_thumbnail_id ();
								$image_url = wp_get_attachment_image_src ($image_id, true);
								$ec_url = $image_url[0];
							} else {
								$ec_url = get_template_directory_uri() . '/assets/img/no-image.png';
							}
							if (have_posts()): while(have_posts()):the_post();
						?>
						<li class="item">
                            <figure class="img effect background-zoom1">
                                <a href="<?php the_permalink();?>"><img src="<?php echo $ec_url;?>"></a>
                            </figure>
                            <div class="detail">
                                <span class="name"><?php the_title();?></span>
                                <div class="use">
                                    <span class="label">用途</span>
                                    <span class="detail"><?php echo get_post_meta($post->ID, 'use', true); ?></span>
                                </div>
                                <div class="btn-panel">
                                    <a href="<?php the_permalink();?>" class="btn">詳しく見る　＞</a>
                                </div>
                            </div>
                        </li>
						<?php 
							endwhile; endif;
							wp_reset_query();
						?>
                    </ul>
                </div>
            </div>
        </section>
        <section class="recruit">
            <div class="section-title">
                <h3>RECRUIT<span>採用情報</span></h3>
            </div>
            <div class="section-content">
                <div class="txt">
                    <p>リードテキストが入ります、リードテキストが入ります。リードテキストが入ります、<br>リードテキストが入ります。リードテキストが入ります。</p>
                </div>
                <div class="btn-panel">
                    <div class="line">
                        <div class="item">
                            <a href="#">新卒採用について</a>
                        </div>
                        <div class="item">
                            <a href="#">キャリア採用について</a>
                        </div>
                    </div>
                    <div class="item">
                        <a href="<?php home_url() ;?>">お問い合わせはこちら</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php get_footer(); ?>