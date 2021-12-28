<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>
<section id="featured" class="wide-fat">
    <div class="featured-inner">

        <div class="slider">

            <div id="top-slider" class="flexslider">

                <ul class="slides">

                    <li>

                        <img src="<?= ('assets/images/slider/1.jpg" alt="Featured Image') ?>" />

                    </li>

                    <li>

                        <img src="<?= ('assets/images/slider/2.jpg" alt="Featured Image') ?>" />

                    </li>

                    <li>

                        <img src="<?= ('assets/images/slider/3.jpg" alt="Featured Image') ?>" />

                    </li>

                </ul><!-- /.slides -->

                <div class="opener-area">



                    <a href="#" class="open-btn open-close-btn"><i class="fa fa-chevron-circle-right"></i></a>

                    <ul class="social-icons vertical">

                        <li><a href="#" class="fa fa-facebook"></a></li>

                        <li><a href="#" class="fa fa-twitter"></a></li>

                        <li><a href="#" class="fa fa-rss"></a></li>

                        <li><a href="#" class="fa fa-vimeo-square"></a></li>

                    </ul>

                </div>

                <div class="featured-overlay">



                    <a id="close-form" href="#" class="button close open-close-btn"><i class="icon_close_alt2"></i></a>



                    <div class="featured-overlay-inner">





                        <form class="location-search" method="get">



                            <div class="search-field">

                                <div class="destination-field">

                                    <label for="destination">Choose Your Destination</label><br />

                                    <input id="destination" type="text" />

                                </div>

                            </div><!-- /.search-field -->



                            <div class="search-field">



                                <div class="col-field-left">

                                    <label for="check-in-date">Check in date</label>

                                    <br />

                                    <input id="check-in-date" class="traveline_date_input" type="text" value="d MM yy" />

                                </div>



                                <div class="col-field-right">

                                    <label for="check-out-date">Check out date</label>

                                    <br />

                                    <input id="check-out-date" class="traveline_date_input" type="text" value="d MM yy" />

                                </div>



                            </div><!-- /.search-field -->



                            <div class="search-field">



                                <div class="col-field-left">



                                    <div class="hotel-field">

                                        <label for="hotel">Hotel</label>

                                        <br />

                                        <input id="hotel" type="text" />

                                    </div>



                                </div>





                                <div class="col-field-right">



                                    <div class="col-field-left">



                                        <div class="adult-left">

                                            <label for="adult">Adult</label>

                                            <br />

                                            <div class="quantity">

                                                <input id="adult" class="qty" type="text" />

                                            </div>

                                        </div>



                                    </div>



                                    <div class="col-field-right">



                                        <div class="children-field">

                                            <label for="children">Children</label>

                                            <br />

                                            <div class="quantity">

                                                <input id="children" class="qty" type="text" />

                                            </div>

                                        </div>



                                    </div>



                                </div>



                            </div><!-- /.search-field -->



                            <div class="search-field">



                                <input type="submit" class="button wide-fat" value="Search" />



                            </div><!-- /.search-field -->



                        </form><!-- /form.location-search -->







                        <div class="featured-teaser-text">





                            <h1>Enjoy</h1>

                            <h2>Wonderful Feelings</h2>



                            <p>Proin faucibus malesuada dui, ut porta arcu pretium consequat. Ut iaculis dui at gravida vehicula. Donec malesuada suscipit sem sit amet pulvinar....</p>





                        </div><!-- /.featured-teaser-text -->





                        <div class="social-networks">





                            <ul>

                                <li class="facebook"><a href="#"><i class="social_facebook"></i></a></li>

                                <li class="twitter"><a href="#"><i class="social_twitter"></i></a></li>

                                <li class="vimeo"><a href="#"><i class="social_vimeo"></i></a></li>

                                <li class="rss"><a href="#"><i class="social_rss"></i></a></li>

                            </ul>





                        </div><!-- /.social-networks -->





                    </div><!-- /.featured-overlay-inner -->



                </div><!-- /.featured-overlay -->



            </div>

        </div><!-- /.slider -->





    </div><!-- /.featured-inner -->



</section><!-- /#featured -->


<?= $this->endSection() ?>