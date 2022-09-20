<section class="col-md-3 section page-title right-panel">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">KEPALA INSTANSI</h6>
        </div>
        <div class="card-body">
            <?php if(count($instansi)<=0) : ?>
                <div  class="img-fluid img-responsive center-block"><img style="object-fit: cover; height: 370px; width: 250px;" src="<?= base_url('./assets/img/avatar.png') ?>"></div>
                <h5 style="font-size: 14px;" class="ccz font-weight-bold mt-4">NAMA</h5>
            <?php else: ?>
                <?php if($instansi[0]['fotokepala'] == null) : ?>
                    <div  class="img-fluid img-responsive center-block"><img style="object-fit: cover; height: 370px; width: 250px;" src="<?= base_url('./assets/img/avatar.png') ?>"></div>
                <?php else : ?>
                    <div  class="img-fluid img-responsive center-block"><img style="object-fit: cover; height: 370px; width: 250px;" src="<?= base_url('./upload/fotokepala/').$instansi[0]['fotokepala'] ?>"></div>
                <?php endif; ?>
                <?php if($instansi[0]['kepala'] == null) : ?>
                    <h5 style="font-size: 14px;" class="ccz font-weight-bold mt-4">NAMA</h5>
                <?php else : ?>
                    <h5 style="font-size: 14px;" class="ccz font-weight-bold mt-4"><?= strtoupper($instansi[0]['kepala']) ?></h5>
                <?php endif; ?>
            <?php endif; ?>
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