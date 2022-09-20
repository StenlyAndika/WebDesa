<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>UPDATE DATA</strong>
					</div>
					<div class="card-body card-block">
						<form action="" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label>Tahun</label>
								<input type="text" class="form-control" name="tahun" value="<?= $kepuasan['tahun'] ?>">
								<small class="form-text text-danger"><?= form_error('tahun'); ?></small>
							</div>
							<div class="form-group">
								<label>Nilai</label>
								<input type="text" class="form-control" name="nilai" value="<?= $kepuasan['nilai'] ?>">
								<small class="form-text text-danger"><?= form_error('nilai'); ?></small>
							</div>
							<div class="form-group">
								<label>Predikat</label>
								<input type="text" class="form-control" name="predikat" value="<?= $kepuasan['predikat'] ?>">
								<small class="form-text text-danger"><?= form_error('predikat'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>kepuasan">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>