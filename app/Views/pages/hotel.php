<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>

<section class="page-head-holder">

    <div class="container">

        <div class="col-xs-6">



            <h2>hotel list</h2>

        </div>

        <div class="col-xs-6">

            <div class="breadcrumb-holder">

                <ol class="breadcrumb">

                    <li><a href="#">Home</a></li>

                    <li class="active"><a href="#">hotel list</a></li>



                </ol>

            </div>

        </div>

    </div>

</section>




















<section id="hotels" class="section wide-fat page">





    <div class="container">









        <div class="hotels-filter">



            <div class="container">



                <div class="search-heading col-md-3 col-sm-6">



                    <h3>120 Hotels from $150</h3>



                </div>



                <div class="vertical-hotel-filter col-md-9 col-sm-6">



                    <form class="hotels-filter-form" method="get">



                        <ul>

                            <li class="short-by form-member">

                                <span>Short by</span>

                            </li>

                            <li class="form-member">

                                <select class="chosen-select">

                                    <option value="">Hotel Name 1</option>

                                    <option value="">Hotel Name 2</option>

                                    <option value="">Hotel Name 3</option>

                                    <option value="">Hotel Name 4</option>

                                    <option value="">Hotel Name 5</option>

                                    <option value="">Hotel Name 6</option>

                                </select>

                            </li>

                            <li class="form-member">

                                <select class="chosen-select">

                                    <option value="">Price 1</option>

                                    <option value="">Price 2</option>

                                    <option value="">Price 3</option>

                                    <option value="">Price 4</option>

                                    <option value="">Price 5</option>

                                    <option value="">Price 6</option>

                                </select>

                            </li>

                            <li class="form-member">

                                <select class="chosen-select">

                                    <option value="">Guest Rating 1</option>

                                    <option value="">Guest Rating 2</option>

                                    <option value="">Guest Rating 3</option>

                                    <option value="">Guest Rating 4</option>

                                    <option value="">Guest Rating 5</option>

                                    <option value="">Guest Rating 6</option>

                                </select>

                            </li>

                            <li class="form-member">

                                <select class="chosen-select">

                                    <option value="">Reviews 1</option>

                                    <option value="">Reviews 2</option>

                                    <option value="">Reviews 3</option>

                                    <option value="">Reviews 4</option>

                                    <option value="">Reviews 5</option>

                                    <option value="">Reviews 6</option>

                                </select>

                            </li>

                            <li class="most-popular form-member"><span>Most Popular</span></li>

                            <li class="filter-btn form-member"><input type="submit" value="Search" /></li>

                        </ul>



                    </form>



                </div>



            </div>



        </div><!-- /.hotels-filter -->







        <div class="contents-wrapper">



            <div class="row">





                <div class="sidebar col-md-3 col-sm-6">





                    <div class="widget">



                        <h3 class="widget-title">Hotel Search</h3>



                        <div class="location-search-widget">



                            <form class="location-search" method="get">



                                <div class="search-field">

                                    <div class="destination-field">

                                        <input id="destination" type="text" />

                                    </div>

                                </div><!-- /.search-field -->



                                <div class="search-field">



                                    <div class="col-field-left">

                                        <label for="check-in-date2">Check in date</label>

                                        <br />

                                        <input id="check-in-date2" class="traveline_date_input" type="text" value="d MM yy" />

                                    </div>



                                    <div class="col-field-right">

                                        <label for="check-out-date2">Check out date</label>

                                        <br />

                                        <input id="check-out-date2" class="traveline_date_input" type="text" value="d MM yy" />

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



                        </div>



                    </div><!-- /.widget -->













                    <div class="widget">



                        <h3 class="widget-title">Price Filter</h3>



                        <div class="price-range-slider">



                            <div id="sliderz"></div>



                        </div><!-- /.price-range-slider -->









                    </div><!-- /.widget -->





                    <div class="widget hotel-type-filter-widget">



                        <h3 class="widget-title">Type</h3>



                        <form>

                            <ul>

                                <li><input type="checkbox" /><label>All</label></li>

                                <li><input type="checkbox" /><label>Hotel</label></li>

                                <li><input type="checkbox" /><label>Resort</label></li>

                                <li><input type="checkbox" /><label>Bed and Breakfast</label></li>

                                <li><input type="checkbox" /><label>Appartment</label></li>

                                <li><input type="checkbox" /><label>Motel</label></li>

                            </ul>

                        </form>



                    </div><!-- /.widget -->

                    <div class="widget hotel-type-filter-widget">



                        <h3 class="widget-title">Hotel Amenities</h3>



                        <form>

                            <ul>

                                <li><input type="checkbox" /><label>Free Parking (16)</label></li>

                                <li><input type="checkbox" /><label>Pets Accepted (12)</label></li>

                                <li><input type="checkbox" /><label>Free Pool (25)</label></li>

                                <li><input type="checkbox" /><label>Free Breakfast (12)</label></li>

                                <li><input type="checkbox" /><label>Massage Services (01)</label></li>

                                <li><input type="checkbox" /><label>Public Bathroom (12)</label></li>

                                <li><input type="checkbox" /><label>Pay Later (03)</label></li>

                                <li><input type="checkbox" /><label>Double Bedrooms (13)</label></li>

                                <li><input type="checkbox" /><label>The Room Gym (14)</label></li>

                                <li><input type="checkbox" /><label>The Dining Room (12)</label></li>



                            </ul>

                        </form>



                    </div><!-- /.widget -->



                </div><!-- /.sidebar -->




                <div class="contents grid-contents col-md-9 col-sm-6">


                    <div class="row">
                        <?php foreach ($hotels as  $hotel) {
                            $image = json_decode($hotel['image_hotel'], true);
                        ?>

                            <div class="content col-md-4 col-sm-12">

                                <div class="inner">

                                    <a class="thumbnailz" href="<?= base_url('hotel/' . $hotel['id'])  ?>">

                                        <img src="<?= base_url('image/hotel/' . $image[0]) ?>" alt="Your Hotel Title Here" class="responsive-image" />

                                        <span class="overlay">Details</span>

                                    </a>

                                    <div class="entry">

                                        <article class="entry-content">

                                            <h2 class="post-title"><a href="<?= base_url('hotel/' . $hotel['id'])  ?>" title="Your Hotel Title Here"><?= $hotel['nama_hotel'] ?></a></h2>



                                            <span class="price"><span class="higlight emphasize value">$150</span> /Night</span><br />



                                            <p><?= $hotel['alamat'] ?></p>

                                        </article>



                                        <div class="entry-meta">
                                            <span class="go-detail"><a href="<?= base_url('/hotel/' . $hotel['id'])  ?>">More</a></span>

                                        </div>



                                    </div><!-- /.entry -->
                                </div>
                            </div><!-- /.content -->
                        <?php
                        }
                        ?>

                    </div><!-- /.row -->

                    <div class="col-xs-12">

                        <div class="pagination-holder right">

                            <ul class="pagination">

                                <li><a href="#">&laquo;</a></li>

                                <li class="active"><a href="#">1</a></li>

                                <li><a href="#">2</a></li>

                                <li><a href="#">3</a></li>

                                <li><a href="#">4</a></li>

                                <li><a href="#">5</a></li>

                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.contents.grid-contents -->
            </div><!-- /.row -->
        </div><!-- /.contents-wrapper -->

    </div>

</section>
<?= $this->endSection() ?>