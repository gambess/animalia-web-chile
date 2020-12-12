<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- BEGIN HEADER.php -->
<?php if (!empty($slider)) { ?>
    <div id="home" class="header_slider slider-active">
        <?php
        $sr = 0;
        foreach ($slider as $slide) {
            if (!empty($slide->image)) {
                echo '<div class="single_slider bg_cover d-flex align-items-center" style="background-image: url(' . base_url('assets/uploads/' . $slide->image) . ')">';
                if (!empty($slide->caption)) {
                    echo
                    '<div class="container">'
                    . '<div class="row">'
                    . '<div class="col-md-9">'
                    . '<div class="slider_content">'
                    . '<h2 class="slider_title">' . $slide->caption . '</h2>'
                    . '<p class="wow fadeInUp">' . $slide->caption . '</p>'
                    ;
                }
                if (!empty($slide->link)) {
                    echo '<a href="' . $slide->link . '" class="main-btn">Enlace ' . $sr . ' </a>'
                    ;
                }
                if (!empty($slide->caption)) {
                    echo '</div>'
                    . '</div>'
                    . '</div>'
                    . '</div>'
                    ;
                }
                echo '</div>'
                ;
            }
            $sr++;
        }
        ?>
    </div>

<?php } ?>
</section>
<section id="coffee" class="coffee_area pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-30">
                    <h4 class="title">marcas</h4>
                    <span class="line">
                        <span class="box"></span>
                    </span>
                </div> 
            </div>
        </div> 
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single_coffee text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.2s">
                    <div class="coffee_image">
                        <img src="<?= $assets; ?>images/express.jpg" alt="coffee">
                    </div>
                    <div class="coffee_content">
                        <h4 class="coffee_title">Animalia Express</h4>
                        <p>Av. Diego Portales 2202, abierto de 10hrs a 21hrs de Lunes a Domingo .</p>
                    </div>
                </div> 
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single_coffee text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <div class="coffee_image">
                        <img src="<?= $assets; ?>images/azapa.jpg" alt="coffee">
                    </div>
                    <div class="coffee_content">
                        <h4 class="coffee_title">Animalia Azapa</h4>
                        <p>Calle Sofia SN km 3 1/2, abierto de 10hrs a 21hrs de Lunes a Domingo .</p>
                    </div>
                </div> 
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single_coffee text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.8s">
                    <div class="coffee_image">
                        <img src="<?= $assets; ?>images/web.jpg" alt="coffee">
                    </div>
                    <div class="coffee_content">
                        <h4 class="coffee_title">Animalia Web</h4>
                        <p>Abierto 24 horas al día, los 7 dias de la semana durante todo el año.</p>
                    </div>
                </div> 
            </div>
        </div> 
    </div> 
</section>


<section id="about" class="about_area pt-120 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_title text-center pb-10">
                    <h4 class="title">horarios y servicios</h4>
                    <span class="line">
                        <span class="box"></span>
                    </span>
                </div> 
                <div class="about_content mt-45 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <h4 class="about_title">boutique</h4>
                    <p>Animalia, Express, Azapa, Animalia Web, Animalia Fono Pedido, Animalia Express, Animalia Azapa, Animalia Web. </p>
                    <div class="d-flex flex-wrap">
                        <div class="mt-45">
                            <h4 class="footer_title">horarios de atención</h4>
                            <ul>
                                <li>Lunes - Viernes: 09.00 A.M - 09.00 P.M</li>
                                <li>Sábados: 10.00 A.M - 08.00 P.M</li>
                                <!--<li>Domingos: 10.00 A.M - 03.00 P.M</li>-->
                                <!--                                <li>Half-Holidays: 08.00 A.M - 02.00 P.M</li>
                                                                <li>Twe: 08.00 A.M - 02.00 P.M</li>-->
                            </ul>
                        </div> 
                    </div>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/Animalia-110563507299462"><i class="lni lni-facebook-filled"></i></a></li>
                        <!--<li><a href="#"><i class="lni lni-twitter-original"></i></a></li>-->
                        <li><a href="https://www.instagram.com/animalia_arica/"><i class="lni lni-instagram-original"></i></a></li>
                        <!--<li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>-->
                    </ul>
                </div>
                <div class="mt-40">
                    <h5 class="footer_title">direcci&oacute;n</h5>
                    <p class="text">Av. Diego Portales 2202, Arica, Arica y Parinacota, Chile</p>
                    <a class="contact-link" href="#">ventas@animaliaweb.cl</a>
                </div> 
            </div>
        </div> 
    </div>
    <br />
    <br />
    <div class="contact_map">
        <div class="gmap_canvas">
            <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.013239536126!2d-70.29651308510778!3d-18.483059487430825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915aa9cbd5497689%3A0xe7262007a2d38d6a!2sAv.%20Diego%20Portales%202202%2C%20Arica%2C%20Arica%20y%20Parinacota!5e0!3m2!1ses!2scl!4v1606509498884!5m2!1ses!2scl" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>
</section>

<section id="gallery" class="gallery_area pt-120 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-30">
                    <h4 class="title">especialidades</h4>
                    <span class="line">
                        <span class="box"></span>
                    </span>
                </div> 
            </div>
        </div> 
    </div> 
    <div class="container">
        <div class="row gallery_active">
            
            <div class="col-md-6 col-sm-12">
                <div class="single_gallery mt-30">
                    <div class="gallery_image">
                        <img src="<?= $assets; ?>images/gallery-5.jpg" alt="gallery">
                    </div>
                    <div class="gallery_content">
                        <h5 class="gallery_title">todo gatos</h5>
                        <p>Lorem ipsum dolor sit amet, consets adipscing elitr, sed diam nonumy eirmod tempo invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero.</p>
                    </div>
                </div> 
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="single_gallery mt-30">
                    <div class="gallery_image">
                        <img src="<?= $assets; ?>images/gallery-1.jpg" alt="gallery">
                    </div>
                    <div class="gallery_content">
                        <h5 class="gallery_title">todo perros</h5>
                        <p>Lorem ipsum dolor sit amet, consets adipscing elitr, sed diam nonumy eirmod tempo invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero.</p>
                    </div>
                </div> 
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="single_gallery mt-30">
                    <div class="gallery_image">
                        <img src="<?= $assets; ?>images/gallery-2.jpg" alt="gallery">
                    </div>
                    <div class="gallery_content">
                        <h5 class="gallery_title">todo accesorios</h5>
                        <p>Lorem ipsum dolor sit amet, consets adipscing elitr, sed diam nonumy eirmod tempo invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero.</p>
                    </div>
                </div> 
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="single_gallery mt-30">
                    <div class="gallery_image">
                        <img src="<?= $assets; ?>images/gallery-4.jpg" alt="gallery">
                    </div>
                    <div class="gallery_content">
                        <h5 class="gallery_title">todo cl&iacute;nica</h5>
                        <p>Lorem ipsum dolor sit amet, consets adipscing elitr, sed diam nonumy eirmod tempo invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero.</p>
                    </div>
                </div> 
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="single_gallery mt-30">
                    <div class="gallery_image">
                        <img src="<?= $assets; ?>images/gallery-3.jpg" alt="gallery">
                    </div>
                    <div class="gallery_content">
                        <h5 class="gallery_title">todo arenas</h5>
                        <p>Lorem ipsum dolor sit amet, consets adipscing elitr, sed diam nonumy eirmod tempo invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero.</p>
                    </div>
                </div> 
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="single_gallery mt-30">
                    <div class="gallery_image">
                        <img src="<?= $assets; ?>images/gallery-6.jpg" alt="gallery">
                    </div>
                    <div class="gallery_content">
                        <h5 class="gallery_title">todo ofertas</h5>
                        <p>Lorem ipsum dolor sit amet, consets adipscing elitr, sed diam nonumy eirmod tempo invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero.</p>
                    </div>
                </div> 
            </div>
        </div> 
    </div> 
</section>

<section id="featured" class="customer_area pt-120">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section_title text-center pb-30">
                    <h4 class="title"><?= lang('featured_products'); ?></h4>
                    <span class="line">
                        <span class="box"></span>
                    </span>
                </div>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
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
                        foreach (array_chunk($featured_products, 4) as $fps) {
                            ?>
                            <div class="carousel-item <?= empty($r) ? 'active' : ''; ?>">
                                <div class="row">
                                    <?php
                                    foreach ($fps as $fp) {
                                        ?>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
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
                                                <br />
                                                <div class="thumb-content">
                                                    <h5><a href="<?= site_url('product/' . $fp->slug); ?>"><?= $fp->name; ?></a></h5>
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
                                                    <a href="<?= site_url('category/' . $fp->category_slug); ?>" class="link"><?= $fp->category_name; ?></a>
                                                    <?php
                                                    if ($fp->brand_name) {
                                                        ?>
                                                        <span class="link">-</span>
                                                        <a href="<?= site_url('brand/' . $fp->brand_slug); ?>" class="link"><?= $fp->brand_name; ?></a>
                                                        <?php
                                                    }
                                                    ?>
                                                    <br />
                                                    <div class="star-rating text-center">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </div>
                                                    <br />
                                                    <?php if (!$shop_settings->hide_price) { ?>
                                                        <div class="text-center">                                                        
                                                            <a href="#" data-id="<?= $fp->id; ?>" class="btn btn-primary center-block"><i class="fa fa-shopping-cart"></i> <?= lang('add_to_cart'); ?></a>                                                    
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
                    if (count($featured_products) > 4) {
                        ?>
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
<br />
<br />
<br />
<br />

<section id="counter" class="counter_area pt-50 pb-95 bg_cover text-center" style="background-image: url(<?= $assets; ?>images/counter_bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="single_counter mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                    <span class="count"><span class="counter">36546</span></span>
                    <p>Productos Despachados</p>
                </div> 
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="single_counter mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <span class="count"><span class="counter">1600</span></span>
                    <p>Tipos de Productos</p>
                </div> 
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="single_counter mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
                    <span class="count"><span class="counter">1650</span></span>
                    <p>Clientes</p>
                </div> 
            </div>
        </div> 
    </div> 
</section>


<section id="customer" class="customer_area pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-30">
                    <h4 class="title">siempre es bueno saber que...</h4>
                    <span class="line">
                        <span class="box"></span>
                    </span>
                </div> 
            </div>
        </div> 
        <div class="row customer_active">
            <div class="col-lg-6">
                <div class="single_customer d-sm-flex align-items-center mt-30">
                    <div class="customer_image">
                        <img src="<?= $assets; ?>images/customer-1.jpg" alt="customer">
                    </div>
                    <div class="customer_content media-body">
                        <div class="customer_content_wrapper media-body">
                            <h5 class="author_name">Pamela L&oacute;pez</h5>
                            <span class="sub_title">Dog Lover</span>
                            <p>Lorem ipsum dolor sit amdi scing elitr, sed diam nonumy eirmo tem invidunt ut labore etdolo magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                            <ul class="star">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-lg-6">
                <div class="single_customer d-sm-flex align-items-center mt-30">
                    <div class="customer_image">
                        <img src="<?= $assets; ?>images/customer-2.jpg" alt="customer">
                    </div>
                    <div class="customer_content media-body">
                        <div class="customer_content_wrapper media-body">
                            <h5 class="author_name">Cristina Suarez</h5>
                            <span class="sub_title">Cat Lover</span>
                            <p>Lorem ipsum dolor sit amdi scing elitr, sed diam nonumy eirmo tem invidunt ut labore etdolo magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                            <ul class="star">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-lg-6">
                <div class="single_customer d-sm-flex align-items-center mt-30">
                    <div class="customer_image">
                        <img src="<?= $assets; ?>images/customer-3.jpg" alt="customer">
                    </div>
                    <div class="customer_content media-body">
                        <div class="customer_content_wrapper media-body">
                            <h5 class="author_name">Juan y Ana</h5>
                            <span class="sub_title">Cat Lovers</span>
                            <p>Lorem ipsum dolor sit amdi scing elitr, sed diam nonumy eirmo tem invidunt ut labore etdolo magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                            <ul class="star">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-lg-6">
                <div class="single_customer d-sm-flex align-items-center mt-30">
                    <div class="customer_image">
                        <img src="<?= $assets; ?>images/customer-4.jpg" alt="customer">
                    </div>
                    <div class="customer_content media-body">
                        <div class="customer_content_wrapper media-body">
                            <h5 class="author_name">Francisca S&aacute;nchez</h5>
                            <span class="sub_title">Cat Lovers</span>
                            <p>Lorem ipsum dolor sit amdi scing elitr, sed diam nonumy eirmo tem invidunt ut labore etdolo magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                            <ul class="star">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-lg-6">
                <div class="single_customer d-sm-flex align-items-center mt-30">
                    <div class="customer_image">
                        <img src="<?= $assets; ?>images/customer-5.jpg" alt="customer">
                    </div>
                    <div class="customer_content media-body">
                        <div class="customer_content_wrapper media-body">
                            <h5 class="author_name">Familia Garcia</h5>
                            <span class="sub_title">Dog Lovers</span>
                            <p>Lorem ipsum dolor sit amdi scing elitr, sed diam nonumy eirmo tem invidunt ut labore etdolo magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                            <ul class="star">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-lg-6">
                <div class="single_customer d-sm-flex align-items-center mt-30">
                    <div class="customer_image">
                        <img src="<?= $assets; ?>images/customer-6.jpg" alt="customer">
                    </div>
                    <div class="customer_content media-body">
                        <div class="customer_content_wrapper media-body">
                            <h5 class="author_name">Isabela G&oacute;mez</h5>
                            <span class="sub_title">Dog Lover</span>
                            <p>Lorem ipsum dolor sit amdi scing elitr, sed diam nonumy eirmo tem invidunt ut labore etdolo magna aliquyam erat, sed diam voluptua. At vero eos et accusam.</p>
                            <ul class="star">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
        </div> 
    </div> 
</section>

<section id="upcoming" class="upcoming_area pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-30">
                    <h4 class="title">pr&oacute;ximamente</h4>
                    <span class="line">
                        <span class="box"></span>
                    </span>
                </div> 
            </div>
        </div> 
        <div class="row">
            <div class="col-lg-6">
                <div class="single_upcoming mt-30 d-sm-flex align-items-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.3s">
                    <div class="upcoming_image">
                        <img src="<?= $assets; ?>images/upcoming-3.jpg" alt="upcoming">
                    </div>
                    <div class="upcoming_content media-body">
                        <h4 class="upcoming_title"><a href="#">Lorem ipsum dolor sit amdi scing elitr diam nonumy</a></h4>
                        <p>Lorem ipsum dolor sit amdi scing elitr, sed diam nonumy eirmo tem invidunt ut labore etdolo magna aliquyam erat.</p>
                    </div>
                </div> 
            </div>
            <div class="col-lg-6">
                <div class="single_upcoming mt-30 d-sm-flex align-items-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.6s">
                    <div class="upcoming_image">
                        <img src="<?= $assets; ?>images/upcoming-2.jpg" alt="upcoming">
                    </div>
                    <div class="upcoming_content media-body">
                        <h4 class="upcoming_title"><a href="#">Lorem ipsum dolor sit amdi scing elitr diam nonumy</a></h4>
                        <p>Lorem ipsum dolor sit amdi scing elitr, sed diam nonumy eirmo tem invidunt ut labore etdolo magna aliquyam erat.</p>
                    </div>
                </div> 
            </div>
            <div class="col-lg-6">
                <div class="single_upcoming mt-30 d-sm-flex align-items-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.3s">
                    <div class="upcoming_image">
                        <img src="<?= $assets; ?>images/upcoming-4.jpg" alt="upcoming">
                    </div>
                    <div class="upcoming_content media-body">
                        <h4 class="upcoming_title"><a href="#">Lorem ipsum dolor sit amdi scing elitr diam nonumy</a></h4>
                        <p>Lorem ipsum dolor sit amdi scing elitr, sed diam nonumy eirmo tem invidunt ut labore etdolo magna aliquyam erat.</p>
                    </div>
                </div> 
            </div>
            <div class="col-lg-6">
                <div class="single_upcoming mt-30 d-sm-flex align-items-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.6s">
                    <div class="upcoming_image">
                        <img src="<?= $assets; ?>images/upcoming-1.jpg" alt="upcoming">
                    </div>
                    <div class="upcoming_content media-body">
                        <h4 class="upcoming_title"><a href="#">Lorem ipsum dolor sit amdi scing elitr diam nonumy</a></h4>
                        <p>Lorem ipsum dolor sit amdi scing elitr, sed diam nonumy eirmo tem invidunt ut labore etdolo magna aliquyam erat.</p>
                    </div>
                </div> 
            </div>
        </div> 
    </div> 
</section>

<section id="contact" class="contact_area">
    <div class="contact_form pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-30">
                        <h4 class="title">Contáctanos</h4>
                        <span class="line">
                            <span class="box"></span>
                        </span>
                    </div> 
                </div>
            </div> 
            <form id="contact-form" action="<?= $assets; ?>contact.php" method="post">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single_form mt-30">
                            <input name="name" type="text" placeholder="Nombre">
                        </div> 
                    </div>
                    <div class="col-lg-6">
                        <div class="single_form mt-30">
                            <input name="subject" type="email" placeholder="Celular">
                        </div> 
                    </div>
                    <div class="col-lg-12">
                        <div class="single_form mt-30">
                            <input name="email" type="text" placeholder="Email">
                        </div> 
                    </div>
                    <div class="col-lg-12">
                        <div class="single_form mt-30">
                            <textarea name="message" placeholder="Mensaje"></textarea>
                        </div> 
                    </div>
                    <p class="form-message"></p>
                    <div class="col-lg-12">
                        <div class="single_form text-center mt-30">
                            <button class="main-btn">Envíar</button>
                        </div> 
                    </div>
                </div> 
            </form>
        </div> 
    </div> 
</section>