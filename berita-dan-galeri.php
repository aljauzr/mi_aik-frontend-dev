<!DOCTYPE html>
<html data-wf-page="6755708a178398bec1ab8f29" data-wf-site="6755708a178398bec1ab8ede">
<head>
  <title>Berita dan Galeri - MI ASAS ISLAM KALIBENING</title>
  <meta content="berita dan galeri" property="og:title">
  <meta content="berita dan galeri" property="twitter:title">
  <?php include 'inc/head.php'; ?>
</head>
<body class="body-2">
  <!-- NAVBAR -->
  <?php include 'inc/navbar.php'; ?>
  <!-- END OF NAVBAR -->
  <section class="section-13" style="padding-top: 60px;">
    <div class="div-block-8">
      <div class="text-block-18">Berita dan Galeri</div>
      <div data-delay="5000" data-animation="slide" class="slider-4 w-slider" data-autoplay="true" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="600" data-infinite="true">
        <div class="w-slider-mask">
          <div class="w-slide"><img src="images/upacara-2-1.png" loading="lazy" sizes="(max-width: 1860px) 100vw, 1860px" srcset="images/upacara-2-1-p-500.png 500w, images/upacara-2-1-p-800.png 800w, images/upacara-2-1-p-1080.png 1080w, images/upacara-2-1-p-1600.png 1600w, images/upacara-2-1.png 1860w" alt=""></div>
          <div class="w-slide"><img src="images/00db2e51ea28e1225dabbca572675797.jpg" loading="lazy" sizes="(max-width: 2560px) 100vw, 2560px" srcset="images/00db2e51ea28e1225dabbca572675797-p-500.jpg 500w, images/00db2e51ea28e1225dabbca572675797-p-800.jpg 800w, images/00db2e51ea28e1225dabbca572675797-p-1080.jpg 1080w, images/00db2e51ea28e1225dabbca572675797-p-1600.jpg 1600w, images/00db2e51ea28e1225dabbca572675797-p-2000.jpg 2000w, images/00db2e51ea28e1225dabbca572675797.jpg 2560w" alt=""></div>
        </div>
        <div class="w-slider-arrow-left">
          <div class="w-icon-slider-left"></div>
        </div>
        <div class="w-slider-arrow-right">
          <div class="w-icon-slider-right"></div>
        </div>
        <div class="w-slider-nav w-shadow w-round"></div>
      </div>
    </div>
  </section>
  <section class="section-14">
    <div class="w-layout-blockcontainer container w-container">
      <h1 class="heading-15">BERITA TERBARU</h1>
      <div class="w-layout-grid grid-9" id="berita-container">
        <!-- Berita akan dimuat di sini -->
      </div>
    </div>
    <div class="w-layout-blockcontainer container container-berita w-container">
      <h2 class="heading-14">BERITA LAIN</h2>
      <div class="w-layout-grid grid-10" id="berita-lain-container">
        <!-- Untuk berita lain -->
      </div> 
    </div>
  </section>
  <section>
    <h1 class="heading-16">Galeri Kegiatan</h1>
    <div class="w-layout-blockcontainer container foto w-container">
      <div class="div-block-9"><img src="images/upacara.png" loading="lazy" sizes="(max-width: 479px) 29vw, 31vw" srcset="images/upacara-p-500.png 500w, images/upacara-p-800.png 800w, images/upacara-p-1080.png 1080w, images/upacara-p-1600.png 1600w, images/upacara.png 1860w" alt="" class="geleri"><img src="images/299678353_379457064160791_5776838357139522517_n-2.png" loading="lazy" sizes="(max-width: 479px) 29vw, 31vw" srcset="images/299678353_379457064160791_5776838357139522517_n-2-p-500.png 500w, images/299678353_379457064160791_5776838357139522517_n-2-p-800.png 800w, images/299678353_379457064160791_5776838357139522517_n-2.png 1022w" alt="" class="geleri"><img src="images/b.png" loading="lazy" sizes="(max-width: 479px) 29vw, 31vw" srcset="images/b-p-500.png 500w, images/b.png 610w" alt="" class="geleri"><img src="images/c.png" loading="lazy" sizes="(max-width: 479px) 29vw, 31vw" srcset="images/c-p-500.png 500w, images/c.png 610w" alt="" class="geleri"><img src="images/d.png" loading="lazy" sizes="(max-width: 479px) 29vw, 31vw" srcset="images/d-p-500.png 500w, images/d.png 609w" alt="" class="geleri"><img src="images/e.png" loading="lazy" sizes="(max-width: 479px) 29vw, 31vw" srcset="images/e-p-500.png 500w, images/e.png 609w" alt="" class="geleri"><img src="images/f.png" loading="lazy" sizes="(max-width: 479px) 29vw, 31vw" srcset="images/f-p-500.png 500w, images/f.png 610w" alt="" class="geleri"><img src="images/3.jpg" loading="lazy" width="450" height="Auto" alt="" class="geleri"></div>
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
    // Fungsi untuk mengambil data dari API
    fetch(backend_url + 'berita-galeri')
      .then(response => response.json())
      .then(data => {
        const beritaContainer = document.getElementById('berita-container');
        const beritaLainContainer = document.getElementById('berita-lain-container');
        
        // Mengurutkan data berdasarkan id secara menurun
        const sortedData = data.sort((a, b) => b.id - a.id);
        
        // Mengambil hanya 3 item pertama untuk berita terbaru
        const beritaTerbaru = sortedData.slice(0, 3);
        
        // Menampilkan berita terbaru
        beritaTerbaru.forEach(item => {
          const beritaDiv = document.createElement('div');
          beritaDiv.classList.add('w-layout-vflex', 'flex-block-3');
          
          // Membuat elemen gambar
          const imgElement = document.createElement('img');
          imgElement.src = item.gambar ? backend_url + item.gambar : backend_url + 'images/defaultBerita.jpg';
          imgElement.loading = 'lazy';
          imgElement.width = 373.33;
          imgElement.height = 373.33;
          imgElement.alt = '';
          imgElement.classList.add('image-12');
          
          // Membuat elemen text
          const textBlock = document.createElement('div');
          textBlock.classList.add('text-block-19');
          textBlock.textContent = item.nama;

          // Membuat tombol "Selengkapnya"
          const button = document.createElement('a');
          button.href = 'view_berita.php?id=' + item.id;
          button.classList.add('button-5', 'w-button');
          button.textContent = 'Selengkapnya';

          // Menambahkan elemen ke dalam beritaDiv
          beritaDiv.appendChild(imgElement);
          beritaDiv.appendChild(textBlock);
          beritaDiv.appendChild(button);
          
          // Menambahkan beritaDiv ke dalam container berita terbaru
          beritaContainer.appendChild(beritaDiv);
        });

        // Mengambil sisa berita untuk "Berita Lain"
        const beritaLain = sortedData.slice(3); // Semua item setelah 3 berita terbaru

        // Menampilkan berita lain
        beritaLain.forEach(item => {
          const linkBlock = document.createElement('a');
          linkBlock.href = 'view_berita.php?id=' + item.id;
          linkBlock.classList.add('link-block', 'w-inline-block');

          // Membuat elemen gambar untuk berita lain dengan ukuran default
          const imgElement = document.createElement('img');
          imgElement.src = item.gambar ? backend_url + item.gambar : backend_url + 'images/defaultBerita.jpg';
          imgElement.loading = 'lazy';
          imgElement.width = 163; // Ukuran default
          imgElement.alt = '';
          imgElement.sizes = '(max-width: 479px) 100vw, 163px';
          imgElement.classList.add('image-12');

          // Membuat elemen text
          const flexBlock = document.createElement('div');
          flexBlock.classList.add('w-layout-vflex', 'flex-block-4');

          const textBlock = document.createElement('div');
          textBlock.classList.add('text-block-20');
          textBlock.textContent = item.nama;

          const tombol = document.createElement('div');
          tombol.classList.add('text-block-20', 'tombol');
          tombol.textContent = 'Selengkapnya';

          // Menyusun elemen ke dalam linkBlock
          flexBlock.appendChild(textBlock);
          flexBlock.appendChild(tombol);
          linkBlock.appendChild(imgElement);
          linkBlock.appendChild(flexBlock);

          // Menambahkan linkBlock ke dalam container berita lain
          beritaLainContainer.appendChild(linkBlock);
        });
      })
      .catch(error => console.error('Error fetching berita:', error));
  </script>
</body>
</html>