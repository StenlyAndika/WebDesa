<section class="col-md-9 section page-title">
    <div class="card shadow mb-4">
        <div class="container">
            <div class="card-body row align-items-center">
                <div class="col-md-10 order-1 order-md-1 text-center text-md-left pop-right">
                    <h2 class="font-weight-bold aaz" style="color: #000;">Website Resmi</h2>
                    <h2 class="font-weight-bold aas" style="color: #2e7eed;">
                        <?php if(count($instansi)<=0) : ?>
                            Instansi
                        <?php else: ?>
                            <?= $instansi[0]['nama'] ?>
                        <?php endif; ?>
                    </h2>
                </div>
                <div class="col-md-2 text-center order-2 order-md-2 pop-left">
                    <ul class="social-icon">
                        <li class="list-inline-item">
                            <?php if(count($instansi)<=0) : ?>
                                <a href="https://www.facebook.com/" target="_blank" class="home__social-icon"><i class="ti-facebook"></i></a>
                            <?php else: ?>
                                <?php if($instansi[0]['fb'] == null) : ?>
                                    <a href="https://www.facebook.com/" target="_blank" class="home__social-icon"><i class="ti-facebook"></i></a>
                                <?php else: ?>
                                    <a href="<?= $instansi[0]['fb'] ?>" target="_blank" class="home__social-icon"><i class="ti-facebook"></i></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </li>
                        <li class="list-inline-item">
                            <?php if(count($instansi)<=0) : ?>
                                <a href="https://twitter.com/" target="_blank" class="home__social-icon"><i class="ti-twitter"></i></a>
                            <?php else: ?>
                                <?php if($instansi[0]['tw'] == null) : ?>
                                    <a href="https://twitter.com/" target="_blank" class="home__social-icon"><i class="ti-twitter"></i></a>
                                <?php else: ?>
                                    <a href="<?= $instansi[0]['tw'] ?>" target="_blank" class="home__social-icon"><i class="ti-twitter"></i></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </li>
                        <li class="list-inline-item">
                            <?php if(count($instansi)<=0) : ?>
                                <a href="https://instagram.com/" target="_blank" class="home__social-icon"><i class="ti-instagram"></i></a>
                            <?php else: ?>
                                <?php if($instansi[0]['ig'] == null) : ?>
                                    <a href="https://instagram.com/" target="_blank" class="home__social-icon"><i class="ti-instagram"></i></a>
                                <?php else: ?>
                                    <a href="<?= $instansi[0]['ig'] ?>" target="_blank" class="home__social-icon"><i class="ti-instagram"></i></a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="owl-carousel owl-theme">
                    <?php foreach ($berita as $row) : ?>
                        <article class="post-sm">
                            <div class="post-thumb" style="height:150px; width:300px;overflow:hidden;">
                                <a href="<?= base_url() ?>beranda/detail/<?= $row['id'] ?>"><img class="image-responsive w-100" src="<?= base_url('./upload/berita/').$row['gambar'] ?>" alt="Post-Image"></a>
                            </div>
                            <div class="post-title">
                                <h4 class=""><a href="<?= base_url() ?>beranda/detail/<?= $row['id'] ?>" class="font-weight-bold"><?= $row['judul'] ?></a></h4>
                            </div>
                            <div class="post-meta">
                                <ul class="list-inline post-tag">
                                    <li class="list-inline-item">
                                        <a href="#"><?= $row['nama'] ?></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <?= date('d F Y', strtotime($row['tgl'])); ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-details">
                                <p style="font-size: 14px">
                                    <?php
                                        $string = strip_tags($row['isi']);
                                        if (strlen($string) > 150) {
                                            // truncate string
                                            $stringCut = substr($string, 0, 150);
                                            $endPoint = strrpos($stringCut, ' ');
                                            //if the string doesn't contain any space then it will cut without word basis.
                                            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                            $string .= '...';
                                        }
                                        echo $string;
                                    ?>
                                </p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
            <hr>
            <div class="container">
                <style>
                    .cardx {
                        flex-direction: row;
                        border: none;
                    }
                    .cardx img {
                        width: 30%;
                    }
                </style>
                <h4 class="font-weight-bold mb-2" style="text-align: left;">Berita Terbaru<br></h4>
                <?php foreach ($berita as $row) : ?>
                    <div class="card cardx col-lg-12">
                        <img src="<?= base_url('./upload/berita/').$row['gambar'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="<?= base_url() ?>beranda/detail/<?= $row['id'] ?>"><h5 class="card-title" style="text-align: left;"><?= $row['judul'] ?></h5></a>
                            <p class="card-text" style="text-align: left;">
                                <?php
                                    $string = strip_tags($row['isi']);
                                    if (strlen($string) > 150) {
                                        // truncate string
                                        $stringCut = substr($string, 0, 150);
                                        $endPoint = strrpos($stringCut, ' ');
                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= '...';
                                    }
                                    echo $string;
                                ?>
                                <br>
                                <a href="<?= base_url() ?>beranda/detail/<?= $row['id'] ?>" class="font-weight-bold">Baca selengkapnya...</a>
                            </p>
                        </div>
                    </div>
                    <hr>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>