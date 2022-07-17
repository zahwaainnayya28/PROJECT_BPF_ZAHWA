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
                        <input type="hidden" name="id" value="<?= $complexion['id']; ?>">
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" value="<?= $complexion['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
                                    <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                            </td>
                        </tr>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" value="<?= $complexion['harga']; ?>" class="form-control" id="harga" placeholder="Harga">
                            <?= form_error('harga', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" name="deskripsi" value="<?= $complexion['deskripsi']; ?>" class="form-control" id="deskripsi" placeholder="Deskripsi">
                            <?= form_error('deskripsi', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="referensi">Referensi</label>
                            <input type="text" name="referensi" value="<?= $complexion['referensi']; ?>" class="form-control" id="referensi" placeholder="Referensi">
                            <?= form_error('referensi', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="komposisi">Komposisi</label>
                            <input type="text" name="komposisi" value="<?= $complexion['komposisi']; ?>" class="form-control" id="komposisi" placeholder="Komposisi">
                            <?= form_error('komposisi', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="shade">Shade</label>
                            <input type="text" name="shade" value="<?= $complexion['shade']; ?>" class="form-control" id="shade" placeholder="Shade">
                            <?= form_error('shade', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <img src="<?= base_url('assets/assets1/assets/images/complexion/') . $complexion['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                                <?= form_error('gambar', '<small class="text-danger p1-3">', '</small>'); ?>
                            </div>
                        </div>
                        <a href="<?= base_url('Complexion') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit Complexion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>