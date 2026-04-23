<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Santara - Project Management</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #ffffff;
            color: #3a3045;
        }

        /* Sidebar: Soft Purple Gradient */
        .sidebar {
            background: linear-gradient(180deg, #1cda94 0%, #a0e7e5 80%);
            box-shadow: 10px 0 40px rgba(142, 122, 163, 0.1);
        }

        /* Navigation Links ala EdSmart */
        .nav-link {
            color: rgba(255, 255, 255, 0.7);
            transition: all 0.3s ease;
            font-size: 13px;
            letter-spacing: 0.025em;
        }
        .nav-link:hover {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
        }
        .nav-active {
            background: white !important;
            color: #10b981 !important;
            font-weight: 700;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        /* Custom Scrollbar */
        .custom-scrollbar::-webkit-scrollbar { width: 6px; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #e2e8f0; border-radius: 10px; }
    </style>
</head>
<body class="antialiased">
    <div class="flex min-h-screen overflow-hidden">

        <aside class="sidebar w-64 flex flex-col py-10 shrink-0">
            <div class="mb-14 px-8 flex items-center gap-3">
                <div class="w-10 h-10 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center border border-white/30 rotate-3">
                    <span class="text-white font-extrabold text-xl">S</span>
                </div>
                <h1 class="text-xl font-extrabold text-white tracking-tighter">Santara.</h1>
            </div>

            <nav class="flex-1 space-y-2 px-4">
                <p class="text-[10px] font-extrabold text-white/40 uppercase tracking-[0.2em] mb-6 px-4">Menu Overview</p>

                <a href="{{ route('dashboard') }}" class="nav-link flex items-center gap-4 py-3.5 px-5 {{ request()->routeIs('dashboard') ? 'nav-active' : '' }}">
                    <span>📊</span> <span>Dashboard</span>
                </a>

                <a href="{{ route('tasks.create') }}" class="nav-link flex items-center gap-4 py-3.5 px-5 {{ request()->routeIs('tasks.create') ? 'nav-active' : '' }}">
                    <span>📥</span> <span>Data Entry</span>
                </a>
            </nav>

            <div class="mt-auto mx-6 mb-8">
                    <div class="flex items-center gap-2 mb-3">
                    </div>

                    <h4 class="text-sm font-black text-white tracking-tight mb-1 group-hover:translate-x-1 transition-transform">
                        Santara
                    </h4>

                    <p class="text-[9px] font-semibold text-white/100 uppercase tracking-[0.15em] leading-relaxed">
                        State University <br> of Surabaya
                    </p>

                    <div class="mt-4 w-full h-[1px] bg-gradient-to-r from-white/20 to-transparent"></div>

                    <p class="mt-3 text-[8px] font-black text-white/100 uppercase tracking-[0.4em]">
                        © 2026 Santara
                    </p>
            </div>
        </aside>

        <main class="flex-1 flex flex-col max-h-screen overflow-hidden">

            <header class="flex flex-col md:flex-row justify-between items-center px-12 py-8 bg-transparent gap-6">

                <div class="flex-shrink-0">
                    <h2 class="text-2xl font-extrabold text-[#3a3045] tracking-tight">
                        Welcome to <span class="text-[#10b981]">Santara</span>
                    </h2>
                </div>

                <div class="flex-1 max-w-md mx-auto w-full">
                    <div class="relative group">
                        <input type="text" placeholder="Search tasks..."
                            class="w-full bg-white border-none rounded-full py-3 pl-6 pr-14 text-xs font-semibold text-gray-500 shadow-sm focus:ring-4 focus:ring-[#8e7aa3]/10 transition-all outline-none">
                        <div class="absolute right-1.5 top-1.5 bottom-1.5 w-10 bg-[#10b981] rounded-full flex items-center justify-center text-white shadow-lg cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-4 bg-white px-4 py-2 rounded-2xl border border-gray-100 shadow-sm">
                    <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=10b981&color=fff&bold=true"
                         class="w-9 h-9 rounded-xl" alt="User Avatar">

                    <div class="flex flex-col border-r pr-5 border-gray-100">
                        <span class="text-xs font-extrabold text-[#3a3045] leading-tight mb-0.5 lowercase">{{ Auth::user()->name }}</span>
                        <span class="text-[9px] font-bold text-[#8e7aa3] uppercase tracking-wider">Active Student</span>
                    </div>

                    <form method="POST" action="{{ route('logout') }}" class="flex items-center">
                        @csrf
                        <button type="submit" class="p-1 text-gray-300 hover:text-red-500 transition-colors transform hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </button>
                    </form>
                </div>
            </header>

            <div class="flex-1 overflow-y-auto px-12 pb-12 custom-scrollbar">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>
</html>
