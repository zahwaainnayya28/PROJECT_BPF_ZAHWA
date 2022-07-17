<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Complexion
                </div>
                <div class="card-body">
                    <img src="<?= base_url('assets/assets1/assets/images/complexion/') . $complexion['gambar']; ?>" style="width: 150px;" class="img-thumbnail"></td>
                    <h2 class="card-title">
                        <?= $complexion['nama']; ?></h2>
                    <div class="row">
                        <div class="col-md-4">Harga</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $complexion['harga']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Deskripsi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $complexion['deskripsi']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Referensi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $complexion['referensi']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Komposisi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $complexion['komposisi']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Shade</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $complexion['shade']; ?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <section id="book-a-table" class="book-a-table">
                        <div class="container" data-aos="fade-up">

                            <div class="section-header">
                                <h2>Complexion</h2>
                                <p>Choice <span>Your Stay</span> With Us</p>
                            </div>

                            <div class="row g-0">

                                <div class="col-lg-4 reservation-img" style="background-image: url(<?= base_url('assets/assets1/assets/images/complexion/') . $complexion['gambar']; ?>);" data-aos="zoom-out" data-aos-delay="0"></div>

                            </div>
                        </div>
                    </section>
                    <br>