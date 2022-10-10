<?php require_once('../../layouts/admin/header.php') ?>


<div id="main" class="min-vh-100 pt-4">
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Tambah Hasil Pertandingan</h1>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow components-section">
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-md-7 col-12 mb-3">
                        <label for="birthday">Klub Pertama</label>
                        <select class="form-select select2" id="country" aria-label="Default select example">
                            <option value="1">Klub 1 - Eropa</option>
                            <option value="2">Klub 2 - Asia</option>
                            <option value="3">Klub 3 - Asia</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="birthday">Skor</label>
                        <input class="form-control" id="birthday" type="number" required>
                    </div>
                    <div class="col-md-3 mb-3 d-flex align-items-center pt-4">
                        <div class="form-check pt-3">
                            <input class="form-check-input" type="radio" name="is_winning" value="1" id="defaultCheck10">
                            <label class="form-check-label" for="defaultCheck10">Tim Pemenang</label>
                        </div>
                    </div>

                    <div class="col-md-7 col-12 mb-3">
                        <label for="birthday">Klub Kedua</label>
                        <select class="form-select" id="country" aria-label="Default select example">
                            <option value="1">Klub 1 - Eropa</option>
                            <option value="2">Klub 2 - Asia</option>
                            <option value="3">Klub 3 - Asia</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="birthday">Skor</label>
                        <input class="form-control" id="birthday" type="number" required>
                    </div>
                    <div class="col-md-3 mb-3 d-flex align-items-center pt-4">
                        <div class="form-check pt-3">
                            <input class="form-check-input" type="radio" name="is_winning" value="1" id="defaultCheck10">
                            <label class="form-check-label" for="defaultCheck10">Tim Pemenang</label>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="formFile" class="form-label">Highlight Pertandingan (.JPG)</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="birthday">Komentar</label>
                        <textarea class="form-control editor" placeholder="Catatan"></textarea>
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