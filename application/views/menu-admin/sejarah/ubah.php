<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>UPDATE SEJARAH INSTANSI</strong>
					</div>
					<div class="card-body card-block">
						<form action="" method="POST" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="id" value="<?= $sejarah['id'] ?>">
							<div class="form-group">
								<label>Sejarah</label>
								<textarea class="form-control" name="sejarah" id="sejarah" rows="8" cols="80">
									<?= $sejarah['sejarah'] ?>
								</textarea>
								<small class="form-text text-danger"><?= form_error('sejarah'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Simpan</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>pengumuman">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>