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
            <a href="<?= base_url() ?>">
                <?php if($instansi[0]['logo'] == null) : ?>
                    <img class="logo-img" src="<?= base_url() ?>assets/img/tablogo.png" alt="img">
                <?php else: ?>
                    <img class="logo-img" src="<?= base_url('./upload/logo/').$instansi[0]['logo'] ?>" alt="img">
                <?php endif; ?>
            </a>
            <?php if(count($instansi)<=0) : ?>
                <span class="logo_name">Nama Desa</span>
            <?php else: ?>
                <span style="margin: 15px 0 0 0;" class="logo_name">Desa <?= $instansi[0]['nama'] ?></span>
            <?php endif; ?>
        </div>
        <hr style="margin-bottom: 0px">
        <ul class="nav-links">
            <div class="profile-details">
                <div class="profile-content">
                    <img class="logo-img" src="<?= base_url('./assets/img/avatar.png') ?>" alt="profile">
                </div>
                <div class="name-job">
                    <div class="profile-name"><?= $this->session->userdata('nama') ?></div>
                    <div class="job">Operator</div>
                </div>
                <a href="<?= base_url() ?>auth/logout">
                    <i style="font-size: 28px; font-weight: 700; color: var(--primary);" class='bx bx-log-out'></i>
                </a>
            </div>
            <hr style="margin-top: 0px">
            <li class="list <?= $this->uri->segment(1) == '' ? 'active' : '' ?>">
                <a href="<?= base_url() ?>">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link-name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="<?= base_url() ?>">Dashboard</a></li>
                </ul>
            </li>

            <li class="list
            <?php
                if( $this->uri->segment(1) == 'berita' ||
                    $this->uri->segment(1) == 'pengumuman' ||
                    $this->uri->segment(1) == 'foto' ||
                    $this->uri->segment(1) == 'agenda') {
                        echo "showMenu";
                } 
            ?>">
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-upload'></i>
                        <span class="link-name">Publikasi</span>
                    </a>
                    <i class='bx bxs-down-arrow arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="dropdown-menu-title" href="">Publikasi</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'berita' ? 'active' : '' ?>"><a href="<?= base_url() ?>berita">Berita</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'foto' ? 'active' : '' ?>"><a href="<?= base_url() ?>foto">Galeri Foto</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'pengumuman' ? 'active' : '' ?>"><a href="<?= base_url() ?>pengumuman">Pengumuman</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'agenda' ? 'active' : '' ?>"><a href="<?= base_url() ?>agenda">Agenda Kegiatan</a></li>
                </ul>
            </li>
            <li class="list <?= $this->uri->segment(1) == 'anggaran' ? 'active' : '' ?>">
                <a href="<?= base_url() ?>anggaran">
                    <i class='bx bxs-file-archive'></i>
                    <span class="link-name">Transparansi Anggaran</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="<?= base_url() ?>anggaran">Transparansi Anggaran</a></li>
                </ul>
            </li>
            <li class="list <?= $this->uri->segment(1) == 'penduduk' ? 'active' : '' ?>">
                <a href="<?= base_url() ?>penduduk">
                <i class='bx bx-bar-chart-square'></i>
                    <span class="link-name">Statistik Data Penduduk</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="<?= base_url() ?>penduduk">Statistik Data Penduduk</a></li>
                </ul>
            </li>
            <li class="list <?= $this->uri->segment(1) == 'pelayanan' ? 'active' : '' ?>">
                <a href="<?= base_url() ?>pelayanan">
                    <i class='bx bx-book-content'></i>
                    <span class="link-name">Standar Pelayanan</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="<?= base_url() ?>pelayanan">Standar Pelayanan</a></li>
                </ul>
            </li>
            <li class="list
            <?php
                if( $this->uri->segment(1) == 'profil' ||
                    $this->uri->segment(1) == 'sejarah' ||
                    $this->uri->segment(1) == 'visimisi' ||
                    $this->uri->segment(1) == 'struktur' ||
                    $this->uri->segment(1) == 'aparatur') {
                        echo "showMenu"; 
                } 
            ?>">
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-buildings'></i>
                        <span class="link-name">Data Desa</span>
                    </a>
                    <i class='bx bxs-down-arrow arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="dropdown-menu-title" href="">Data Desa</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'profil' ? 'active' : '' ?>"><a href="<?= base_url() ?>profil">Profil Desa</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'sejarah' ? 'active' : '' ?>"><a href="<?= base_url() ?>sejarah">Sejarah Desa</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'visimisi' ? 'active' : '' ?>"><a href="<?= base_url() ?>visimisi">Visi & Misi</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'struktur' ? 'active' : '' ?>"><a href="<?= base_url() ?>struktur">Struktur Organisasi</a></li>
                    <li class="list <?= $this->uri->segment(1) == 'aparatur' ? 'active' : '' ?>"><a href="<?= base_url() ?>visimisi">Aparatur Desa</a></li>
                </ul>
            </li>
            <li class="list <?= $this->uri->segment(1) == 'kepuasan' ? 'active' : '' ?>">
                <a href="<?= base_url() ?>kepuasan">
                    <i class='bx bx-line-chart'></i>
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
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu' ></i>
            <span class="text">ADMIN AREA</span>
        </div>
        <div class="main-content">