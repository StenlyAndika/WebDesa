<section class="col-md-9 section page-title">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="container" style="text-align: left;">
                <br>
                <h2 class="font-weight-bold mb-2" style="text-align: center;">Publikasi Dokumen</h2>
                <div class="table-responsive">
                    <div class="row">
                        <div class="col-lg-8">
                            <h4 class="font-weight-bold mb-4 mt-2 aaz">Klik untuk mengunduh dokumen</h4>
                        </div>
                        <div class="col-lg-4">
                            <form action="<?= base_url() ?>beranda/cari" method="post">
                                <input type="text" name="cari" class="form-control" placeholder="Cari" value="<?php if(isset($keysearch)) { echo $keysearch; } ?>">
                            </form>
                        </div>
                    </div>
                    <?php
                        if($keysearch != "") {
                            $this->db->from('dokumen');
                            $this->db->like('keterangan', $keysearch);
                            $this->db->or_like('tahun', $keysearch);
                            $this->db->or_like('kategori', $keysearch);
                            $query = $this->db->get();
                            // print_r($query);
                            $data['dokumen'] = $query->result_array();
                        } else {
                            $this->db->from('dokumen');
                            $this->db->order_by('tahun', 'desc');
                            $query = $this->db->get();
                            $data['dokumen'] = $query->result_array();
                        }
                        
                        $tmptahun = [];
                        $a = 0;
                        foreach ($data['dokumen'] as $row) {
                            if($a!=$row['tahun']) {
                                array_push($tmptahun,$row['tahun']);
                                $a=$row['tahun'];
                            }
                        }
                        $tmpkategori = [];
                        $n = "";
                        foreach ($data['dokumen'] as $rowc) {
                            if($n!=$rowc['kategori']) {
                                array_push($tmpkategori,$rowc['kategori']);
                                $n=$rowc['kategori'];
                            }
                        }
                    ?>
                    <table id="datatable" class="table-bordered" width="100%">
                    <?php foreach ($tmptahun as $rowx) : ?>
                        <td colspan="2" style="background-color: #3A5BA0;" class="text-white text-center font-weight-bold">Tahun <?= $rowx; ?></td>
                        <tbody>
                            <?php foreach ($tmpkategori as $rowz) : ?>
                                <tr>
                                <td colspan="2" class="text-danger text-center font-weight-bold"><?= $rowz; ?></td>
                                <?php
                                    if($keysearch != "") {
                                        $this->db->where('tahun', $rowx);
                                        $this->db->where('kategori', $rowz);
                                        $this->db->like('keterangan', $keysearch);
                                        $this->db->or_like('tahun', $keysearch);
                                        $this->db->or_like('kategori', $keysearch);
                                        $query = $this->db->get('dokumen');
                                        $data['dokumen'] = $query->result_array();
                                    } else {
                                        $this->db->where('tahun', $rowx);
                                        $this->db->where('kategori', $rowz);
                                        $query = $this->db->get('dokumen');
                                        $data['dokumen'] = $query->result_array();
                                    }
                                    foreach ($data['dokumen'] as $row) : ?>
                                        <tr>
                                            <td class="text-center">-</td>
                                            <td><a class="font-weight-bold" target="_blank" href="<?= base_url('upload/dokumen/') .$row['namafile'] ?>"><?= $row['keterangan'] ?></a></td>
                                        </tr>
                                <?php endforeach; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    <?php endforeach; ?>
                    </table>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
</section>