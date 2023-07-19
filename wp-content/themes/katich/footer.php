</main>
<footer class="space">
    <div class="container">
        <div class="footer-top">
            <div class="social">
                <?php dynamic_sidebar('footer-1'); ?>
            </div>


            <a href="" class="footer-logo"><?php dynamic_sidebar('footer-2'); ?></a>

            <div class="cards">
                <?php dynamic_sidebar('footer-3'); ?>
                <!-- <img src="<?php bloginfo('template_directory'); ?>/images/cards.jpg" alt="Katich - Katić Winery"> -->
            </div>
        </div>

        <div class="footer-bottom">
            <ul>
                <?php dynamic_sidebar('footer-4'); ?>
            </ul>
            <div class="copyright">
                <?php dynamic_sidebar('footer-5'); ?>
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

<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>

<?php wp_footer(); ?>