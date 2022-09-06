<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>TAMBAH DATA</strong>
					</div>
					<div class="card-body card-block">
						<?= form_open_multipart('kepuasan/tambah'); ?>
							<div class="form-group">
								<label>Sangat Memuaskan</label>
								<input type="text" class="form-control" name="sp" value="<?= set_value('sp'); ?>">
								<small class="form-text text-danger"><?= form_error('sp'); ?></small>
							</div>
							<div class="form-group">
								<label>Memuaskan</label>
								<input type="text" class="form-control" name="p" value="<?= set_value('p'); ?>">
								<small class="form-text text-danger"><?= form_error('p'); ?></small>
							</div>
							<div class="form-group">
								<label>Cukup Memuaskan</label>
								<input type="text" class="form-control" name="cp" value="<?= set_value('cp'); ?>">
								<small class="form-text text-danger"><?= form_error('cp'); ?></small>
							</div>
							<div class="form-group">
								<label>Kurang Memuaskan</label>
								<input type="text" class="form-control" name="kp" value="<?= set_value('kp'); ?>">
								<small class="form-text text-danger"><?= form_error('kp'); ?></small>
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