<?php require_once('../../layouts/admin/header.php') ?>

<?php
$users = query("SELECT * FROM pengguna WHERE role = 2");
$services = all("layanan");
?>

<?php
if (isset($_POST['submit'])) {
    unset($_POST['submit']);

    store("pesanan");
    flash("Berhasil menambah pesanan!", "success");
    header("Location: ./index.php");
}
?>
<div id="main" class="min-vh-100 pt-4">
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Tambah Pesanan</h1>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow components-section">
        <div class="card-body">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-12 col-12 mb-3">
                        <label for="id_pengguna">Nama Pengguna</label>
                        <select class="form-select select2" id="id_pengguna" name="id_pengguna" aria-label="Default select example">
                            <?php foreach ($users as $user) : ?>
                                <option value="<?= $user['id'] ?>"><?= $user['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-12 col-12 mb-3">
                        <label for="id_layanan">Jenis Layanan</label>
                        <select class="form-select select2" id="id_layanan" name="id_layanan" aria-label="Default select example">
                            <?php foreach ($services as $service) : ?>
                                <option value="<?= $service['id'] ?>"><?= $service['nama'] ?> (Rp. <?= number_format($service['harga']) ?>)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="total_pakaian">Total Pakaian</label>
                        <input class="form-control" id="total_pakaian" name="total_pakaian" type="number" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="total_harga">Total Harga</label>
                        <input class="form-control" id="total_harga" name="total_harga" type="number" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="tanggal_pesan">Tanggal Pemesanan</label>
                        <input class="form-control" id="tanggal_pesan" name="tanggal_pesan" type="date" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="tanggal_ambil">Tanggal Pengambilan</label>
                        <input class="form-control" id="tanggal_ambil" name="tanggal_ambil" type="date" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-end">
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>