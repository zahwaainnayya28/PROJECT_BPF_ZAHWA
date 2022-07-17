<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h1 class="text-black text-capitalize ps-3"><?php echo $judul; ?></h1>
                    </div>
                </div>
                <div class="card-body">

                    <form action="" method="POST" enctype="multipart/form-data">
                        <tr>
                            <td>
                                <div class="custom-file">
                                    <label for="gambar" class="custom-file-label">Choose File</label>
                                    <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                </div>
                                <div class="form-group">
                                    <label for="nama_produk">Nama</label>
                                    <input type="text" name="nama_produk" class="form-control" id="nama_produk" placeholder="Nama">
                                    <?= form_error('nama_produk', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                            </td>
                        </tr>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga" placeholder="Harga">
                            <?= form_error('harga', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi">
                            <?= form_error('deskripsi', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="referensi">Referensi</label>
                            <input type="text" name="referensi" class="form-control" id="referensi" placeholder="Referensi">
                            <?= form_error('referensi', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="komposisi">Komposisi</label>
                            <input type="text" name="komposisi" class="form-control" id="komposisi" placeholder="Komposisi">
                            <?= form_error('komposisi', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <a href="<?= base_url('Produk') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>