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
							<input type="hidden" class="form-control" name="id" value="<?= $statistikumur['id']; ?>">
							<div class="form-group">
								<label>Jenis Kelamin</label>
								<select name="umur" class="form-control">
								<?php foreach ($umur as $rowumur) : ?>
									<option value="<?= $rowumur; ?>" <? if($statistikumur['umur'] == $rowumur) { echo "selected"; } ?>><?= $rowjkl; ?></option>
								<?php endforeach; ?>
								</select>
								<small class="form-text text-danger"><?= form_error('umur'); ?></small>
							</div>
							<div class="form-group">
								<label>Jumlah</label>
								<input type="text" class="form-control" name="jumlah" value="<?= $statistikumur['jumlah']; ?>">
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