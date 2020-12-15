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
<section id="client" class="customer_area pt-50 pb-95 bg_cover text-center">
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
        <div class="row client-active">
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/acana" alt="Acana">
                        <img src="<?= $assets; ?>images/acana.png" alt="Client">
                    </a>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/animal-planet" alt="Animal Planet">
                        <img src="<?= $assets; ?>images/animalplanet.png" alt="Client">
                    </a>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/animal-factory" alt="Animal Factory">
                        <img src="<?= $assets; ?>images/animalfactory.png" alt="Client">
                    </a>
                </div> 
            </div>            
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/bayer" alt="Bayer">
                        <img src="<?= $assets; ?>images/bayer.png" alt="Client">
                    </a>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/beaphar" alt="Beaphar">
                        <img src="<?= $assets; ?>images/beaphar.png" alt="Client">
                    </a>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/bil-jac" alt="Bil Jac">
                        <img src="<?= $assets; ?>images/biljac.png" alt="Client">
                    </a>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/bravecto" alt="Bravecto">
                        <img src="<?= $assets; ?>images/bravecto.png" alt="Client">
                    </a>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/brouwer" alt="Brouwer">
                        <img src="<?= $assets; ?>images/brouwer.png" alt="Client">
                    </a>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/cat-chow" alt="Cat Chow">
                        <img src="<?= $assets; ?>images/catchow.png" alt="Client">
                    </a>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/dog-buffet" alt="Dog Buffet">
                        <img src="<?= $assets; ?>images/dogbuffet.png" alt="Client">
                    </a>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/doguito" alt="Doguito">
                        <img src="<?= $assets; ?>images/doguitos.png" alt="Client">
                    </a>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/doko" alt="Doko">
                        <img src="<?= $assets; ?>images/doko.png" alt="Client">
                    </a>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/eukanuba" alt="Eukanuba">
                        <img src="<?= $assets; ?>images/eukanuba.png" alt="Client">
                    </a>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/felix" alt="Felix">
                        <img src="<?= $assets; ?>images/felix.png" alt="Client">
                    </a>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/master-dog" alt="Master Dog">
                        <img src="<?= $assets; ?>images/masterdog.png" alt="Client">
                    </a>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/topk9" alt="Topk9">
                        <img src="<?= $assets; ?>images/topk9.png" alt="Client">
                    </a>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single-client">
                    <a href="/brand/royal-canin" alt="Royal Canin">
                        <img src="<?= $assets; ?>images/royalcanin.png" alt="Client">
                    </a>
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
                    <br />
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

<?php    if (!empty($featured_products)) {; ?>

<section id="featured" class="customer_area pt-120">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section_title text-center pb-30">
                    <h4 class="title"><?= strtolower(lang('featured_products')); ?></h4>
                    <span class="line">
                        <span class="box"></span>
                    </span>
                </div>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
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
                                                <div class="thumb-content">
                                                    <h5><a href="<?= site_url('product/' . $fp->slug); ?>"><?= $fp->name; ?></a></h5>
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
                                                            <a href="#" data-id="<?= $fp->id; ?>" class="btn custom-btn" alt=" <?= lang('add_to_cart'); ?>" title=" <?= lang('add_to_cart'); ?>"><i class="fa fa-shopping-cart"></i></a>                                                    
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
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only"><i class="fa fa-angle-left"></i></span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only"><i class="fa fa-angle-right"></i></span>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
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
                    <h4 class="title"><i class="lni lni-bulb"></i> ¿ sabias qu&eacute;... ?</h4>
                    <span class="line">
                        <span class="box"></span>
                    </span>
                </div> 
            </div>
        </div> 
        <div class="row customer_active">
            <div class="col-lg-6">
                <div class="single_customer d-sm-flex align-items-center mt-30">
                    <div class="single-testimonial">
                        <div class="single-testimonial">
                            <div class="content-wrapper ">
                                <div class="tip text-white">
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo duis augue commodo neque auctor nisl, libero nunc, egestas. Pellentesque senectus.</p>
                                    <div class="quote">
                                        <i class="lni lni-quotation"></i>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="image">
                                        <img src="<?= $assets; ?>images/testimonial-1.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h5>Raz del Valle</h5>
                                        <p>Experto Canina</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div> 
            </div>
            <div class="col-lg-6">
                <div class="single_customer d-sm-flex align-items-center mt-30">
                    <div class="single-testimonial">
                        <div class="single-testimonial">
                            <div class="content-wrapper ">
                                <div class="tip text-white">
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo duis augue commodo neque auctor nisl, libero nunc, egestas. Pellentesque senectus.</p>
                                    <div class="quote">
                                        <i class="lni lni-quotation"></i>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="image">
                                        <img src="<?= $assets; ?>images/testimonial-2.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h5>Christiano Viedo</h5>
                                        <p>Experto Canina</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-lg-6">
                <div class="single_customer d-sm-flex align-items-center mt-30">
                    <div class="single-testimonial">
                        <div class="single-testimonial">
                            <div class="content-wrapper ">
                                <div class="tip text-white">
                                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Leo duis augue commodo neque auctor nisl, libero nunc, egestas. Pellentesque senectus.</p>
                                    <div class="quote">
                                        <i class="lni lni-quotation"></i>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="image">
                                        <img src="<?= $assets; ?>images/testimonial-3.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h5>Mili Petric</h5>
                                        <p>Estilista Canina</p>
                                    </div>
                                </div>
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
                        <h4 class="title">contáctanos</h4>
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