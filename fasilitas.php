<!DOCTYPE html>
<html data-wf-page="6755708a178398bec1ab8f2e" data-wf-site="6755708a178398bec1ab8ede">
<head>
  <title>Fasilitas - MI ASAS ISLAM KALIBENING</title>
  <meta content="fasilitas" property="og:title">
  <meta content="fasilitas" property="twitter:title">
  <?php include 'inc/head.php'; ?>
</head>
<body class="body">
  <!-- NAVBAR -->
  <?php include 'inc/navbar.php'; ?>
  <!-- END OF NAVBAR -->
  <section class="section-18" style="padding-top: 60px;">
    <h1 class="heading-21">Fasilitas Sekolah</h1>
    <div class="w-layout-blockcontainer container w-container">
        <div id="fasilitas-container" class="w-layout-grid grid-13">
            <!-- Fasilitas items akan diisi di sini -->
        </div>
        <div class="text-block-28">Semua Fasilitas Bertujuan untuk<br>Membantu Kegiatan Belajar Mengajar Siswa</div>
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
    // Fetch data from backend API
    fetch(backend_url + 'fasilitas')
      .then(response => response.json())
      .then(data => {
          const container = document.getElementById('fasilitas-container');
          data.forEach(item => {
              const fasilitasElement = document.createElement('div');
              fasilitasElement.classList.add('w-layout-vflex', 'flex-block-8');

              // Batasi nama fasilitas hingga 30 karakter
              const namaFasilitas = item.nama.length > 30
                ? item.nama.substring(0, 30) + "..." 
                : item.nama;

              // Create image element
              const img = document.createElement('img');
              img.src = backend_url + item.gambar;
              img.loading = 'lazy';
              img.alt = item.nama;
              img.weight = 284.22;
              img.height = 184.14;

              // Create text block for name
              const textBlock = document.createElement('div');
              textBlock.classList.add('text-block-30');
              textBlock.textContent = namaFasilitas;

              // Append image and text to the fasilitas element
              fasilitasElement.appendChild(img);
              fasilitasElement.appendChild(textBlock);

              // Append fasilitas element to the container
              container.appendChild(fasilitasElement);
          });
      })
    .catch(error => console.error('Error fetching fasilitas:', error));
  </script>
</body>
</html>