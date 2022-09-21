<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(count($instansi)<=0) : ?>
        <link rel="icon" href="<?= base_url('./assets/img/tablogo.png') ?>">
        <title>Website Resmi Desa</title>
    <?php else: ?>
        <title>Website Resmi Desa <?= $instansi[0]['nama'] ?></title>
        <?php if($instansi[0]['logo'] == null) : ?>
            <link rel="icon" href="<?= base_url('./assets/img/tablogo.png') ?>">
        <?php else: ?>
            <link rel="icon" href="<?= base_url('./upload/logo/').$instansi[0]['logo'] ?>">
        <?php endif; ?>
    <?php endif; ?>

    <!-- Favicon -->
    <?php if(count($instansi)<=0) : ?>
    <?php else: ?>
        <link rel="icon" href="<?= base_url('./upload/logo/').$instansi[0]['logo'] ?>">
    <?php endif; ?>

    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/datatables.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datepicker/css/bootstrap-datepicker.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Custom Style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/template-style.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <!-- <i class='bx bxl-c-plus-plus'></i> -->
            <a href="<?= base_url() ?>"><img style="width: 50px; margin: 15px 15px 0 15px;" src="<?= base_url() ?>assets/img/tablogo.png" alt="img"></a>
            <?php if(count($instansi)<=0) : ?>
                <span class="logo_name">Nama Desa</span>
            <?php else: ?>
                <span style="margin: 15px 0 0 0;" class="logo_name"><?= $instansi[0]['nama'] ?></span>
            <?php endif; ?>
        </div>
        <ul class="nav-links">
            <li class="list">
                <a href="<?= base_url() ?>">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link-name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="<?= base_url() ?>">Dashboard</a></li>
                </ul>
            </li>

            <li class="
            <?php
                if( $this->uri->segment(1) == 'berita' ||
                    $this->uri->segment(1) == 'pengumuman' ||
                    $this->uri->segment(1) == 'foto' ||
                    $this->uri->segment(1) == 'dokumen') {
                        echo "showMenu"; 
                } 
            ?>">
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-upload'></i>
                        <span class="link-name">Publikasi Data</span>
                    </a>
                    <i class='bx bxs-down-arrow arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="dropdown-menu-title" href="">Publikasi Data</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'berita' ? 'active' : '' ?>"><a href="<?= base_url() ?>berita">Berita</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'foto' ? 'active' : '' ?>"><a href="<?= base_url() ?>foto">Galeri Foto</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'pengumuman' ? 'active' : '' ?>"><a href="<?= base_url() ?>pengumuman">Pengumuman</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'dokumen' ? 'active' : '' ?>"><a href="<?= base_url() ?>dokumen">Transparansi</a></li>
                </ul>
            </li>
            
            <li class="
            <?php
                if( $this->uri->segment(1) == 'profil' ||
                    $this->uri->segment(1) == 'sejarah' ||
                    $this->uri->segment(1) == 'visimisi' ||
                    $this->uri->segment(1) == 'struktur') {
                        echo "showMenu"; 
                } 
            ?>">
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bxs-file-archive'></i>
                        <span class="link-name">Data Desa</span>
                    </a>
                    <i class='bx bxs-down-arrow arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="dropdown-menu-title" href="">Data Desa</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'profil' ? 'active' : '' ?>"><a href="<?= base_url() ?>profil">Profil Desa</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'sejarah' ? 'active' : '' ?>"><a href="<?= base_url() ?>sejarah">Sejarah Desa</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'visimisi' ? 'active' : '' ?>"><a href="<?= base_url() ?>visimisi">Visi & Misi</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'struktur' ? 'active' : '' ?>"><a href="<?= base_url() ?>visimisi">Struktur Organisasi</a></li>
                </ul>
            </li>
            <li class="list <?= $this->uri->segment(1) == 'pelayanan' ? 'active' : '' ?>">
                <a href="<?= base_url() ?>pelayanan">
                    <i class='bx bxs-data'></i>
                    <span class="link-name">Standar Pelayanan</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="<?= base_url() ?>pelayanan">Standar Pelayanan</a></li>
                </ul>
            </li>
            <li class="list <?= $this->uri->segment(1) == 'kepuasan' ? 'active' : '' ?>">
                <a href="<?= base_url() ?>kepuasan">
                    <i class='bx bx-user-voice' ></i>
                    <span class="link-name">Index Kepuasan Masyarakat (IKM)</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="<?= base_url() ?>kepuasan">Index Kepuasan Masyarakat (IKM)</a></li>
                </ul>
            </li>
            <li class="list <?= $this->uri->segment(1) == 'admin' ? 'active' : '' ?>">
                <a href="<?= base_url() ?>admin">
                    <i class='bx bx-user' ></i>
                    <span class="link-name">Data Operator</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="<?= base_url() ?>admin">Data Operator</a></li>
                </ul>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="<?= base_url('./assets/img/avatar.png') ?>" alt="profile">
                    </div>
                    <div class="name-job">
                        <div class="profile-name"><?= $this->session->userdata('nama') ?></div>
                        <div class="job">Operator</div>
                    </div>
                    <a href="<?= base_url() ?>auth/logout"><i style="font-size: 28px; font-weight: 700;" class='bx bx-log-out'></i></a>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu' ></i>
            <span class="text">ADMIN AREA</span>
        </div>
        <div class="main-content">