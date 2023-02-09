<?php/*
Template Name: foodadditive
*/?>

<?php get_header();

?>

<div class="page-wrapper">
        <section class="breadcrumb">
            <div class="section-content">
                <ul>
                    <li><a href="../../">HOME</a></li>
                    <li><span>取り扱い製品</span></li>
                    <li><span>食品添加物</span></li>
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
                <!-- figure class="section-banner">
                    <img class="img" src="<?php echo get_template_directory_uri() ?>/assets/img/foodadditive.png">
                    <figcaption class="caption"><h4>FOOD ADDITIVE<span>食品添加物</span></h4></figcaption>
                </figure -->
                <dl>
                    <!-- dt>原料OEM工場の選定</dt>
                    <dd>
                        <p>日本と中国では食品添加物の規格基準が異なります。OEM工場に対して星和の規格基準を要求し、自社でチェック、また定期視察も実施しております。現在、主な原料仕入先は約100社、速やかな中国原料動向の把握と、弊社の品質管理体制により「製品の高品質化と安定供給」を実現しております。</p>
                    </dd>
                    <dt>製造</dt>
                    <dd>
                        <p>原料受入時に品質確認を行い、日本規約に合致した原料を検品・加工しております。またお客様のご要望に応じた粉砕、粒度調整、混合、造粒、小分け包装などきめ細やかな対応を心掛けております。特に最近ではオリジナル製剤や特許商品の製造に力を入れております。</p>
                    </dd>
                    <dt>取扱商品を見る</dt>
                    <dd>
                        <ul class="category-list">
							<li><a href="../all-product" class="btn">全取扱商品</a></li>
                            <li><a href="../sweetener" class="btn">甘味料</a></li>
                            <li><a href="../seasoning-acidulant" class="btn">調味料・酸味料</a></li>
                            <li><a href="../antioxidant" class="btn">酸化防止剤</a></li>
                            <li><a href="../thickener" class="btn">増粘剤</a></li>
                            <li><a href="../emulsifier" class="btn">乳化剤</a></li>
                            <li><a href="../preservative" class="btn">保存料</a></li>
                            <li><a href="../nutrition-enhancer" class="btn">栄養強化剤</a></li>
                        </ul>
                    </dd -->
                    <dd>
                        <ul class="product-list">
							<?php
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