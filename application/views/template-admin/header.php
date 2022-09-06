<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(count($instansi)<=0) : ?>
        <link rel="icon" href="<?= base_url('./assets/img/tablogo.png') ?>">
        <title>Website Resmi Instansi Pemerintah</title>
    <?php else: ?>
        <title>Website Resmi <?= $instansi[0]['nama'] ?></title>
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
    
    <!-- Custom Style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/template-style.css">
</head>
<body>
    <div class="nav-bar">
        <h1 class="">
            <a href="<?= base_url() ?>"><img style=" width: 220px;" src="<?= base_url() ?>assets/img/logo.png"></a>
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
    </div>
    <div class="menu-bar">
		<div class="topbar">
			<div class="toggle">
				<i class="fa-solid fa-bars"></i>
			</div>
			<div class="menu-title">
                <a class="text-white" href="<?= base_url() ?>"><h4>DASHBOARD</h4></a>
			</div>
		</div>
	</div>
    <div class="main-content">