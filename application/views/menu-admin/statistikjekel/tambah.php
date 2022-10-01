<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>TAMBAH DATA</strong>
					</div>
					<div class="card-body card-block">
						<?= form_open_multipart('statistikjekel/tambah'); ?>
							<div class="form-group">
								<label>Jenis Kelamin</label>
								<select name="jekel" class="form-control">
								<?php foreach ($jekel as $rowjkl) : ?>
									<option value="<?= $rowjkl; ?>"><?= $rowjkl; ?></option>
								<?php endforeach; ?>
								</select>
								<small class="form-text text-danger"><?= form_error('jekel'); ?></small>
							</div>
							<div class="form-group">
								<label>Jumlah</label>
								<input type="text" class="form-control" name="jumlah" value="<?= set_value('jumlah'); ?>">
								<small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>statistikjekel">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>