<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>INPUT PROFIL INSTANSI</strong>
					</div>
					<div class="card-body card-block">
						<?= form_open_multipart('profil/tambah'); ?>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Nama Desa</label>
										<input type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>">
										<small class="form-text text-danger"><?= form_error('nama'); ?></small>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Alamat Email</label>
										<input type="text" class="form-control" name="email" value="<?= set_value('email'); ?>">
										<small class="form-text text-danger"><?= form_error('email'); ?></small>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Logo Desa</label>
										<input type="file" class="form-control" name="logo" class="form-control-file">
										<small class="form-text text-danger"><?= form_error('logo'); ?></small>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Nomor Whatsapp</label>
										<input type="text" class="form-control" name="wa" value="<?= set_value('wa'); ?>">
										<small class="form-text text-danger"><?= form_error('wa'); ?></small>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Alamat Desa</label>
										<input type="text" class="form-control" name="alamat" value="<?= set_value('alamat'); ?>">
										<small class="form-text text-danger"><?= form_error('alamat'); ?></small>
									</div>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Simpan</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>profil">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>