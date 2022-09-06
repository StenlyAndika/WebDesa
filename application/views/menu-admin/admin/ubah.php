<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>UPDATE DATA ADMIN</strong>
					</div>
					<div class="card-body card-block">
						<form action="" method="POST" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="username" value="<?= $admin['username'] ?>">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" name="nama" value="<?= $admin['nama'] ?>">
								<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password" value="<?= $admin['password'] ?>">
								<small class="form-text text-danger"><?= form_error('password'); ?></small>
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