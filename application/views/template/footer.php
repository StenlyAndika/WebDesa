    </div>
    <div class="scroll-top-to">
        <i class="ti-home"></i>
    </div>
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
                        <div class="block">
                        <?php if(count($instansi)<=0) : ?>
                            <a href="#"><img src="<?= base_url('./assets/img/tablogo.png') ?>" width="150px"></a>
                        <?php else: ?>
                            <?php if($instansi[0]['logo'] == null) : ?>
                                <a href="#"><img src="<?= base_url('./assets/img/tablogo.png') ?>" width="150px"></a>
                            <?php else: ?>
                                <a href="#"><img src="<?= base_url('./upload/logo/').$instansi[0]['logo'] ?>" width="150px"></a>
                            <?php endif; ?>
                        <?php endif; ?>
                            <ul class="social-icon list-inline">
                                <li class="list-inline-item">
                                    <?php if(count($instansi)<=0) : ?>
                                        <a href="https://www.facebook.com/" target="_blank"><i class="ti-facebook"></i></a>
                                    <?php else: ?>
                                        <?php if($instansi[0]['fb'] == null) : ?>
                                            <a href="https://www.facebook.com/" target="_blank"><i class="ti-facebook"></i></a>
                                        <?php else: ?>
                                            <a href="<?= $instansi[0]['fb'] ?>" target="_blank"><i class="ti-facebook"></i></a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </li>
                                <li class="list-inline-item">
                                    <?php if(count($instansi)<=0) : ?>
                                        <a href="https://twitter.com/" target="_blank"><i class="ti-twitter"></i></a>
                                    <?php else: ?>
                                        <?php if($instansi[0]['tw'] == null) : ?>
                                            <a href="https://twitter.com/" target="_blank"><i class="ti-twitter"></i></a>
                                        <?php else: ?>
                                            <a href="<?= $instansi[0]['tw'] ?>" target="_blank"><i class="ti-twitter"></i></a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </li>
                                <li class="list-inline-item">
                                    <?php if(count($instansi)<=0) : ?>
                                        <a href="https://instagram.com/" target="_blank"><i class="ti-instagram"></i></a>
                                    <?php else: ?>
                                        <?php if($instansi[0]['ig'] == null) : ?>
                                            <a href="https://instagram.com/" target="_blank"><i class="ti-instagram"></i></a>
                                        <?php else: ?>
                                            <a href="<?= $instansi[0]['ig'] ?>" target="_blank"><i class="ti-instagram"></i></a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-6 mt-5 mt-lg-0">
                        <div class="block-2">
                            <h6>Hubungi Kami</h6>
                            <ul>
                                <?php if(count($instansi)<=0) : ?>
                                    <li><i class="fa-solid text-white fa-building"></i> <a href="#">Nama Instansi</a></li>
                                    <li><i class="fa-solid text-white fa-flag"></i> <a href="#">Alamat Instansi</a></li>
                                    <li><i class="fa-solid text-white fa-envelope"></i> <a href="#">Email Instansi</a></li>
                                    <li><i class="fa-solid text-white fa-phone"></i> <a href="#">Nomor Whatsapp Instansi</a></li>
                                <?php else: ?>
                                    <?php if($instansi[0]['nama'] == null) : ?>
                                        <li><i class="fa-solid text-white fa-building"></i> <a href="#">Nama Instansi</a></li>
                                    <?php else: ?>
                                        <li><i class="fa-solid text-white fa-building"></i> <a href="#"><?= $instansi[0]['nama'] ?></a></li>
                                    <?php endif; ?>
                                    <?php if($instansi[0]['alamat'] == null) : ?>
                                        <li><i class="fa-solid text-white fa-flag"></i> <a href="#">Alamat Instansi</a></li>
                                    <?php else: ?>
                                        <li><i class="fa-solid text-white fa-flag"></i> <a href="#"><?= $instansi[0]['alamat'] ?></a></li>
                                    <?php endif; ?>
                                    <?php if($instansi[0]['email'] == null) : ?>
                                        <li><i class="fa-solid text-white fa-envelope"></i> <a href="#">Email Instansi</a></li>
                                    <?php else: ?>
                                        <li><i class="fa-solid text-white fa-envelope"></i> <a href="#"><?= $instansi[0]['email'] ?></a></li>
                                    <?php endif; ?>
                                    <?php if($instansi[0]['wa'] == null) : ?>
                                        <li><i class="fa-solid text-white fa-phone"></i> <a href="#">Nomor Whatsapp Instansi</a></li>
                                    <?php else: ?>
                                        <li><i class="fa-solid text-white fa-phone"></i> <a href="#"><?= $instansi[0]['wa'] ?></a></li>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-6 mt-5 mt-lg-0">
                        <div class="block-2">
                            <h6>Link Terkait</h6>
                            <ul>
                                <li><a href="http://sungaipenuhkota.go.id/">Website Kota Sungai Penuh</a></li>
                                <li><a href="http://lpse.sungaipenuhkota.go.id">LPSE Kota Sungai Penuh</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center bg-dark py-4">
            <small class="text-secondary">Copyright <a href="<?= base_url() ?>auth/root">&copy;</a> <script>document.write(new Date().getFullYear())</script>. Pemerintah Kota Sungai Penuh. All rigths reserved</small class="text-secondary">
        </div>
    </footer>

    <!-- JAVASCRIPTS -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/slick/slick.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/syotimer/jquery.syotimer.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/aos/aos.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/datatables.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/marquee/jquery.marquee.min.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/d6482bd15d.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <script src="<?= base_url() ?>assets/js/script.js"></script>

    <script>
        $(function () {
            $('.marquee').marquee({
                speed: 60
            });
        });
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                autoplay:true,
                autoplayTimeout:5000,
                loop:true,
                margin:10,
                lazyLoad: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });

            $('#datatable').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': false,
                'autoWidth': true,
                "language":{
                    "url":"https://cdn.datatables.net/plug-ins/1.11.5/i18n/id.json",
                    "sEmptyTable":"Tidak ada data."
                }
            });
        });
    </script>
</body>

</html>