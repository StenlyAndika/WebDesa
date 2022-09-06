<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>TAMBAH ADMIN</strong>
					</div>
					<div class="card-body card-block">
						<?= form_open_multipart('admin/tambah'); ?>
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="username" value="<?= set_value('username'); ?>">
								<small class="form-text text-danger"><?= form_error('username'); ?></small>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password" value="<?= set_value('password'); ?>">
								<small class="form-text text-danger"><?= form_error('password'); ?></small>
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>">
								<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>admin">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>