<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>
<section class="page-head-holder">

    <div class="container">

        <div class="col-xs-12 col-sm-6">



            <h2>hotel details</h2>

        </div>

        <div class="col-xs-12 col-sm-6">

            <div class="breadcrumb-holder">

                <ol class="breadcrumb">

                    <li><a href="<?= '/' ?>">Home</a></li>

                    <li class="active"><a href="#">hotel details</a></li>



                </ol>

            </div>

        </div>

    </div>

</section>



<section class="section wide-fat hotel-detail">


    <div class="container">



        <div class="col-xs-12 col-sm-8">

            <div class="single-product-gallery">

                <div class="single-slider-holder">

                    <div class="main-slide-nav">

                        <a class="fa fa-angle-left prev-btn" href="#prev"></a>

                        <a class="fa fa-angle-right next-btn" href="#next"></a>

                    </div>

                    <div class="single-slider">

                        <div class="hotel-detail-gallery-item" id="slide1">



                            <img alt="" src="<?= base_url('image/hotel/' . $details['0']['image_hotel']['0']) ?>" />



                        </div>



                        <div class="hotel-detail-gallery-item" id="slide2">



                            <img alt="" src="<?= base_url('image/hotel/' . $details['0']['image_hotel']['1']) ?>" />



                        </div>

                        <div class="hotel-detail-gallery-item" id="slide3">



                            <img alt="" src="<?= base_url('image/hotel/' . $details['0']['image_hotel']['2']) ?>" />



                        </div>

                        <div class="hotel-detail-gallery-item" id="slide4">



                            <img alt="" src="<?= base_url('image/hotel/' . $details['0']['image_hotel']['3']) ?>" />



                        </div>

                    </div>





                </div>

            </div>



            <div class="tab-holder">

                <!-- Nav tabs -->

                <ul class="nav nav-tabs">

                    <!-- <li class="active"><a href="#overview" data-toggle="tab">overview</a></li>

                    <li><a href="#review" data-toggle="tab">review</a></li>

                    <li><a href="#articles" data-toggle="tab">articles</a></li>

                    <li><a href="#comment" data-toggle="tab">comment</a></li>

                    <li><a href="#map" data-toggle="tab">map</a></li> -->

                    <li><a class="active" href="#availability" data-toggle="tab">availability</a></li>

                </ul>



                <!-- Tab panes -->

                <div class="tab-content">

                    <!-- <div class="tab-pane active" id="overview">

                        <p>

                            Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec.

                        </p>

                        <p>

                            Morbi imperdiet lacus nec ante blandit, sit amet fermentum magna faucibus. Nunc nec libero id urna vulputate venenatis. Aenean vulputate odio felis, in rhoncus sapien auctor nec. Donec non posuere sem. Ut quis egestas libero, mattis gravida nibh. Phasellus a nisi ac mi luctus tincidunt et non est. Proin ac orci rhoncus arcu bibendum molestie vel et metus. Aenean iaculis purus et velit iaculis, nec convallis ipsum ornare. Integer a orci enim.

                        </p>

                        <h3><a data-toggle="collapse" data-target="#bedroom">Bedroom</a></h3>

                        <div id="bedroom" class="collapse in">

                            <p>

                                Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec.

                            </p>

                        </div>



                        <h3><a data-toggle="collapse" data-target="#parking">Parking</a></h3>

                        <div id="parking" class="collapse in">

                            <p>

                                Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec.

                            </p>

                        </div>



                        <h3><a data-toggle="collapse" data-target="#gym">Gym</a></h3>

                        <div id="gym" class="collapse in">

                            <p>

                                Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec.

                            </p>

                        </div>

                        <h3><a data-toggle="collapse" data-target="#rczone">Recreating Zone</a></h3>

                        <div id="rczone" class="collapse in">

                            <p>

                                Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec.

                            </p>

                        </div>



                    </div>

                    <div class="tab-pane" id="review">

                        <h2>Review</h2>

                        <div class="star-holder ">
                            <div class="star big" data-score="4"></div>
                        </div><br>



                        <p>

                            Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec.

                        </p>

                        <p>

                            Morbi imperdiet lacus nec ante blandit, sit amet fermentum magna faucibus. Nunc nec libero id urna vulputate venenatis. Aenean vulputate odio felis, in rhoncus sapien auctor nec. Donec non posuere sem. Ut quis egestas libero, mattis gravida nibh. Phasellus a nisi ac mi luctus tincidunt et non est. Proin ac orci rhoncus arcu bibendum molestie vel et metus. Aenean iaculis purus et velit iaculis, nec convallis ipsum ornare. Integer a orci enim.

                        </p>



                    </div>

                    <div class="tab-pane" id="articles">

                        <h2>Article</h2>

                        <p>

                            Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec.

                        </p>

                        <p>

                            Morbi imperdiet lacus nec ante blandit, sit amet fermentum magna faucibus. Nunc nec libero id urna vulputate venenatis. Aenean vulputate odio felis, in rhoncus sapien auctor nec. Donec non posuere sem. Ut quis egestas libero, mattis gravida nibh. Phasellus a nisi ac mi luctus tincidunt et non est. Proin ac orci rhoncus arcu bibendum molestie vel et metus. Aenean iaculis purus et velit iaculis, nec convallis ipsum ornare. Integer a orci enim.

                        </p>

                        <p>

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ligula eros, accumsan non faucibus id, laoreet et nulla. Donec leo libero, laoreet non est at, semper sollicitudin dui. Phasellus rutrum, arcu et dictum malesuada, lectus lorem porta nibh, et sodales dolor neque ac leo. Mauris rutrum sem et mauris pulvinar molestie. Aliquam erat volutpat. Suspendisse potenti. Pellentesque enim nunc, pulvinar id iaculis nec, sollicitudin vitae enim. Phasellus sed ligula nisi. Integer sit amet lacus sed massa imperdiet pulvinar et vel orci. Suspendisse id arcu id elit condimentum posuere id nec massa. Quisque tristique sapien vel sem convallis, vel facilisis mauris ultricies.

                        </p>

                    </div>

                    <div class="tab-pane" id="comment">

                        <h2><span>4</span> Comments</h2>

                        <hr>

                        <div class="comments-holder">

                            <div class="comment-item row">

                                <div class="col-xs-12 col-md-3 col-sm-4 col-lg-2">

                                    <div class="avatar">

                                        <img alt="" src="images/avatar01.jpg" />

                                    </div>



                                </div>

                                <div class="col-xs-12 col-md-9 col-sm-8 col-lg-10">

                                    <div class="comment-body">

                                        <span class="author">

                                            john doe

                                        </span>

                                        <span class="date-time">

                                            2 hours ago

                                        </span>

                                        <p>

                                            Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec.

                                        </p>

                                    </div>

                                </div>

                            </div>

                            <div class="comment-item row">

                                <div class="col-xs-12 col-md-3 col-sm-4 col-lg-2">

                                    <div class="avatar">

                                        <img alt="" src="images/avatar01.jpg" />

                                    </div>



                                </div>

                                <div class="col-xs-12 col-md-9 col-sm-8 col-lg-10">

                                    <div class="comment-body">

                                        <span class="author">

                                            john doe

                                        </span>

                                        <span class="date-time">

                                            2 hours ago

                                        </span>

                                        <p>

                                            Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec.

                                        </p>

                                    </div>

                                </div>

                            </div>

                            <div class="comment-item row">

                                <div class="col-xs-12 col-md-3 col-sm-4 col-lg-2 col-xs-offset-0 col-md-offset-2">

                                    <div class="avatar">

                                        <img alt="" src="images/avatar01.jpg" />

                                    </div>



                                </div>

                                <div class="col-xs-12 col-md-7 col-sm-8 col-lg-8">

                                    <div class="comment-body">

                                        <span class="author">

                                            john doe

                                        </span>

                                        <span class="date-time">

                                            2 hours ago

                                        </span>

                                        <p>

                                            Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec.

                                        </p>

                                    </div>

                                </div>

                            </div>

                            <div class="comment-item row">

                                <div class="col-xs-12 col-md-3 col-sm-4 col-lg-2">

                                    <div class="avatar">

                                        <img alt="" src="images/avatar01.jpg" />

                                    </div>



                                </div>

                                <div class="col-xs-12 col-md-9 col-sm-8 col-lg-10">

                                    <div class="comment-body">

                                        <span class="author">

                                            john doe

                                        </span>

                                        <span class="date-time">

                                            2 hours ago

                                        </span>

                                        <p>

                                            Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec.

                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>



                        <div class="comment-form-holder">

                            <h3>write a comment</h3>

                            <hr>

                            <form class="submit-comment-form">

                                <div class="row field-row">

                                    <div class="col-xs-6">

                                        <input class="required " placeholder="Name*">

                                    </div>



                                    <div class="col-xs-6">



                                        <input class="required" placeholder="Email*">



                                    </div>

                                </div>

                                <textarea class="col-xs-12" placeholder="Type here your comment..." rows="7"></textarea>

                                <button type="submit" class="button green narrow">Submit Now</button>

                            </form>

                        </div>

                    </div>

                    <div class="tab-pane" id="map">

                        <div class="hotel-map-holder" data-lang="41.029643" data-lat="28.977599" data-info="<h3>Traveline House</h3>Trafford Wharf Road, Manchester M17 1AB,<br>United Kingdom<br>+44 161 835 3500">

                            <div id="hotel-map" class="map">



                            </div>

                        </div>

                    </div> -->

                    <div class="tab-pane active" id="availability">

                        <h2>available rooms</h2>
                        <!-- <br /> -->


                        <div class="date">

                            <?php
                            $myTime = CodeIgniter\I18n\Time::now('Asia/Jakarta', 'id_ID');
                            echo ($myTime->toLocalizedString('d MMMM yyyy'));
                            ?>
                        </div>
                        <form action="<?= base_url('book') ?>" method="get">
                            <div>
                                <div class="search-field">
                                    <div class="col-field-left">

                                        <label for="check-in-date2">Check in date</label>

                                        <br />

                                        <input id="check-in-date2" type="date" name="checkin" value="" required />

                                    </div>
                                    <div class="col-field-right">

                                        <label for="check-out-date2">Check out date</label>

                                        <br />

                                        <input id="check-out-date2" type="date" name="checkout" required />

                                    </div>
                                </div>
                            </div>

                            <hr>


                            <div class="contents grid-contents available-rooms ">

                                <?php foreach ($details as $value) {
                                ?>

                                    <input type="hidden" name="id" value="<?= $value['hoteldetails_id'] ?>">
                                    <div class="row">

                                        <div class="content  wide">


                                            <div class="inner">

                                                <div class="col-xs-12 col-md-4 no-margin">

                                                    <a class="thumbnailz" href="#">

                                                        <img src="<?= base_url('image/hoteldetails/' . $value['image']) ?>" alt="Your Hotel Title Here" class="responsive-image" />

                                                        <span class="overlay">Details</span>

                                                    </a>

                                                </div>

                                                <div class="col-xs-12 col-md-5 no-margin">



                                                    <div class="entry">



                                                        <article class="entry-content">

                                                            <h2 class="post-title"><a href="#" title="Your Hotel Title Here"><?= $value['type'] ?></a></h2>



                                                            <span class="price"><span class="higlight emphasize value">Rp.<?= $value['price'] ?></span> /Malam</span><br />



                                                            <!-- <p>Phasellus condimentum lacus nec justo lacinia sodales. Pellentesque pellentesque ultricies urna, at pretium est aliquet et. Sed nec porta lectus. Sed laoreet tellus at mollis porta.</p> -->

                                                        </article>







                                                    </div><!-- /.entry -->

                                                </div>



                                                <div class="col-xs-12 col-md-3 no-margin">

                                                    <div class="right-area">



                                                        <div class="book-holder">

                                                            <div class="field star-holder">
                                                                <p>Fasilitas :<?= $value['fasilitas'] ?></p>
                                                            </div>

                                                            <div class="field max-holder">

                                                                Max <span>

                                                                    <i class="fa fa-user"></i>



                                                                </span>
                                                                <?= $value['max_user'] ?>
                                                            </div>

                                                            <div class="field">

                                                                <button type="submit" class="button wide-fat">Book now</button>

                                                            </div>



                                                        </div>

                                                    </div>

                                                </div>

                                            </div>



                                        </div><!-- /.content -->









                                    </div><!-- /.row -->


                                <?php
                                } ?>



                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </div>



        <div class="col-xs-12 col-sm-4">

            <div class="sidebar-holder">

                <article class="entry-content">

                    <h2 class="post-title"><a href="#" title="Your Hotel Title Here"><?= $details['0']['nama_hotel'] ?></a></h2>



                    <span class="price"><span class="higlight emphasize value">$150</span> /Night</span><br />



                    <div class="star-holder ">
                        <h4> <?= $details[0]['alamat'] ?></h4>
                    </div>



                    <div class="rating-area">

                        <h1>amazing</h1>

                        <div class="stats">

                            <i class="fa fa-thumbs-o-up"></i>

                            <span>3.29</span> average based on <span>127</span> ratings.

                        </div>

                        <div class="bars">

                            <div class="bar-item">

                                <span class="lbl">5 stars</span>



                                <div class="bar" data-width="40%"></div>

                            </div>

                            <div class="bar-item">

                                <span class="lbl">4 stars</span>



                                <div class="bar" data-width="20%"></div>

                            </div>

                            <div class="bar-item">

                                <span class="lbl">3 stars</span>



                                <div class="bar" data-width="60%"></div>

                            </div>

                            <div class="bar-item">

                                <span class="lbl">2 stars</span>



                                <div class="bar" data-width="10%"></div>

                            </div>

                            <div class="bar-item">

                                <span class="lbl">1 stars</span>



                                <div class="bar" data-width="50%"></div>

                            </div>

                        </div>

                        <hr>



                        <a href="#" class="button wide-fat capital">add to favorite list</a>

                        <a href="#" class="button green wide-fat capital">book now</a>

                    </div>





                </article>



                <div class="widget-support widget">

                    <h2>you need support?</h2>

                    <ul>

                        <li>

                            <div class="lbl">hotline</div>

                            <div class="value">+84 123 456 789</div>

                        </li>

                        <li>

                            <div class="lbl">email</div>

                            <div class="value"><a href="#">info@example.com</a></div>

                        </li>

                        <li>

                            <div class="lbl">livechat</div>

                            <div class="value"><a href="#">support (Skype ID)</a></div>

                        </li>

                        <li>

                            <div class="lbl">support forum</div>

                            <div class="value"><a href="#" class="capital">traveline online</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>


<?= $this->endSection() ?>