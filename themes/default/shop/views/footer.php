<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="footer" class="footer_area">
    <div class="footer_subscribe pt-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="subscribe_title mt-45">
                        <h4 class="title">Suscribete a nuestras novedades</h4>
                        <p>Recibir novedades semanalmente</p>
                    </div> 
                </div>
                <div class="col-lg-6">
                    <div class="subscribe_form mt-50">
                        <form action="#">
                            <input type="email" placeholder="Ingresa Tu Email">
                            <button><i class="lni lni-envelope"></i></button>
                        </form>
                    </div> 
                </div>
            </div> 
        </div> 
    </div> 
    <div class="footer_widget pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 order-md-1 order-lg-1">
                    <div class="footer_about mt-45">
                        <h4 class="footer_title">Animalia</h4>
                        <p>Animalia Express, Animalia Rural, Animalia Web, Animalia Express, Animalia Rural, Animalia Web.</p>
                        <ul class="social">
                            <li><a href="https://www.facebook.com/Animalia-110563507299462"><i class="lni lni-facebook-filled"></i></a></li>
                            <!--<li><a href="#"><i class="lni lni-twitter-original"></i></a></li>-->
                            <li><a href="https://www.instagram.com/animalia_arica/"><i class="lni lni-instagram-original"></i></a></li>
                            <!--<li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>-->
                        </ul>
                    </div> 
                </div>
                <div class="col-lg-4 order-md-3 order-lg-2">
                    <div class="footer_link_wrapper d-flex flex-wrap">
                        <div class="footer_link mt-45">
                            <h4 class="footer_title">Horarios de Atención</h4>
                            <ul>
                                <li>Lunes - Viernes: 09.00 A.M - 09.00 P.M</li>
                                <li>Sábados: 10.00 A.M - 08.00 P.M</li>
                                <li>Domingos: 10.00 A.M - 03.00 P.M</li>
<!--                                <li>Half-Holidays: 08.00 A.M - 02.00 P.M</li>
                                <li>Twe: 08.00 A.M - 02.00 P.M</li>-->
                            </ul>
                        </div> 
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 order-md-2 order-lg-3">
                    <div class="footer_instagram mt-45">
                        <h4 class="footer_title">Instagram</h4>
                        <div class="instagram_image">
                            <a href="#"><img src="<?= $assets; ?>images/instagram-1.jpg" alt="instagram"></a>
                            <a href="#"><img src="<?= $assets; ?>images/instagram-2.jpg" alt="instagram"></a>
                            <a href="#"><img src="<?= $assets; ?>images/instagram-3.jpg" alt="instagram"></a>
                            <a href="#"><img src="<?= $assets; ?>images/instagram-4.jpg" alt="instagram"></a>
                            <a href="#"><img src="<?= $assets; ?>images/instagram-4.jpg" alt="instagram"></a>
                            <a href="#"><img src="<?= $assets; ?>images/instagram-3.jpg" alt="instagram"></a>
                            <a href="#"><img src="<?= $assets; ?>images/instagram-2.jpg" alt="instagram"></a>
                            <a href="#"><img src="<?= $assets; ?>images/instagram-1.jpg" alt="instagram"></a>
                        </div>
                    </div> 
                </div>
            </div> 
        </div> 
    </div> 
    <div class="footer_copyright">
        <div class="container">
            <div class="copyright text-center">
                <p>Desarrollado por <a href="https://gambessit.cl" rel="nofollow">GambesS IT - CHILE</a></p>
            </div> 
        </div> 
    </div> 
    <div class="footer_shape">
        <img src="<?= $assets; ?>images/footer_shape.png" alt="footer shape">
    </div> 
</section>

<a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>




<script>
    
    var lang = {};
    lang.page_info = '<?= lang('page_info'); ?>';
    lang.cart_empty = '<?= lang('empty_cart'); ?>';
    lang.item = '<?= lang('item'); ?>';
    lang.items = '<?= lang('items'); ?>';
    lang.unique = '<?= lang('unique'); ?>';
    lang.total_items = '<?= lang('total_items'); ?>';
    lang.total_unique_items = '<?= lang('total_unique_items'); ?>';
    lang.tax = '<?= lang('tax'); ?>';
    lang.shipping = '<?= lang('shipping'); ?>';
    lang.total_w_o_tax = '<?= lang('total_w_o_tax'); ?>';
    lang.product_tax = '<?= lang('product_tax'); ?>';
    lang.order_tax = '<?= lang('order_tax'); ?>';
    lang.total = '<?= lang('total'); ?>';
    lang.grand_total = '<?= lang('grand_total'); ?>';
    lang.reset_pw = '<?= lang('forgot_password?'); ?>';
    lang.type_email = '<?= lang('type_email_to_reset'); ?>';
    lang.submit = '<?= lang('submit'); ?>';
    lang.error = '<?= lang('error'); ?>';
    lang.add_address = '<?= lang('add_address'); ?>';
    lang.update_address = '<?= lang('update_address'); ?>';
    lang.fill_form = '<?= lang('fill_form'); ?>';
    lang.already_have_max_addresses = '<?= lang('already_have_max_addresses'); ?>';
    lang.send_email_title = '<?= lang('send_email_title'); ?>';
    lang.message_sent = '<?= lang('message_sent'); ?>';
    lang.add_to_cart = '<?= lang('add_to_cart'); ?>';
    lang.out_of_stock = '<?= lang('out_of_stock'); ?>';
    lang.x_product = '<?= lang('x_product'); ?>';
</script>
<!-- Template scripts -->
<script src="<?= $assets; ?>js/vendor/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="<?= $assets; ?>js/vendor/modernizr-3.7.1.min.js" type="text/javascript"></script>

<script src="<?= $assets; ?>js/popper.min.js" type="text/javascript"></script>
<script src="<?= $assets; ?>js/bootstrap.min.js" type="text/javascript"></script>

<script src="<?= $assets; ?>js/slick.min.js" type="text/javascript"></script>

<script src="<?= $assets; ?>js/ajax-contact.js" type="text/javascript"></script>

<script src="<?= $assets; ?>js/jquery.easing.min.js" type="text/javascript"></script>
<script src="<?= $assets; ?>js/scrolling-nav.js" type="text/javascript"></script>

<script src="<?= $assets; ?>js/wow.min.js" type="text/javascript"></script>

<script src="<?= $assets; ?>js/main.js" type="text/javascript"></script>

<!-- END Template scripts -->

<?php if ($m == 'shop' && $v == 'product') { ?>
<script type="text/javascript">
$(document).ready(function ($) {
  $('.rrssb-buttons').rrssb({
    title: '<?= $product->code.' - '.$product->name; ?>',
    url: '<?= site_url('product/'.$product->slug); ?>',
    image: '<?= base_url('assets/uploads/'.$product->image); ?>',
    description: '<?= $page_desc; ?>',
    // emailSubject: '',
    // emailBody: '',
  });
});
</script>
<?php } ?>

<?php if ($message || $warning || $error || $reminder) { ?>
<script type="text/javascript">
$(document).ready(function() {
    <?php if ($message) { ?>
        sa_alert('<?=lang('success');?>', '<?= trim(str_replace(array("\r","\n","\r\n"), '', addslashes($message))); ?>');
    <?php } if ($warning) { ?>
        sa_alert('<?=lang('warning');?>', '<?= trim(str_replace(array("\r","\n","\r\n"), '', addslashes($warning))); ?>', 'warning');
    <?php } if ($error) { ?>
        sa_alert('<?=lang('error');?>', '<?= trim(str_replace(array("\r","\n","\r\n"), '', addslashes($error))); ?>', 'error', 1);
    <?php } if ($reminder) { ?>
        sa_alert('<?=lang('reminder');?>', '<?= trim(str_replace(array("\r","\n","\r\n"), '', addslashes($reminder))); ?>', 'info');
    <?php } ?>
});
</script>
<?php } ?>
</body>
</html>