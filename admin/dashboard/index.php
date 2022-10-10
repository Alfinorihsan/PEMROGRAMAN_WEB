<?php require_once('../../layouts/admin/header.php') ?>


<div id="main" class="min-vh-100 pt-4">
    <div class="row">
        <div class="col-12 mb-4">
            <h2 class="h4">Selamat Datang, <?= $_SESSION['username'] ?></h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h2 class="fs-5 fw-bold mb-0">Pesanan Terakhir</h2>
                            </div>
                            <div class="col text-end"><a href="#" class="btn btn-sm btn-primary">Lihat Semua</a></div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-bottom" scope="col">Nama</th>
                                    <th class="border-bottom" scope="col">Jenis</th>
                                    <th class="border-bottom" scope="col">Ukuran</th>
                                    <th class="border-bottom" scope="col">Tanggal Ambil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-gray-900" scope="row">Ananta</th>
                                    <td class="fw-bolder text-gray-500">Baju</td>
                                    <td class="fw-bolder text-gray-500">24-40-10</td>
                                    <td class="fw-bolder text-gray-500">19 Jan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                        <h2 class="fs-5 fw-bold mb-0">Progres Pengerjaan</h2><a href="#" class="btn btn-sm btn-primary">Lihat Semua</a>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-auto"><svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                </svg></div>
                            <div class="col">
                                <div class="progress-wrapper">
                                    <div class="progress-info">
                                        <div class="h6 mb-0">Jahit Baju</div>
                                        <div class="small fw-bold text-gray-500"><span>75 %</span></div>
                                    </div>
                                    <div class="progress mb-0">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-4">
                            <div class="col-auto"><svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                </svg></div>
                            <div class="col">
                                <div class="progress-wrapper">
                                    <div class="progress-info">
                                        <div class="h6 mb-0">Jahit Celana</div>
                                        <div class="small fw-bold text-gray-500"><span>45 %</span></div>
                                    </div>
                                    <div class="progress mb-0">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>