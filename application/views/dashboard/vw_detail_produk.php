<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Produk
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $produk['nama_produk']; ?></h2>
                    <div class="row">
                        <div class="col-md-4">Harga</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $produk['harga']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Deskripsi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $produk['deskripsi']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Referensi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $produk['referensi']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Komposisi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $produk['komposisi']; ?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Produk') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>