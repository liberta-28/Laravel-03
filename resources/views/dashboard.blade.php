<x-app-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <!-- Welcome Card -->
                <div class="card mb-4 border-0 shadow-lg" style="background: linear-gradient(135deg, var(--primary-gold) 0%, var(--golden-orange) 100%);">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h3 class="card-title fw-bold mb-2" style="color: var(--text-dark);">
                                    <i class="fas fa-graduation-cap me-2"></i>Selamat Datang, {{ Auth::user()->name }}!
                                </h3>
                                <p class="card-text mb-0" style="color: var(--text-dark);">Selamat belajar dan raih prestasi terbaik Anda di Sekolah Kita</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <i class="fas fa-user-graduate fa-4x" style="color: rgba(44, 36, 22, 0.3);"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-lg border-0">
                    <div class="card-header py-3 border-0" style="background: linear-gradient(135deg, var(--light-gold) 0%, #FFF9E6 100%);">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="mb-0 fw-bold" style="color: var(--dark-gold);">
                                <i class="fas fa-user-circle me-2"></i>Profil Siswa
                            </h4>
                            <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-edit me-1"></i>Edit Profil
                            </a>
                        </div>
                    </div>

                    <div class="card-body p-4">
                        <div class="row">
                            <!-- Profile Info -->
                            <div class="col-md-4 text-center mb-4">
                                <div class="mb-3 position-relative d-inline-block">
                                    <img src="{{ Auth::user()->foto_profil_url }}" 
                                         alt="Profile Photo" 
                                         class="rounded-circle shadow-lg" 
                                         width="150" 
                                         height="150"
                                         style="object-fit: cover; border: 5px solid var(--primary-gold);">
                                    <div class="position-absolute bottom-0 end-0 rounded-circle p-2 shadow" style="background: linear-gradient(135deg, var(--primary-gold), var(--golden-orange));">
                                        <i class="fas fa-check" style="color: var(--text-dark);"></i>
                                    </div>
                                </div>
                                <h5 class="fw-bold" style="color: var(--dark-gold);">{{ Auth::user()->name }}</h5>
                                <p class="text-muted">{{ Auth::user()->email }}</p>
                                <span class="badge px-3 py-2" style="background: linear-gradient(135deg, var(--primary-gold), var(--golden-orange)); color: var(--text-dark); font-weight: 600;">
                                    {{ Auth::user()->nim }}
                                </span>
                            </div>

                            <!-- User Details -->
                            <div class="col-md-8">
                                <h5 class="mb-4 fw-bold" style="color: var(--dark-gold);">
                                    <i class="fas fa-id-card me-2"></i>Informasi Pribadi
                                </h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="card h-100 border-0" style="background-color: var(--light-gold);">
                                            <div class="card-body">
                                                <small class="text-muted fw-semibold">
                                                    <i class="fas fa-id-badge me-1" style="color: var(--golden-orange);"></i>NIM
                                                </small>
                                                <h6 class="fw-bold mb-0 mt-2" style="color: var(--text-dark);">{{ Auth::user()->nim }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card h-100 border-0" style="background-color: var(--light-gold);">
                                            <div class="card-body">
                                                <small class="text-muted fw-semibold">
                                                    <i class="fas fa-map-marker-alt me-1" style="color: var(--golden-orange);"></i>Tempat Lahir
                                                </small>
                                                <h6 class="fw-bold mb-0 mt-2" style="color: var(--text-dark);">{{ Auth::user()->tempat_lahir }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card h-100 border-0" style="background-color: var(--light-gold);">
                                            <div class="card-body">
                                                <small class="text-muted fw-semibold">
                                                    <i class="fas fa-calendar-alt me-1" style="color: var(--golden-orange);"></i>Tanggal Lahir
                                                </small>
                                                <h6 class="fw-bold mb-0 mt-2" style="color: var(--text-dark);">{{ Auth::user()->tanggal_lahir->format('d F Y') }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card h-100 border-0" style="background-color: var(--light-gold);">
                                            <div class="card-body">
                                                <small class="text-muted fw-semibold">
                                                    <i class="fas fa-birthday-cake me-1" style="color: var(--golden-orange);"></i>Umur
                                                </small>
                                                <h6 class="fw-bold mb-0 mt-2" style="color: var(--text-dark);">{{ \Carbon\Carbon::parse(Auth::user()->tanggal_lahir)->age }} tahun</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quick Stats -->
                                <h5 class="mb-4 mt-5 fw-bold" style="color: var(--dark-gold);">
                                    <i class="fas fa-chart-bar me-2"></i>Statistik Akademik
                                </h5>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="card feature-card text-center border-0 h-100">
                                            <div class="card-body p-3">
                                                <div class="feature-icon icon-gold mx-auto mb-3" style="width: 60px; height: 60px; font-size: 1.5rem;">
                                                    <i class="fas fa-book"></i>
                                                </div>
                                                <h6 class="text-muted mb-2">Mata Pelajaran</h6>
                                                <h4 class="fw-bold mb-0" style="color: var(--dark-gold);">12</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card feature-card text-center border-0 h-100">
                                            <div class="card-body p-3">
                                                <div class="feature-icon icon-orange mx-auto mb-3" style="width: 60px; height: 60px; font-size: 1.5rem;">
                                                    <i class="fas fa-tasks"></i>
                                                </div>
                                                <h6 class="text-muted mb-2">Tugas Aktif</h6>
                                                <h4 class="fw-bold mb-0" style="color: var(--golden-orange);">5</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card feature-card text-center border-0 h-100">
                                            <div class="card-body p-3">
                                                <div class="feature-icon icon-cyan mx-auto mb-3" style="width: 60px; height: 60px; font-size: 1.5rem;">
                                                    <i class="fas fa-chart-line"></i>
                                                </div>
                                                <h6 class="text-muted mb-2">Nilai Rata-rata</h6>
                                                <h4 class="fw-bold mb-0" style="color: var(--dark-gold);">85</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>