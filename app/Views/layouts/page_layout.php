<!DOCTYPE HTML>

<html lang="en-US">



<head>



    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Traveline Booking</title>



    <link rel="stylesheet" href="<?= base_url('assets/inc/bootstrap/css/bootstrap.min.css') ?>" />

    <link rel="stylesheet" href="<?= base_url('assets/styles/themes/default/stylesheet.css') ?>" />



    <link rel="alternate stylesheet" type="text/css" title="02" href="<?= base_url('assets/styles/themes/style02/stylesheet02.css') ?>" />

    <link rel="alternate stylesheet" type="text/css" title="03" href="<?= base_url('assets/styles/themes/style03/stylesheet03.css') ?>" />

    <link rel="alternate stylesheet" type="text/css" title="04" href="<?= base_url('assets/styles/themes/style04/stylesheet04.css') ?>" />

    <link rel="alternate stylesheet" type="text/css" title="05" href="<?= base_url('assets/styles/themes/style05/stylesheet05.css') ?>" />

    <link rel="alternate stylesheet" type="text/css" title="06" href="<?= base_url('assets/styles/themes/style06/stylesheet06.css') ?>" />

    <link rel="alternate stylesheet" type="text/css" title="07" href="<?= base_url('assets/styles/themes/style07/stylesheet07.css') ?>" />

    <link rel="alternate stylesheet" type="text/css" title="08" href="<?= base_url('assets/styles/themes/style08/stylesheet08.css') ?>" />

    <link rel="alternate stylesheet" type="text/css" title="09" href="<?= base_url('assets/styles/themes/style09/stylesheet09.css') ?>" />

    <link rel="alternate stylesheet" type="text/css" title="10" href="<?= base_url('assets/styles/themes/style10/stylesheet10.css') ?>" />

    <link rel="alternate stylesheet" type="text/css" title="11" href="<?= base_url('assets/styles/themes/style11/stylesheet11.css') ?>" />

    <link rel="alternate stylesheet" type="text/css" title="12" href="<?= base_url('assets/styles/themes/style12/stylesheet12.css') ?>" />

    <link rel="alternate stylesheet" type="text/css" title="13" href="<?= base_url('assets/styles/themes/style13/stylesheet13.css') ?>" />

    <link rel="alternate stylesheet" type="text/css" title="14" href="<?= base_url('assets/styles/themes/style14/stylesheet14.css') ?>" />

    <link rel="alternate stylesheet" type="text/css" title="15" href="<?= base_url('assets/styles/themes/style15/stylesheet15.css') ?>" />

    <script src="<?= base_url('assets/inc/js/styleswitch.js') ?>" type="text/javascript">
        /***********************************************

* Style Sheet Switcher v1.1- © Dynamic Drive DHTML code library (www.dynamicdrive.com)

* This notice MUST stay intact for legal use

* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more

***********************************************/
    </script>





    <!-- Flexslider -->

    <link rel="stylesheet" href="<?= base_url('assets/styles/flexslider.css') ?>" />



    <!-- fontawesome -->

    <link rel="stylesheet" href="<?= base_url('assets/styles/fontawesome/font-awesome.min.css') ?>" />



    <!-- Datepicker UI -->

    <link rel="stylesheet" href="<?= base_url('assets/styles/jquery-ui-1.10.3.custom.min.css') ?>" />



    <!-- MI slider -->

    <link rel="stylesheet" href="<?= base_url('assets/styles/mi-slider.css') ?>" />



    <!-- Chozen UI -->

    <link rel="stylesheet" href="<?= base_url('assets/styles/chosen.css') ?>" />



    <!-- Range Slider UI #2 -->

    <link rel="stylesheet" href="<?= base_url('assets/styles/rangeslider-classic.css') ?>" />



    <!-- Elegant Font -->

    <link rel="stylesheet" href="<?= base_url('assets/inc/elegant-font/style.css') ?>" />

    <!--[if lte IE 7]><script src="inc/elegant-font/lte-ie7.js')?>"></script><![endif]-->



    <link rel="stylesheet" href="<?= base_url('assets/demo/switcher.css') ?>" />
    <?= $this->renderSection("styles"); ?>

</head>

<body class="index2">

    <section id="StyleSwitcher" class="">



        <a href="javascript:void(0)" class="switcher-btn"><i class="fa fa-gear fa-spin"></i></a>



        <h3>Style Switcher</h3>



        <div class="switcher-style">

            <a href="index-fixedmenu.html" title="Style Two">Fixed Header Menu</a>

        </div>



        <div class="switcher-colors">



            <a href="javascript:void(0)" title="02" class="color-switch red-1"></a>

            <a href="javascript:void(0)" title="03" class="color-switch red-2"></a>

            <a href="javascript:void(0)" title="04" class="color-switch orange-1"></a>

            <a href="javascript:void(0)" title="05" class="color-switch orange-2"></a>



            <a href="javascript:void(0)" title="06" class="color-switch yellow-2"></a>

            <a href="javascript:void(0)" title="07" class="color-switch green-1"></a>

            <a href="javascript:void(0)" title="08" class="color-switch green-2"></a>

            <a href="javascript:void(0)" title="none" class="color-switch green-default"></a>

            <a href="javascript:void(0)" title="09" class="color-switch blue-1"></a>

            <a href="javascript:void(0)" title="10" class="color-switch blue-2"></a>

            <a href="javascript:void(0)" title="11" class="color-switch purple-1"></a>

            <a href="javascript:void(0)" title="12" class="color-switch purple-2"></a>

            <a href="javascript:void(0)" title="13" class="color-switch main-color"></a>

            <a href="javascript:void(0)" title="14" class="color-switch pink"></a>

            <a href="javascript:void(0)" title="15" class="color-switch cumin"></a>

        </div>







    </section>

    <div id="preloader">

        <div id="status">&nbsp;</div>

        <noscript>JavaScript is off. Please enable to view full site.</noscript>

    </div>



    <div id="site">




        <?= $this->include('layouts/partials/menu-bar') ?>

        <!-- /#header -->





        <!-- <div class="modal fade" id="loginBox" tabindex="-1" role="dialog" aria-hidden="true">

            <div class="modal-dialog">

                <div class="modal-content">



                    <div class="modal-body">

                        <form>

                            <div class=" field-row">



                                <input placeholder="Username">









                                <input type="password" placeholder="Password">





                                <div class="custom-checkbox-holder">

                                    <input class="custom-checkbox" type="checkbox">



                                    <span>Remember me on this computer.</span>

                                </div>







                            </div>

                            <button type="submit" class="button green">Login Now</button>

                        </form>

                    </div>



                </div>

            </div>

        </div> -->




        <?= $this->renderSection('content') ?>












        <?= $this->include('layouts/partials/footer') ?>

        <!-- /#footer -->







    </div><!-- /#site -->





    <!-- Scripts -->



    <!-- jQuery -->




    <?= $this->renderSection("scripts"); ?>

    <script src="<?= base_url('assets/inc/js/jquery-1.10.2.min.js') ?>"></script>

    <script src="<?= base_url('assets/inc/js/jquery-migrate-1.2.1.js') ?>"></script>



    <!-- modernizer -->





    <script src="<?= base_url('assets/inc/js/modernizr.custom.63321.js') ?>"></script>



    <!-- FlexSlider -->

    <script type="text/javascript" src="<?= base_url('assets/inc/js/jquery.flexslider-min.js') ?>"></script>





    <!-- CatSlider -->

    <script type="text/javascript" src="<?= base_url('assets/inc/js/jquery.catslider.js') ?>"></script>





    <!-- Datepicker -->

    <script type="text/javascript" src="<?= base_url('assets/inc/js/jquery.ui.datepicker.min.js') ?>"></script>





    <!-- Masonry -->

    <script type="text/javascript" src="<?= base_url('assets/inc/js/masonry.min.js') ?>"></script>







    <!-- Increase/decrease quantity -->

    <script type="text/javascript" src="<?= base_url('assets/inc/js/increase-decrease-qty.js') ?>"></script>



    <!-- Mixitup (filterable item) -->

    <script type="text/javascript" src="<?= base_url('assets/inc/js/jquery.mixitup.min.js') ?>"></script>





    <!-- Google Map JS -->

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

    <script type="text/javascript" src="<?= base_url('assets/inc/js/google-map-infobox.js') ?>"></script>





    <!-- Responsive Google Map (Fitmaps) JS -->

    <script type="text/javascript" src="<?= base_url('assets/inc/js/jquery.fitmaps.js') ?>"></script>



    <!-- Chozen UI JS -->

    <script type="text/javascript" src="<?= base_url('assets/inc/js/chosen.jquery.js') ?>"></script>





    <!-- Checkbox/Radio UI JS -->

    <script type="text/javascript" src="<?= base_url('assets/inc/js/jquery.screwdefaultbuttonsV2.js') ?>"></script>



    <script type="text/javascript" src="<?= base_url('assets/inc/js/jquery.carouFredSel-6.2.1-packed.js') ?>"></script>

    <!-- Range Slider UI JS #2 -->

    <script type="text/javascript" src="<?= base_url('assets/inc/js/jquery.mousewheel.min.js') ?>"></script>

    <script type="text/javascript" src="<?= base_url('assets/inc/js/jQRangeSlider-min.js') ?>"></script>

    <!-- bootstrap JS -->

    <script type="text/javascript" src="<?= base_url('assets/inc/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- raty JS -->

    <script type="text/javascript" src="<?= base_url('assets/inc/js/jquery.raty.min.js') ?>"></script>

    <!-- Custom JS -->

    <script type="text/javascript" src="<?= base_url('assets/inc/js/custom.js') ?>"></script>





</body>

</html>