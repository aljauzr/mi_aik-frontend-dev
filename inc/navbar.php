<?php
  $current_page = basename($_SERVER['PHP_SELF']);
?>

<div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
  <div class="container w-container">
    <a href="index.php" class="brand w-nav-brand <?= $current_page == 'index.php' ? 'w--current' : '' ?>">
      <img src="images/82616116logowarna-1-1.png" loading="lazy" width="38" sizes="38px" alt="" srcset="images/82616116logowarna-1-1-p-500.png 500w, images/82616116logowarna-1-1.png 632w" class="image-2">
      <div class="text-block-9">MI ASAS ISLAM<br>Kalibening</div>
    </a>
    <nav role="navigation" class="w-nav-menu">
      <div data-hover="true" data-delay="0" class="dropdown w-dropdown">
        <div class="dropdown-toggle w-dropdown-toggle">
          <div class="w-icon-dropdown-toggle"></div>
          <div>Profil</div>
        </div>
        <nav class="dropdown-list w-dropdown-list">
          <a href="sambutan-kepala-sekolah.php" class="profil w-dropdown-link <?= $current_page == 'sambutan-kepala-sekolah.php' ? 'w--current' : '' ?>">Sambutan Kepala Sekolah</a>
          <a href="visi-misi.php" class="profil w-dropdown-link <?= $current_page == 'visi-misi.php' ? 'w--current' : '' ?>">Visi dan Misi</a>
          <a href="guru-dan-staf.php" class="profil w-dropdown-link <?= $current_page == 'guru-dan-staf.php' ? 'w--current' : '' ?>">Guru dan Staf</a>
          <a href="fasilitas.php" class="profil w-dropdown-link <?= $current_page == 'fasilitas.php' ? 'w--current' : '' ?>">Fasilitas</a>
        </nav>
      </div>
      <a href="prestasi.php" class="nav-link prestasi w-nav-link <?= $current_page == 'prestasi.php' ? 'w--current' : '' ?>">Prestasi</a>
      <div data-hover="true" data-delay="0" class="dropdown w-dropdown">
        <div class="dropdown-toggle w-dropdown-toggle">
          <div class="w-icon-dropdown-toggle"></div>
          <div>Kegiatan Siswa</div>
        </div>
        <nav class="dropdown-list w-dropdown-list">
          <a href="kegiatan-harian.php" class="profil w-dropdown-link <?= $current_page == 'kegiatan-harian.php' ? 'w--current' : '' ?>">Kegiatan Harian</a>
          <a href="program-unggulan.php" class="profil w-dropdown-link <?= $current_page == 'program-unggulan.php' ? 'w--current' : '' ?>">Program Unggulan</a>
        </nav>
      </div>
      <a href="berita-dan-galeri.php" class="nav-link w-nav-link <?= $current_page == 'berita-dan-galeri.php' ? 'w--current' : '' ?>">Berita dan Galeri</a>
      <a href="info-ppdb.php" class="nav-link w-nav-link <?= $current_page == 'info-ppdb.php' ? 'w--current' : '' ?>">Info PPDB</a>
      <a href="kontak.php" class="nav-link button w-nav-link <?= $current_page == 'kontak.php' ? 'w--current' : '' ?>">Kontak</a>
    </nav>
    <div class="w-nav-button">
      <div class="w-icon-nav-menu"></div>
    </div>
  </div>
</div>