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
            <h6 class="m-0 font-weight-bold">Agenda</h6>
        </div>
        <div class="card-body">
            <ul class="timeline">
                <?php
                function tgl_indo($tanggal){
                    $bulan = array (
                        1 =>   'Januari',
                        'Februari',
                        'Maret',
                        'April',
                        'Mei',
                        'Juni',
                        'Juli',
                        'Agustus',
                        'September',
                        'Oktober',
                        'November',
                        'Desember'
                    );
                    $pecahkan = explode('-', $tanggal);
                    return $pecahkan[0] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[2];
                }
                foreach ($agenda as $row) : ?>
                    <li class="mb-4">
                        <div class="timeline-time">
                            <?php if (strtotime(date('d F Y')) < strtotime(date('d F Y', strtotime($row['tgl'])))) : ?>
                                <span class="date" style="color: #3A5BA0;"><?= tgl_indo($row['tgl']); ?> ( Akan Datang )</span>
                                <span class="time"><?= $row['jam']; ?></span>
                            <?php elseif (strtotime(date('d F Y')) == strtotime(date('d F Y', strtotime($row['tgl'])))) : ?>
                                <span class="date" style="color: red;"><?= tgl_indo($row['tgl']); ?> ( Hari ini )</span>
                                <span class="time"><?= $row['jam']; ?></span>
                            <?php else : ?>
                                <span class="date" style="color: #7F8487;"><?= tgl_indo($row['tgl']); ?></span>
                                <span class="time" style="color: #7F8487;"><?= $row['jam']; ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <div class="timeline-body">
                            <div class="timeline-content">
                                <div class="table-responsive">
                                    <table style="text-align: left; font-size: 12px;" class="font-weight-bold">
                                        <tr>
                                            <?php if (strtotime(date('d F Y')) < strtotime(date('d F Y', strtotime($row['tgl'])))) : ?>
                                                <td style="vertical-align: top;">Kegiatan</td>
                                                <td style="vertical-align: top;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                <td style="vertical-align: top;"><?= $row['kegiatan']; ?></td>
                                            <?php elseif (strtotime(date('d F Y')) == strtotime(date('d F Y', strtotime($row['tgl'])))) : ?>
                                                <td style="vertical-align: top;">Kegiatan</td>
                                                <td style="vertical-align: top;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                <td style="vertical-align: top;"><?= $row['kegiatan']; ?></td>
                                            <?php else : ?>
                                                <td style="vertical-align: top; color: #7F8487;">Kegiatan</td>
                                                <td style="vertical-align: top; color: #7F8487;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                <td style="vertical-align: top; color: #7F8487;"><?= $row['kegiatan']; ?></td>
                                            <?php endif; ?>
                                        </tr>
                                        <tr>
                                            <?php if (strtotime(date('d F Y')) < strtotime(date('d F Y', strtotime($row['tgl'])))) : ?>
                                                <td style="vertical-align: top;">Lokasi</td>
                                                <td style="vertical-align: top;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                <td style="vertical-align: top;"><?= $row['lokasi']; ?></td>
                                            <?php elseif (strtotime(date('d F Y')) == strtotime(date('d F Y', strtotime($row['tgl'])))) : ?>
                                                <td style="vertical-align: top;">Lokasi</td>
                                                <td style="vertical-align: top;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                <td style="vertical-align: top;"><?= $row['lokasi']; ?></td>
                                            <?php else : ?>
                                                <td style="vertical-align: top; color: #7F8487;">Lokasi</td>
                                                <td style="vertical-align: top; color: #7F8487;">&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                                                <td style="vertical-align: top; color: #7F8487;"><?= $row['lokasi']; ?></td>
                                            <?php endif; ?>
                                        </tr>
                                    </table>
                                </div>
                                </table>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold">Statistik Penduduk</h6>
        </div>
        <div class="card-body">
            <div class="chart-pie pt-2 pb-2">
                <canvas id="panelPieChart"></canvas>
            </div>
            <div class="table-responsive">
                <table class="table" style="text-align: left; font-size: 14px;">
                    <thead>
                        <tr class="table-primary font-weight-bold">
                            <th>Jenis Kelamin</th>
                            <th class="text-center">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $total=0; $no = 0; foreach ($statistikjekel as $row) : $no++; ?>
                    <tr class="font-weight-bold">
                        <td><?= $row['jekel']; ?></td>
                        <td class="text-center"><?= $row['jumlah']; ?></td>
                    </tr>
                    <?php $total+=$row['jumlah']; endforeach; ?>
                    <tr class="table-primary font-weight-bold">
                        <td>Total</td>
                        <td class="text-center"><?= $total; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>