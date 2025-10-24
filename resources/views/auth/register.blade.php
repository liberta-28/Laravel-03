<x-app-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white text-center py-4">
                        <h4 class="mb-0"><i class="fas fa-user-plus me-2"></i>Daftar Akun Baru</h4>
                    </div>

                    <div class="card-body p-5">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap *</label>
                                <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                                @error('name')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email *</label>
                                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                                @error('email')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- NIM -->
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM *</label>
                                <input id="nim" class="form-control" type="text" name="nim" value="{{ old('nim') }}" required />
                                @error('nim')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tempat & Tanggal Lahir -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir *</label>
                                    <input id="tempat_lahir" class="form-control" type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required />
                                    @error('tempat_lahir')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir *</label>
                                    <input id="tanggal_lahir" class="form-control" type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required />
                                    @error('tanggal_lahir')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Foto Profil -->
                            <div class="mb-3">
                                <label for="foto_profil" class="form-label">Foto Profil (Opsional)</label>
                                <input id="foto_profil" class="form-control" type="file" name="foto_profil" accept=".jpg,.png,.jpeg,.svg" />
                                <div class="form-text">Format: JPG, PNG, JPEG, SVG. Maksimal 2MB.</div>
                                @error('foto_profil')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password *</label>
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                @error('password')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label">Konfirmasi Password *</label>
                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                @error('password_confirmation')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <a class="text-decoration-none" href="{{ route('login') }}">
                                    Sudah punya akun?
                                </a>

                                <button type="submit" class="btn btn-primary px-4">
                                    Daftar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>