<!DOCTYPE html>
<html data-wf-page="6755708a178398bec1ab8f2a" data-wf-site="6755708a178398bec1ab8ede">
<head>
  <title>Guru dan Staf - MI ASAS ISLAM KALIBENING</title>
  <meta content="guru dan staff" property="og:title">
  <meta content="guru dan staff" property="twitter:title">
  <?php include 'inc/head.php'; ?>
</head>
<body class="body-2">
  <!-- NAVBAR -->
  <?php include 'inc/navbar.php'; ?>
  <!-- END OF NAVBAR -->
  <section class="section-16" style="padding-top: 60px;">
    <div class="w-layout-blockcontainer w-container">
      <h1 class="heading-17">Guru dan Staf</h1>
      <div class="w-layout-grid grid-11" id="guru-container"></div>
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
    document.addEventListener("DOMContentLoaded", function () {
      const container = document.getElementById("guru-container");

      // Fungsi untuk mengambil data dari backend
      async function fetchGuruData() {
        try {
          const response = await fetch(backend_url + 'guru-staf');
          const data = await response.json();

          // Iterasi data dan buat elemen HTML dinamis
          data.forEach(guru => {
            const guruElement = document.createElement("div");
            guruElement.classList.add("w-layout-vflex");

            guruElement.innerHTML = `
              <img src="${guru.gambar ? `${backend_url}${guru.gambar}` : `${backend_url}images/defaultStaff.jpg`}"  loading="lazy" alt="${guru.nama}" class="image-13" width="347">
              <div class="text-block-22">${guru.nama}</div>
              <div class="text-block-23">${guru.jabatan}</div>
            `;

            container.appendChild(guruElement);
          });
        } catch (error) {
          console.error("Error fetching guru data:", error);
        }
      }

      // Panggil fungsi untuk mengambil dan menampilkan data
      fetchGuruData();
    });
  </script>
</body>
</html>