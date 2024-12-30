<!DOCTYPE html>
<html data-wf-page="6755708a178398bec1ab8f26" data-wf-site="6755708a178398bec1ab8ede">
<head>
  <title>Program Unggulan - MI ASAS ISLAM KALIBENING</title>
  <meta content="Program Unggulan" property="og:title">
  <meta content="Program Unggulan" property="twitter:title">
  <?php include 'inc/head.php'; ?>
</head>
<body>
  <!-- NAVBAR -->
  <?php include 'inc/navbar.php'; ?>
  <!-- END OF NAVBAR -->
  <section class="section-11" style="padding-top: 60px;">
    <div class="w-layout-blockcontainer container w-container">
      <h1 class="heading-13" style="margin-bottom: -50px;">Program Unggulan</h1>
      <div id="kegiatan-container" class="kegiatan"></div>
    </div>
  </section>
  <!-- FOOTER -->
  <section class="section-7">
    <?php include 'inc/footer.php'; ?>
  </section>
  <!-- END OF FOOTER -->
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6755708a178398bec1ab8ede" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <script src="js/config.js" type="text/javascript"></script>
  <script>
    // Fungsi untuk mengambil data kegiatan harian dari API
      fetch(backend_url + 'program-unggulan')
        .then(response => response.json())
        .then(data => {
          const kegiatanContainer = document.getElementById('kegiatan-container');
          
          // Iterasi melalui data kegiatan harian yang diterima
          data.forEach((item, index) => {
            // Membuat elemen div untuk kegiatan
            const kegiatanElement = document.createElement('div');
            kegiatanElement.classList.add('kegiatan');
            
            // Jika index genap, tambahkan class "keg-2" untuk styling berbeda
            if (index % 2 == 0) {
              // Struktur HTML untuk setiap kegiatan
              kegiatanElement.innerHTML = `
                <div class="w-layout-grid grid-4">
                  <div class="w-layout-vflex flex-block">
                    <h3 class="judul-kegiatan">${item.nama}</h3>
                    <div class="text-block-10">${item.keterangan || 'Deskripsi tidak tersedia.'}</div>
                  </div>
                  <img src="${backend_url}${item.gambar}" loading="lazy" width="400" height="266.41" class="gambar-kegiatan" alt="${item.nama}">
                </div>
              `;
            }
            else {
              // Struktur HTML untuk setiap kegiatan
              kegiatanElement.classList.add('keg-2');
              kegiatanElement.innerHTML = `
                <div class="w-layout-grid grid-keg-2">
                  <img src="${backend_url}${item.gambar}" loading="lazy" width="400" height="266.41" class="gambar-kegiatan" alt="${item.nama}">
                  <div class="w-layout-vflex flex-block">
                    <h3 class="judul-kegiatan judul-2">${item.nama}</h3>
                    <div class="text-block-10 text-2">${item.keterangan || 'Deskripsi tidak tersedia.'}</div>
                  </div>
                </div>
              `;
            }
            
            // Menambahkan elemen kegiatan ke dalam container
            kegiatanContainer.appendChild(kegiatanElement);
          });
        })
        .catch(error => {
          console.error('Error fetching kegiatan harian:', error);
        });
  </script>
</body>
</html>