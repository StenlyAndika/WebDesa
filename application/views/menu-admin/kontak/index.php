<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<strong>DAFTAR PESAN DITERIMA</strong>
					</div>
					<div class="card-body card-block">
						<?php if ( $this->session->flashdata('flash') ) : ?>
							<div class="row mt-3">
								<div class="col-md-6">
									<div class="alert alert-success alert-dismissible fade show" role="alert">
										Pesan <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
										<button type="button" class="close" data-dismiss="alert" aria-label="close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								</div>
							</div>
						<?php endif; ?>
						<?php foreach ($pesan as $row) : ?>
							<div class="card cardx col-lg-12">
								<div class="card-body">
									<h5 class="card-title" style="text-align: left;"><?= $row['tgl'] ?></h5>
									<h5 class="card-title" style="text-align: left;"><?= $row['email'] ?></h5>
									<h5 class="card-title" style="text-align: left;"><?= $row['nama'] ?></h5>
									<p class="card-text" style="text-align: left;">
										<?= $row['pesan'] ?>
									</p>
									<a href="<?= base_url() ?>kontak/hapus/<?= $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus pesan ini?');">Hapus</a>
								</div>
							</div>
							<hr>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
