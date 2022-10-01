<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>TAMBAH DATA</strong>
					</div>
					<div class="card-body card-block">
						<?= form_open_multipart('aparatur/tambah'); ?>
							<div class="form-group">
								<label>Nik</label>
								<input type="text" class="form-control" name="nik" value="<?= set_value('nik'); ?>">
								<small class="form-text text-danger"><?= form_error('nik'); ?></small>
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>">
								<small class="form-text text-danger"><?= form_error('nama'); ?></small>
							</div>
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
								<label>Jabatan</label>
								<select name="jabatan" class="form-control">
								<?php foreach ($jabatan as $rowjab) : ?>
									<option value="<?= $rowjab; ?>"><?= $rowjab; ?></option>
								<?php endforeach; ?>
								</select>
								<small class="form-text text-danger"><?= form_error('jabatan'); ?></small>
							</div>
							<div class="form-group">
								<label>Foto</label>
								<input type="file" class="form-control" name="foto" class="form-control-file">
								<small class="form-text text-danger"><?= form_error('foto'); ?></small>
							</div>
							<div class="form-group">
								<button type="submit" name="simpan" class="btn btn-sm btn-primary">Submit</button>
								<a class="btn btn-sm btn-success" href="<?= base_url() ?>aparatur">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>