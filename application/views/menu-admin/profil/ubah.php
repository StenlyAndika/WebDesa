<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>UPDATE PROFIL INSTANSI</strong>
					</div>
					<div class="card-body card-block">
						<form action="" method="POST" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="id" value="<?= $profil['id'] ?>">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Nama Instansi</label>
										<input type="text" class="form-control" name="nama" value="<?= $profil['nama'] ?>">
										<small class="form-text text-danger"><?= form_error('nama'); ?></small>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Alamat Email</label>
										<input type="text" class="form-control" name="email" value="<?= $profil['email'] ?>">
										<small class="form-text text-danger"><?= form_error('email'); ?></small>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Logo Instansi</label>
										<input type="file" class="form-control" name="logo" class="form-control-file">
										<small class="form-text text-danger"><?= form_error('logo'); ?></small>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Nomor Whatsapp</label>
										<input type="text" class="form-control" name="wa" value="<?= $profil['wa'] ?>">
										<small class="form-text text-danger"><?= form_error('wa'); ?></small>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Nama Kepala/Pimpinan</label>
										<input type="text" class="form-control" name="kepala" value="<?= $profil['kepala'] ?>">
										<small class="form-text text-danger"><?= form_error('kepala'); ?></small>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Link Facebook</label>
										<input type="text" class="form-control" name="fb" value="<?= $profil['fb'] ?>">
										<small class="form-text text-danger"><?= form_error('fb'); ?></small>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Foto Kepala/Pimpinan</label>
										<input type="file" class="form-control" name="fotokepala" class="form-control-file">
										<small class="form-text text-danger"><?= form_error('fotokepala'); ?></small>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Link Twitter</label>
										<input type="text" class="form-control" name="tw" value="<?= $profil['tw'] ?>">
										<small class="form-text text-danger"><?= form_error('tw'); ?></small>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
								<div class="form-group">
										<label>Alamat Instansi</label>
										<input type="text" class="form-control" name="alamat" value="<?= $profil['alamat'] ?>">
										<small class="form-text text-danger"><?= form_error('alamat'); ?></small>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>Link Instagram</label>
										<input type="text" class="form-control" name="ig" value="<?= $profil['ig'] ?>">
										<small class="form-text text-danger"><?= form_error('ig'); ?></small>
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