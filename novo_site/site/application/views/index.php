<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>template/assets/base/img/layout/logos/ico-barreto.png"/>
        
        <?php include 'barreto/includes.php'; ?>
        <title><?php echo $page_title; ?> </title>
    </head>


    <body class="c-layout-header-fixed">

        <?php include 'menu.php'; ?>

        <div class="c-layout-page">
            <?php include  "barreto/" . $page_name . '.php'; ?>
            <?php include 'footer.php'; ?>
        </div>

    </body>


    <!--[if lt IE 9]>
    <script src="../assets/global/plugins/excanvas.min.js"></script> 
    <![endif]-->

<!--<script src="<?php echo base_url(); ?>template/assets/plugins/jquery.min.js" type="text/javascript"></script>-->
    <script src="<?php echo base_url(); ?>template/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- END: CORE PLUGINS -->
    <!-- BEGIN: LAYOUT PLUGINS -->
    <script src="<?php echo base_url(); ?>template/assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <!-- END: LAYOUT PLUGINS -->
    <!-- BEGIN: THEME SCRIPTS -->
    <script src="<?php echo base_url(); ?>template/assets/base/js/components.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>template/assets/base/js/app.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            App.init(); // init core    

            //init main slider
            var slider = $('.c-layout-revo-slider .tp-banner');
            var cont = $('.c-layout-revo-slider .tp-banner-container');
            var api = slider.show().revolution({
                delay: 15000,
                startwidth: 1170,
                startheight: (App.getViewPort().width < App.getBreakpoint('md') ? 1024 : 620),
                navigationType: "hide",
                navigationArrows: "solo",
                touchenabled: "on",
                onHoverStop: "on",
                keyboardNavigation: "off",
                navigationStyle: "circle",
                navigationHAlign: "center",
                navigationVAlign: "center",
                fullScreenAlignForce: "off",
                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",
                spinner: "spinner2",
                forceFullWidth: "on",
                hideTimerBar: "on",
                hideThumbsOnMobile: "on",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "on",
                hideArrowsOnMobile: "on",
                hideThumbsUnderResolution: 0,
                videoJsPath: "rs-plugin/videojs/",
            });
        });
    </script>
    <!-- END: THEME SCRIPTS -->
    <!-- END: LAYOUT/BASE/BOTTOM -->


</html>
