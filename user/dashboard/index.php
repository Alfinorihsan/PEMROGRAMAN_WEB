<?php require_once('../../layouts/admin/header.php') ?>


<div id="main" class="min-vh-100 pt-4">
    <div class="row">
        <div class="col-12 mb-4">
          <h2 class="h4">Selamat Datang, <?= $_SESSION['username'] ?></h2>
        </div>
        <div class="col-12 text-center">
            <img src="../../assets/img/Measure-pana.png" alt="" class="img-fluid" style="height: 300px">
            <h5 style="font-weight: bold;">Kamu belum ada buat pesanan</h5>
            <button class="btn btn-primary">Buat Pesanan Sekarang</button>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>