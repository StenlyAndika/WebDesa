<section class="col-md-9 section page-title">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="container" style="text-align: left;">
                <h2 class="font-weight-bold mb-4" style="text-align: center;">Visi dan Misi<br>
                <?php if(count($instansi)<=0) : ?>
                    Instansi
                <?php else: ?>
                    <?= $instansi[0]['nama'] ?>
                <?php endif; ?>
                </h2>
                <p class="mb-2" style="text-align: center; font-size: 36px; font-weight: bold; color: black;">VISI</p>
                <?php foreach ($visimisi as $row) : ?>
                    <div class="table-responsive">
                        <?= $row['visi']; ?>
                    </div>
                    <br>
                    <p class="mb-2" style="text-align: center; font-size: 36px; font-weight: bold; color: black;">MISI</p>
                    <div class="table-responsive asd">
                        <?= $row['misi']; ?>
                    </div>
                <?php endforeach; ?>
                <br class="mb-4">
            </div>
        </div>
    </div>
</section>