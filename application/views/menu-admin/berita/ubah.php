<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>UPDATE DATA BERITA</strong>
					</div>
					<div class="card-body card-block">
						<form action="" method="POST" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="id" value="<?= $berita['id'] ?>">
							<div class="form-group">
								<label>Judul</label>
								<input type="text" class="form-control" name="judul" value="<?= $berita['judul'] ?>">
								<small class="form-text text-danger"><?= form_error('judul'); ?></small>
							</div>
							<div class="form-group">
								<label>Isi</label>
								<textarea class="form-control" name="isi" id="isi" rows="8" cols="80">
									<?= $berita['isi'] ?>
								</textarea>
								<small class="form-text text-danger"><?= form_error('isi'); ?></small>
							</div>
                            <div class="form-group">
								<label>Gambar</label>
								<input type="file" name="gambar" class="form-control-file">
								<small class="form-text text-danger"><?= form_error('gambar'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>berita">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>