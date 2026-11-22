<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal portfolio Rayindarari Damba Bijaksana, mahasiswa Sistem Informasi Telkom University Surabaya.">
    <meta name="author" content="Rayindarari Damba Bijaksana">
    <title>Portfolio - Rayindarari Damba Bijaksana</title>

    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/portfolio/favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite('resources/sass/app.scss')
</head>
<body class="portfolio-page">
    <a class="skip-link visually-hidden-focusable" href="#main-content">Lewati ke konten utama</a>

    <nav class="navbar navbar-expand-lg fixed-top site-nav" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#home">
                <span class="brand-mark">RB</span>
                <span class="brand-text">Rayindarari<span class="brand-dot">.</span></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navMenu" aria-controls="navMenu" aria-label="Buka menu navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end nav-offcanvas" tabindex="-1" id="navMenu" aria-labelledby="navMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="navMenuLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Tutup"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Proyek</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                        <li class="nav-item ms-lg-2"><a class="btn btn-brand btn-sm px-3 nav-cta" href="{{ url('/routing') }}">Ke Halaman Routing</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <main id="main-content">
        <section class="hero" id="home">
            <div class="hero-glow hero-glow-1"></div>
            <div class="hero-glow hero-glow-2"></div>
            <div class="container position-relative">
                <div class="row align-items-center g-4 g-lg-5">
                    <div class="col-lg-6">
                        <span class="eyebrow reveal">
                            <span class="status-dot"></span>
                            Terbuka untuk kolaborasi &amp; belajar
                        </span>

                        <h1 class="hero-title reveal reveal-delay-1">
                            Halo, saya <span class="text-gradient">Rayindarari</span>.<br>
                            Membangun web dengan logika &amp; rasa.
                        </h1>

                        <p class="hero-lead reveal reveal-delay-2">
                            Mahasiswa <strong>Sistem Informasi</strong> di Telkom University Surabaya yang berfokus pada
                            pengembangan website, mulai dari struktur HTML yang rapi, tampilan responsif dengan Bootstrap,
                            sampai logika di balik layar.
                        </p>

                        <div class="d-flex flex-wrap gap-3 mt-4 reveal reveal-delay-3">
                            <a href="#projects" class="btn btn-brand btn-lg">Lihat Proyek <i class="bi bi-arrow-down-right ms-1"></i></a>
                            <a href="#contact" class="btn btn-outline-brand btn-lg">Hubungi Saya <i class="bi bi-send ms-1"></i></a>
                        </div>

                        <div class="hero-meta reveal reveal-delay-4">
                            <div class="hero-meta-item"><span class="meta-label">NIM</span><strong>102062400028</strong></div>
                            <div class="hero-meta-item"><span class="meta-label">Program Studi</span><strong>Sistem Informasi 08-02</strong></div>
                            <div class="hero-meta-item"><span class="meta-label">Kampus</span><strong>Telkom University Surabaya</strong></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-visual reveal reveal-delay-2">
                            <div class="hero-photo">
                                <img src="{{ Vite::asset('resources/images/portfolio/image_damba.png') }}" alt="Foto Rayindarari Damba Bijaksana" width="1194" height="1282">
                            </div>
                            <div class="floating-card floating-code" aria-hidden="true">
                                <span class="code-dot red"></span><span class="code-dot yellow"></span><span class="code-dot green"></span>
                                <code>&lt;div class="start"&gt;</code>
                            </div>
                            <div class="floating-card floating-status">
                                <span class="status-icon"><i class="bi bi-code-slash"></i></span>
                                <div><span class="floating-label">Fokus saat ini</span><strong>Web Development</strong></div>
                            </div>
                            <div class="floating-chip"><i class="bi bi-bootstrap-fill"></i> Bootstrap 5</div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="scroll-cue" href="#about" aria-label="Scroll ke bagian tentang"><span>Scroll</span><i class="bi bi-arrow-down"></i></a>
        </section>

        <section class="section" id="about">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <div class="section-heading mb-4">
                            <span class="section-eyebrow">01 - Tentang Saya</span>
                            <h2 class="section-title">Belajar, membangun, lalu menyempurnakan.</h2>
                            <p class="section-subtitle">Sedikit cerita tentang siapa saya dan apa yang sedang saya pelajari.</p>
                        </div>
                        <div class="about-profile reveal">
                            <img class="about-profile-photo" src="{{ Vite::asset('resources/images/portfolio/image_damba.png') }}" alt="Foto Rayindarari Damba Bijaksana">
                            <div class="about-profile-body">
                                <strong>Rayindarari Damba Bijaksana</strong>
                                <span>NIM 102062400028</span>
                                <span>Sistem Informasi 08-02</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-copy reveal">
                            <p class="fs-5">Saya <strong>Rayindarari Damba Bijaksana</strong>, mahasiswa S1 Sistem Informasi di Telkom University Surabaya. Ketertarikan saya pada pengembangan web berawal dari rasa ingin tahu: bagaimana sebuah halaman bisa terlihat rapi, nyaman dipakai, dan tetap bekerja di berbagai ukuran layar?</p>
                            <p>Melalui perkuliahan dan praktikum, saya terus melatih kemampuan di sisi front-end maupun back-end. Saat ini saya mendalami <strong>Bootstrap</strong>, <strong>JavaScript</strong>, serta pengembangan aplikasi berbasis data dan framework Laravel.</p>
                        </div>
                        <div class="row g-3 mt-4">
                            <div class="col-sm-6"><div class="info-card reveal"><span class="info-icon"><i class="bi bi-mortarboard"></i></span><div><span class="info-label">Pendidikan</span><strong>S1 Sistem Informasi</strong></div></div></div>
                            <div class="col-sm-6"><div class="info-card reveal reveal-delay-1"><span class="info-icon"><i class="bi bi-braces"></i></span><div><span class="info-label">Fokus</span><strong>Web Development</strong></div></div></div>
                            <div class="col-sm-6"><div class="info-card reveal reveal-delay-2"><span class="info-icon"><i class="bi bi-geo-alt"></i></span><div><span class="info-label">Lokasi</span><strong>Surabaya, Indonesia</strong></div></div></div>
                            <div class="col-sm-6"><div class="info-card reveal reveal-delay-3"><span class="info-icon"><i class="bi bi-lightbulb"></i></span><div><span class="info-label">Prinsip</span><strong>Clean &amp; Responsive</strong></div></div></div>
                        </div>
                        <blockquote class="about-quote reveal"><p><i class="bi bi-quote"></i> Website yang baik bukan hanya terlihat menarik, tetapi juga mudah digunakan dan menyelesaikan masalah.</p></blockquote>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-alt" id="skills">
            <div class="container">
                <div class="section-heading text-center mx-auto reveal">
                    <span class="section-eyebrow">02 - Kemampuan</span>
                    <h2 class="section-title">Tools yang saya gunakan untuk membangun.</h2>
                    <p class="section-subtitle">Kombinasi dasar yang terus saya kembangkan melalui kelas, praktikum, dan proyek mandiri.</p>
                </div>
                <div class="row g-4 mt-2">
                    <div class="col-lg-6">
                        <div class="skill-panel reveal">
                            <div class="skill-panel-head"><span class="skill-panel-icon"><i class="bi bi-window-stack"></i></span><div><h3>Frontend &amp; Design</h3><p>Membangun tampilan yang responsif dan konsisten.</p></div></div>
                            <div class="skill-item"><div class="skill-item-top"><span>HTML &amp; CSS</span><span class="skill-value">90%</span></div><div class="progress skill-progress"><div class="progress-bar" data-width="90"></div></div></div>
                            <div class="skill-item"><div class="skill-item-top"><span>Bootstrap 5</span><span class="skill-value">88%</span></div><div class="progress skill-progress"><div class="progress-bar" data-width="88"></div></div></div>
                            <div class="skill-item"><div class="skill-item-top"><span>JavaScript</span><span class="skill-value">78%</span></div><div class="progress skill-progress"><div class="progress-bar" data-width="78"></div></div></div>
                            <div class="skill-item"><div class="skill-item-top"><span>Figma / UI Design</span><span class="skill-value">80%</span></div><div class="progress skill-progress"><div class="progress-bar" data-width="80"></div></div></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="skill-panel reveal reveal-delay-1">
                            <div class="skill-panel-head"><span class="skill-panel-icon"><i class="bi bi-server"></i></span><div><h3>Backend &amp; Data</h3><p>Mengolah data dan logika di balik antarmuka.</p></div></div>
                            <div class="skill-item"><div class="skill-item-top"><span>PHP</span><span class="skill-value">75%</span></div><div class="progress skill-progress"><div class="progress-bar" data-width="75"></div></div></div>
                            <div class="skill-item"><div class="skill-item-top"><span>MySQL</span><span class="skill-value">72%</span></div><div class="progress skill-progress"><div class="progress-bar" data-width="72"></div></div></div>
                            <div class="skill-item"><div class="skill-item-top"><span>Laravel</span><span class="skill-value">70%</span></div><div class="progress skill-progress"><div class="progress-bar" data-width="70"></div></div></div>
                            <div class="skill-item"><div class="skill-item-top"><span>Git &amp; Version Control</span><span class="skill-value">74%</span></div><div class="progress skill-progress"><div class="progress-bar" data-width="74"></div></div></div>
                        </div>
                    </div>
                </div>
                <div class="toolbox reveal">
                    <span class="toolbox-label">Juga terbiasa dengan</span>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="tool-chip"><i class="bi bi-filetype-html"></i> HTML5</span>
                        <span class="tool-chip"><i class="bi bi-filetype-css"></i> CSS3</span>
                        <span class="tool-chip"><i class="bi bi-bootstrap"></i> Bootstrap</span>
                        <span class="tool-chip"><i class="bi bi-filetype-js"></i> JavaScript</span>
                        <span class="tool-chip"><i class="bi bi-filetype-php"></i> PHP</span>
                        <span class="tool-chip"><i class="bi bi-database"></i> MySQL</span>
                        <span class="tool-chip"><i class="bi bi-git"></i> Git</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="projects">
            <div class="container">
                <div class="row align-items-end g-4 mb-5">
                    <div class="col-lg-7">
                        <div class="section-heading mb-0 reveal">
                            <span class="section-eyebrow">03 - Proyek</span>
                            <h2 class="section-title">Beberapa hal yang pernah saya bangun.</h2>
                        </div>
                    </div>
                    <div class="col-lg-5"><p class="section-subtitle mb-0 reveal">Kumpulan latihan dan proyek yang menjadi ruang belajar saya dalam menerapkan Bootstrap dan pengembangan web.</p></div>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <article class="project-card reveal">
                            <div class="project-thumb"><img src="{{ Vite::asset('resources/images/portfolio/project-bootstrap.svg') }}" alt="Bootstrap Clone"><span class="project-tag">Praktikum</span></div>
                            <div class="project-body">
                                <span class="project-year">2026 - Modul 7</span>
                                <h3>Bootstrap Clone</h3>
                                <p>Cloning halaman resmi Bootstrap menggunakan Bootstrap 5: navbar, offcanvas, grid, ikon, dan footer responsif.</p>
                                <div class="project-tech"><span>HTML</span><span>CSS</span><span>Bootstrap 5</span></div>
                                <button class="project-link" type="button" data-bs-toggle="modal" data-bs-target="#projectModal" data-title="Bootstrap Clone" data-year="2026 - Praktikum Modul 7" data-image="{{ Vite::asset('resources/images/portfolio/project-bootstrap.svg') }}" data-description="Proyek praktikum Modul 7: meng-cloning halaman utama Bootstrap menggunakan framework Bootstrap 5 dengan layout responsif." data-tech="HTML,CSS,Bootstrap 5,Bootstrap Icons">Lihat detail <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="project-card reveal reveal-delay-1">
                            <div class="project-thumb"><img src="{{ Vite::asset('resources/images/portfolio/project-company.svg') }}" alt="Kopi Kita"><span class="project-tag">Latihan</span></div>
                            <div class="project-body">
                                <span class="project-year">2026 - Project Mandiri</span>
                                <h3>Kopi Kita</h3>
                                <p>Company profile satu halaman untuk UMKM kopi, berisi hero, produk, keunggulan, dan formulir kontak.</p>
                                <div class="project-tech"><span>HTML</span><span>Bootstrap 5</span><span>JavaScript</span></div>
                                <button class="project-link" type="button" data-bs-toggle="modal" data-bs-target="#projectModal" data-title="Kopi Kita - Company Profile" data-year="2026 - Project Mandiri" data-image="{{ Vite::asset('resources/images/portfolio/project-company.svg') }}" data-description="Latihan membangun company profile statis untuk UMKM kopi dengan komponen card, grid Bootstrap, dan formulir kontak tervalidasi." data-tech="HTML,Bootstrap 5,JavaScript,Responsive Design">Lihat detail <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="project-card reveal reveal-delay-2">
                            <div class="project-thumb"><img src="{{ Vite::asset('resources/images/portfolio/project-notes.svg') }}" alt="StudyNote"><span class="project-tag">Konsep</span></div>
                            <div class="project-body">
                                <span class="project-year">2026 - UI Concept</span>
                                <h3>StudyNote</h3>
                                <p>Konsep antarmuka aplikasi catatan kuliah dengan sidebar, kategori, dan daftar catatan terstruktur.</p>
                                <div class="project-tech"><span>Bootstrap 5</span><span>UI Design</span><span>JavaScript</span></div>
                                <button class="project-link" type="button" data-bs-toggle="modal" data-bs-target="#projectModal" data-title="StudyNote - Catatan Kuliah" data-year="2026 - UI Concept" data-image="{{ Vite::asset('resources/images/portfolio/project-notes.svg') }}" data-description="Konsep antarmuka aplikasi catatan untuk mahasiswa dengan fokus pada layout dashboard dan konsistensi komponen." data-tech="Bootstrap 5,UI Design,JavaScript">Lihat detail <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="section contact-section position-relative" id="contact">
            <div class="contact-glow"></div>
            <div class="container position-relative">
                <div class="row g-5 align-items-start">
                    <div class="col-lg-5">
                        <div class="section-heading reveal">
                            <span class="section-eyebrow text-purple-light">04 - Kontak</span>
                            <h2 class="section-title text-white">Punya ide? Mari kita bicarakan.</h2>
                            <p class="section-subtitle text-white-50">Terbuka untuk diskusi, kolaborasi proyek, atau sekadar bertukar pengalaman seputar pengembangan web.</p>
                        </div>
                        <div class="contact-list reveal">
                            <a class="contact-item" href="mailto:rayindararidamba@student.telkomuniversity.ac.id"><span class="contact-icon"><i class="bi bi-envelope"></i></span><div><span>Email</span><strong>rayindararidamba@student.telkomuniversity.ac.id</strong></div><i class="bi bi-arrow-up-right contact-arrow"></i></a>
                            <div class="contact-item"><span class="contact-icon"><i class="bi bi-geo-alt"></i></span><div><span>Lokasi</span><strong>Surabaya, Jawa Timur</strong></div></div>
                            <div class="contact-item"><span class="contact-icon"><i class="bi bi-mortarboard"></i></span><div><span>Kampus</span><strong>Telkom University Surabaya</strong></div></div>
                        </div>
                        <div class="availability reveal"><span class="status-dot"></span><span>Terbuka untuk kolaborasi &amp; pembelajaran</span></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-card reveal reveal-delay-1">
                            <h3 class="h4 mb-2">Kirim pesan</h3>
                            <p class="text-muted mb-4">Isi formulir di bawah ini. Pesan akan diteruskan melalui aplikasi email Anda.</p>
                            <form id="contactForm" class="row g-3" data-email="rayindararidamba@student.telkomuniversity.ac.id" novalidate>
                                <div class="col-md-6"><label for="contactName" class="form-label">Nama</label><input type="text" class="form-control" id="contactName" name="name" required><div class="invalid-feedback">Mohon isi nama Anda.</div></div>
                                <div class="col-md-6"><label for="contactEmail" class="form-label">Email</label><input type="email" class="form-control" id="contactEmail" name="email" required><div class="invalid-feedback">Mohon isi email yang valid.</div></div>
                                <div class="col-12"><label for="contactSubject" class="form-label">Subjek</label><input type="text" class="form-control" id="contactSubject" name="subject" required><div class="invalid-feedback">Mohon isi subjek pesan.</div></div>
                                <div class="col-12"><label for="contactMessage" class="form-label">Pesan</label><textarea class="form-control" id="contactMessage" name="message" rows="5" required></textarea><div class="invalid-feedback">Mohon isi pesan Anda.</div></div>
                                <div class="col-12 d-flex flex-wrap align-items-center gap-3"><button type="submit" class="btn btn-brand btn-lg">Kirim Pesan <i class="bi bi-send ms-1"></i></button><span class="form-note"><i class="bi bi-shield-check me-1"></i>Tidak ada data yang disimpan di server.</span></div>
                                <div class="col-12"><div id="formAlert" class="alert d-none mb-0" role="alert"></div></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-5">
                    <a class="footer-brand d-inline-flex align-items-center gap-2" href="#home"><span class="brand-mark">RB</span><span>Rayindarari Damba Bijaksana</span></a>
                    <p class="footer-note mb-0 mt-2">Mahasiswa Sistem Informasi 08-02 - Telkom University Surabaya.</p>
                </div>
                <div class="col-lg-4">
                    <ul class="footer-nav"><li><a href="#about">Tentang</a></li><li><a href="#skills">Skills</a></li><li><a href="#projects">Proyek</a></li><li><a href="#contact">Kontak</a></li></ul>
                </div>
                <div class="col-lg-3 text-lg-end"><p class="footer-note mb-1">NIM 102062400028</p><p class="footer-note mb-0">Dibuat dengan Bootstrap 5 &amp; Laravel (Vite)</p></div>
            </div>
            <hr class="footer-divider">
            <div class="d-flex flex-column flex-md-row justify-content-between gap-2">
                <p class="footer-small mb-0">&copy; <span id="currentYear">2026</span> Rayindarari Damba Bijaksana. All rights reserved.</p>
                <p class="footer-small mb-0">Praktikum Pengembangan Aplikasi Web</p>
            </div>
        </div>
    </footer>

    <button class="back-to-top" id="backToTop" type="button" aria-label="Kembali ke atas"><i class="bi bi-arrow-up"></i></button>

    <div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content project-modal-content">
                <div class="modal-header border-0 pb-0">
                    <div><span class="project-year" id="projectModalYear"></span><h2 class="modal-title h3" id="projectModalTitle">Detail Proyek</h2></div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body pt-3">
                    <img id="projectModalImage" class="project-modal-image" src="{{ Vite::asset('resources/images/portfolio/project-bootstrap.svg') }}" alt="" width="800" height="500">
                    <p id="projectModalDescription" class="mt-4"></p>
                    <div class="project-tech" id="projectModalTech"></div>
                </div>
                <div class="modal-footer border-0 pt-0"><button type="button" class="btn btn-outline-brand" data-bs-dismiss="modal">Tutup</button></div>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
