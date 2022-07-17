<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign up - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('assets/') ?>assets/img/BeautyLogo.png" rel="icon">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets1/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets1/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets1/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets1/assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets1/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets1/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets1/assets/css/typography.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets1/assets/css/default-css.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets1/assets/css/styles.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>assets1/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?= base_url('assets/') ?>assets1/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form class="user" method="post" action="<?= base_url('Auth/registrasi') ?>">
                    <div class="login-form-head">
                        <h4>Sign up</h4>
                        <p>Hello there, Sign up and Join with Us</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="nama">Full Name</label>
                            <input type="text" name="nama" id="nama" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            <i class="ti-user"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="email">Email address</label>
                            <input type="email" name="email" id="email" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="password">Password</label>
                            <input type="password" name="password1" id="password" value="<?= set_value('password1'); ?>">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="password2">Confirm Password</label>
                            <input type="password" name="password2" id="password2">
                            <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                            <div class="form-footer text-center mt-5">
                                <p class="text-muted">Don't have an account? <a href="<?= base_url('Auth') ?>">Sign in</a></p>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="<?= base_url('assets/') ?>assets1/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?= base_url('assets/') ?>assets1/assets/js/popper.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets1/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets1/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets1/assets/js/metisMenu.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets1/assets/js/jquery.slimscroll.min.js"></script>
    <script src="<?= base_url('assets/') ?>assets1/assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="<?= base_url('assets/') ?>assets1/assets/js/plugins.js"></script>
    <script src="<?= base_url('assets/') ?>assets1/assets/js/scripts.js"></script>
</body>

</html>