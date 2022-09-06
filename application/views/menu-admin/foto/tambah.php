<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>TAMBAH FOTO</strong>
					</div>
					<div class="card-body card-block">
						<?= form_open_multipart('foto/tambah'); ?>
							<div class="form-group">
								<label>Tanggal Upload</label>
								<input type="text" class="form-control" name="tgl" value="<?= date('d-m-Y', time()); ?>">
								<small class="form-text text-danger"><?= form_error('tgl'); ?></small>
							</div>
							<div class="form-group">
								<label>Nama Kegiatan</label>
								<input type="text" class="form-control" name="kegiatan" value="">
								<small class="form-text text-danger"><?= form_error('kegiatan'); ?></small>
							</div>
							<div class="form-group">
								<label>File</label>
								<input type="file" class="form-control" name="namafile[]" multiple="" class="form-control-file">
								<small class="form-text text-danger"><?= form_error('namafile'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>foto">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>