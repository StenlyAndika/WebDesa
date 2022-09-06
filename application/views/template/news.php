<div class="section col-lg-12">
    <div class="ticker">
        <div class="title">
            <h5>Berita Terkini</h5>
        </div>
        <div class="news">
            <div class='marquee'>
                <ul style="list-style-type: none;">
                    <li>
                    <?php foreach ($berita as $row) : ?>
                        <a href="<?= base_url() ?>beranda/detail/<?= $row['id'] ?>"><?= $row['judul'] ?>&emsp;&emsp;&emsp;&emsp;</a>
                    <?php endforeach; ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>