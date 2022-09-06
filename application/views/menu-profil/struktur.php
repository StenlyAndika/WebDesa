<section class="col-md-9 section page-title">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="container" style="text-align: left;">
                <h2 class="font-weight-bold mb-4" style="text-align: center;">Struktur Organisasi<br>
                <?php if(count($instansi)<=0) : ?>
                    Instansi
                <?php else: ?>
                    <?= $instansi[0]['nama'] ?>
                <?php endif; ?>
                </h2>
                <?php foreach ($struktur as $row) : ?>
                    <div class="table-responsive" style="text-align: center;">
                        <img class="img-fluid img-responsive center-block" src="<?= base_url('./upload/struktur/').$row['struktur'] ?>" alt="" width="800px">
                    </div>
                    <br>
                    <p class="mb-2" style="text-align: center; font-size: 36px; font-weight: bold; color: black;">TUGAS DAN FUNGSI</p>
                    <div class="table-responsive">
                        <?= $row['tugas']; ?>
                    </div>
                <?php endforeach; ?>
                <br class="mb-4">
            </div>
        </div>
    </div>
</section>