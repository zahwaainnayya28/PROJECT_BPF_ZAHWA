</div>
<div class="container-fluid">
    <br>
    <br>
    <br>
    <br>
    <h1 class="h3 mb-4 text-gray-800" ><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Info
                </div>
                <div class="card-body">
                    <?php $i = 1; ?>
                    <?php foreach ($info as $us) : ?>
                        <h2 class="card-title">

                            <?= $us['nama']; ?></h2>
                        <div class="row">
                            <div class="col-md-4">Deskripsi</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $us['deskripsi']; ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">Rekomendasi</div>
                            <div class="col-md-2">:</div>
                            <div class="col-md-6"><?= $us['rekomendasi']; ?></div>
                        </div>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
                <br>
            </div>
            <br>
            <br>
            <br>
            <br>