<section class="col-md-9 section page-title">
    <div class="card shadow mb-4">
        <div class="container">
            <div class="card-body row align-items-center">
                <div class="col-md-10 order-1 order-md-1 text-center text-md-left pop-right">
                    <h2 class="font-weight-bold aaz" style="color: #000;">Website Resmi</h2>
                    <h2 class="font-weight-bold aas" style="color: #3A5BA0;">
                        <?php if(count($instansi)<=0) : ?>
                            Nama Desa
                        <?php else: ?>
                            Desa <?= $instansi[0]['nama'] ?>
                        <?php endif; ?>
                    </h2>
                </div>
            </div>
            <div class="container">
                <div class="news-carousel owl-carousel owl-theme">
                    <?php foreach ($berita as $row) : ?>
                        <article class="post-sm">
                            <div class="post-thumb">
                                <a href="<?= base_url() ?>beranda/detail/<?= $row['id'] ?>"><img class="image-responsive w-100" src="<?= base_url('./upload/berita/').$row['gambar'] ?>" alt="Post-Image"></a>
                            </div>
                            <div class="post-title">
                                <h4 class=""><a href="<?= base_url() ?>beranda/detail/<?= $row['id'] ?>" class="font-weight-bold"><?= $row['judul'] ?></a></h4>
                            </div>
                            <div class="post-meta">
                                <ul class="list-inline post-tag">
                                    <li class="list-inline-item">
                                        <a href="#" style="color: #3A5BA0; font-weight: bold;"><?= $row['nama'] ?></a>
                                    </li>
                                    <li class="list-inline-item" style="color: red; font-size: 14px;">
                                        <i class='bx bx-calendar' ></i> 
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
                <?php foreach ($berita as $row) : ?>
                <div class="card mb-4 news-card">
                    <img style="border-radius: 5px; padding: 3px;" src="<?= base_url('./upload/berita/').$row['gambar'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="<?= base_url() ?>beranda/detail/<?= $row['id'] ?>"><h5 class="card-title" style="text-align: left; color: #3A5BA0;"><?= $row['judul'] ?></h5></a>
                        <p style="text-align: left; color: red; font-size: 14px;" class="mb-2"><i class='bx bx-calendar' ></i> <?= date('d F Y', strtotime($row['tgl'])); ?></p>
                        <p class="card-text berita-mini" style="text-align: left;">
                            <?php
                                $string = strip_tags($row['isi']);
                                if (strlen($string) > 150) {
                                    $stringCut = substr($string, 0, 150);
                                    $endPoint = strrpos($stringCut, ' ');
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
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>