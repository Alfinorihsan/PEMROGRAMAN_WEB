<?php require_once('../../layouts/admin/header.php') ?>


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
            <form action="">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="birthday">Nama</label>
                        <input class="form-control" id="birthday" type="number" required>
                    </div>
                    <div class="col-md-7 col-12 mb-3">
                        <label for="type">Tipe Pakaian</label>
                        <select class="form-select select2" id="type" name="type" aria-label="Default select example">
                            <option value="1">Baju</option>
                            <option value="2">Celana</option>
                        </select>
                    </div>
                    <div class="col-md-5 col-12 mb-3">
                        <label for="service">Jenis Layanan</label>
                        <select class="form-select select2" id="service" aria-label="Default select example">
                            <option value="1">Jahit</option>
                            <option value="2">Besarin</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="birthday">Bust</label>
                        <input class="form-control" id="birthday" type="number" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="birthday">Waist</label>
                        <input class="form-control" id="birthday" type="number" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="birthday">Hips</label>
                        <input class="form-control" id="birthday" type="number" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="birthday">Tanggal Pengambilan</label>
                        <input class="form-control" id="birthday" type="date" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="formFile" class="form-label">Bukti Pesanan</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>

                <div class="d-flex align-items-center justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>