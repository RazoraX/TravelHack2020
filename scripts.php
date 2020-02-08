<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- Owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Counters -->
<script src="js/jquery.countTo.js"></script>
<!-- Main -->
<script src="js/main.js"></script>
<script src="js/mail-script.js"></script>

<!-- Отдельные скрипты для каждой страницы -->
<?php require_once 'jsBlocks/' . $page . '.html';

// Кастомный для 2 страниц
if ($page === 'index' || $page === 'parents') {
    if ($isMobile) { ?>
        <script src="js/svg-animations-mob.js"></script> <?php } else {
        ?>
        <script src="js/svg-animations.js"></script>
        <?php
    }
}