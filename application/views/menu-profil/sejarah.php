<section class="col-md-9 section page-title">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="container" style="text-align: left;">
                <br>
                <h2 class="font-weight-bold mb-4" style="text-align: center;">Sejarah<br>
                <?php if(count($instansi)<=0) : ?>
                    Instansi
                <?php else: ?>
                    <?= $instansi[0]['nama'] ?>
                <?php endif; ?>
                </h2>
                <div class="table-responsive">
                    <?php foreach ($sejarah as $row) : ?>
                        <p style="color: black !important;"><?= $row['sejarah'] ?></p>
                    <?php endforeach; ?>
                </div>
                <br class="mb-4">
            </div>
        </div>
    </div>
</section>