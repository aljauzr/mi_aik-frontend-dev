<!DOCTYPE html>
<html data-wf-page="6755708a178398bec1ab8f2b" data-wf-site="6755708a178398bec1ab8ede">
<head>
  <title>Prestasi - MI ASAS ISLAM KALIBENING</title>
  <meta content="prestasi" property="og:title">
  <meta content="prestasi" property="twitter:title">
  <?php include 'inc/head.php'; ?>
</head>
<body class="body-2">
  <!-- NAVBAR -->
  <?php include 'inc/navbar.php'; ?>
  <!-- END OF NAVBAR -->
  <section style="padding-top: 60px;">
    <h1 class="heading-18">Prestasi</h1>
    <div class="w-layout-blockcontainer container-13 w-container">
      <div class="w-layout-grid grid-12" id="prestasi-container">
        <!-- Konten prestasi akan dimuat di sini secara dinamis -->
      </div>
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
    // Fungsi untuk memuat data dari backend dan menampilkannya secara dinamis
    async function loadPrestasi() {
      try {
        const response = await fetch(backend_url + 'prestasi');
        const data = await response.json();

        // Urutkan data berdasarkan id terbesar
        data.sort((a, b) => b.id - a.id);

        const prestasiContainer = document.getElementById('prestasi-container');
        prestasiContainer.innerHTML = ''; // Kosongkan container

        const maxItems = 5; // Batas item yang akan ditampilkan
        const truncatedData = data.slice(0, maxItems); // Ambil hanya 5 item pertama

        // Render data yang dibatasi
        truncatedData.forEach(prestasi => {
          // Batasi nama prestasi hingga 36 karakter
          const namaPrestasi = prestasi.nama.length > 36 
            ? prestasi.nama.substring(0, 36) + "..." 
            : prestasi.nama;

          // Batasi keterangan hingga 170 karakter
          const keteranganPrestasi = prestasi.keterangan.length > 170 
            ? prestasi.keterangan.substring(0, 170) + "..." 
            : prestasi.keterangan;

          const prestasiItem = `
            <div class="w-layout-hflex">
              <img src="${prestasi.gambar ? `${backend_url}${prestasi.gambar}` : `${backend_url}images/defaultPrestasi.jpg`}" 
                   loading="lazy" 
                   alt="${prestasi.nama}" 
                   class="foto-prestasi" 
                   style="aspect-ratio: 1/1; width: 161.38px; height: 161.38px;">
              <div class="w-layout-vflex flex-block-5">
                <div class="text-block-24">${namaPrestasi}</div>
                <div class="text-block-25">${keteranganPrestasi}</div>
                <a href="view_prestasi?id=${prestasi.id}" class="button-6 w-button">Selengkapnya</a>
              </div>
            </div>
          `;
          prestasiContainer.innerHTML += prestasiItem;
        });

        // Tambahkan tombol "Prestasi lainnya..." jika ada lebih dari 5 item
        if (data.length > maxItems) {
          const moreButtonContainer = document.createElement('div');
          moreButtonContainer.className = 'w-layout-blockcontainer container-16 w-container';

          const moreButtonFlex = document.createElement('div');
          moreButtonFlex.className = 'w-layout-hflex flex-block-6';

          const moreTextButton = document.createElement('a');
          moreTextButton.textContent = 'Prestasi lainnya...';
          moreTextButton.className = 'button-9 w-button';
          moreTextButton.href = '#';
          moreTextButton.target = '_blank'; // Tambahkan atribut target="_blank" agar ketika ditekan membuat tab baru
          moreTextButton.addEventListener('click', (event) => {
            event.preventDefault();
            showAllPrestasi(data);
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

    // Fungsi untuk menampilkan semua data
    function showAllPrestasi(data) {
      const prestasiContainer = document.getElementById('prestasi-container');
      prestasiContainer.innerHTML = ''; // Kosongkan container

      data.forEach(prestasi => {
        // Batasi nama prestasi hingga 36 karakter
        const namaPrestasi = prestasi.nama.length > 36 
          ? prestasi.nama.substring(0, 36) + "..." 
          : prestasi.nama;
        // Batasi keterangan prestasi hingga 170 karakter
        const keteranganPrestasi = prestasi.keterangan.length > 170
          ? prestasi.keterangan.substring(0, 170) + "..." 
          : prestasi.keterangan;

        const prestasiItem = `
          <div class="w-layout-hflex">
            <img src="${prestasi.gambar ? `${backend_url}${prestasi.gambar}` : `${backend_url}images/defaultPrestasi.jpg`}" 
                 loading="lazy" 
                 alt="${prestasi.nama}" 
                 class="foto-prestasi" 
                 style="aspect-ratio: 1/1; width: 161.38px; height: 161.38px;">
            <div class="w-layout-vflex flex-block-5">
              <div class="text-block-24">${namaPrestasi}</div>
              <div class="text-block-25">${keteranganPrestasi}</div>
              <a href="view_prestasi?id=${prestasi.id}" class="button-6 w-button">Selengkapnya</a>
            </div>
          </div>
        `;
        prestasiContainer.innerHTML += prestasiItem;
      });
    }

    // Panggil fungsi loadPrestasi saat halaman selesai dimuat
    document.addEventListener('DOMContentLoaded', loadPrestasi);
  </script>
</body>
</html>