</main>
<footer class="space">
    <div class="container">
        <div class="footer-top">
            <div class="social">
                <a href="" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="Katich - Katić Winery"></a>
                <a href="" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Katich - Katić Winery"></a>
                <a href="" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/youtube.png" alt="Katich - Katić Winery"></a>

            </div>
            <a href="" class="footer-logo"><img src="<?php bloginfo('template_directory'); ?>/images/logo-grey.svg" alt="Katich - Katić Winery"></a>
            <div class="cards">
                <img src="<?php bloginfo('template_directory'); ?>/images/cards.jpg" alt="Katich - Katić Winery">
            </div>
        </div>

        <div class="footer-bottom">
            <ul>
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary-menu'
                )) ?>
            </ul>
            <div class="copyright">
                <span>&copy; <?php echo date("Y"); ?> <strong>Katich Winery.</strong> Sva prava pridržana. </span> | <a href="">Politika obrade osobnih podataka</a> | <a href="">Opći uvjeti poslovanja</a>
                <a title="Izrada web stranica" href="http://virtus-dizajn.com/izrada-web-stranica/" class="none">Izrada web stranica</a>
                <a title="Web dizajn" href="https://virtus-dizajn.com/web-dizajn/" class="none">Web dizajn</a>
                <a target="_blank" href="http://virtus-dizajn.com/" class="v text-r" title="Virtus Dizajn"><img alt="Virtus dizajn - internet rješenja" src="<?php bloginfo('template_directory'); ?>/images/virtus.svg" width="176" height="11"></a>
            </div>
        </div>
    </div>
</footer>


<!--jquery js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--slick slide js-->
<script src="<?php bloginfo('template_directory'); ?>/js/slick/slick.min.js"></script>
<!--gallery js-->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<!--custom  js-->
<script src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>

</body>

</html>

<?php wp_footer(); ?>