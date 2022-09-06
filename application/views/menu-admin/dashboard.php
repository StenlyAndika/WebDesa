<style>
    .border-left-primary {
        border-left: 0.25rem solid #4e73df !important;
    }
    .border-left-success {
        border-left: 0.25rem solid #1cc88a !important;
    }
    .no-gutters {
        margin-right: 0;
        margin-left: 0;
    }
</style>
<div class="content-wrapper">
	<section class="content">
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <a href="">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <a href="<?= base_url() ?>kontak/daftar">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Pesan</div>
                                        <div class="text-dark h5 mb-0 font-weight-bold text-gray-800"><?= $jmlkontak ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-message fa-2x text-dark"></i>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            <!-- <div class="col-xl-3 col-md-6 mb-4">
                <a href="">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Pengaduan</div>
                                    <div class="text-dark h5 mb-0 font-weight-bold text-gray-800">74</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-flag fa-2x text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
</div>