<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>INPUT SEJARAH INSTANSI</strong>
					</div>
					<div class="card-body card-block">
						<?= form_open_multipart('sejarah/tambah'); ?>
							<div class="form-group">
								<label>Sejarah</label>
								<textarea class="form-control" name="sejarah" id="sejarah" rows="8" cols="80">
									<?= set_value('sejarah'); ?>
								</textarea>
								<small class="form-text text-danger"><?= form_error('sejarah'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Simpan</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>sejarah">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>