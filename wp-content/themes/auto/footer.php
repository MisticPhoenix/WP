
<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <a class="logo" href="#">
                <img class="logo__img" src="<?php bloginfo('template_url');?>/assets/images/logo.svg" alt="logo">
            </a>

            <div class="social footer__social">
                <a class="social__link" href="<?php the_field('instagram');?>">
                    <img class="social__img" src="<?php bloginfo('template_url');?>/assets/images/icon/instagram.svg" alt="instagram icon">
                </a>
                <a class="social__link" href="<?php the_field('telegram');?>">
                    <img class="social__img" src="<?php bloginfo('template_url');?>/assets/images/icon/telegram.svg" alt="telegram icon">
                </a>
                <a class="social__link" href="<?php the_field('whatsapp');?>">
                    <img class="social__img" src="<?php bloginfo('template_url');?>/assets/images/icon/whatsapp.svg" alt="whatsapp icon">
                </a>
                <a class="social__link" href="<?php the_field('facebook');?>">
                    <img class="social__img" src="<?php bloginfo('template_url');?>/assets/images/icon/facebook.svg" alt="facebook icon">
                </a>
            </div>

            <a class="footer__copy" href="#">
                Политика конфиденциальности
            </a>
        </div>
    </div>
</footer>
</body>

<?php wp_footer();?>

</html>