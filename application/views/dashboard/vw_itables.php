<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Dashboard</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Datatable</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <img class="avatar user-thumb" src="<?= base_url('assets/') ?>assets/img/BeautyLogo.png" alt="avatar">
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?= $user['nama']; ?><i class="fa fa-angle-down"></i></h4>
                <div class="dropdown-menu">
                    <!-- <a class="dropdown-item" href="<?= base_url('GantiPw') ?>">Change Password</a> -->
                    <a class="dropdown-item" href="<?= base_url('Auth/logout') ?>">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <?= $this->session->flashdata('message'); ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Table Info</h4>
                    <div class="float-fight">
                        <a href="<?= base_url() ?>Info/tambah" class="btn btn-info mb-2">Tambah Info</a>
                    </div>
                    <div class="data-tables datatable-dark">
                        <table id="dataTable3" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>Nama Jenis Kulit</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                    <th>Rekomendasi</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($info as $us) : ?>
                                    <tr>
                                        <td><?= $us['nama'] ?></td>
                                        <td><?= $us['deskripsi'] ?></td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a href="<?= base_url('Info/edit/') . $us['id']; ?>" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                                <li><a href="<?= base_url('Info/hapus/') . $us['id']; ?>" class="text-danger"><i class="ti-trash"></i></a></li>
                                            </ul>
                                        </td>
                                        <td><?= $us['rekomendasi'] ?></td>

                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark table end -->
    </div>
</div>
</div>
<!-- main content area end -->