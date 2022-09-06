<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>UPDATE VISI & MISI</strong>
					</div>
					<div class="card-body card-block">
						<form action="" method="POST" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="id" value="<?= $visimisi['id'] ?>">
							<div class="form-group">
								<label>Visi</label>
								<textarea class="form-control" name="visi" id="visi" rows="8" cols="80">
									<?= $visimisi['visi'] ?>
								</textarea>
								<small class="form-text text-danger"><?= form_error('visi'); ?></small>
							</div>
							<div class="form-group">
								<label>Misi</label>
								<textarea class="form-control" name="misi" id="misi" rows="8" cols="80">
									<?= $visimisi['misi'] ?>
								</textarea>
								<small class="form-text text-danger"><?= form_error('misi'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Simpan</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>penghargaan">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>