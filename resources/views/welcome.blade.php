<!DOCTYPE html>
<html class="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Santara - Lalui Masa Kuliah Tanpa Rasa Cemas</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@700;800&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script id="tailwind-config">
          tailwind.config = {
            darkMode: "class",
            theme: {
              extend: {
                "colors": {
                        "primary-fixed-dim": "#bec2ff", "on-tertiary-fixed": "#341100", "surface-variant": "#e1e2e8",
                        "on-secondary-container": "#00714d", "tertiary-fixed-dim": "#ffb692", "outline": "#767684",
                        "on-primary": "#ffffff", "on-secondary-fixed-variant": "#005236", "surface-tint": "#4b53bb",
                        "surface-container-lowest": "#ffffff", "surface-bright": "#f8f9ff", "primary-fixed": "#e0e0ff",
                        "on-background": "#191c20", "secondary-fixed-dim": "#67dca7", "on-primary-fixed-variant": "#3239a2",
                        "secondary": "#006c49", "surface": "#f8f9ff", "surface-container": "#eceef3",
                        "on-tertiary": "#ffffff", "on-surface-variant": "#464652", "primary-container": "#8b93ff",
                        "background": "#f8f9ff", "on-secondary-fixed": "#002114", "error": "#ba1a1a",
                        "on-error-container": "#93000a", "tertiary-fixed": "#ffdbcb", "on-surface": "#191c20",
                        "on-tertiary-fixed-variant": "#6d391d", "primary": "#4b53bb", "outline-variant": "#c6c5d5",
                        "surface-dim": "#d8dae0", "on-secondary": "#ffffff", "surface-container-high": "#e7e8ee",
                        "secondary-fixed": "#85f8c2", "inverse-surface": "#2e3135", "on-error": "#ffffff",
                        "error-container": "#ffdad6", "inverse-primary": "#bec2ff", "on-primary-fixed": "#00016d",
                        "surface-container-low": "#f2f3f9", "surface-container-highest": "#e1e2e8",
                        "on-tertiary-container": "#56270c", "secondary-container": "#82f6bf", "tertiary": "#895032",
                        "inverse-on-surface": "#eff0f6", "on-primary-container": "#1d238f", "tertiary-container": "#d28c6a"
                },
                "borderRadius": { "DEFAULT": "1rem", "lg": "2rem", "xl": "3rem" },
                "fontFamily": {
                        "body-md": ["Nunito Sans"], "body-lg": ["Nunito Sans"],
                        "headline-md": ["Plus Jakarta Sans"], "display-lg": ["Plus Jakarta Sans"]
                }
              },
            },
          }
    </script>
    <style>
        .clay-card {
            background: #ffffff; border-radius: 2rem;
            box-shadow: 20px 20px 40px rgba(75, 83, 187, 0.08), -10px -10px 20px rgba(255, 255, 255, 0.9), inset 2px 2px 5px rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
        }
        .clay-button-primary {
            background: linear-gradient(180deg, #8b93ff 0%, #4b53bb 100%);
            box-shadow: 0px 10px 20px rgba(75, 83, 187, 0.25), inset 0px 4px 4px rgba(255, 255, 255, 0.3);
        }
        .clay-pill { box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.05), inset 1px 1px 2px rgba(255, 255, 255, 0.5); }
        .hero-blob { background: radial-gradient(circle at 50% 50%, #bec2ff 0%, transparent 70%); filter: blur(80px); z-index: -1; }
    </style>
</head>
<body class="bg-background text-on-background font-body-md overflow-x-hidden">

    <nav class="bg-surface/80 backdrop-blur-md shadow-sm sticky top-0 z-50 flex justify-between items-center w-full px-4 md:px-16 py-4">
        <div class="flex items-center gap-2">
            <span class="text-2xl font-black text-primary tracking-tight">Santara</span>
        </div>

        <div class="hidden md:flex items-center gap-8 font-bold text-sm text-gray-500">
            <a class="text-primary border-b-4 border-primary pb-1" href="#">Beranda</a>
            <a href="{{ route('panduan') }}" class="text-sm font-bold text-on-surface hover:text-primary transition-all">
                Fitur
            </a>
            <a href="{{ route('tentang') }}" class="text-sm font-bold text-on-surface hover:text-primary transition-all">
        Tentang
    </a>
        </div>

        <div class="flex items-center gap-4">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="clay-button-primary text-on-primary font-bold text-xs px-6 py-3 rounded-full hover:scale-105 active:scale-95 transition-all">
                        Workspace Anda
                    </a>
                @else
                    <a href="{{ route('login') }}" class="hidden sm:block font-bold text-xs text-gray-500 hover:text-primary transition-all">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="clay-button-primary text-on-primary font-bold text-xs px-6 py-3 rounded-full hover:scale-105 active:scale-95 transition-all">
                            Daftar
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </nav>

    <main class="relative">
        <div class="absolute top-20 -right-20 w-96 h-96 hero-blob opacity-40"></div>

        <section class="container mx-auto px-6 md:px-16 py-16 md:py-24 grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
            <div class="md:col-span-6 space-y-8 order-2 md:order-1">
                <div class="inline-flex items-center gap-2 bg-secondary-container/30 px-4 py-2 rounded-full clay-pill">
                    <span class="material-symbols-outlined text-secondary text-[20px]">verified</span>
                    <span class="text-secondary font-bold text-xs">Platform Akademik UNESA #1</span>
                </div>

                <h1 class="font-black text-5xl md:text-7xl text-on-background leading-none tracking-tighter">
                    @auth Hai, {{ explode(' ', Auth::user()->name)[0] }}! @endauth
                    Lalui kuliah <br/> <span class="text-primary italic">tanpa cemas.</span>
                </h1>

                <p class="text-gray-500 text-lg max-w-lg leading-relaxed">
                    Kelola tugas, tata rencana, dan monitor progres akademikmu dalam satu dashboard <strong>Claymorphic</strong> yang menyenangkan.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a href="{{ Auth::check() ? url('/dashboard') : route('register') }}" class="clay-button-primary text-center text-on-primary font-bold px-10 py-5 rounded-2xl hover:scale-105 active:scale-95 transition-all">
                        {{ Auth::check() ? 'Buka Dashboard' : 'Mulai Sekarang' }}
                    </a>
                    <button class="clay-card border border-gray-100 flex items-center justify-center gap-2 px-10 py-5 hover:bg-gray-50 active:scale-95 transition-all">
                        <span class="material-symbols-outlined text-primary">play_circle</span>
                        <span class="font-bold text-gray-700">Lihat Demo</span>
                    </button>
                </div>
            </div>

            <div class="md:col-span-6 relative order-1 md:order-2">
                <div class="relative w-full aspect-square flex items-center justify-center">
                    <div class="relative z-10 w-full h-full transform transition-all duration-700 hover:rotate-2">
                        <img alt="Santara 3D Illustration" class="w-full h-full object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFCiepnvNoGVWoGQmndvOVBZsPEOoSy-LdZ8_UM4P_q69Y1kTXpSRaECEU4tPF4HdJ1u5SRXamz66h0IfLDgQhNWE2jExbk1MoiNFn_IyIMCc8d5ZppYVulBModW9BVYfTmfArjaqwEFsN8Ysb_wzXRnVGwkmQU252ipoWA2AHCo7km-Zw0N-K-195s4IdFjl3YX4J4Ft5dI-SRMmWjpEUTC8HfH22QgzPz7WSRzz_CzzfEmih1u95zjlA4DTvoQC6s3S3Inv2VMCe"/>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="bg-gray-50 py-24 rounded-[4rem]">
            <div class="container mx-auto px-6 md:px-16">
                <div class="text-center mb-16 space-y-4">
                    <h2 class="text-4xl font-black text-on-background tracking-tight">Fitur Pintar Mahasiswa</h2>
                    <p class="text-gray-500 text-lg max-w-2xl mx-auto">Santara hadir sebagai <strong>Sandaran Tata Rencana</strong> untuk mendukung produktivitasmu.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                    <div class="md:col-span-7 clay-card p-10 flex flex-col justify-between group overflow-hidden">
                        <div>
                            <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
                                <span class="material-symbols-outlined text-primary">monitoring</span>
                            </div>
                            <h3 class="text-2xl font-black mb-4">Visualisasi Tugas</h3>
                            <p class="text-gray-500 leading-relaxed">Pantau progres belajarmu dengan grafik intuitif yang membantu kamu tetap pada jalur.</p>
                        </div>
                        <img alt="Graph" class="mt-8 w-full max-h-48 object-contain group-hover:scale-105 transition-transform" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVDrR4-jiw-aub1tC5pVcPgh-WyQcPXWfumfacBOnKF-s8MdBLD_mzP7gK5M5J8XMj6QibKk17tPkRE-aiToFayxSY9Gol_arGUXNMgFB84zUzFGr2-LD_sJifF33m6vVvAm3OqHL94gio0Vlf--JrvqdxCdPIIZfZkkJr75LjGBB-s4IPFMZQCo8dmlA0TOtzqHfS36RcWzVjVn1O5a5XEZG7aUBrA_JmkZuaxL8-4bFRZNJKBYS9OT7_7Jdo04kG65bWKaT8rK8Z"/>
                    </div>

                    <div class="md:col-span-5 clay-card p-10 bg-emerald-50/50 border-emerald-100 group">
                        <div class="w-12 h-12 bg-emerald-500/10 rounded-2xl flex items-center justify-center mb-6">
                            <span class="material-symbols-outlined text-emerald-500">task_alt</span>
                        </div>
                        <h3 class="text-2xl font-black mb-4">Tata Rencana</h3>
                        <p class="text-gray-500 leading-relaxed">Atur prioritas tugas dengan sistem tagging dan deadline yang cerdas.</p>
                        <div class="mt-12 flex justify-center">
                            <div class="w-24 h-24 bg-white rounded-3xl clay-pill flex items-center justify-center group-hover:rotate-12 transition-all">
                                <span class="material-symbols-outlined text-emerald-500 text-5xl">verified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 px-6">
            <div class="container mx-auto clay-card bg-primary p-12 md:p-24 relative overflow-hidden text-center text-white">
                <div class="relative z-10 space-y-8">
                    <h2 class="text-4xl md:text-6xl font-black tracking-tighter leading-none">Siap untuk kuliah <br> yang lebih teratur?</h2>
                    <p class="text-primary-fixed-dim text-lg opacity-80 max-w-2xl mx-auto">Bergabunglah bersama ribuan mahasiswa UNESA lainnya di Santara.</p>
                    <div class="flex justify-center">
                        <a href="{{ route('register') }}" class="bg-white text-primary font-black px-12 py-5 rounded-2xl hover:scale-105 transition-all shadow-xl">
                            Daftar Sekarang - Gratis!
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="py-12 px-16 text-center border-t border-gray-100">
        <span class="text-2xl font-black text-primary">Santara</span>
        <p class="text-gray-400 text-xs mt-4 uppercase tracking-[0.3em]">© 2026 Universitas Negeri Surabaya</p>
    </footer>

</body>
</html>
