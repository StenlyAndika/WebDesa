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
            <h6 class="m-0 font-weight-bold">PERSENTASE KEPUASAN PELAYANAN</h6>
        </div>
        <div class="card-body">
            <?php if(count($kepuasan)<=0) : ?>
                <h4 class="small font-weight-bold">Sangat Memuaskan<span class="float-right">0 %</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Memuaskan<span class="float-right">0 %</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Cukup Memuaskan<span class="float-right">0 %</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Kurang Memuaskan<span class="float-right">0 %</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            <?php else : ?>
                <?php if($kepuasan[0]['sp'] == null) : ?>
                    <h4 class="small font-weight-bold">Sangat Memuaskan<span class="float-right">0 %</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                <?php else : ?>
                    <h4 class="small font-weight-bold">Sangat Memuaskan<span class="float-right"><?= $kepuasan[0]['sp'] ?> %</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-success" role="progressbar" style="width: <?= $kepuasan[0]['sp'] ?>%" aria-valuenow="<?= $kepuasan[0]['sp'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                <?php endif; ?>
                <?php if($kepuasan[0]['p'] == null) : ?>
                    <h4 class="small font-weight-bold">Memuaskan<span class="float-right">0 %</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                <?php else : ?>
                    <h4 class="small font-weight-bold">Memuaskan<span class="float-right"><?= $kepuasan[0]['p'] ?> %</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: <?= $kepuasan[0]['p'] ?>%" aria-valuenow="<?= $kepuasan[0]['sp'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                <?php endif; ?>
                <?php if($kepuasan[0]['cp'] == null) : ?>
                    <h4 class="small font-weight-bold">Cukup Memuaskan<span class="float-right">0 %</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                <?php else : ?>
                    <h4 class="small font-weight-bold">Cukup Memuaskan<span class="float-right"><?= $kepuasan[0]['cp'] ?> %</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: <?= $kepuasan[0]['cp'] ?>%" aria-valuenow="<?= $kepuasan[0]['sp'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                <?php endif; ?>
                <?php if($kepuasan[0]['kp'] == null) : ?>
                    <h4 class="small font-weight-bold">Kurang Memuaskan<span class="float-right">0 %</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                <?php else : ?>
                    <h4 class="small font-weight-bold">Kurang Memuaskan<span class="float-right"><?= $kepuasan[0]['kp'] ?> %</span></h4>
                    <div class="progress mb-4">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $kepuasan[0]['kp'] ?>%" aria-valuenow="<?= $kepuasan[0]['sp'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</section>