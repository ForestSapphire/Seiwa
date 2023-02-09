<?php get_header(); ?>

<?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            $category = get_the_category();
            $cat_id   = $category[0]->cat_ID;
            $cat_name = $category[0]->cat_name;
            $cat_slug = $category[0]->category_nicename;
			$parent_cat_id = get_category($cat_id)->category_parent;
?>
    <div class="page-wrapper">
        <section class="breadcrumb">
            <div class="section-content">
                <ul>
                    <li><a href="../">HOME</a></li>
                    <li><a href="../category/<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></a></li>
                    <li><span><?php the_title(); ?></span></li>
                  </ul>
            </div>
        </section>
        <section class="main-panel">
            <div class="center-box">
                <dl>
                    <dt class="box-title">
                        <h3><?php the_title();?></h3>
						<span><?php echo $cat_name; ?></span>
                    </dt>
					<dd>
						<?php the_content();?>
					</dd>
					
                    <!-- dd>
                        <figure>
                            <img class="img" src="../wp-content/themes/Seiwa/assets/img/product.png">
                        </figure>
                        <p>ドレッシング、たれ、ソース、スープなどの粘度付与、また、とろみ調整食品やゼリー・プリンなどのゲル化剤として幅広い食品に利用されています。耐熱性、耐塩性、耐酸性、冷凍耐性に優れた増粘剤です。</p>
                    </dd>
                    <dt>
                        <h5>使用例：01</h5>
                    </dt>
                    <dd>
                        <figure>
                            <img class="img" src="../wp-content/themes/Seiwa/assets/img/product.png">
                        </figure>
                        <p><strong>キサンタンガムW-1</strong><br>【用途】ゲル化剤、とろみ調整食品、嚥下困難者用食品の粘度付与<br>
                            　　　　粘度 (1%水溶液)：1400～1800cps</p>
                    </dd>
                    <dt>
                        <h5>使用例：02</h5>
                    </dt>
                    <dd>
                        <figure>
                            <img class="img" src="../wp-content/themes/Seiwa/assets/img/product.png">
                        </figure>
                        <p><strong>キサンタンガムW-1</strong><br>【用途】ゲル化剤、とろみ調整食品、嚥下困難者用食品の粘度付与<br>
                            　　　　粘度 (1%水溶液)：1400～1800cps</p>
                    </dd>
                    <dt>
                        <h5>使用例：03</h5>
                    </dt>
                    <dd>
                        <figure>
                            <img class="img" src="../wp-content/themes/Seiwa/assets/img/product.png">
                        </figure>
                        <p><strong>キサンタンガムW-1</strong><br>【用途】ゲル化剤、とろみ調整食品、嚥下困難者用食品の粘度付与<br>
                            　　　　粘度 (1%水溶液)：1400～1800cps</p>
                    </dd -->
                    <dd class="btn-panel">
                        <a class="btn" href="../inquiry">お問い合わせはこちら　＞</a>
                    </dd>
					
					<dd>
						<ul class="page-navigator button-3">
							<?php
								$previous = get_permalink(get_adjacent_post(false,'',true));
								$next = get_permalink(get_adjacent_post(false,'',false));
								$current = get_permalink();
								if($current != $previous):
							?>
							<li class="flat prev"><a href="<?php echo $previous; ?>">＜　前の記事へ</a></li>
							<?php
								endif;
							?>
						    <li class="flat return"><a href="<?php echo home_url(); ?>/category/<?php echo $cat_slug; ?>">一覧ページに戻る</a></li>
							<?php
								if($current != $next):
							?>
							<li class="flat next"><a href="<?php echo $next; ?>">次の記事へ　＞</a></li>
						    <?php endif; ?>
                        </ul>
                    </dd>
                </dl>
            </div>
            <div class="sidebar">
                <dl class="categories">
                    <dt>CATEGORY</dt>
                    <dd>
                        <ul class="main-category">
							<?php if ($cat_id == 3 || $parent_cat_id == 3) { ?>
                            <li>
                                <dl>
                                    <dt class="expanded">
                                        <a href="../category/foodadditive">食品添加物</a>
                                        <span>＞</span>
                                    </dt>
                                    <dd>
                                        <ul class="sub-category">
                                            <li><a href="../category/all-product"><span>全取扱商品</span></a></li>
                                            <li><a href="../category/sweetener"><span>甘味料</span></a></li>
                                            <li><a href="../category/seasoning-acidulant"><span>調味料・酸味料</span></a></li>
                                            <li><a href="../category/antioxidant"><span>酸化防止剤</span></a></li>
                                            <li><a href="../category/thickener"><span>増粘剤</span></a></li>
                                            <li><a href="../category/emulsifier"><span>乳化剤</span></a></li>
                                            <li><a href="../category/preservative"><span>保存料</span></a></li>
                                            <li><a href="../category/nutrition-enhancer"><span>栄養強化剤</span></a></li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
							<?php } else { ?>
							<li>
                                <dl>
                                    <dt class="collapsed">
                                        <a href="../category/foodadditive">食品添加物</a>
                                        <span>＞</span>
                                    </dt>
                                </dl>
                            </li>
							<?php } ?>
							
							<?php if ($cat_id == 4 || $parent_cat_id == 4) { ?>
							<li>
                                <dl>
                                    <dt class="expanded">
                                        <a href="../category/originalformulation">食品添加物製剤</a>
                                        <span>＞</span>
                                    </dt>
                                    <dd>
                                        <ul class="sub-category">
                                            <li><a href="../category/quality-improver-formulation"><span>品質改良剤製剤</span></a></li>
                                            <li><a href="../category/longevity-improver-formulation"><span>日持向上剤製剤</span></a></li>
                                            <li><a href="../category/antioxidant-formulation"><span>酸化防止剤製剤</span></a></li>
                                            <li><a href="../category/seasoning-preparation"><span>調味料製剤</span></a></li>
                                            <li><a href="../category/phosphate-preparation"><span>リン酸塩製剤</span></a></li>
                                            <li><a href="../category/sweetener-preparation"><span>甘味料製剤</span></a></li>
                                            <li><a href="../category/thickener-formulation"><span>増粘剤製剤</span></a></li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
							<?php } else { ?>
                            <li>
                                <dl>
                                    <dt class="collapsed">
                                        <a href="../category/originalformulation">食品添加物製剤</a>
                                        <span>＞</span>
                                    </dt>
                                </dl>
                            </li>
							<?php } ?>
							
							<?php if ($cat_id == 5 || $parent_cat_id == 5) { ?>
							<li>
                                <dl>
                                    <dt class="expanded">
                                        <a href="../category/spice">香辛料</a>
                                        <span>＞</span>
                                    </dt>
                                    <dd>
                                        <ul class="sub-category">
                                            <li><a href="../category/seiwa-special-curry"><span>星和特製カレー</span></a></li>
                                            <li><a href="../category/spice-mix-seasoning"><span>スパイスミックス・シーズニング</span></a></li>
                                            <li><a href="../category/various-spices"><span>各種香辛料</span></a></li>
                                        </ul>
                                    </dd>
                                </dl>
                            </li>
							<?php } else { ?>
                            <li>
                                <dl>
                                    <dt class="collapsed">
                                        <a href="../category/spice">香辛料</a>
                                        <span>＞</span>
                                    </dt>
                                </dl>
                            </li>
							<?php } ?>
							
							<li>
                                <dl>
                                    <dt>
                                        <a href="../category/foodmaterials">一般・機能性食品素材</a>
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

<?php
        endwhile;
    else:
        //★ここに投稿がない場合の表示ソースを書く
    endif;
?>

<?php get_footer(); ?>