<?php require_once('../../layouts/admin/header.php') ?>


<div id="main" class="min-vh-100 pt-4">
    <div class="row">
        <div class="col-12 mb-4">
          <h2 class="h4">Selamat Datang, <?= $_SESSION['username'] ?></h2>
        </div>
        <div class="col-12 text-center">
            <img src="../../assets/img/lineup.png" alt="" class="img-fluid" style="height: 500px">
            <h5 style="font-weight: bold;">Kayaknya belum ada nih klub kesenenanganmu</h5>
            <button class="btn btn-primary">Tambahkan Watch List</button>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>