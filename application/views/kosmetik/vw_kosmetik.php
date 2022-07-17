<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
        <div class="row justify-content-between gy-5">
            <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                <h2 data-aos="fade-up">Enjoy Your Beauty<br>In Here</h2>
                <p data-aos="fade-up" data-aos-delay="100">Caring about beauty, needs to start with heart and soul, otherwise makeup won't help</p>
                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                    <a href="https://www.youtube.com/watch?v=pfq000AF1i8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                <img src="<?php echo base_url('assets/img/kosmetik1.png'); ?>" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="1000">
            </div>
        </div>
    </div>
</section><!-- End Hero Section -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>About Skin</h2>
                <p>Learn More <span>About Skin</span></p>
            </div>

            <div class="row gy-4">
                <div class="col-lg-7 position-relative about-img" style="background-image: url(<?= base_url('assets/') ?>assets/img/Skin1.jpg) ;" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                    <div class="content ps-0 ps-lg-5">
                        <p class="fst-italic">
                            Tipe kulit yang sehat terdiri dari kulit normal, berminyak, kering, dan kombinasi. Ada pula tipe kulit mudah berjerawat dan sensitif,
                            tapi kedua tipe ini biasanya dipengaruhi oleh bermacam-macam faktor,
                            termasuk kondisi medis tertentu pada struktur kulit manusia.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> Kulit normal</li>
                            <li><i class="bi bi-check2-all"></i> Kulit kering</li>
                            <li><i class="bi bi-check2-all"></i> Kulit berminyak</li>
                            <li><i class="bi bi-check2-all"></i> Kulit kombinasi</li>
                        </ul>
                        <p>
                            Mengenali tipe kulit berperan penting sebagai pedoman perawatan untuk kulit. Ini disebabkan karena perawatan kulit yang tidak sesuai justru dapat mengakibatkan breakout, iritasi kulit, atau bahkan penuaan dini.

                            Jadi, perhatikanlah seperti apa warna, tekstur, dan kelembapan kulit Anda sebelum Anda membeli produk apa pun. Dengan begitu, kulit Anda akan mendapatkan nutrisi dan manfaat yang sesuai dengan jenisnya.
                        </p>
                        <h4><a href="<?= base_url('Info/tampil') ?>" class="badge-info-center">Information Detail About Your Skin</a></h4>
                        <br> <br> <br>
                        <div class="position-relative mt-4">
                            <img src="img/about-2.jpg" class="img-fluid" alt="">
                            <a href="https://www.youtube.com/watch?v=CvdVZtG2-Co" class="glightbox play-btn"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->

    <!-- ======= Stats Counter Section ======= -->
    <!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">


        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Choice</h2>
                <p>Check Our <span>Choice</span></p>
            </div>

            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                        <h4>Lipstick</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                        <h4>Complexion </h4>
                    </a><!-- End tab nav item -->

                    <!-- <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                        <h4>Eye & Eye</h4>
                    </a>
                </li> -->
                    <!-- End tab nav item -->

                    <!-- <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                        <h4>Dinner</h4>
                    </a>
                </li> -->
                    <!-- End tab nav item -->

            </ul>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                <div class="tab-pane fade active show" id="menu-starters">

                    <div class="tab-header text-center">
                        <p>Product</p>
                        <h3>Lipstick</h3>
                    </div>

                    <div class="row">

                        <?php $i = 1; ?>
                        <?php foreach ($produk as $us) : ?>
                            <div class="col-lg-4 menu-item">
                                <a href="<?= base_url('assets/assets1/assets/images/produk/') . $us['gambar']; ?>" class="glightbox"> <img src="<?= base_url('assets/assets1/assets/images/produk/') . $us['gambar']; ?>" class="menu-img img-fluid" alt=""></a>
                                <h4><?= $us['nama_produk'] ?></h4>
                                <br>
                                <a href=<?= $us['referensi'] ?> class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i>Watch
                                    Video</a>
                                <p class="price">
                                    Rp.<?= $us['harga'] ?>
                                </p>
                                <div class="text-center">
                                    <a href="<?= base_url('Produk1/detail/') . $us['id']; ?>" class="badge-info">Detail</a>
                                </div>
                            </div>
                            <?php $i++; ?>
                        <?php endforeach ?>
                    </div>
                </div><!-- End Starter Menu Content -->

                <div class="tab-pane fade" id="menu-breakfast">

                    <div class="tab-header text-center">
                        <p>Product</p>
                        <h3>Complexion</h3>
                    </div>

                    <div class="row">

                        <?php $i = 1; ?>
                        <?php foreach ($complexion as $us) : ?>
                            <div class="col-lg-4 menu-item">
                                <a href="<?= base_url('assets/assets1/assets/images/complexion/') . $us['gambar']; ?>" class="glightbox"> <img src="<?= base_url('assets/assets1/assets/images/complexion/') . $us['gambar']; ?>" class="menu-img img-fluid" alt=""></a>
                                <h4><?= $us['nama'] ?></h4>
                                <br>
                                <a href=<?= $us['referensi'] ?> class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i>Watch
                                    Video</a>

                                <p class="price">
                                    Rp.<?= $us['harga'] ?>
                                </p>
                                <div class="text-center">
                                    <a href="<?= base_url('Complexion/detail/') . $us['id']; ?>" class="badge-info">Detail</a>
                                </div>
                            </div>
                            <?php $i++; ?>
                        <?php endforeach ?>
                    </div>
                </div><!-- End Breakfast Menu Content -->

                <!-- End Dinner Menu Content -->

            </div>

        </div>

    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- End testimonial item -->

    <!-- End Testimonials Section -->

    <!-- ======= Events Section ======= -->
    <!-- End Chefs Section -->

    <!-- ======= Book A Table Section ======= -->
    <!-- End Reservation Form -->

    </div>

    </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>gallery</h2>
                <p>Check <span>Our Gallery</span></p>
            </div>

            <div class="gallery-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url('assets/') ?>assets/img/gallery/Photo-1.jpg"><img src="<?= base_url('assets/') ?>assets/img/gallery/Photo-1.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url('assets/') ?>assets/img/gallery/Photo-2.png"><img src="<?= base_url('assets/') ?>assets/img/gallery/Photo-2.png" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url('assets/') ?>assets/img/gallery/Photo-3.png"><img src="<?= base_url('assets/') ?>assets/img/gallery/Photo-3.png" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url('assets/') ?>assets/img/gallery/Photo-4.png"><img src="<?= base_url('assets/') ?>assets/img/gallery/Photo-4.png" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url('assets/') ?>assets/img/gallery/Photo-5.jpg"><img src="<?= base_url('assets/') ?>assets/img/gallery/Photo-5.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url('assets/') ?>assets/img/gallery/Photo-6.jpg"><img src="<?= base_url('assets/') ?>assets/img/gallery/Photo-6.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url('assets/') ?>assets/img/gallery/Photo-7.jpg"><img src="<?= base_url('assets/') ?>assets/img/gallery/Photo-7.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?= base_url('assets/') ?>assets/img/gallery/Photo-8.png"><img src="<?= base_url('assets/') ?>assets/img/gallery/Photo-8.png" class="img-fluid" alt=""></a></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->

    <!--End Contact Form -->

    </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->