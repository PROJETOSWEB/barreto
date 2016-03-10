<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href='http://fonts.googleapis.com/css?family=Raleway:100,300,600,900&amp;subset=all' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url(); ?>template/assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>template/assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>template/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>template/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>template/assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>template/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN: BASE PLUGINS  -->
<link href="<?php echo base_url(); ?>template/assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>template/assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>template/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>template/assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>template/assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>template/assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<!-- END: BASE PLUGINS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url(); ?>template/assets/base/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>template/assets/base/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>template/assets/base/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
<link href="<?php echo base_url(); ?>template/assets/base/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<script src="<?php echo base_url(); ?>template/assets/plugins/jquery.min.js" type="text/javascript"></script>



<!--[if lt IE 9]>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->

<!--<script src="assets/plugins/jquery.min.js" type="text/javascript"></script>-->
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


<?php
//////////LOADING SYSTEM SETTINGS FOR ALL PAGES AND ACCOUNTS/////////
$system_title = 'Admin Agape';
