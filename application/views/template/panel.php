<section class="col-md-3 section page-title right-panel">
    <div class="card shadow mb-4">
        <div class="panel-carousel owl-carousel owl-theme">
            <?php foreach ($aparatur as $row) : ?>
                <div class="item">
                    <div class="card-header">
                        <h5 class="m-0 font-weight-bold"><?= $row['jabatan'] ?></h5>
                    </div>
                    <div class="card-body">
                        <div  class="img-fluid img-responsive center-block"><img style="object-fit: cover; width: 100%; height: 350px;" src="<?= base_url('./upload/foto/').$row['foto'] ?>"></div>
                        <h5 style="font-size: 18px !important; color: #3A5BA0;" class="font-weight-bold mt-4"><?= $row['nama'] ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">INDEX KEPUASAN MASYARAKAT (IKM)</h6>
        </div>
        <div class="card-body">
            <?php if(count($kepuasan)<=0) : ?>
                <h4 class="small font-weight-bold">Tahun<span class="float-right"></span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            <?php else : ?>
                <?php foreach($kepuasan as $row) : ?>
                    <h4 class="small font-weight-bold">&nbsp; <span class="float-left">Tahun <?= $row['tahun'] ?> - Nilai : <?= $row['nilai'] ?></span><span class="float-right"><?= $row['predikat'] ?></span></h4>
                    <div class="progress mb-4">
                        <span class="float-left"></span>
                        <div class="progress-bar <?php if (round($row['nilai']) >= 90) { ?>bg-success<?php } elseif (round($row['nilai']) >= 80) { ?>bg-primary<?php } elseif (round($row['nilai']) >= 70) { ?>bg-warning<?php } else { ?>bg-danger<?php } ?>" role="progressbar" style="width: <?= (round($row['nilai']))?>%" aria-valuenow="<?= $row['nilai'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>