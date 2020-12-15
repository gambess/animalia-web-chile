<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript">if (parent.frames.length !== 0) {
                top.location = '<?= site_url(); ?>';
            }
        </script>
        <title><?= $page_title; ?></title>
        <meta name="description" content="<?= $page_desc; ?>">
        <link rel="shortcut icon" href="<?= $assets; ?>images/favicon.png">

        <link href="<?= $assets; ?>css/animate.css" rel="stylesheet">
        <link href="<?= $assets; ?>css/LineIcons.css" rel="stylesheet">
        <link href="<?= $assets; ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= $assets; ?>css/slick.css" rel="stylesheet">
        <link href="<?= $assets; ?>css/default.css" rel="stylesheet">
        <link href="<?= $assets; ?>css/style.css" rel="stylesheet">

        <meta property="og:url" content="<?= isset($product) && !empty($product) ? site_url('product/' . $product->slug) : site_url(); ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?= $page_title; ?>" />
        <meta property="og:description" content="<?= $page_desc; ?>" />
        <meta property="og:image" content="<?= isset($product) && !empty($product) ? base_url('assets/uploads/' . $product->image) : base_url('assets/uploads/logos/' . $shop_settings->logo); ?>" />
        <style>
            .nav-link{
                color: #178FD6 !important;
                font-weight: bolder;
            }
            /*===========================
            08.BRAND css 
            ===========================*/
            .brand-wrapper {
                border-top: 1px solid #dedede; 
            }
            .brand-wrapper .single-brand {
                float: left;
                width: 20%;
                text-align: center; 
            }
            @media (max-width: 767px) {
                .brand-wrapper .single-brand {
                    width: 50%; 
                } 
            }

            .tip {
                position: relative;
                background: #178FD6;
                border-radius: 25px;
                padding: 30px 25px;
                z-index: 1;
                margin-bottom: 25px;
            }
            .tip::after {
                content: '';
                position: absolute;
                background-image: url(<?= $assets; ?>images/arrow.svg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: bottom center;
                width: 100px;
                height: 54px;
                bottom: -48px;
                left: 18px;
            }

            .info {
                display: flex;
                align-items: center;
                margin-left: 100px;
            }

            .login {
                margin-bottom:5px;
            }
            .dropdown-menu {
                width: 300px !important;
            }

            /*carousel styles*/
            .carousel {
                margin: 50px auto;
                padding: 0 70px;
            }
            .carousel .carousel-item {
                min-height: 330px;
                text-align: center;
                overflow: hidden;
            }
            .carousel .carousel-item .img-box {
                height: 160px;
                width: 100%;
                position: relative;
            }
            .carousel .carousel-item img {	
                max-width: 100%;
                max-height: 100%;
                display: inline-block;
                position: absolute;
                bottom: 0;
                margin: 0 auto;
                left: 0;
                right: 0;
            }
            .carousel .carousel-item h4 {
                font-size: 18px;
                margin: 10px 0;
            }
            .carousel .carousel-item .btn {
                color: #333;
                border-radius: 0;
                font-size: 11px;
                text-transform: uppercase;
                font-weight: bold;
                background: none;
                border: 1px solid #ccc;
                padding: 5px 10px;
                margin-top: 5px;
                line-height: 16px;
            }
            .carousel .carousel-item .btn:hover, .carousel .carousel-item .btn:focus {
                color: #fff;
                background: #000;
                border-color: #000;
                box-shadow: none;
            }
            .carousel .carousel-item .btn i {
                font-size: 14px;
                font-weight: bold;
                margin-left: 5px;
            }
            .carousel .thumb-wrapper {
                text-align: center;
            }
            .carousel .thumb-content {
                padding: 15px;
            }
            .carousel-control-prev, .carousel-control-next {
                height: 100px;
                width: 40px;
                background: none;
                margin: auto 0;
                background: rgba(0, 0, 0, 0.2);
            }
            .carousel-control-prev i, .carousel-control-next i {
                font-size: 30px;
                position: absolute;
                top: 50%;
                display: inline-block;
                margin: -16px 0 0 0;
                z-index: 5;
                left: 0;
                right: 0;
                color: rgba(0, 0, 0, 0.8);
                text-shadow: none;
                font-weight: bold;
            }
            .carousel-control-prev i {
                margin-left: -3px;
            }
            .carousel-control-next i {
                margin-right: -3px;
            }
            .carousel .item-price {
                font-size: 13px;
                padding: 2px 0;
                font-weight: bold;
            }
            .carousel .item-price strike {
                color: #999;
                margin-right: 5px;
            }
            .carousel .item-price span {
                color: #000;
                font-size: 100%;
                font-family: sans-serif;
            }	
            .carousel .carousel-indicators {
                bottom: -50px;
            }
            .carousel-indicators li, .carousel-indicators li.active {
                width: 10px;
                height: 10px;
                margin: 4px;
                border-radius: 50%;
                border-color: transparent;
                border: none;
            }
            .carousel-indicators li {	
                background: rgba(0, 0, 0, 0.2);
            }
            .carousel-indicators li.active {	
                background: rgba(0, 0, 0, 0.6);
            }
            .star-rating li {
                padding: 0;
            }
            .star-rating i {
                font-size: 14px;
                color: #178FD6;
            }

            h5 > a {
                text-decoration: none !important;
                color: #000 !important;
                font-family: sans-serif;
                font-weight: bold;
            }
            div > a.link {
                text-decoration: none !important;
                font-weight: bold;
            }

            /*end slider styles*/

            .custom-btn {
                border-color: #178FD6 !important;
            }
            
            .fa-shopping-cart{
                color: #178FD6;
            }

        </style>
    </head>
    <body>
        <!--[if IE]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
          <![endif]-->
        <section class="header_area">
            <div class="header_navbar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-light bg-transparent">
                                <a class="navbar-brand" href="index.html">
                                    <?= strtolower($shop_settings->shop_name); ?>
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav">
                                        <?php
                                        if ($loggedIn) {
                                            ?>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                    <?= lang('hi') . ' ' . $loggedInUser->first_name; ?> <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="divider"></li>
                                                    <?= $loggedIn && $Staff ? '<li class="hidden-xs"><a href="' . admin_url() . '"><i class="fa fa-dashboard"></i> ' . lang('admin_area') . '</a></li>' : ''; ?>
                                                    <li class="divider"></li>
                                                    <li class=""><a href="<?= site_url('profile'); ?>"><i class="mi fa fa-user"></i> <?= lang('profile'); ?></a></li>
                                                    <li class=""><a href="<?= shop_url('orders'); ?>"><i class="mi fa fa-heart"></i> <?= lang('orders'); ?></a></li>
                                                    <li class=""><a href="<?= shop_url('quotes'); ?>"><i class="mi fa fa-heart-o"></i> <?= lang('quotes'); ?></a></li>
                                                    <?php if (!$shop_settings->hide_price) { ?>
                                                        <li class="hidden-xs"><a href="<?= shop_url('wishlist'); ?>"><i class="fa fa-heart"></i> <?= lang('wishlist'); ?> (<span id="total-wishlist"><?= $wishlist; ?></span>)</a></li>
                                                    <?php } ?>
                                                    <li class=""><a href="<?= shop_url('downloads'); ?>"><i class="mi fa fa-download"></i> <?= lang('downloads'); ?></a></li>
                                                    <li class=""><a href="<?= shop_url('addresses'); ?>"><i class="mi fa fa-building"></i> <?= lang('addresses'); ?></a></li>
                                                    <li class="divider"></li>
                                                    <li class=""><a href="<?= site_url('logout'); ?>"><i class="mi fa fa-sign-out"></i> <?= lang('logout'); ?></a></li>
                                                </ul>
                                            </li>
                                            <?php
                                        } else {
                                            ?>
                                            <li>
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle" id="dropdownLogin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <i class="fa fa-sign-in"></i> <?= lang('login'); ?> <span class="caret"></span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-login" aria-labelledby="dropdownLogin" data-dropdown-in="zoomIn" data-dropdown-out="fadeOut">
                                                        <?php include FCPATH . 'themes' . DIRECTORY_SEPARATOR . $Settings->theme . DIRECTORY_SEPARATOR . 'shop' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'login_form.php'; ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                        }
                                        ?>
                                        <li class="dropdown-divider"></li>
                                        <?php if ($isPromo) { ?>
                                            <li class="<?= $m == 'shop' && $v == 'products' && $this->input->get('promo') == 'yes' ? 'active' : ''; ?>"><a href="<?= shop_url('products?promo=yes'); ?>"><?= lang('promotions'); ?></a>
                                            </li>
                                        <?php } ?>
                                        <li class="<?= $m == 'shop' && $v == 'products' && $this->input->get('promo') != 'yes' ? 'active' : ''; ?>"><a href="<?= shop_url('products'); ?>"><?= lang('products'); ?></a>
                                        </li>
                                        <li class="divider"></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <?= lang('categories'); ?> <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <?php
                                                foreach ($categories as $pc) {
                                                    echo '<li class="' . ($pc->subcategories ? 'dropdown dropdown-submenu' : '') . '">';
                                                    echo '<a ' . ($pc->subcategories ? 'class="dropdown-toggle" data-toggle="dropdown"' : '') . ' href="' . site_url('category/' . $pc->slug) . '">' . $pc->name . '</a>';
                                                    if ($pc->subcategories) {
                                                        echo '<ul class="dropdown-menu">';
                                                        foreach ($pc->subcategories as $sc) {
                                                            echo '<li><a href="' . site_url('category/' . $pc->slug . '/' . $sc->slug) . '">' . $sc->name . '</a></li>';
                                                        }
                                                        echo '<li class="divider"></li>';
                                                        echo '<li><a href="' . site_url('category/' . $pc->slug) . '">' . lang('all_products') . '</a></li>';
                                                        echo '</ul>';
                                                    }
                                                    echo '</li>';
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                        <li class="dropdown<?= (count($brands) > 20) ? ' mega-menu' : ''; ?>">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <?= lang('brands'); ?> <span class="caret"></span>
                                            </a>
                                            <?php
                                            if (count($brands) <= 10) {
                                                ?>
                                                <ul class="dropdown-menu">
                                                    <?php
                                                    foreach ($brands as $brand) {
                                                        echo '<li><a href="' . site_url('brand/' . $brand->slug) . '" class="line-height-lg">' . $brand->name . '</a></li>';
                                                    }
                                                    ?>
                                                </ul>
                                                <?php
                                            } elseif (count($brands) <= 20) {
                                                ?>
                                                <div class="dropdown-menu dropdown-menu-2x">
                                                    <div class="dropdown-menu-content">
                                                        <?php
                                                        $brands_chunks = array_chunk($brands, 10);
                                                        foreach ($brands_chunks as $brands) {
                                                            ?>
                                                            <div class="col-xs-6 padding-x-no line-height-md">
                                                                <ul class="nav">
                                                                    <?php
                                                                    foreach ($brands as $brand) {
                                                                        echo '<li><a href="' . site_url('brand/' . $brand->slug) . '" class="line-height-lg">' . $brand->name . '</a></li>';
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <?php
                                            } elseif (count($brands) > 20) {
                                                ?>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <div class="mega-menu-content">
                                                            <div class="row">
                                                                <?php
                                                                $brands_chunks = array_chunk($brands, ceil(count($brands) / 4));
                                                                foreach ($brands_chunks as $brands) {
                                                                    ?>
                                                                    <div class="col-sm-3">
                                                                        <ul class="list-unstyled">
                                                                            <?php
                                                                            foreach ($brands as $brand) {
                                                                                echo '<li><a href="' . site_url('brand/' . $brand->slug) . '" class="line-height-lg">' . $brand->name . '</a></li>';
                                                                            }
                                                                            ?>
                                                                        </ul>
                                                                    </div>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <?php
                                            }
                                            ?>
                                        </li>
                                        <?php if (!$shop_settings->hide_price) { ?>
                                            <li class="<?= $m == 'cart_ajax' && $v == 'index' ? 'active' : ''; ?>"><a href="<?= site_url('cart'); ?>"><?= lang('shopping_cart'); ?></a></li>
                                            <li class="<?= $m == 'cart_ajax' && $v == 'checout' ? 'active' : ''; ?>"><a href="<?= site_url('cart/checkout'); ?>"><?= lang('checkout'); ?></a></li>
                                        <?php } ?>
                                        <li class="dropdown-divider"></li>
                                        <li class=""><a class="page-scroll" href="#home"><?= lang('home'); ?></a></li>
                                        <li class=""><a class="page-scroll" href="#coffee">Ubicaciones</a></li>
                                        <li class=""><a class="page-scroll" href="#about">Nosotros</a></li>
                                        <li class=""><a class="page-scroll" href="#gallery">Categor&iacute;as</a></li>
                                    <?php    if (!empty($featured_products)) {; ?>
                                        <li class=""><a class="page-scroll" href="#featured">Destacados</a></li>
                                    <?php    } ?>
                                        <li class=""><a class="page-scroll" href="#upcoming">Pr&oacute;ximamente</a></li>
                                        <li class=""><a class="page-scroll" href="#contact">Cont&aacute;ctanos</a></li>
                                        <li class="dropdown-divider"></li>
                                        <?php
                                        if (!empty($pages)) {
                                            foreach ($pages as $page) {
                                                echo '<li class=""><a href="' . site_url('page/' . $page->slug) . '">' . $page->name . '</a></li>';
                                            }
                                        }
                                        ?>
                                        <!--                <form class="form-inline my-2 my-lg-0">
                                                            <input class="form-control mr-sm-2" type="text" placeholder="Search..." aria-label="Search">
                                                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                                        </form>-->
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <div class="<?= (!$shop_settings->hide_price) ? 'col-sm-8 col-md-6 col-md-offset-3' : 'col-md-6 col-md-offset-6'; ?> search-box">
                                        <?= shop_form_open('products', 'id="product-search-form"'); ?>
                                        <div class="input-group">
                                            <input name="query" type="text" class="form-control" id="product-search" aria-label="Buscar Productos..." placeholder="Buscar Productos...">
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-default btn-search"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                        <?= form_close(); ?>
                                    </div>
                                </div>
                            </nav> 
                        </div>
                    </div> 
                </div> 
            </div>  