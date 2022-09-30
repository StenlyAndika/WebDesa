<div class="content-wrapper">
	<section class="content">
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-2">
                <a href="">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <a href="<?= base_url() ?>kontak/daftar">
                            <div class="row align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Pesan</div>
                                        <div class="text-dark h5 mb-0 font-weight-bold text-gray-800"><?= $jmlkontak ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-message fa-2x text-dark"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-4 mb-2">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-xs font-weight-bold text-primary text-center text-uppercase mb-1">Index Kepuasan Masyarakat (IKM)</div>
                            <div class="card-body">
                                <?php if(count($kepuasan)<=0) : ?>
                                    <h4 class="small font-weight-bold">Tahun<span class="float-right"></span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                <?php else : ?>
                                    <?php foreach($kepuasan as $row) : ?>
                                        <h4 class="small text-primary font-weight-bold">&nbsp; <span class="float-left">Tahun <?= $row['tahun'] ?> - Nilai : <?= $row['nilai'] ?></span><span class="float-right"><?= $row['predikat'] ?></span></h4>
                                        <div class="progress mb-4">
                                            <span class="float-left"></span>
                                            <div class="progress-bar <?php if (round($row['nilai']) >= 90) { ?>bg-success<?php } elseif (round($row['nilai']) >= 80) { ?>bg-primary<?php } elseif (round($row['nilai']) >= 70) { ?>bg-warning<?php } else { ?>bg-danger<?php } ?>" role="progressbar" style="width: <?= (round($row['nilai']))?>%" aria-valuenow="<?= $row['nilai'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>