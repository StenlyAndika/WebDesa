<section class="col-md-9 section page-title">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="container">
                <br>
                <h2 class="font-weight-bold mb-4" style="text-align: center;">Standar Pelayanan Publik<br></h2>
                <div class="table-responsive">
                    <table class="table" style="text-align: left;">
                        <thead>
                            <tr class="table-primary">
                            <th scope="col">NO</th>
                            <th scope="col">JENIS PELAYANAN</th>
                            <th scope="col">STANDAR PELAYANAN</th>
                        </thead>
                        <tbody>
                        <?php $no = 0; foreach ($pelayanan as $row) : $no++; ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $row['jenis']; ?></td>
                            <td><a href="<?= base_url() ?>beranda/detail_layanan/<?= $row['id'] ?>" class="btn btn-block btn btn-outline-success">Standar Pelayanan</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>