<section class="col-md-3 section page-title right-panel">
    <div class="card shadow mb-4">
        <div class="panel-carousel owl-carousel owl-theme">
            <?php foreach ($aparatur as $row) : ?>
                <div class="item">
                    <div class="card-header">
                        <h5 class="font-weight-bold m-0"><?= $row['jabatan'] ?></h5>
                    </div>
                    <div class="card-body">
                        <div  class="img-fluid img-responsive center-block"><img style="object-fit: cover; width: 100%; height: 350px;" src="<?= base_url('./upload/foto/').$row['foto'] ?>"></div>
                        <h5 style="font-size: 18px !important; color: #3A5BA0;" class="font-weight-bold m-0 mt-3"><?= $row['nama'] ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold">Statistik Penduduk</h6>
        </div>
        <div class="card-body">
            <h6 class="m-0 font-weight-bold">Berdasarkan Jenis Kelamin</h6>
            <div class="chart-pie pt-2 pb-2">
                <canvas id="myPieChart"></canvas>
            </div>
        </div>
    </div>
</section>