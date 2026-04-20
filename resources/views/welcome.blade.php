<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Santara - Project Management</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #ffffff;
            background-image: radial-gradient(circle at 0% 0%, #8e7aa30a 0%, transparent 50%),
                              radial-gradient(circle at 100% 100%, #8e7aa30a 0%, transparent 50%);
        }

        .hero-gradient {
            background: linear-gradient(135deg, #1cda94 25%, #a0e7e5 75%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-primary {
            background: linear-gradient(135deg, #a0e7e5 0%, #1cda94 100%);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px -10px #1cda94;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(142, 122, 163, 0.1);
        }
    </style>
</head>
<body class="antialiased selection:bg-[#1cda94] selection:text-white">

    <nav class="fixed top-0 w-full z-50 px-6 py-8">
    <div class="max-w-6xl mx-auto flex justify-between items-center glass-effect rounded-[2rem] px-10 py-4 shadow-xl shadow-[#8e7aa3]/5">

        <div class="flex items-center gap-3 group cursor-pointer">
            <div class="w-10 h-10 bg-[#1cda94] rounded-xl flex items-center justify-center rotate-3 shadow-lg group-hover:rotate-0 transition-transform duration-300">
                <span class="text-white font-extrabold text-xl">S</span>
            </div>
            <span class="text-xl font-black text-[#3a3045] tracking-tighter">Santara.</span>
        </div>

        <div class="flex items-center gap-8">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-[11px] font-black text-[#8e7aa3] uppercase tracking-[0.2em] hover:opacity-70 transition">Go to Workspace</a>
                @else
                    <a href="{{ route('login') }}" class="text-[11px] font-black text-gray-400 hover:text-[#8e7aa3] transition uppercase tracking-[0.2em]">Sign In</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-primary text-[10px] font-black text-white px-8 py-3.5 rounded-full uppercase tracking-[0.25em] shadow-lg shadow-[#8e7aa3]/20">
                            Get Started
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</nav>

    <main class="min-h-screen flex items-center justify-center pt-20 px-6 text-center">
        <div class="max-w-4xl">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#8e7aa3]/5 border border-[#8e7aa3]/10 mb-8">
                <span class="w-2 h-2 rounded-full bg-[#8e7aa3] animate-pulse"></span>
                <span class="text-[10px] font-black text-[#8e7aa3] uppercase tracking-[0.3em]">Project Management for Informatics</span>
            </div>

            <h1 class="text-5xl md:text-7xl font-[800] text-[#3a3045] tracking-[-0.04em] leading-[1.1] mb-8">
                Master your academic <br>
                <span class="hero-gradient italic">workflow with ease.</span>
            </h1>

            <p class="text-lg text-gray-400 font-medium max-w-2xl mx-auto leading-relaxed mb-12">
                Elevate your productivity with <span class="font-bold text-[#3a3045]">Santara</span>. The all-in-one management tool designed specifically for the digital pioneers of State University of Surabaya.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="{{ route('register') }}" class="btn-primary w-full sm:w-auto px-10 py-5 rounded-2xl text-xs font-black text-white uppercase tracking-[0.25em] shadow-xl">
                    Create Free Account
                </a>
                <a href="#" class="w-full sm:w-auto px-10 py-5 rounded-2xl text-xs font-black text-[#1cda94] bg-[#1cda94]/5 border border-[#8e7aa3]/10 uppercase tracking-[0.25em] hover:bg-[#8e7aa3]/10 transition">
                    Learn More
                </a>
            </div>

            <div class="mt-24 grid grid-cols-3 gap-8 border-t border-gray-100 pt-12">
                <div>
                    <h4 class="text-2xl font-black text-[#3a3045]">100%</h4>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Efficiency</p>
                </div>
                <div>
                    <h4 class="text-2xl font-black text-[#3a3045]">Clean</h4>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Modern UI</p>
                </div>
                <div>
                    <h4 class="text-2xl font-black text-[#3a3045]">Safe</h4>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mt-1">Data Secured</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-10 text-center">
        <p class="text-[10px] font-bold text-gray-300 uppercase tracking-[0.4em]">
            © 2026 informatics State University of Surabaya
        </p>
    </footer>

</body>
</html>
