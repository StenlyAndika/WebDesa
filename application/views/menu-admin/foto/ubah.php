<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>UPDATE FOTO</strong>
					</div>
					<div class="card-body card-block">
						<form action="" method="POST" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="id" value="<?= $sopd['id'] ?>">
							<div class="form-group">
								<label>Tanggal Upload</label>
								<input type="text" class="form-control" name="tgl" value="<?= $sopd['tgl'] ?>">
								<small class="form-text text-danger"><?= form_error('tgl'); ?></small>
							</div>
							<div class="form-group">
								<label>Nama Kegiatan</label>
								<input type="text" class="form-control" name="kegiatan" value="<?= $sopd['kegiatan'] ?>">
								<small class="form-text text-danger"><?= form_error('kegiatan'); ?></small>
							</div>
							<div class="form-group">
								<label>File</label>
								<input type="file" name="namafile" multiple="" class="form-control-file">
								<small class="form-text text-danger"><?= form_error('file'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>penghargaan">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>