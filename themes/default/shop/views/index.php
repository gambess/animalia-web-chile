<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if (!empty($slider)) { ?>
        <div id="home" class="header_slider slider-active">
            <?php
            $sr = 0;
            foreach ($slider as $slide) {
                if (!empty($slide->image)) {
                    echo '<div class="single_slider bg_cover d-flex align-items-center" style="background-image: url(' . base_url('assets/uploads/' . $slide->image) . ')">';
                    if (!empty($slide->caption)) {
                        echo '<div class="container"><div class="row"><div class="col-md-9"><div class="slider_content"><!--<h2 class="slider_title">Experience Authentic Coffees</h2>--><p class="wow fadeInUp">'
                        . $slide->caption
                        . '</p><!--<a href="#about" class="main-btn">Learn More</a>--></div></div></div></div>';
                    }
                    echo '</div>';
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
                    <h4 class="title">Nuestras Sucursales</h4>
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
                        <p>Ubicada en Av. Diego Portales 2202, abierto de 10hrs a 21hrs de Lunes a Domingo .</p>
                    </div>
                </div> 
            </div>
            <div class="col-lg-4 col-md-7 col-sm-9">
                <div class="single_coffee text-center mt-30 wow fadeInUpBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <div class="coffee_image">
                        <img src="<?= $assets; ?>images/rural.jpg" alt="coffee">
                    </div>
                    <div class="coffee_content">
                        <h4 class="coffee_title">Animalia Rural</h4>
                        <p>Ubicada en Calle Sofia SN km 3 1/2, abierto de 10hrs a 21hrs de Lunes a Domingo .</p>
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
                        <p>Puedes comprar y agendar el despacho o recogida de tus productos 24 horas al día, los 7 dias de la semana durante todo el año .</p>
                    </div>
                </div> 
            </div>
        </div> 
    </div> 
</section>


<section id="about" class="about_area pt-120 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-10">
                    <h4 class="title">Nuestro Compromiso</h4>
                    <span class="line">
                        <span class="box"></span>
                    </span>
                </div> 
            </div>
        </div> 
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about_image mt-50 wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <img src="<?= $assets; ?>images/about.jpg" alt="about">
                </div> 
            </div>
            <div class="col-lg-6">
                <div class="about_content mt-45 wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <h4 class="about_title">Animalia</h4>
                    <p>Animalia, Soluciones Veterinarias Integrales consetetur sadipscing elitr, sed diam aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr. <br> <br> Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                    <ul class="social">
                        <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul>
                </div> 
            </div>
        </div> 
    </div> 
</section>


<section id="counter" class="counter_area pt-50 pb-95 bg_cover text-center" style="background-image: url(<?= $assets; ?>images/counter_bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="single_counter mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.2s">
                    <span class="count"><span class="counter">36546</span></span>
                    <p>Coffee Served</p>
                </div> 
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="single_counter mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.5s">
                    <span class="count"><span class="counter">28</span></span>
                    <p>Type of Coffees</p>
                </div> 
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="single_counter mt-30 wow fadeIn" data-wow-duration="1.3s" data-wow-delay="0.8s">
                    <span class="count"><span class="counter">12</span></span>
                    <p>Team Members</p>
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
                    <h4 class="title">Customers Feedback</h4>
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
                            <h5 class="author_name">Justyna Helen</h5>
                            <span class="sub_title">Coffee Lover</span>
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
                            <h5 class="author_name">Fajar Siddiq</h5>
                            <span class="sub_title">Coffee Enthusiast</span>
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
                            <h5 class="author_name">Rob Hope</h5>
                            <span class="sub_title">Enthusiasts</span>
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


<!--<section id="gallery" class="gallery_area pt-120 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-30">
                    <h4 class="title">Coffee Gallery</h4>
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
                        <img src="<?= $assets; ?>images/gallery-1.jpg" alt="gallery">
                    </div>
                    <div class="gallery_content">
                        <h5 class="gallery_title">Coffee 1</h5>
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
                        <h5 class="gallery_title">Coffee 2</h5>
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
                        <h5 class="gallery_title">Coffee 3</h5>
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
                        <h5 class="gallery_title">Coffee 4</h5>
                        <p>Lorem ipsum dolor sit amet, consets adipscing elitr, sed diam nonumy eirmod tempo invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero.</p>
                    </div>
                </div> 
            </div>
        </div> 
    </div> 
</section>-->

<section id="gallery" class="gallery_area pt-95">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="section_title text-center pb-55">
                    <h4 class="title">Productos Destacados</h4>
                    <p>Revise las ofertas y novedades que tenemos para tí.</p>
                </div>
            </div>
        </div> 
    </div> 
    <div class="container-fluid">
        <div class="row gallery_active">
            <div class="col-lg-3">
                <div class="single_gallery text-center">
                    <div class="gallery_sticker clearfix">
                        <span class="discount">-30%</span>
                    </div>
                    <div class="gallery_image">
                        <img src="<?= $assets; ?>images/gallery-1.png" alt="gallery">
                    </div>
                    <div class="gallery_content">
                        <ul>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                        </ul>
                        <h4 class="gallery_title"><a href="#">Drone Model S</a></h4>
                        <div class="price">
                            <span class="regular_price">$458.00</span>
                            <span class="discount_price">$415.00</span>
                        </div>
                    </div>
                    <div class="gallery_btn">
                        <a class="main-btn" href="#">ADD TO CARD</a>
                    </div>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single_gallery text-center">
                    <div class="gallery_sticker clearfix">
                        <span class="new">New</span>
                    </div>
                    <div class="gallery_image">
                        <img src="<?= $assets; ?>images/gallery-2.png" alt="gallery">
                    </div>
                    <div class="gallery_content">
                        <ul>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                        </ul>
                        <h4 class="gallery_title"><a href="#">Drone Model Cyber</a></h4>
                        <div class="price">
                            <span class="regular_price">$543.00</span>
                            <span class="discount_price">$512.00</span>
                        </div>
                    </div>
                    <div class="gallery_btn">
                        <a class="main-btn" href="#">ADD TO CARD</a>
                    </div>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single_gallery text-center">
                    <div class="gallery_sticker clearfix">
                        <span class="discount">-30%</span>
                    </div>
                    <div class="gallery_image">
                        <img src="<?= $assets; ?>images/gallery-3.jpg" alt="gallery">
                    </div>
                    <div class="gallery_content">
                        <ul>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                        </ul>
                        <h4 class="gallery_title"><a href="#">Drone Model Hexa</a></h4>
                        <div class="price">
                            <span class="regular_price">$965.00</span>
                            <span class="discount_price">$635.00</span>
                        </div>
                    </div>
                    <div class="gallery_btn">
                        <a class="main-btn" href="#">ADD TO CARD</a>
                    </div>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single_gallery text-center">
                    <div class="gallery_sticker clearfix">
                        <span class="new">New</span>
                    </div>
                    <div class="gallery_image">
                        <img src="<?= $assets; ?>images/gallery-4.jpg" alt="gallery">
                    </div>
                    <div class="gallery_content">
                        <ul>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                        </ul>
                        <h4 class="gallery_title"><a href="#">Drone Model Pure</a></h4>
                        <div class="price">
                            <span class="regular_price">$396.00</span>
                            <span class="discount_price">$288.00</span>
                        </div>
                    </div>
                    <div class="gallery_btn">
                        <a class="main-btn" href="#">ADD TO CARD</a>
                    </div>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single_gallery text-center">
                    <div class="gallery_sticker clearfix">
                        <span class="discount">-30%</span>
                    </div>
                    <div class="gallery_image">
                        <img src="<?= $assets; ?>images/gallery-5.png" alt="gallery">
                    </div>
                    <div class="gallery_content">
                        <ul>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                        </ul>
                        <h4 class="gallery_title"><a href="#">Drone Model Dream</a></h4>
                        <div class="price">
                            <span class="regular_price">$756.00</span>
                            <span class="discount_price">$658.00</span>
                        </div>
                    </div>
                    <div class="gallery_btn">
                        <a class="main-btn" href="#">ADD TO CARD</a>
                    </div>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single_gallery text-center">
                    <div class="gallery_sticker clearfix">
                        <span class="new">New</span>
                    </div>
                    <div class="gallery_image">
                        <img src="<?= $assets; ?>images/gallery-6.png" alt="gallery">
                    </div>
                    <div class="gallery_content">
                        <ul>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                        </ul>
                        <h4 class="gallery_title"><a href="#">Drone Exclusive Model Z</a></h4>
                        <div class="price">
                            <span class="regular_price">$458.00</span>
                            <span class="discount_price">$366.00</span>
                        </div>
                    </div>
                    <div class="gallery_btn">
                        <a class="main-btn" href="#">ADD TO CARD</a>
                    </div>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single_gallery text-center">
                    <div class="gallery_sticker clearfix">
                        <span class="new">New</span>
                    </div>
                    <div class="gallery_image">
                        <img src="<?= $assets; ?>images/gallery-7.jpg" alt="gallery">
                    </div>
                    <div class="gallery_content">
                        <ul>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                        </ul>
                        <h4 class="gallery_title"><a href="#">Drone Exclusive Model Z</a></h4>
                        <div class="price">
                            <span class="regular_price">$458.00</span>
                            <span class="discount_price">$366.00</span>
                        </div>
                    </div>
                    <div class="gallery_btn">
                        <a class="main-btn" href="#">ADD TO CARD</a>
                    </div>
                </div> 
            </div>
            <div class="col-lg-3">
                <div class="single_gallery text-center">
                    <div class="gallery_sticker clearfix">
                        <span class="new">New</span>
                    </div>
                    <div class="gallery_image">
                        <img src="<?= $assets; ?>images/gallery-8.jpg" alt="gallery">
                    </div>
                    <div class="gallery_content">
                        <ul>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star-filled"></i></li>
                            <li><i class="lni lni-star"></i></li>
                        </ul>
                        <h4 class="gallery_title"><a href="#">Drone Exclusive Model Z</a></h4>
                        <div class="price">
                            <span class="regular_price">$458.00</span>
                            <span class="discount_price">$366.00</span>
                        </div>
                    </div>
                    <div class="gallery_btn">
                        <a class="main-btn" href="#">ADD TO CARD</a>
                    </div>
                </div> 
            </div>
        </div> 
    </div> 
</section>

<section id="menu" class="coffee_menu pt-120 pb-130 bg_cover" style="background-image: url(<?= $assets; ?>images/coffee_menu_bg.jpg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-30">
                    <h4 class="title">Menu</h4>
                    <span class="line">
                        <span class="box"></span>
                    </span>
                </div> 
            </div>
        </div> 
        <div class="row">
            <div class="col-lg-6">
                <div class="coffee_menu_wrapper">
                    <div class="single_coffee_menu mt-30 d-flex align-items-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="coffee_menu_image">
                            <img src="<?= $assets; ?>images/menu-1.jpg" alt="coffee">
                        </div>
                        <div class="coffee_menu_content media-body">
                            <h4 class="coffee_name">Americano<span class="price">$2.5</span></h4>
                            <p>Lorem ipsum dolor sit amet, cosadipscing elitr, sed diam nonumy eirmod.</p>
                        </div>
                    </div> 
                    <div class="single_coffee_menu mt-30 d-flex align-items-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="coffee_menu_image">
                            <img src="<?= $assets; ?>images/menu-2.jpg" alt="coffee">
                        </div>
                        <div class="coffee_menu_content media-body">
                            <h4 class="coffee_name">Hot Chocolate<span class="price">$7</span></h4>
                            <p>Lorem ipsum dolor sit amet, cosadipscing elitr, sed diam nonumy eirmod.</p>
                        </div>
                    </div> 
                    <div class="single_coffee_menu mt-30 d-flex align-items-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="coffee_menu_image">
                            <img src="<?= $assets; ?>images/menu-3.jpg" alt="coffee">
                        </div>
                        <div class="coffee_menu_content media-body">
                            <h4 class="coffee_name">Double Americano<span class="price">$6</span></h4>
                            <p>Lorem ipsum dolor sit amet, cosadipscing elitr, sed diam nonumy eirmod.</p>
                        </div>
                    </div> 
                </div> 
            </div>
            <div class="col-lg-6">
                <div class="coffee_menu_wrapper">
                    <div class="single_coffee_menu mt-30 d-flex align-items-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="coffee_menu_image">
                            <img src="<?= $assets; ?>images/menu-4.jpg" alt="coffee">
                        </div>
                        <div class="coffee_menu_content media-body">
                            <h4 class="coffee_name">Latte<span class="price">$6</span></h4>
                            <p>Lorem ipsum dolor sit amet, cosadipscing elitr, sed diam nonumy eirmod.</p>
                        </div>
                    </div> 
                    <div class="single_coffee_menu mt-30 d-flex align-items-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="coffee_menu_image">
                            <img src="<?= $assets; ?>images/menu-5.jpg" alt="coffee">
                        </div>
                        <div class="coffee_menu_content media-body">
                            <h4 class="coffee_name">Long Black<span class="price">$4</span></h4>
                            <p>Lorem ipsum dolor sit amet, cosadipscing elitr, sed diam nonumy eirmod.</p>
                        </div>
                    </div> 
                    <div class="single_coffee_menu mt-30 d-flex align-items-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                        <div class="coffee_menu_image">
                            <img src="<?= $assets; ?>images/menu-6.jpg" alt="coffee">
                        </div>
                        <div class="coffee_menu_content media-body">
                            <h4 class="coffee_name">Cappuccino<span class="price">$5</span></h4>
                            <p>Lorem ipsum dolor sit amet, cosadipscing elitr, sed diam nonumy eirmod.</p>
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
                    <h4 class="title">Upcoming</h4>
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
                        <img src="<?= $assets; ?>images/upcoming-1.jpg" alt="upcoming">
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
        </div> 
    </div> 
</section>


<section id="contact" class="contact_area">
    <div class="contact_form pt-120 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center pb-30">
                        <h4 class="title">Get In Touch</h4>
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
                            <input name="name" type="text" placeholder="Name">
                        </div> 
                    </div>
                    <div class="col-lg-6">
                        <div class="single_form mt-30">
                            <input name="email" type="email" placeholder="Email">
                        </div> 
                    </div>
                    <div class="col-lg-12">
                        <div class="single_form mt-30">
                            <input name="subject" type="text" placeholder="Subject">
                        </div> 
                    </div>
                    <div class="col-lg-12">
                        <div class="single_form mt-30">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div> 
                    </div>
                    <p class="form-message"></p>
                    <div class="col-lg-12">
                        <div class="single_form text-center mt-30">
                            <button class="main-btn">SUBMIT</button>
                        </div> 
                    </div>
                </div> 
            </form>
        </div> 
    </div> 
    <div class="contact_map">
        <div class="gmap_canvas">
            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div> 
</section>