<?php require_once('../../layouts/web/header.php') ?>
<?php
include("../../core/functions.php");
$services = all("layanan");

?>
<main>
    <!--? slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider position-relative hero-overly slider-height2  d-flex align-items-center" data-background="../../assets/web/img/hero/h1_hero.png">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="hero-caption hero-caption2">
                                <img src="../../assets/web/img/hero/hero-icon.png" alt="" data-animation="zoomIn" data-delay="1s">
                                <h2 data-animation="fadeInLeft" data-delay=".4s">Layanan</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Left img -->
                <div class="hero-img hero-img2">
                    <img src="../../assets/web/img/hero/h2_hero2.png" alt="" data-animation="fadeInRight" data-transition-duration="5s">
                </div>
            </div>
        </div>
    </div>
    <div class="clients-area section-padding40">
        <div class="container">
            <div class="row">
                <?php $i = 1 ?>
                <?php foreach ($services as $service) : ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-offers mb-50 wow fadeInUp" data-wow-delay=".2s">
                            <div class="offers-cap">
                                <span><?= $i ?></span>
                                <h3><a href="#"><?= $service['nama'] ?></a></h3>
                                <h3>Rp. <?= number_format($service['harga']) ?></h3>
                                <p><?= $service['deskripsi'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>



<?php require_once('../../layouts/web/footer.php') ?>