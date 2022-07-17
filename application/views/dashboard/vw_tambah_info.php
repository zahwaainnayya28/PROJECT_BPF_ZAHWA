<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Informasi
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Jenis Kulit</label>
                            <input name="nama" type="text" value="<?= set_value('nama'); ?>" class="form-control" id="nama" placeholder="Nama Jenis Kulit">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input name="deskripsi" type="text" value="<?= set_value('deskripsi'); ?>" class="form-control" id="deskripsi" placeholder="Deskripsi">
                            <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="rekomendasi">Rekomendasi</label>
                            <input name="rekomendasi" type="text" value="<?= set_value('rekomendasi'); ?>" class="form-control" id="rekomendasi" placeholder="Rekomendasi">
                            <?= form_error('rekomendasi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Info</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>