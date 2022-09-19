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
    <!-- <div class="nav-bar">
        <h1 class="">
            <a href="<?= base_url() ?>"><img style=" width: 220px;" src="<?= base_url() ?>assets/img/logo.png" alt="img"></a>
        </h1>
        <ul class="nav">
            <?php if((isset($data))&&($data=='dashboard')){?>
                <li class="list active">
            <?php }else{?>
                <li class="list">
            <?php }?>
                <a href="<?= base_url() ?>">
                    <span class="icon"><i class="fa-solid fa-house"></i></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <?php if((isset($data))&&($data=='berita')){?>
                <li class="list active">
            <?php }else{?>
                <li class="list">
            <?php }?>
                <a href="<?= base_url() ?>berita">
                    <span class="icon"><i class="fa-solid fa-newspaper"></i></span>
                    <span class="title">Berita</span>
                </a>
            </li>
            <?php if((isset($data))&&($data=='pengumuman')){?>
                <li class="list active">
            <?php }else{?>
                <li class="list">
            <?php }?>
                <a href="<?= base_url() ?>pengumuman">
                    <span class="icon"><i class="fa-solid fa-bullhorn"></i></span>
                    <span class="title">Pengumuman</span>
                </a>
            </li>
            <?php if((isset($data))&&($data=='dokumen')){?>
                <li class="list active">
            <?php }else{?>
                <li class="list">
            <?php }?>
                <a href="<?= base_url() ?>dokumen">
                    <span class="icon"><i class="fa-solid fa-folder-open"></i></span>
                    <span class="title">Dokumen Publik</span>
                </a>
            </li>
            <?php if((isset($data))&&($data=='foto')){?>
                <li class="list active">
            <?php }else{?>
                <li class="list">
            <?php }?>
                <a href="<?= base_url() ?>foto">
                    <span class="icon"><i class="fa-solid fa-camera-retro"></i></span>
                    <span class="title">Foto</span>
                </a>
            </li>
            <?php if((isset($data))&&($data=='pelayanan')){?>
                <li class="list active">
            <?php }else{?>
                <li class="list">
            <?php }?>
                <a href="<?= base_url() ?>pelayanan">
                    <span class="icon"><i class="fa-solid fa-list-check"></i></span>
                    <span class="title">Standar Pelayanan</span>
                </a>
            </li>
            <?php if((isset($data))&&($data=='kepuasan')){?>
                <li class="list active">
            <?php }else{?>
                <li class="list">
            <?php }?>
                <a href="<?= base_url() ?>kepuasan">
                    <span class="icon"><i class="fa-solid fa-square-poll-vertical"></i></span>
                    <span class="title">Kepuasan Layanan</span>
                </a>
            </li>
            <?php if((isset($data))&&($data=='profil')){?>
                <li class="list active">
            <?php }else{?>
                <li class="list">
            <?php }?>
                <a href="<?= base_url() ?>profil">
                    <span class="icon"><i class="fa-solid fa-book-journal-whills"></i></span>
                    <span class="title">Profil Instansi</span>
                </a>
            </li>
            <?php if((isset($data))&&($data=='sejarah')){?>
                <li class="list active">
            <?php }else{?>
                <li class="list">
            <?php }?>
                <a href="<?= base_url() ?>sejarah">
                    <span class="icon"><i class="fa-solid fa-clock-rotate-left"></i></span>
                    <span class="title">Sejarah</span>
                </a>
            </li>
            <?php if((isset($data))&&($data=='visimisi')){?>
                <li class="list active">
            <?php }else{?>
                <li class="list">
            <?php }?>
                <a href="<?= base_url() ?>visimisi">
                    <span class="icon"><i class="fa-solid fa-users-viewfinder"></i></span>
                    <span class="title">Visi & Misi</span>
                </a>
            </li>
            <?php if((isset($data))&&($data=='struktur')){?>
                <li class="list active">
            <?php }else{?>
                <li class="list">
            <?php }?>
                <a href="<?= base_url() ?>struktur">
                    <span class="icon"><i class="fa-solid fa-sitemap"></i></span>
                    <span class="title">Struktur Organisasi</span>
                </a>
            </li>
            <?php if((isset($data))&&($data=='admin')){?>
                <li class="list active">
            <?php }else{?>
                <li class="list">
            <?php }?>
                <a href="<?= base_url() ?>admin">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <span class="title">Data Admin</span>
                </a>
            </li>
            <li class="list">
                <a href="<?= base_url() ?>auth/logout">
                    <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                    <span class="title">Keluar</span>
                </a>
            </li>
        </ul>
    </div> -->
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">CodingLab</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="<?= base_url() ?>">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link-name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="<?= base_url() ?>">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-upload'></i>
                        <span class="link-name">Upload Data</span>
                    </a>
                    <i class='bx bxs-down-arrow arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link-name" href="">Upload Data</a></li>
                    <li><a href="<?= base_url() ?>berita">Berita</a></li>
                    <li><a href="<?= base_url() ?>pengumuman">Pengumuman</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bxs-file-archive'></i>
                        <span class="link-name">Data Instansi</span>
                    </a>
                    <i class='bx bxs-down-arrow arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link-name" href="">Data Instansi</a></li>
                    <li><a href="<?= base_url() ?>profil">Profil Instansi</a></li>
                    <li><a href="<?= base_url() ?>sejarah">Visi & Misi</a></li>
                    <li><a href="<?= base_url() ?>visimisi">Struktur Organisasi</a></li>
                </ul>
            </li>
            <li>
                <a href="<?= base_url() ?>admin">
                    <i class='bx bx-user' ></i>
                    <span class="link-name">Data Operator</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="<?= base_url() ?>admin">Data Operator</a></li>
                </ul>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="<?= base_url('./assets/img/avatar.png') ?>" alt="profile">
                    </div>
                    <div class="name-job">
                        <div class="profile-name">Dummy Name</div>
                        <div class="job">Operator</div>
                    </div>
                    <i class="fa-solid fa-right-from-bracket"></i>
                </div>
            </li>
        </ul>
        
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu' ></i>
            <span class="text">Drop Down Sidebar</span>
        </div>
        <div class="main-content">