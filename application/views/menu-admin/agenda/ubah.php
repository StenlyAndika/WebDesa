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
							<input type="hidden" class="form-control" name="id" value="<?= $agenda['id']; ?>">
							<div class="form-group">
								<label>Tanggal</label>
								<input type="text" id="tgl" class="form-control" name="tgl" value="<?= $agenda['tgl']; ?>">
								<small class="form-text text-danger"><?= form_error('tgl'); ?></small>
							</div>
							<div class="form-group">
								<label>Jam</label>
								<input type="text" id="jam" class="form-control" name="jam" value="<?= $agenda['jam']; ?>">
								<small class="form-text text-danger"><?= form_error('jam'); ?></small>
							</div>
							<div class="form-group">
								<label>Kegiatan</label>
								<input type="text" class="form-control" name="kegiatan" value="<?= $agenda['kegiatan']; ?>">
								<small class="form-text text-danger"><?= form_error('kegiatan'); ?></small>
							</div>
							<div class="form-group">
								<label>Lokasi</label>
								<input type="text" class="form-control" name="lokasi" value="<?= $agenda['lokasi']; ?>">
								<small class="form-text text-danger"><?= form_error('lokasi'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>agenda">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>