<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>
<section id="travel-info" class="section wide-fat reservation-pages">
    <div class="container">

        <div class="col-xs-12 col-sm-8">
            <div class="form-holder">
                <form class="info-form" method="post" action="<?= base_url('payment') ?>">
                    <input type="hidden" name="total" value="<?= $param[0][0]['price'] ?>">
                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-6">
                            <input class="required " placeholder="Nama" name="nama" required>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <input class="required" type="email" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="row field-row">

                        <div class="col-xs-12 col-sm-6">

                            <input class="required " type="number" placeholder="No Hp" name="no_hp" required>
                        </div>

                    </div>
                    <button type="submit" class="button green narrow">Proceed To Next Step</button>

                </form>

            </div>

        </div>
        <div class="col-xs-12 col-sm-4">

            <div class="sidebar-holder">

                <article class="entry-content">

                    <h2 class="post-title"><a href="#" title="Your Hotel Title Here"><?= $param[0][0]['nama_hotel'] ?></a></h2>
                    <span class="price"><span class="higlight emphasize value">Rp. <?= $param[0][0]['price'] ?></span> /Malam</span><br />
                    <hr>
                    <div class="star-holder ">
                        <p><?= $param[0][0]['alamat'] ?></p>
                    </div>

                    <br>

                    <hr>





                </article>



                <div class="spicifications-widget">



                    <ul>

                        <li>

                            <div class="lbl">rooms</div>

                            <div class="value"><?= $param[0][0]['type'] ?></div>

                        </li>

                        <li>

                            <div class="lbl">fasilitas</div>

                            <div class="value"><?= $param[0][0]['fasilitas'] ?></div>

                        </li>

                        <li>

                            <div class="lbl">check in date</div>

                            <div class="value"><?= $param['checkin'] ?></div>

                        </li>

                        <li>

                            <div class="lbl">checkout date</div>

                            <div class="value"><?= $param['checkout'] ?></div>

                        </li>





                    </ul>

                    <hr>


                </div>



            </div>





        </div>









    </div>





</section>

<?= $this->endSection() ?>