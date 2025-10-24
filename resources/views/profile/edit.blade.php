<x-app-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-0">
                    <div class="card-header bg-primary text-white py-3">
                        <h4 class="mb-0"><i class="fas fa-edit me-2"></i>Edit Profil</h4>
                    </div>

                    <div class="card-body p-4">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <!-- FORM YANG DIPERBAIKI -->
                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH') <!-- INI YANG PENTING! -->

                            <!-- Current Photo -->
                            <div class="text-center mb-4">
                                <img src="{{ Auth::user()->foto_profil_url }}" 
                                     alt="Current Photo" 
                                     class="rounded-circle shadow mb-3" 
                                     width="120" 
                                     height="120"
                                     style="object-fit: cover;">
                                <p class="text-muted">Foto Profil Saat Ini</p>
                            </div>

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap *</label>
                                <input id="name" class="form-control" type="text" name="name" 
                                       value="{{ old('name', Auth::user()->name) }}" required />
                                @error('name')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Tempat & Tanggal Lahir -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir *</label>
                                    <input id="tempat_lahir" class="form-control" type="text" name="tempat_lahir" 
                                           value="{{ old('tempat_lahir', Auth::user()->tempat_lahir) }}" required />
                                    @error('tempat_lahir')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir *</label>
                                    <input id="tanggal_lahir" class="form-control" type="date" name="tanggal_lahir" 
                                           value="{{ old('tanggal_lahir', Auth::user()->tanggal_lahir ? Auth::user()->tanggal_lahir->format('Y-m-d') : '') }}" required />
                                    @error('tanggal_lahir')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- New Photo -->
                            <div class="mb-4">
                                <label for="foto_profil" class="form-label">Ganti Foto Profil</label>
                                <input id="foto_profil" class="form-control" type="file" name="foto_profil" 
                                       accept=".jpg,.png,.jpeg,.svg" />
                                <div class="form-text">Biarkan kosong jika tidak ingin mengganti foto. Format: JPG, PNG, JPEG, SVG. Maksimal 2MB.</div>
                                @error('foto_profil')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left me-1"></i>Kembali
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-1"></i>Update Profil
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>