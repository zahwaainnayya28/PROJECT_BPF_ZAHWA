<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2><?= $judul; ?></h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Sample Inner Page</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->

    <section class="sample-page">
        <div class="container" data-aos="fade-up">
            <!-- Page Heading -->
            <div class="row">
                <?php $i = 1; ?>
                <?php foreach ($produk as $us) : ?>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div><?= $us['nama_produk'] ?></div>
                                        <div class="tetxt-xs font-weight-bold text-gray-800">Rp.<?= $us['harga'] ?></div>
                                        <div>Deskripsi</div><?= $us['deskripsi'] ?>
                                    </div>
                                    <div class="col-auto">
                                        <img src="<?= base_url('assets/assets1/assets/images/produk/') . $us['gambar']; ?>" style="width:100px" class="img-thumbnail">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>

</main>