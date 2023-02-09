	<footer class="page-footer">
        <div class="footer-top">
            <div class="footer-middle">
                <div class="container">
                    <a href="<?php echo home_url();?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" /></a>
                    <ul class="footer-links">
                        <li><a href="<?php echo home_url();?>/company">星和について</a></li>
                        <li><a>取扱製品</a></li>
                        <li><a href="<?php echo home_url();?>/recruit">採用情報</a></li>
                        <li><a target="_blank" href="http://seiwa-shopping.com/">オンラインショップ</a></li>
                        <li><a target="_blank" href="https://www.rakuten.co.jp/seiwa-shopping/">楽天市場</a></li>
						<li><a onClick="window.location.reload(true);window.location.href = '<?php echo home_url();?>/#info';">お知らせ</a></li>
                        <li><a href="<?php echo home_url();?>/inquiry">お問い合わせ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">© 2021 SEIWA GROUP. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/theme.js"></script>
</body>
</html>