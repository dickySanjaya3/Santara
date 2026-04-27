<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Santara - Sandaran Tata Rencana</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #ffffff;
            background-image: radial-gradient(circle at 2% 2%, #1cda940a 0%, transparent 40%),
                              radial-gradient(circle at 98% 98%, #1cda940a 0%, transparent 40%);
        }

        .hero-gradient {
            background: linear-gradient(135deg, #1cda94 0%, #0ea5e9 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-primary {
            background: #1cda94;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 40px -12px rgba(28, 218, 148, 0.4);
            background: #17b97d;
        }

        /* Border halus untuk menyatukan navigasi ke halaman */
        .nav-border {
            border-bottom: 1px solid rgba(0, 0, 0, 0.03);
        }
    </style>
</head>
<body class="antialiased selection:bg-[#1cda94] selection:text-white">

    <nav class="w-full z-50 nav-border bg-white/80 backdrop-blur-md sticky top-0">
        <div class="max-w-[90rem] mx-auto flex justify-between items-center px-8 md:px-16 py-6">

            <div class="flex items-center gap-4 group cursor-pointer">
                <div class="w-11 h-11 bg-[#1cda94] rounded-2xl flex items-center justify-center rotate-3 shadow-lg group-hover:rotate-0 transition-all duration-500">
                    <span class="text-white font-extrabold text-xl">S</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-xl font-black text-[#3a3045] tracking-tighter leading-none">Santara.</span>
                    <span class="text-[8px] font-bold text-[#1cda94] uppercase tracking-[0.3em] mt-1">Sandaran tata rencana</span>
                </div>
            </div>

            <div class="flex items-center gap-10">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-[11px] font-black text-[#3a3045] uppercase tracking-[0.2em] hover:text-[#1cda94] transition-all">Workspace</a>
                    @else
                        <a href="{{ route('login') }}" class="text-[11px] font-black text-gray-400 hover:text-[#3a3045] transition uppercase tracking-[0.2em]">Masuk</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-[#3a3045] text-[10px] font-black text-white px-8 py-3.5 rounded-2xl uppercase tracking-[0.2em] hover:bg-black transition-all shadow-xl shadow-black/10">
                                Daftar Sekarang
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <main class="min-h-[80vh] flex flex-col items-center justify-center px-6 text-center py-20">
        <div class="max-w-5xl">
            <div class="inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-[#1cda94]/5 border border-[#1cda94]/10 mb-10">
                <span class="flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-2 w-2 rounded-full bg-[#1cda94] opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-[#1cda94]"></span>
                </span>
                <span class="text-[10px] font-black text-[#1cda94] uppercase tracking-[0.4em]">Sandaran • Tata • Rencana</span>
            </div>

            <h1 class="text-6xl md:text-8xl font-[900] text-[#3a3045] tracking-[-0.05em] leading-[0.95] mb-10">
                Lalui masa kuliah <br>
                <span class="hero-gradient italic">tanpa rasa cemas.</span>
            </h1>

            <p class="text-lg md:text-xl text-gray-400 font-medium max-w-3xl mx-auto leading-relaxed mb-14">
                Kami tahu begadangmu berat dan deadline seringkali terasa mencekik. <span class="text-[#3a3045] font-bold">Santara</span> hadir sebagai rumah kedua bagi tugasmu—menata kekacauan menjadi rencana nyata, membantu mahasiswa Informatika UNESA melangkah lebih pasti menuju masa depan.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="{{ route('register') }}" class="btn-primary w-full sm:w-auto px-12 py-6 rounded-3xl text-[11px] font-black text-white uppercase tracking-[0.2em] shadow-2xl">
                    Mulai Kelola Tugasmu
                </a>
                <a href="#features" class="w-full sm:w-auto px-12 py-6 rounded-3xl text-[11px] font-black text-gray-400 bg-gray-50 border border-gray-100 uppercase tracking-[0.2em] hover:bg-white hover:border-[#1cda94] hover:text-[#1cda94] transition-all">
                    Pelajari Filosofi
                </a>
            </div>

            <div class="mt-32 grid grid-cols-1 md:grid-cols-3 gap-12 border-t border-gray-100 pt-16">
                <div class="group">
                    <p class="text-[10px] font-black text-[#1cda94] uppercase tracking-widest mb-3">01. Sandaran</p>
                    <h4 class="text-xl font-black text-[#3a3045] mb-2">Tempat Bertumpu</h4>
                    <p class="text-sm text-gray-400 leading-relaxed px-4">Ruang aman untuk menyimpan setiap detail tugas agar pikiranmu tetap tenang.</p>
                </div>
                <div class="group border-x border-gray-50">
                    <p class="text-[10px] font-black text-[#1cda94] uppercase tracking-widest mb-3">02. Tata</p>
                    <h4 class="text-xl font-black text-[#3a3045] mb-2">Alur Teratur</h4>
                    <p class="text-sm text-gray-400 leading-relaxed px-4">Prioritas otomatis yang membantumu tahu mana yang harus diselesaikan hari ini.</p>
                </div>
                <div class="group">
                    <p class="text-[10px] font-black text-[#1cda94] uppercase tracking-widest mb-3">03. Rencana</p>
                    <h4 class="text-xl font-black text-[#3a3045] mb-2">Target Nyata</h4>
                    <p class="text-sm text-gray-400 leading-relaxed px-4">Visualisasi progres yang memastikan setiap langkahmu mendekati kelulusan.</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-12 border-t border-gray-50 bg-gray-50/30">
        <div class="max-w-6xl mx-auto px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-[9px] font-black text-gray-300 uppercase tracking-[0.5em]">
                © 2026 • State University of Surabaya
            </p>
            <div class="flex gap-8">
                <span class="text-[9px] font-black text-[#1cda94] uppercase tracking-widest italic">Sanjaya Nusantara Evolution</span>
            </div>
        </div>
    </footer>

</body>
</html>
