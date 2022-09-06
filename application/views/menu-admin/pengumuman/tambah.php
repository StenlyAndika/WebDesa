<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>TAMBAH DATA PENGUMUMAN</strong>
					</div>
					<div class="card-body card-block">
						<?= form_open_multipart('pengumuman/tambah'); ?>
							<div class="form-group">
								<label>Judul</label>
								<input type="text" class="form-control" name="judul" value="<?= set_value('judul'); ?>">
								<small class="form-text text-danger"><?= form_error('judul'); ?></small>
							</div>
							<div class="form-group">
								<label>File</label>
								<input type="file" class="form-control" name="namafile" class="form-control-file">
								<small class="form-text text-danger"><?= form_error('namafile'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>pengumuman">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>