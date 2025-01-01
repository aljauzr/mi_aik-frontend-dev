<?php
// Mendapatkan ID dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// URL API untuk digunakan dalam JavaScript nanti
$api_url = "/prestasi/$id";

// Mengambil data dari API
$response = file_get_contents("http://localhost:8080" . $api_url);
$data = json_decode($response, true);

// Jika data tidak ditemukan
if (!$data) {
    echo "Data tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html data-wf-page="6755708a178398bec1ab8f2c" data-wf-site="6755708a178398bec1ab8ede">
<head>
  <meta charset="utf-8">
  <title><?php echo htmlspecialchars($data['nama']); ?> - MI ASAS ISLAM KALIBENING</title>
  <meta content="<?php echo htmlspecialchars($data['nama']); ?> - MI ASAS ISLAM KALIBENING" property="og:title">
  <meta content="<?php echo htmlspecialchars($data['nama']); ?> - MI ASAS ISLAM KALIBENING" property="twitter:title">
  <?php include 'inc/head.php'; ?>
</head>
<body class="body-2">
  <!-- NAVBAR -->
  <?php include 'inc/navbar.php'; ?>
  <!-- END OF NAVBAR -->
  <section class="section-15" style="padding-top: 60px;">
    <div class="w-layout-blockcontainer container w-container">
      <a href="prestasi.php" class="link-block-2 w-inline-block">
        <img src="images/Back_1Back.png" loading="lazy" alt="" width="30">
      </a>
      <h2 class="heading-19"><?php echo htmlspecialchars($data['nama']); ?></h2>
      <div class="w-layout-vflex">
        <!-- Gambar dengan ID yang akan diubah oleh JavaScript -->
        <img id="prestasi-gambar" src="" loading="lazy" width="300" height="auto" alt="" class="image-14">
        <div class="text-block-26" style="text-align: justify; font-size: 16px;">
          <?php echo nl2br(htmlspecialchars($data['keterangan'])); ?>
        </div>
        <div class="text-block-26 penulis" style="font-size: 16px;">
          <?php echo date("d F Y", strtotime($data['tanggal'])) . " - " . htmlspecialchars($data['penulis']); ?>
        </div>
      </div>
    </div>
  </section>
  <!-- FOOTER -->
  <section class="section-7">
    <?php include 'inc/footer.php'; ?>
  </section>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6755708a178398bec1ab8ede" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <script src="js/config.js" type="text/javascript"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const gambarElement = document.getElementById('prestasi-gambar');
      
      // Mengubah gambar dengan menggunakan backend_url dan data yang dikirimkan oleh PHP
      const gambarSrc = '<?php echo htmlspecialchars($data['gambar']); ?>';
      gambarElement.src = gambarSrc && gambarSrc !== 'null' 
          ? backend_url + gambarSrc 
          : backend_url + 'images/defaultPrestasi.jpg';
      
      const apiUrl = backend_url + '<?php echo $api_url; ?>';
      console.log(apiUrl);
    });
  </script>
</body>
</html>