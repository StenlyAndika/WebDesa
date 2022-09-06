<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>TAMBAH DATA PELAYANAN</strong>
					</div>
					<div class="card-body card-block">
						<?= form_open_multipart('pelayanan/tambah'); ?>
							<div class="form-group">
								<label>Jenis Pelayanan</label>
								<input type="text" class="form-control" name="jenis" value="<?= set_value('jenis'); ?>">
								<small class="form-text text-danger"><?= form_error('jenis'); ?></small>
							</div>
							<div class="form-group">
								<label>Standar Pelayanan</label>
								<textarea class="form-control" name="standar" id="standar" rows="8" cols="80">
									<?= set_value('standar'); ?>
								</textarea>
								<small class="form-text text-danger"><?= form_error('standar'); ?></small>
							</div>
							<div class="form-group">
								<label>Gambar</label>
								<input type="file" class="form-control" name="gambar" class="form-control-file">
								<small class="form-text text-danger"><?= form_error('gambar'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>pelayanan">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>