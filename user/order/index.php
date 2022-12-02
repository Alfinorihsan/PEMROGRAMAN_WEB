<?php require_once('../../layouts/admin/header.php') ?>
<?php
$orders = query("SELECT
    pesanan.*,
    layanan.nama as nama_layanan,
    layanan.harga as harga_layanan
    FROM pesanan
    JOIN layanan ON pesanan.id_layanan=layanan.id
    WHERE pesanan.id_pengguna={$_SESSION['id']}
");
?>

<div id="main" class="min-vh-100 pt-4">
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Pesanan</h1>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow components-section">
        <div class="card-body">
            <table class="datatable table w-full">
                <thead>
                    <tr>
                        <th></th>
                        <th>Layanan</th>
                        <th>Tanggal Pesan</th>
                        <th>Tanggal Ambil</th>
                        <th>Total Pakaian</th>
                        <th>Total Harga</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($orders as $order) : ?>
                        <tr>
                            <th><?= $i ?></th>
                            <td><?= $order['nama_layanan'] ?> (Rp. <?= number_format($order['harga_layanan']) ?>)</td>
                            <td><?= $order['tanggal_pesan'] ?></td>
                            <td><?= $order['tanggal_ambil'] ?></td>
                            <td><?= $order['total_pakaian'] ?></td>
                            <td>Rp. <?= number_format($order['total_harga']) ?></td>
                            <td><?= $order['deskripsi'] ?></td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<?php require_once('../../layouts/admin/footer.php') ?>