<section class="col-md-9 section page-title">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="container" style="text-align: left;">
                <br>
                <h2 class="font-weight-bold mb-4" style="text-align: center;">
                    <?php if(count($instansi)<=0) : ?>
                        Instansi
                    <?php else: ?>
                        <h4 class="font-weight-bold"><?= $instansi[0]['nama'] ?></h4>
                        <h5><?= $instansi[0]['alamat'] ?></h5>
                    <?php endif; ?>
                <br>
                </h2>
                <?php if ( $this->session->flashdata('flash') ) : ?>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Pesan anda <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?= form_open_multipart('kontak/kirim'); ?>
                    <div class="form-group">
                        <label>Nama Anda</label>
                        <input type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="<?= set_value('email'); ?>">
                        <small class="form-text text-danger"><?= form_error('email'); ?></small>
                    </div>
                    <div class="form-group">
                        <label>Pesan</label>
                        <textarea class="form-control" name="pesan" id="pesan" rows="8" cols="80">
                            <?= set_value('pesan'); ?>
                        </textarea>
                        <small class="form-text text-danger"><?= form_error('pesan'); ?></small>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="simpan" class="btn btn-sm btn-primary">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
