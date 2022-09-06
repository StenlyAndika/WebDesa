<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>TAMBAH DATA</strong>
					</div>
					<div class="card-body card-block">
						<?= form_open_multipart('dokumen/tambah'); ?>
							<div class="form-group">
								<label>Tahun</label>
								<input type="text" class="form-control" name="tahun" value="<?= date('Y'); ?>">
								<small class="form-text text-danger"><?= form_error('tahun'); ?></small>
							</div>
							<div class="form-group">
								<label>Kategori</label>
								<input type="text" class="form-control" name="kategori" value="<?= set_value('kategori'); ?>">
								<small class="form-text text-danger"><?= form_error('kategori'); ?></small>
							</div>
							<div class="form-group">
								<label>Keterangan</label>
								<input type="text" class="form-control" name="keterangan" value="<?= set_value('keterangan'); ?>">
								<small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
							</div>
                            <div class="form-group">
								<label>File</label>
								<input type="file" class="form-control" name="namafile" class="form-control-file">
								<small class="form-text text-danger"><?= form_error('namafile'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>dokumen">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>