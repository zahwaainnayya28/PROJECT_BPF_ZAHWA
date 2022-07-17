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
                        <input type="hidden" name="id" value="<?= $info['id']; ?>">
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" value="<?= $info['nama']; ?>" class="form-control" id="nama" placeholder="Nama Jenis Kulit">
                                    <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                            </td>
                        </tr>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" name="deskripsi" value="<?= $info['deskripsi']; ?>" class="form-control" id="deskripsi" placeholder="Deskripsi">
                            <?= form_error('deskripsi', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="rekomendasi">Rekomendasi</label>
                            <input type="text" name="rekomendasi" value="<?= $info['rekomendasi']; ?>" class="form-control" id="rekomendasi" placeholder="rekomendasi">
                            <?= form_error('rekomendasi', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <a href="<?= base_url('Info') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>