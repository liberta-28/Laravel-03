<x-app-layout>
    <x-slot name="header">
        <!-- Tidak diperlukan header besar untuk halaman login, jadi bisa dikosongkan atau dihapus -->
    </x-slot>

    <div class="d-flex align-items-center justify-content-center vh-100 bg-light">
        <div class="card shadow-lg rounded-3" style="max-width: 400px; width: 100%;">
            <div class="card-body p-5 bg-white rounded-3">
                <div class="text-center mb-4">
                    <div class="mb-3">
                        <!-- Logo atau icon kecil -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="#0d6efd" class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
                            <path d="M8 0c-.7 0-1.4.2-2 .6C4.4 1.3 3.7 2.4 3.2 3.7c-.9 2.3-1 4.8-.2 7.1.4 1.3 1.2 2.4 2.4 3.3.8.5 1.7.9 2.6 1.2.5.2 1.1.4 1.6.4s1.2-.2 1.6-.4c.9-.3 1.8-.7 2.6-1.2 1.2-.9 2-2 2.4-3.3.8-2.3.7-4.8-.2-7.1-.5-1.3-1.2-2.4-2.4-3.3C9.4.2 8.7 0 8 0z"/>
                            <path d="M8 4.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2 4v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V8.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5z"/>
                        </svg>
                    </div>
                    <h3 class="fw-semibold mb-3 text-dark">Login Akun</h3>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label text-muted">Email</label>
                        <input type="email" class="form-control border-0 border-bottom rounded-0 py-2 px-3" id="email" name="email" placeholder="Masukkan email" required autofocus>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label text-muted">Password</label>
                        <input type="password" class="form-control border-0 border-bottom rounded-0 py-2 px-3" id="password" name="password" placeholder="Masukkan password" required>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Ingat Saya</label>
                        </div>
                        <a href="#" class="text-decoration-none small text-primary">Lupa Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2 fs-6 rounded-pill shadow-sm hover-scale">Login</button>
                </form>
                <div class="mt-4 text-center">
                    <p class="mb-0 small text-muted">Belum punya akun? <a href="#" class="text-decoration-none text-primary fw-semibold">Daftar Sekarang</a></p>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Animasi hover untuk tombol */
        .hover-scale:hover {
            transform: scale(1.02);
            transition: transform 0.2s ease-in-out;
        }

        /* Tambahan efek bayangan saat hover */
        .shadow-sm:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }
    </style>
</x-app-layout>