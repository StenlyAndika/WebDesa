<style>
    .aac {
        border-radius: 10px;
        position: relative;
    }
</style>
<section class="user-login section" style="padding: 100px 0;">
	<div class="container aac">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<?php if(count($instansi)<=0) : ?>
						<div class="image align-self-center"><img class="img-fluid" src="<?= base_url() ?>assets/img/tablogo.png"></div>
					<?php else: ?>
						<?php if($instansi[0]['logo'] == null) : ?>
							<div class="image align-self-center"><img class="img-fluid" src="<?= base_url() ?>assets/img/tablogo.png"></div>
						<?php else: ?>
							<div class="image align-self-center"><img class="img-fluid" src="<?= base_url('./upload/logo/').$instansi[0]['logo'] ?>"></div>
						<?php endif; ?>
					<?php endif; ?>
					<div class="content text-center">
					<?php if ( $this->session->flashdata('flash') ) : ?>
						<div class="row mt-2">
							<div class="col-md-12">
								<div class="alert alert-success alert-dismissible fade show" role="alert">
									Data admin <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
									<button type="button" class="close" data-dismiss="alert" aria-label="close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							</div>
						</div>
					<?php elseif ( $this->session->flashdata('flosh') ) : ?>
						<div class="row mt-2">
							<div class="col-md-12">
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
									Login <strong>Gagal</strong> <?= $this->session->flashdata('flosh'); ?>.
									<button type="button" class="close" data-dismiss="alert" aria-label="close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							</div>
						</div>
					<?php endif; ?>
						<div class="title-text">
							<h3>Masuk</h3>
						</div>
						<?= form_open_multipart('auth/login'); ?>
							<input class="form-control main" type="username" name="username" placeholder="Username">
							<input class="form-control main" type="password" name="password" placeholder="Password">
							<button type="submit" class="btn btn-main-md">Masuk</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>