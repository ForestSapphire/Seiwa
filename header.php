<!-- HTMLコード -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- javascript -->
    <script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-3.4.1.min.js"></script>
</head>

<body>
    <header class="page-header">
        <div class="header-inner">
            <a href="<?php echo home_url();?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" /></a>
            <a href="javascript:void(0)" class="nav-open"><i></i><span>MENU</span></a>
            <div class="nav-wrapper">
                <a href="<?php echo home_url();?>/inquiry" class="contact-link"><i class="fa fa-envelope" aria-hidden="true"></i><span>CONTACT</span></a>
                <ul class="nav">
                    <li><a href="<?php echo home_url();?>/company">星和について</a></li>
                    <li>
                        <a>取扱製品</a>
                        <a href="javascript:void(0)" class="submenu-opener"></a>
                        <div class="menu-popup">
                            <div class="container">
                                <div class="popup-inner">
                                    <ul>
                                        <li>
                                            <a href="<?php echo home_url();?>/category/foodadditive">食品添加物</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo home_url();?>/category/originalformulation">食品添加物製剤</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo home_url();?>/category/spice">香辛料</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo home_url();?>/category/foodmaterials">一般食品・機能性食品素材</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="<?php echo home_url();?>/recruit">採用情報</a></li>
                    <li><a target="_blank" href="http://seiwa-shopping.com/">オンラインショップ</a></li>
                    <li><a target="_blank" href="https://www.rakuten.co.jp/seiwa-shopping/">楽天市場</a></li>
					<li><a onClick="window.location.reload(true);window.location.href = '<?php echo home_url();?>/#info';">お知らせ</a></li>
                </ul>
            </div>
        </div>
    </header>