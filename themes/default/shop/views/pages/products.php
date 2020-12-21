<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <div id="hero-area" class="hero-area-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="contents">
                        <h5 class="script-font wow fadeInUp">nuestros productos</h5>
                        <div class="header-button wow fadeInUp">
                            <div class="product-search">
                                <div class="product-search-form">
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="¿Que buscas?" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                                    </form>
                                </div>
                                <span class="clearfix"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-house-user"></i> Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-barcode"></i> Productos</li>
        </ol>
    </nav>
</section>

<section class="customer_area pt-120">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xs-12">
                <div class="container">
                    <div class="section_title text-center pb-30">
                        <h4 class="title"><?= strtolower(lang('featured_products')); ?></h4>
                        <span class="line">
                            <span class="box"></span>
                        </span>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                                <!-- Carousel indicators -->
                                <!--                    <ol class="carousel-indicators">
                                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                                    </ol>   -->
                                <!-- Wrapper for carousel items -->
                                <div class="carousel-inner">
                                    <?php
                                    $r = 0;
                                    foreach (array_chunk($side_featured, 4) as $fps) {
                                        ?>
                                        <div class="carousel-item <?= empty($r) ? 'active' : ''; ?>">
                                            <div class="row">
                                                <?php
                                                foreach ($fps as $fp) {
                                                    ?>
                                                    <div class="col-sm-3">
                                                        <div class="thumb-wrapper">
                                                            <a href="<?= site_url('category/' . $fp->category_slug); ?>" class="link"><?= $fp->category_name; ?></a>
                                                            <?php
                                                            if ($fp->promotion) {
                                                                ?>
                                                                <span class="badge badge-right theme"><?= lang('promo'); ?></span>
                                                                <?php
                                                            }
                                                            ?>
                                                            <div class="img-box">
                                                                <img src="<?= base_url('assets/uploads/' . $fp->image); ?>" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="thumb-content">
                                                                <h6><a href="<?= site_url('product/' . $fp->slug); ?>"><?= $fp->name; ?></a></h6>
                                                                <?php
                                                                if ($fp->brand_name) {
                                                                    ?>
                                                                    <a href="<?= site_url('brand/' . $fp->brand_slug); ?>" class="link"><?= $fp->brand_name; ?></a>
                                                                    <?php
                                                                }
                                                                ?>
                                                                <div class="star-rating text-center">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <?php if (!$shop_settings->hide_price) { ?>
                                                                    <p class="item-price">
                                                                        <?php
                                                                        echo '<!--<strike>$400.00</strike>-->';
                                                                        if ($fp->promotion) {
                                                                            echo '<span>' . $this->sma->convertMoney($fp->promo_price) . '</span><br>';
                                                                        } else {
                                                                            echo '<span>' . $this->sma->convertMoney(isset($fp->special_price) && !empty(isset($fp->special_price)) ? $fp->special_price : $fp->price) . '</span><br>';
                                                                        }
                                                                        ?>
                                                                    </p>
                                                                <?php } ?>


                                                                <?php if (!$shop_settings->hide_price) { ?>
                                                                    <div class="justify-content-center">                                                        
                                                                        <a href="#" data-id="<?= $fp->id; ?>" class="btn custom-btn" alt=" <?= lang('add_to_cart'); ?>" title=" <?= lang('add_to_cart'); ?>"><i class="fa fa-cart-plus"></i></a>                                                    
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                        $r++;
                                    }
                                    ?>
                                </div>
                                <?php
                                if (count($side_featured) > 4) {
                                    ?>
                                    <!-- Carousel controls -->
                                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only"><i class="fa fa-angle-double-left"></i></span>
                                    </a>
                                    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only"><i class="fa fa-angle-double-right"></i></span>
                                    </a>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4 col-xs-12 blog-sidebar-column">
                <aside class="col-md-12 single-sidebar-widget author-widget no-padding wow animated fadeInUp" data-wow-delay=".2s">

                </aside>

                <aside class="col-md-12 single-sidebar-widget flickr-widget no-padding wow animated fadeInUp" data-wow-delay=".4s">

                </aside>

                <aside class="col-md-12 single-sidebar-widget flickr-widget no-padding wow animated fadeInUp" data-wow-delay=".6s">
                    <div class="sidebar-widget-title">
                        <div class="margin-top-md">
                            <h4 class="title text-bold"><span><?= lang('filters'); ?></span></h4>
                            <ul class="list-group">
                                <?php
                                if (isset($filters['category']) && !empty($filters['category'])) {
                                    ?>
                                    <li class="list-group-item">
                                        <span class="close reset_filters_category">&times;</span>
                                        <?= $filters['category']->name; ?>
                                    </li>
                                    <?php
                                }
                                ?>
                                <?php
                                if (isset($filters['brand']) && !empty($filters['brand'])) {
                                    ?>
                                    <li class="list-group-item">
                                        <span class="close reset_filters_brand">&times;</span>
                                        <?= $filters['brand']->name; ?>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="margin-bottom-xl">
                            <h5 class="title text-bold"><span><?= lang('availability'); ?></span></h5>
                            <div class="checkbox"><label><input type="checkbox" id="in-stock"><span> <?= lang('in_stock'); ?></span></label></div>
                        </div>
                        <div class="margin-bottom-xl">
                            <h5 class="title text-bold"><span><?= lang('featured'); ?></span></h5>
                            <div class="checkbox"><label><input type="checkbox" id="featured"<?= $this->input->get('featured') == 'yes' ? ' checked' : ''; ?>><span> <?= lang('featured'); ?></span></label></div>
                        </div>
                        <?php if ($isPromo) { ?>
                            <div class="margin-bottom-xl">
                                <h5 class="title text-bold"><span><?= lang('promotions'); ?></span></h5>
                                <div class="checkbox"><label><input type="checkbox" id="promotions"<?= $this->input->get('promo') == 'yes' ? ' checked' : ''; ?>><span> <?= lang('promotions'); ?></span></label></div>
                            </div>
                        <?php } ?>
                        <?php if (!$shop_settings->hide_price) { ?>
                            <div class="margin-bottom-xl">
                                <h5 class="title text-bold"><span><?= lang('price_range'); ?></span></h5>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <input type="text" name="min-price" id="min-price" value="" placeholder="Min" class="form-control"></input>
                                    </div>
                                    <div class="col-xs-6">
                                        <input type="text" name="max-price" id="max-price" value="" placeholder="Max" class="form-control"></input>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>


                        <div class="margin-bottom-xl">
                            <div class="title"><span>Brand & Categories</span></div>
                            <?php
                            $fbs[''] = lang('brands');
                            foreach ($brands as $fb) {
                                $fbs[$fb->id] = $fb->name;
                            }
                            ?>
                            <?= form_dropdown('brands', $fbs, set_value('brands'), 'class="form-control selectpicker mobile-device" style="width:100%;"'); ?>
                            <div class="margin-top-md">
                                <?php
                                $fcs[''] = lang('categories');
                                foreach ($categories as $fc) {
                                    $fcs[$fc->id] = $fc->name;
                                    if ($fc->subcategories) {
                                        foreach ($fc->subcategories as $fsc) {
                                            $fcs[$fsc->id] = $fsc->name;
                                        }
                                    }
                                }
                                ?>
                                <?= form_dropdown('categories', $fcs, set_value('categories'), 'class="form-control selectpicker mobile-device" style="width:100%;"'); ?>
                            </div>
                        </div>
                    </div>
                </aside>
                
                <aside class="col-md-12 single-sidebar-widget flickr-widget no-padding wow animated fadeInUp" data-wow-delay=".8s">
                    <div class="sidebar-widget-title">

                    </div>

                </aside>
                <!--                <aside class="col-md-12 single-sidebar-widget flickr-widget no-padding wow animated fadeInUp" data-wow-delay=".4s">
                                    <div class="sidebar-widget-title">
                
                                    </div>
                
                                </aside>
                                <aside class="col-md-12 single-sidebar-widget flickr-widget no-padding wow animated fadeInUp" data-wow-delay=".4s">
                                    <div class="sidebar-widget-title">
                
                                    </div>
                
                                </aside>-->
            </div>

        </div>
    </div>
</section>
<br />
<br />
