<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>UPDATE STRUKTUR ORGANISASI</strong>
					</div>
					<div class="card-body card-block">
						<form action="" method="POST" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="id" value="<?= $struktur['id'] ?>">
							<div class="form-group">
								<label>Struktur Organisasi</label>
								<input type="file" class="form-control" name="struktur" class="form-control-file">
								<small class="form-text text-danger"><?= $struktur['struktur'] ?></small>
							</div>
							<div class="form-group">
								<label>Tugas & Fungsi</label>
								<textarea class="form-control" name="tugas" id="tugas" rows="8" cols="80">
									<?= $struktur['tugas'] ?>
								</textarea>
								<small class="form-text text-danger"><?= form_error('tugas'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>rpjmd">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>