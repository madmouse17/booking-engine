<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>
<section id="confirm-page" class="section wide-fat reservation-pages">

    <div class="container">

        <div class="col-xs-12 col-sm-8">

            <div class="confirm-page">

                <h1>thank you. your booking is now confirmed</h1>

                <hr>

                <article>

                    <h2>traveller info</h2>

                    <ul class="tabled-ul">

                        <li>

                            <div class="lbl">booking number</div>

                            <div class="value"><?= $val['booking_id'] ?></div>

                        </li>

                        <li>

                            <div class="lbl">Nama</div>

                            <div class="value"><?= $val['nama'] ?></div>

                        </li>
                        <li>

                            <div class="lbl">No Hp</div>

                            <div class="value"><?= $val['no_hp'] ?></div>

                        </li>

                    </ul>

                </article>






            </div>

        </div>



        <div class="col-xs-12 col-sm-4">

            <div class="sidebar-holder">

                <article class="entry-content">

                    <h2 class="post-title"><a href="#" title="Your Hotel Title Here"><?= $val['nama_hotel'] ?></a></h2>





                    <hr>





                    <br>

                    <hr>





                </article>



                <div class="spicifications-widget">



                    <ul>



                        <li>

                            <div class="lbl">Alamat</div>

                            <div class="value"><?= $val['alamat'] ?></div>

                        </li>

                        <li>

                            <div class="lbl">check in date</div>

                            <div class="value"><?= $val['checkin'] ?></div>

                        </li>

                        <li>

                            <div class="lbl">checkout date</div>

                            <div class="value"><?= $val['checkout'] ?></div>

                        </li>


                    </ul>

                    <hr>

                    <div class="total-price">Total: Rp. <span><?= $val['amount'] ?></span>


                    </div>

                    <a href="#" class="button wide-fat">Print Booking</a>

                </div>



            </div>





        </div>









    </div>





</section>
<?= $this->endSection() ?>