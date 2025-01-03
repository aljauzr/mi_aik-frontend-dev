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
      <h2 class="heading-14" >BERITA LAIN</h2>
      <div class="w-layout-blockcontainer container-13 w-container">
        <div class="w-layout-grid grid-12" id="prestasi-container">
          <!-- Konten berita lain akan dimuat di sini secara dinamis -->
        </div>
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
  <!-- SCRIPT TO FETCH THE NEWEST 3 BERITA -->
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

          // Batasi nama berita hingga 34 karakter
            const namaBerita = item.nama.length > 34
              ? item.nama.substring(0, 34) + "..." 
              : item.nama;
          
          // Membuat elemen text
          const textBlock = document.createElement('div');
          textBlock.classList.add('text-block-19');
          textBlock.textContent = namaBerita;

          // Membuat tombol "Selengkapnya"
          const button = document.createElement('a');
          button.href = 'view_berita?id=' + item.id;
          button.classList.add('button-5', 'w-button');
          button.textContent = 'Selengkapnya';

          // Menambahkan elemen ke dalam beritaDiv
          beritaDiv.appendChild(imgElement);
          beritaDiv.appendChild(textBlock);
          beritaDiv.appendChild(button);
          
          // Menambahkan beritaDiv ke dalam container berita terbaru
          beritaContainer.appendChild(beritaDiv);
        });
      })
      .catch(error => console.error('Error fetching berita:', error));
  </script>
  <!-- SCRIPT TO FETCH THE REMAINING OF BERITA -->
  <script>
    // Fungsi untuk memuat data dari backend dan menampilkannya secara dinamis
    async function loadBeritaLain() {
      try {
        const response = await fetch(backend_url + 'berita-galeri');
        const data = await response.json();

        // Urutkan data berdasarkan id terbesar
        data.sort((a, b) => b.id - a.id);

        const prestasiContainer = document.getElementById('prestasi-container');
        prestasiContainer.innerHTML = ''; // Kosongkan container

        const startIndex = 3; // Mulai dari index ke-4
        const endIndex = startIndex + 5; // Ambil 5 item setelah index ke-4
        const truncatedData = data.slice(startIndex, endIndex); // Ambil item dari index ke-4 hingga index ke-9

        // Render data yang dibatasi
        truncatedData.forEach(beritaLain => {
          // Batasi nama berita lain hingga 36 karakter
          const namaBeritaLain = beritaLain.nama.length > 36 
            ? beritaLain.nama.substring(0, 36) + "..." 
            : beritaLain.nama;
          // Batasi keterangan hingga 170 karakter
          const keteranganBeritaLain = beritaLain.keterangan.length > 170 
            ? beritaLain.keterangan.substring(0, 170) + "..."
            : beritaLain.keterangan;

          const beritaLainItem = `
            <div class="w-layout-hflex">
              <img src="${beritaLain.gambar ? `${backend_url}${beritaLain.gambar}` : `${backend_url}images/defaultBerita.jpg`}" 
                   loading="lazy" 
                   alt="${beritaLain.nama}" 
                   class="foto-prestasi" 
                   style="aspect-ratio: 1/1; width: 161.38px; height: 161.38px;">
              <div class="w-layout-vflex flex-block-5">
                <div class="text-block-24">${namaBeritaLain}</div>
                <div class="text-block-25">${keteranganBeritaLain}</div>
                <a href="view_berita?id=${beritaLain.id}" class="button-6 w-button">Selengkapnya</a>
              </div>
            </div>
          `;
          prestasiContainer.innerHTML += beritaLainItem;
        });

        // Tambahkan tombol "Berita lainnya..." jika ada lebih dari 9 item
        if (data.length > endIndex) {
          const moreButtonContainer = document.createElement('div');
          moreButtonContainer.className = 'w-layout-blockcontainer container-16 w-container';

          const moreButtonFlex = document.createElement('div');
          moreButtonFlex.className = 'w-layout-hflex flex-block-6';

          const moreTextButton = document.createElement('a');
          moreTextButton.textContent = 'Berita lainnya...';
          moreTextButton.className = 'button-9 w-button';
          moreTextButton.href = '#';
          moreTextButton.target = '_blank'; // Tambahkan atribut target="_blank" agar ketika ditekan membuat tab baru
          moreTextButton.addEventListener('click', (event) => {
            event.preventDefault();
            showAllBerita(data);
          });

          // Susun elemen sesuai struktur
          moreButtonFlex.appendChild(moreTextButton);
          moreButtonContainer.appendChild(moreButtonFlex);
          prestasiContainer.appendChild(moreButtonContainer);
        }
      } catch (error) {
        console.error('Error fetching data:', error);
      }
    }

    // Fungsi untuk menampilkan semua data mulai dari indeks ke-4
    function showAllBerita(data) {
      const prestasiContainer = document.getElementById('prestasi-container');
      prestasiContainer.innerHTML = ''; // Kosongkan container

      const startIndex = 3; // Mulai dari index ke-4
      const truncatedData = data.slice(startIndex); // Ambil semua data mulai dari index ke-4

      truncatedData.forEach(beritaLain => {
        // Batasi nama beritaLain hingga 36 karakter
        const namaBeritaLain = beritaLain.nama.length > 36 
            ? beritaLain.nama.substring(0, 36) + "..." 
            : beritaLain.nama;
        // Batasi keterangan hingga 170 karakter
        const keteranganBeritaLain = beritaLain.keterangan.length > 170 
            ? beritaLain.keterangan.substring(0, 170) + "..."
            : beritaLain.keterangan;

        const beritaLainItem = `
          <div class="w-layout-hflex">
            <img src="${beritaLain.gambar ? `${backend_url}${beritaLain.gambar}` : `${backend_url}images/defaultBerita.jpg`}" 
                 loading="lazy" 
                 alt="${beritaLain.nama}" 
                 class="foto-prestasi" 
                 style="aspect-ratio: 1/1; width: 161.38px; height: 161.38px;">
            <div class="w-layout-vflex flex-block-5">
              <div class="text-block-24">${namaBeritaLain}</div>
              <div class="text-block-25">${keteranganBeritaLain}</div>
              <a href="view_berita?id=${beritaLain.id}" class="button-6 w-button">Selengkapnya</a>
            </div>
          </div>
        `;
        prestasiContainer.innerHTML += beritaLainItem;
      });
    }

    // Panggil fungsi loadBeritaLain saat halaman selesai dimuat
    document.addEventListener('DOMContentLoaded', loadBeritaLain);
  </script>
</body>
</html>