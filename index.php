<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hannafi Dev | Portofolio</title>

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white fixed-top shadow-sm py-3">
  <div class="container">
    <button class="btn btn-outline-dark ms-3" id="darkToggle">
        <i class="fa-solid fa-moon"></i>
    </button>
    <a class="navbar-brand fw-bold text-primary fs-4" href="#"><i class="fa-solid fa-laptop-code"></i> Hannafi Dev</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navmenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#projects" class="nav-link">Proyek</a></li>
        <li class="nav-item"><a href="#about" class="nav-link">Tentang</a></li>
        <li class="nav-item"><a href="#skills" class="nav-link">Keahlian</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<header id="home" class="hero d-flex align-items-center bg-light">
  <div class="container text-center">
    <h1 class="fw-bold display-4 text-primary mb-3" data-aos="fade-down">Halo, aku Hannafi!</h1>
    <p class="lead text-secondary mb-4">
       <span id="typed"></span>
    </p>
<a href="#projects" class="btn btn-primary btn-lg px-4"><i class="fa-solid fa-folder-open"></i> Lihat Proyek</a>
  </div>
</header>

<!-- Projects -->
<section id="projects" class="py-5 bg-white">
  <div class="container text-center">
    <h2 class="text-primary fw-bold mb-5" data-aos="fade-up">Proyek Unggulan</h2>
    <div class="row g-4">
      <!-- Website Pribadi -->
      <div class="col-sm-6 col-md-4">
        <div class="card border-0 shadow-sm card-hover h-100" data-aos="zoom-in">
          <img src="upload/project-website.jpg" class="card-img-top" alt="Website Pribadi">
          <div class="card-body p-4">
            <i class="fa-solid fa-globe fa-2x text-primary mb-3"></i>
            <h5 class="fw-bold">Website Pribadi</h5>
            <p class="text-secondary">Portofolio responsif modern pakai HTML, CSS & JS.</p>
          </div>
        </div>
      </div>

      <!-- Dashboard Admin -->
      <div class="col-sm-6 col-md-4">
        <div class="card border-0 shadow-sm card-hover h-100" data-aos="zoom-in">
          <img src="upload/project-dashboard.jpg" class="card-img-top" alt="Dashboard Admin">
          <div class="card-body p-4">
            <i class="fa-solid fa-chart-line fa-2x text-primary mb-3"></i>
            <h5 class="fw-bold">Dashboard Admin</h5>
            <p class="text-secondary">Dashboard modern dengan chart interaktif & login sistem.</p>
          </div>
        </div>
      </div>

      <!-- Rangkuman Website -->
        <div class="col-sm-6 col-md-4">
          <div class="card border-0 shadow-sm card-hover h-100" data-aos="zoom-in">
            <img src="upload/project-rangkuman.jpg" class="card-img-top" alt="Rangkuman Website">
            <div class="card-body p-4">
              <i class="fa-solid fa-layer-group fa-2x text-primary mb-3"></i>
              <h5 class="fw-bold">Rangkuman Website</h5>
              <p class="text-secondary">Kumpulan berbagai website yang pernah saya buat, dari landing page, dashboard, hingga sistem pemesanan.</p>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
              
<!-- Media Sosial -->
<section id="sosmed" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="text-primary fw-bold mb-4" data-aos="fade-up">Terhubung dengan Saya</h2>
    <p class="mb-4 text-secondary" data-aos="fade-up" data-aos-delay="100">Temukan saya di berbagai platform media sosial untuk melihat karya dan update terbaru.</p>
    <div class="d-flex justify-content-center gap-4" data-aos="fade-up" data-aos-delay="200">
      <a href="https://instagram.com/hannaaffiii" target="_blank" class="text-decoration-none text-dark">
        <i class="fa-brands fa-instagram fa-2x"></i>
      </a>
      <a href="https://github.com/frhndevweb" target="_blank" class="text-decoration-none text-dark">
        <i class="fa-brands fa-github fa-2x"></i>
      </a>
      <a href="https://wa.me/6288215660319" target="_blank" class="text-decoration-none text-dark">
        <i class="fa-brands fa-whatsapp fa-2x"></i>
      </a>
    </div>
  </div>
</section>

<!-- About -->
<section id="about" class="py-5 bg-light text-center">
  <div class="container">
    <h2 class="text-primary fw-bold mb-3">Tentang Saya</h2>
    <p class="lead text-secondary">Aku pelajar SMK jurusan TKJ, hobi ngoding dan UI/UX. Suka ngulik web development modern & responsive design.</p>
  </div>
</section>
              
<section id="skills" class="py-5 bg-white text-center">
  <div class="container">
    <h2 class="text-primary fw-bold mb-4" data-aos="fade-up">Keahlian</h2>
    <div class="row g-4">
      <div class="col-6 col-md-3" data-aos="zoom-in">
        <i class="fa-brands fa-html5 fa-2x text-primary mb-2"></i>
        <p class="fw-semibold">HTML5</p>
      </div>
      <div class="col-6 col-md-3" data-aos="zoom-in">
        <i class="fa-brands fa-css3-alt fa-2x text-primary mb-2"></i>
        <p class="fw-semibold">CSS3</p>
      </div>
      <div class="col-6 col-md-3" data-aos="zoom-in">
        <i class="fa-brands fa-js fa-2x text-primary mb-2"></i>
        <p class="fw-semibold">JavaScript</p>
      </div>
      <div class="col-6 col-md-3" data-aos="zoom-in">
        <i class="fa-brands fa-php fa-2x text-primary mb-2"></i>
        <p class="fw-semibold">PHP</p>
      </div>
      <div class="col-6 col-md-3" data-aos="zoom-in">
        <i class="fa-solid fa-video fa-2x text-primary mb-2"></i>
        <p class="fw-semibold">Video Editing</p>
      </div>
      <div class="col-6 col-md-3" data-aos="zoom-in">
        <i class="fa-solid fa-camera fa-2x text-primary mb-2"></i>
        <p class="fw-semibold">Fotografi</p>
      </div>
    </div>
  </div>
</section>

<!-- Sertifikat -->
<section id="sertifikat" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="text-primary fw-bold mb-4" data-aos="fade-up">Sertifikat Juara 3 LKS Cybersecurity</h2>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card border-0 shadow-sm mb-4" data-aos="zoom-in">
          <img src="upload/sertifikat-1.jpg" class="card-img-top" alt="Sertifikat">
          <div class="card-body">
            <h5 class="fw-bold">Juara 3 LKS Cybersecurity Tingkat Kabupaten</h5>
            <p class="text-secondary">Sertifikat ini saya peroleh setelah berhasil meraih juara 3 dalam Lomba Kompetensi Siswa (LKS) Cybersecurity tingkat kabupaten, yang menguji kemampuan dalam bidang attack & defense.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Komentar Section -->
<section id="komentar" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-primary fw-bold mb-4" data-aos="fade-up">Tinggalkan Komentar</h2>
    <form action="simpan.php" method="POST" enctype="multipart/form-data" class="mb-5" data-aos="fade-up">
      <div class="mb-3">
        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
      </div>
      <div class="mb-3">
        <textarea name="pesan" class="form-control" placeholder="Pesan" required></textarea>
      </div>
      <div class="mb-3">
        <input type="file" name="foto" class="form-control">
      </div>
      <button class="btn btn-primary">Kirim</button>
    </form>

<h3 class="text-primary fw-bold mb-3" data-aos="fade-up">Komentar Masuk</h3>
<div class="komentar-wrapper shadow-sm">
  <?php
  $data = mysqli_query($conn, "SELECT * FROM komentar ORDER BY id DESC");
  while ($d = mysqli_fetch_array($data)) {
  ?>
    <div class="card mb-3 shadow-sm" data-aos="fade-up">
      <div class="card-body d-flex align-items-start">
        <?php if (!empty($d['foto'])) { ?>
          <img src="<?= $d['foto'] ?>" width="50" class="rounded-circle me-3" style="object-fit: cover; height: 50px;">
        <?php } else { ?>
          <img src="upload/default-avatar.png" width="50" class="rounded-circle me-3" style="object-fit: cover; height: 50px;">
        <?php } ?>
        <div>
          <h5 class="mb-1"><?= htmlspecialchars($d['nama']) ?></h5>
          <p class="mb-1"><?= nl2br(htmlspecialchars($d['pesan'])) ?></p>
          <small class="text-muted"><?= $d['waktu'] ?></small>
        </div>
      </div>
    </div>
  <?php } ?>
</div>
</section>

<!-- Contact -->
<section id="contact" class="py-5 text-center">
  <div class="container">
    <h2 class="text-primary fw-bold mb-3">Hubungi Aku</h2>
    <p class="text-secondary mb-2"><i class="fa-solid fa-envelope"></i> frhndevweb@gmail.com</p>
    <p class="text-secondary"><i class="fa-brands fa-instagram"></i> @hannaaffiii</p>
  </div>
</section>

<!-- Back to Top -->
<button type="button" class="btn btn-primary btn-backtop" id="backToTop">
  <i class="fa-solid fa-arrow-up"></i>
</button>

<!-- Footer -->
<footer class="text-center py-4 bg-white border-top">
  <p class="mb-0 text-secondary">&copy; 2025 Hannafi Dev.</p>
  <p class="mt-2">Ingin buat website bareng? <a href="#contact" class="text-primary fw-semibold">Hubungi Aku!</a></p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true
  });
</script>

<!-- Back to Top JS -->
<script>
  const backToTopBtn = document.getElementById("backToTop");
  window.onscroll = function () {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
      backToTopBtn.style.display = "flex";
    } else {
      backToTopBtn.style.display = "none";
    }
  };
  backToTopBtn.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
</script>
<script>
  const toggleBtn = document.getElementById("darkToggle");
  const icon = toggleBtn.querySelector("i");

  toggleBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
    if (document.body.classList.contains("dark-mode")) {
      icon.classList.remove("fa-moon");
      icon.classList.add("fa-sun");
    } else {
      icon.classList.remove("fa-sun");
      icon.classList.add("fa-moon");
    }
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  var typed = new Typed("#typed", {
    strings: ["Web Developer", "UI/UX Enthusiast", "Frontend Creator"],
    typeSpeed: 60,
    backSpeed: 40,
    loop: true
  });
</script>
</body>
</html>
