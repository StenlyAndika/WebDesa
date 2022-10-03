<section class="col-md-9 section page-title">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="container" style="text-align: left;">
                <h2 class="font-weight-bold mb-2" style="text-align: center;">Statistik Data Jenis Kelamin</h2>
                <div class="chart-container">
                    <div class="container">
                        <div class="chart-pie pt-2 pb-2">
                            <canvas id="jekelPieChart"></canvas>
                        </div>
                    </div>
                    <div class="container align-self-center">
                        <div class="table-responsive">
                            <table class="table" style="text-align: left; font-size: 14px;">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col" class="text-center">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $color = array("#4e73df", "#1cc88a", "#36b9cc", "#38E54D", "#D800A6", "#FF884B", "#D2001A");
                                $total=0; $i = 0; $no = 0; foreach ($statistikjekel as $row) : $no++; ?>
                                <tr class="font-weight-bold" style="border-bottom : .2rem solid <?= $color[$i]; ?>; !important">
                                    <th scope="row" style="background: <?= $color[$i]; ?>;" class="font-weight-bold text-white text-center"><?= $no; ?></th>
                                    <td><?= $row['jekel']; ?></td>
                                    <td class="text-center"><?= $row['jumlah']; ?></td>
                                </tr>
                                <?php $total+=$row['jumlah']; $i++; endforeach; ?>
                                <tr class="table-primary font-weight-bold">
                                    <td></td>
                                    <td>Total</td>
                                    <td class="text-center"><?= $total; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>