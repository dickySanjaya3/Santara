<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Daftar Akun Santara</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary": "#4b53bb", "secondary": "#006c49", "background": "#f8f9ff",
                        "on-surface": "#191c20", "on-surface-variant": "#464652", "outline": "#767684",
                        "outline-variant": "#c6c5d5", "error": "#ba1a1a", "error-container": "#ffdad6"
                    },
                    "borderRadius": { "lg": "2rem", "xl": "3rem", "full": "9999px" },
                    "fontFamily": {
                        "headline-lg": ["Plus Jakarta Sans"], "display-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Nunito Sans"], "label-md": ["Nunito Sans"]
                    }
                },
            },
        }
    </script>
    <style>
        .clay-card {
            background: #ffffff; border-radius: 32px;
            box-shadow: 20px 20px 60px rgba(75, 83, 187, 0.08), -20px -20px 60px #ffffff;
            position: relative; overflow: hidden;
        }
        .clay-button {
            background: linear-gradient(180deg, #8b93ff 0%, #4b53bb 100%);
            box-shadow: 0 10px 20px rgba(75, 83, 187, 0.2), inset 0 2px 4px rgba(255, 255, 255, 0.4);
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .clay-button:hover { transform: translateY(-2px) scale(1.02); box-shadow: 0 15px 30px rgba(75, 83, 187, 0.3); }

        /* PENGUNCI VISUAL: Menggunakan !important agar tidak dirusak oleh plugin Tailwind Forms */
        .clay-input {
            background: #ffffff !important;
            box-shadow: inset 2px 2px 6px rgba(0, 0, 0, 0.04), inset -2px -2px 6px rgba(0, 0, 0, 0.01) !important;
            border: 1px solid rgba(75, 83, 187, 0.08) !important;
            border-radius: 16px !important;
            transition: all 0.2s ease !important;
        }
        .clay-input:focus {
            outline: none !important;
            border-color: #8b93ff !important;
            box-shadow: inset 1px 1px 3px rgba(0, 0, 0, 0.02), 0 0 0 4px rgba(75, 83, 187, 0.15) !important;
        }

        .floating-bg { position: absolute; z-index: -1; filter: blur(80px); border-radius: 50%; }
        .animate-float { animation: float 6s ease-in-out infinite; }
        @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-20px); } }
    </style>
</head>
<body class="bg-background min-h-screen font-body-md text-on-surface overflow-x-hidden flex items-center justify-center p-4">

    <div class="floating-bg w-96 h-96 bg-[#ffdbcb]/40 top-[-10%] left-[-10%] animate-float"></div>
    <div class="floating-bg w-[500px] h-[500px] bg-[#82f6bf]/30 bottom-[-20%] right-[-10%] animate-float" style="animation-delay: -2s;"></div>

    <main class="w-full max-w-6xl flex flex-col lg:flex-row gap-8 items-center justify-center relative">

        <div class="hidden lg:flex flex-col items-center justify-center w-1/2 p-8">
            <div class="relative w-full max-w-md animate-float text-center">
                <img alt="Santara 3D" class="w-full h-auto drop-shadow-2xl rounded-xl" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCqAp6dK8N7ZkVlXzVyDQw_DqwMM3oOshNDOkqXQ0ua1sSGZ612khJ8E_G4kyfuFLyGyWb9yW9TKkZLvRa1sugrAFhPYf4pNeM423dte6ZZpz0k4nQK9ksmL3bGgV2qJlNjYoSDAvwgFQ3LklK9Em-cEg862HgCQWjcFh7gXw9VBiAoubPtTvT-xpJ9vUV_XpWqKmeJ095Hd2-ZZp_Eg5GiJTonghlohYa2HsR1NRhnIp4XmwB5tZXoOsGw8HDqh6d1rYALbRtL7VsQ"/>
                <h1 class="font-black text-6xl text-primary mt-12 tracking-tight">Santara</h1>
                <p class="font-semibold text-lg text-gray-400 mt-4 px-12">Wujudkan impian akademismu dengan platform paling interaktif.</p>
            </div>
        </div>

        <div class="w-full lg:w-1/2 flex justify-center">
            <div class="clay-card w-full max-w-lg p-8 md:p-12">
                <div class="mb-8">
                    <h2 class="text-3xl font-black text-on-surface mb-2">Daftar Akun</h2>
                    <p class="text-gray-400">Mulai perjalanan belajarmu hari ini.</p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="space-y-4" id="registrationForm">
                    @csrf

                    <!-- 1. Nama Lengkap -->
                    <div class="space-y-1">
                        <label class="text-xs font-bold text-gray-500 ml-1 uppercase tracking-widest">Nama Lengkap</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">person</span>
                            <input type="text" name="name" value="{{ old('name') }}" class="clay-input w-full py-4 pl-12 pr-4 font-body-md" placeholder="Dicky Sanjaya" required autofocus/>
                        </div>
                        @error('name') <p class="text-error text-[10px] font-bold mt-1 ml-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- 2. Semester -->
                    <div class="space-y-1">
                        <label class="text-xs font-bold text-gray-500 ml-1 uppercase tracking-widest">Semester</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">school</span>
                            <input type="text" name="semester" value="{{ old('semester') }}" class="clay-input w-full py-4 pl-12 pr-4 font-body-md" placeholder="Contoh: Semester 4" required/>
                        </div>
                        @error('semester') <p class="text-error text-[10px] font-bold mt-1 ml-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- 3. Program Studi -->
                    <div class="space-y-1">
                        <label class="text-xs font-bold text-gray-500 ml-1 uppercase tracking-widest">Program Studi</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">layers</span>
                            <input type="text" name="study_program" value="{{ old('study_program') }}" class="clay-input w-full py-4 pl-12 pr-4 font-body-md" placeholder="Contoh: S1 Informatika" required/>
                        </div>
                        @error('study_program') <p class="text-error text-[10px] font-bold mt-1 ml-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- 4. Alamat Email -->
                    <div class="space-y-1">
                        <label class="text-xs font-bold text-gray-500 ml-1 uppercase tracking-widest">Alamat Email</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">mail</span>
                            <input type="email" name="email" value="{{ old('email') }}" class="clay-input w-full py-4 pl-12 pr-4 font-body-md" placeholder="nama@unesa.ac.id" required/>
                        </div>
                        @error('email') <p class="text-error text-[10px] font-bold mt-1 ml-1">{{ $message }}</p> @enderror
                    </div>

                    <!-- 5. Password & Konfirmasi Grid Layout -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-1">
                            <label class="text-xs font-bold text-gray-500 ml-1 uppercase tracking-widest">Password</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">lock</span>
                                <input type="password" name="password" class="clay-input w-full py-4 pl-12 pr-4" placeholder="••••••••" required/>
                            </div>
                        </div>
                        <div class="space-y-1">
                            <label class="text-xs font-bold text-gray-500 ml-1 uppercase tracking-widest">Konfirmasi</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">lock_reset</span>
                                <input type="password" name="password_confirmation" class="clay-input w-full py-4 pl-12 pr-4" placeholder="••••••••" required/>
                            </div>
                        </div>
                    </div>
                    @error('password') <p class="text-error text-[10px] font-bold mt-1 ml-1">{{ $message }}</p> @enderror

                    <!-- 6. Syarat & Ketentuan -->
                    <div class="flex items-center gap-3 ml-1 pt-2">
                        <input name="terms" id="terms" type="checkbox" class="w-5 h-5 rounded border-gray-300 text-primary focus:ring-primary/20" required/>
                        <label class="text-xs text-gray-500" for="terms">
                            Saya menyetujui <span class="text-primary font-bold cursor-pointer hover:underline">Syarat & Ketentuan</span>
                        </label>
                    </div>

                    <!-- 7. Tombol Submit -->
                    <button type="submit" class="clay-button w-full py-4 rounded-2xl text-on-primary font-black uppercase tracking-widest text-sm mt-4 group">
                        <span>Daftar Sekarang</span>
                        <span class="material-symbols-outlined inline-block transition-transform group-hover:translate-x-1 ml-2">arrow_forward</span>
                    </button>
                </form>

                <div class="mt-8 text-center">
                    <p class="text-sm text-gray-400">
                        Sudah punya akun?
                        <a class="text-primary font-black ml-1 hover:underline" href="{{ route('login') }}">Masuk</a>
                    </p>
                </div>
            </div>
        </div>
    </main>

    <div class="fixed top-8 left-8 flex items-center gap-2 lg:hidden">
        <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center shadow-lg">
            <span class="material-symbols-outlined text-white font-variation-fill">auto_stories</span>
        </div>
        <span class="text-xl font-black text-primary">Santara</span>
    </div>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function() {
            const btn = this.querySelector('button[type="submit"]');
            btn.disabled = true;
            btn.innerHTML = `<span class="material-symbols-outlined animate-spin mr-2">sync</span> Memproses...`;
        });
    </script>
</body>
</html>
