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
        <link href="<?= $assets; ?>css/slick.css" rel="stylesheet">
        <link href="<?= $assets; ?>css/LineIcons.css" rel="stylesheet">
        <link href="<?= $assets; ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= $assets; ?>css/default.css" rel="stylesheet">
        <link href="<?= $assets; ?>css/style.css" rel="stylesheet">
        
        <link href="<?= $assets; ?>css/libs.min.css" rel="stylesheet">
        <link href="<?= $assets; ?>css/styles.min.css" rel="stylesheet">


        <meta property="og:url" content="<?= isset($product) && !empty($product) ? site_url('product/' . $product->slug) : site_url(); ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?= $page_title; ?>" />
        <meta property="og:description" content="<?= $page_desc; ?>" />
        <meta property="og:image" content="<?= isset($product) && !empty($product) ? base_url('assets/uploads/' . $product->image) : base_url('assets/uploads/logos/' . $shop_settings->logo); ?>" />
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
                                    <img alt="<?= $shop_settings->shop_name; ?>" src="<?= base_url('assets/uploads/logos/' . $shop_settings->logo); ?>" class="img-responsive" />
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
                                                    <a href="#"class="dropdown-toggle" id="dropdownLogin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
                                        <li class=""><a class="page-scroll" href="#featured">Destacados</a></li>
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
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <div class="col-md-8 col-lg-9 margin-top-lg">
                                            <div class="row">
                                        
                                                <div class="<?= (!$shop_settings->hide_price) ? 'col-md-8 col-lg-6 offset-md-3' : 'col-md-8 offset-md-3'; ?> search-box">
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
                                    </div>
                                </div>
                            </nav> 
                        </div>
                    </div> 
                </div> 
            </div>  