<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Portfolio Web</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url(); ?>assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Aris Setiana</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= base_url(); ?>assets/img/profile.jpeg" alt="..." /></span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Certifications</a></li>
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section bg-white" id="about">
            <div class=" resume-section-content">
                <div class="lead">
                    Hi, my name is
                </div>
                <h1 class="mb-0 mt-0">
                    Aris
                    <span>Setiana</span>
                </h1>
                <div class="subheading mb-5">
                    From : Kota Cirebon · (085) 324-409-384 ·
                    <a href="mailto:arissetiana93@gmail.com">arissetiana93@gmail.com</a>
                </div>
                <p class="lead mb-5">Seseorang yang antusias dan bermotivasi untuk
                    menjadi seorang Web Developer. Memiliki pengalaman dalam
                    mengembangkan software berbasis web dengan bahasa pemrograman
                    PHP dan framework Codeigniter.</p>
                <div class="social-icons">
                    <a class="social-icon" href="https://www.linkedin.com/in/aris-setiana/" target="_blank" style="text-decoration: none;"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="https://github.com/arezbidam" target="_blank" style="text-decoration: none;"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Experience-->
        <section class="resume-section" id="experience">
            <div class="resume-section-content">
                <h2 class="mb-5">Experience</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Project Web</h3>
                        <div class="subheading mb-3">Company Profile</div>
                        <p>Membuat sebuah website company profile dengan bahasa pemrograman PHP dan framework Codeigniter untuk perusahaan bernama
                            <span class="font-weight-bold">PT. Maxwell Globalindo Perkasa</span><br>
                            <a href="https://maxwell.co.id/" target="_blank">link-website</a>
                        </p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Febuari 2022 - Maret 2022</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Studi Independen Bersertifikat at Dicoding Indonesia</h3>
                        <div class="subheading mb-3">Pengembang Front-End Web dan Back-End</div>
                        <p>Studi Independen Bersertifikat adalah bagian dari program Kampus Merdeka yang bertujuan untuk memberikan kesempatan kepada mahasiswa untuk belajar dan mengembangkan diri melalui aktivitas diluar kelas perkuliahan, namun tetap diakui sebagai bagian dari perkuliahan. (<a href="<?= base_url(); ?>certificate/Lulus Penuh Cert-204.pdf" target="_blank">Lihat Sertifikat</a>)</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">Agustus 2021 - Januari 2022</span></div>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Education</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">University Catur Insan Cendekia</h3>
                        <div class="subheading mb-3">Kota Cirebon</div>
                        <div>Prodi Teknologi Informasi - Teknik Informatika</div>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">2018 - Present</span></div>
                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Skills-->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">
                <h2 class="mb-5">Skills</h2>
                <ul class="list-inline dev-icons">
                    <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                    <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                    <li class="list-inline-item"><i class="fa-brands fa-bootstrap"></i></li>
                    <li class="list-inline-item"><i class="fa-brands fa-php"></i></li>
                    <li class="list-inline-item"><i class="fa-brands fa-js-square"></i></li>
                    <li class="list-inline-item"><i class="fas fa-fire"></i></li>
                    <li class="list-inline-item"><i class="fa-solid fa-database"></i></li>
                    <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                </ul>
                <div class="subheading mb-3">Programming Languages & Tools</div>
                <ul class="fa-ul mb-0">
                    <li>

                        <span class="fa-li"><i class="fab fa-html5"></i></span>
                        HTML5
                    </li>
                    <li>
                        <span class="fa-li"><i class="fab fa-css3-alt"></i></span>
                        CSS
                    </li>
                    <li>
                        <span class="fa-li"><i class="fa-brands fa-bootstrap"></i></span>
                        Bootstrap
                    </li>
                    <li>
                        <span class="fa-li"><i class="fa-brands fa-php"></i></span>
                        PHP
                    </li>
                    <li>
                        <span class="fa-li"><i class="fa-brands fa-js-square"></i></span>
                        JavaScript
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-fire"></i></span>
                        Codeigniter
                    </li>
                    <li>
                        <span class="fa-li"><i class="fa-solid fa-database"></i></span>
                        MySQL
                    </li>
                    <li>
                        <span class="fa-li"><i class="fab fa-npm"></i></span>
                        NPM
                    </li>
                </ul>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Interests-->
        <section class="resume-section" id="interests">
            <div class="resume-section-content">
                <h2 class="mb-5">Interests</h2>
                <p>Selain belajar sebagai pengembang web, saya juga mengisi waktu luang saya untuk membaca komik, menonton film dan update berita teknologi seputar pengembang web.</p>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Awards-->
        <section class="resume-section" id="awards">
            <div class="resume-section-content">
                <h2 class="mb-5">Certifications</h2>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Menjadi Front-End Web Developer Expert (<a href="<?= base_url(); ?>certificate/sertifikat_course_219_1270369_070122180558_Menjadi Front-End Web Developer Expert.pdf" target="_blank">Lihat Sertifikat</a>)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Belajar Fundamental Front-End Web Development (<a href="<?= base_url(); ?>certificate/sertifikat_course_163_1270369_070122181141_Belajar Fundamental Front-End Web Development.pdf" target="_blank">Lihat Sertifikat</a>)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Belajar Membuat Aplikasi Back-End untuk Pemula (<a href="<?= base_url(); ?>certificate/sertifikat_course_261_1270369_081121184549_Belajar Membuat Aplikasi Back-End untuk Pemula.pdf" target="_blank">Lihat Sertifikat</a>)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Meniti Karier sebagai Software Developer (<a href="<?= base_url(); ?>certificate/sertifikat_course_292_1270369_070122181734_Meniti Karier sebagai Software Developer.pdf" target="_blank">Lihat Sertifikat</a>)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Cloud Practitioner Essentials (Belajar Dasar AWS Cloud) (<a href="<?= base_url(); ?>certificate/sertifikat_course_251_1270369_061021172830_Cloud Practitioner Essentials (Belajar Dasar AWS Cloud).pdf" target="_blank">Lihat Sertifikat</a>)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Belajar Membuat Front-End Web untuk Pemula (<a href="<?= base_url(); ?>certificate/sertifikat_course_315_1270369_270921080304_Belajar Membuat Front-End Web untuk Pemula.pdf" target="_blank">Lihat Sertifikat</a>)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Belajar Dasar Pemrograman JavaScript (<a href="<?= base_url(); ?>certificate/sertifikat_course_256_1270369_260921021333_Belajar Dasar Pemrograman JavaScript.pdf" target="_blank">Lihat Sertifikat</a>)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Belajar Dasar Pemrograman Web (<a href="<?= base_url(); ?>certificate/sertifikat_course_123_1270369_210921072218_Belajar Dasar Pemrograman Web.pdf" target="_blank">Lihat Sertifikat</a>)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Belajar Dasar Git dengan GitHub (<a href="<?= base_url(); ?>certificate/sertifikat_course_317_1270369_020921120758_Belajar Dasar Git dengan GitHub.pdf" target="_blank">Lihat Sertifikat</a>)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Pengenalan ke Logika Pemrograman (Programming Logic 101) (<a href="<?= base_url(); ?>certificate/sertifikat_course_302_1270369_020921120845_Pengenalan ke Logika Pemrograman (Programming Logic 101).pdf" target="_blank">Lihat Sertifikat</a>)
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Memulai Dasar Pemrograman untuk Menjadi Pengembang Software (<a href="<?= base_url(); ?>certificate/sertifikat_course_237_1270369_010921100733_Memulai Dasar Pemrograman untuk Menjadi Pengembang Software.pdf" target="_blank">Lihat Sertifikat</a>)
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url(); ?>assets/js/scripts.js"></script>
</body>

</html>