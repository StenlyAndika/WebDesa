<section class="col-md-9 section page-title">
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="container">
                <style>
                    .asd {
                        padding-top: 10px;
                        padding-left: 10%;
                        padding-right: 10%;
                    }
                    .kntl {
                        padding: 10px;
                        font-size: 14px;
                    }
                    .ccx {
                        color: black !important;
                    }
                </style>
                <div class="table-responsive asd" style="text-align: left;">
                    <h2 class="font-weight-bold mb-2" style="text-align: center;"><?= $pelayanan['jenis'] ?><br></h2>
                    <img class="img-fluid img-responsive center-block" src="<?= base_url('./upload/pelayanan/').$pelayanan['gambar'] ?>" width="500px">
                    <p class="ccx mt-4"><?= $pelayanan['standar'] ?></p>
                </div>
                <br class="mb-4">
            </div>
        </div>
    </div>
</section>