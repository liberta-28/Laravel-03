<x-app-layout>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container position-relative" style="z-index: 1;">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4" style="color: var(--text-dark);">Selamat Datang di<br>Sekolah Kita</h1>
                    <p class="lead mb-4" style="color: var(--text-dark);">Membangun generasi penerus bangsa yang berkarakter, cerdas, dan berakhlak mulia melalui pendidikan berkualitas.</p>
                    <div class="d-flex flex-wrap gap-3">
                        @auth
                            <a href="{{ route('dashboard') }}" class="btn btn-dark btn-lg">
                                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                            </a>
                        @else
                            <a href="{{ route('register') }}" class="btn btn-dark btn-lg">
                                <i class="fas fa-user-plus me-2"></i>Daftar Sekarang
                            </a>
                            <a href="{{ route('login') }}" class="btn btn-outline-dark btn-lg">
                                <i class="fas fa-sign-in-alt me-2"></i>Login
                            </a>
                        @endauth
                    </div>
                </div>
                <div class="col-lg-6 text-center mt-5 mt-lg-0">
                      <img src="{{ asset('images/images-removebg-preview.png') }}" 
                         alt="Sekolah Kita" 
                         class="img-fluid rounded-3 shadow-lg" 
                         style="border: 5px solid #FFD700;">
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Section -->
    <section id="tentang" class="py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="fw-bold mb-3" style="color: var(--dark-gold);">Tentang Sekolah Kita</h2>
                    <div style="width: 80px; height: 4px; background: linear-gradient(90deg, var(--primary-gold), var(--golden-orange)); margin: 0 auto 20px;"></div>
                    <p class="text-muted lead">Sebagai institusi pendidikan terkemuka, kami berkomitmen untuk memberikan pendidikan terbaik bagi generasi penerus bangsa.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon icon-gold mx-auto">
                                <i class="fas fa-users"></i>
                            </div>
                            <h5 class="card-title fw-bold" style="color: var(--dark-gold);">Guru Berpengalaman</h5>
                            <p class="card-text text-muted">Didukung oleh tenaga pengajar yang profesional dan berpengalaman di bidangnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon icon-orange mx-auto">
                                <i class="fas fa-book"></i>
                            </div>
                            <h5 class="card-title fw-bold" style="color: var(--dark-gold);">Kurikulum Terpadu</h5>
                            <p class="card-text text-muted">Kurikulum yang komprehensif mengintegrasikan pengetahuan, keterampilan, dan karakter.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon icon-cyan mx-auto">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <h5 class="card-title fw-bold" style="color: var(--dark-gold);">Teknologi Modern</h5>
                            <p class="card-text text-muted">Fasilitas pembelajaran dilengkapi dengan teknologi terkini untuk mendukung proses belajar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Section -->
    <section id="program" class="py-5" style="background-color: var(--light-bg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="fw-bold mb-3" style="color: var(--dark-gold);">Program Pendidikan</h2>
                    <div style="width: 80px; height: 4px; background: linear-gradient(90deg, var(--primary-gold), var(--golden-orange)); margin: 0 auto 20px;"></div>
                    <p class="text-muted lead">Berbagai program pendidikan yang dirancang untuk mengembangkan potensi siswa secara maksimal.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card feature-card text-center h-100">
                        <div class="card-body p-4">
                            <div class="feature-icon icon-gold mx-auto">
                                <i class="fas fa-child"></i>
                            </div>
                            <h5 class="fw-bold" style="color: var(--dark-gold);">SD</h5>
                            <p class="text-muted small">Pendidikan dasar untuk membangun fondasi yang kuat</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card feature-card text-center h-100">
                        <div class="card-body p-4">
                            <div class="feature-icon icon-orange mx-auto">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <h5 class="fw-bold" style="color: var(--dark-gold);">SMP</h5>
                            <p class="text-muted small">Pengembangan pengetahuan dan keterampilan remaja</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card feature-card text-center h-100">
                        <div class="card-body p-4">
                            <div class="feature-icon icon-cyan mx-auto">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h5 class="fw-bold" style="color: var(--dark-gold);">SMA</h5>
                            <p class="text-muted small">Persiapan menuju perguruan tinggi dan dunia kerja</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card feature-card text-center h-100">
                        <div class="card-body p-4">
                            <div class="feature-icon icon-purple mx-auto">
                                <i class="fas fa-music"></i>
                            </div>
                            <h5 class="fw-bold" style="color: var(--dark-gold);">Ekstrakurikuler</h5>
                            <p class="text-muted small">Pengembangan bakat dan minat di luar akademik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fasilitas Section -->
    <section id="fasilitas" class="py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="fw-bold mb-3" style="color: var(--dark-gold);">Fasilitas Sekolah</h2>
                    <div style="width: 80px; height: 4px; background: linear-gradient(90deg, var(--primary-gold), var(--golden-orange)); margin: 0 auto 20px;"></div>
                    <p class="text-muted lead">Fasilitas lengkap dan modern untuk mendukung proses belajar mengajar yang optimal.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon icon-gold mx-auto">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <h5 class="fw-bold" style="color: var(--dark-gold);">Perpustakaan Digital</h5>
                            <p class="text-muted">Koleksi buku lengkap dengan akses digital</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon icon-orange mx-auto">
                                <i class="fas fa-flask"></i>
                            </div>
                            <h5 class="fw-bold" style="color: var(--dark-gold);">Laboratorium</h5>
                            <p class="text-muted">Lab sains dan komputer yang modern</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center p-4">
                            <div class="feature-icon icon-cyan mx-auto">
                                <i class="fas fa-futbol"></i>
                            </div>
                            <h5 class="fw-bold" style="color: var(--dark-gold);">Lapangan Olahraga</h5>
                            <p class="text-muted">Fasilitas olahraga lengkap dan representatif</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-3" style="color: var(--text-dark);">Bergabunglah Bersama Kami</h2>
                    <p class="lead mb-4" style="color: var(--text-dark);">Mari menjadi bagian dari keluarga besar Sekolah Kita dan raih masa depan gemilang bersama kami.</p>
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn btn-dark btn-lg px-5">
                            <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="btn btn-dark btn-lg px-5 me-3">
                            <i class="fas fa-user-plus me-2"></i>Daftar Sekarang
                        </a>
                        <a href="{{ route('login') }}" class="btn btn-outline-dark btn-lg px-5">
                            <i class="fas fa-sign-in-alt me-2"></i>Login
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </section>
</x-app-layout>