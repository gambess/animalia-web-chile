<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if (!empty($slider)) { ?>
    <section class="header_area">
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
    </section>
<?php } ?>

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
                    <p>Animalia, Soluciones Veterinarias Animalia Express, Animalia Rural, Animalia Web, Animalia Express, Animalia Rural, Animalia Web. <br> <br> Animalia Express, Animalia Rural, Animalia Web, Animalia Express, Animalia Rural, Animalia Web.</p>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/Animalia-110563507299462"><i class="lni lni-facebook-filled"></i></a></li>
                        <!--<li><a href="#"><i class="lni lni-twitter-original"></i></a></li>-->
                        <li><a href="https://www.instagram.com/animalia_arica/"><i class="lni lni-instagram-original"></i></a></li>
                        <!--<li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>-->
                    </ul>
                </div> 
            </div>
        </div> 
    </div> 
</section>

<section id="gallery" class="gallery_area pt-95">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-10">
                    <h4 class="title">Productos Destacados</h4>
                    <p>Revise las ofertas y novedades que tenemos para tí.</p>
                    <span class="line">
                        <span class="box"></span>
                    </span>
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
                    <h4 class="title">Comentarios de Clientes</h4>
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
    <div class="contact_map">
        <div class="gmap_canvas">
            <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15136.064401262563!2d-70.2942353!3d-18.4829299!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8955300ed69c6434!2sArica%20guau!5e0!3m2!1ses!2scl!4v1602863444808!5m2!1ses!2scl" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <!--<iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>-->
        </div>
    </div> 
</section>