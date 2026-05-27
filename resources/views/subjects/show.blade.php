<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Santara | Detail {{ $subject->name }}</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Plus+Jakarta+Sans:wght@700;800&display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                    "borderRadius": { "DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px" },
                    "spacing": { "unit": "8px", "gutter": "24px", "margin-mobile": "16px", "container-max": "1280px", "margin-desktop": "40px" },
                    "fontFamily": { "body-md": ["Nunito Sans"], "body-lg": ["Nunito Sans"], "headline-lg-mobile": ["Plus Jakarta Sans"], "headline-md": ["Plus Jakarta Sans"], "label-sm": ["Nunito Sans"], "headline-lg": ["Plus Jakarta Sans"], "display-lg": ["Plus Jakarta Sans"], "label-md": ["Nunito Sans"] },
                },
            },
        }
    </script>
<style>
        .clay-card { box-shadow: 0 20px 40px -15px rgba(75, 83, 187, 0.1), inset 4px 4px 12px rgba(255, 255, 255, 0.6), inset -4px -4px 12px rgba(0, 0, 0, 0.05); }
        .clay-button { box-shadow: 0 10px 20px -5px rgba(75, 83, 187, 0.3), inset 2px 2px 4px rgba(255, 255, 255, 0.4), inset -2px -2px 4px rgba(0, 0, 0, 0.1); transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1); }
        .clay-button:active { transform: scale(0.95); box-shadow: 0 5px 10px -2px rgba(75, 83, 187, 0.3); }
        .clay-inset { box-shadow: inset 4px 4px 8px rgba(0, 0, 0, 0.05), inset -4px -4px 8px rgba(255, 255, 255, 0.8); }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #e1e2e8; border-radius: 10px; }
    </style>
</head>
@php
    // Mapping gambar berdasarkan warna subject
    $imageMap = [
        '#8b93ff' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDsM2IZVnU9zweeDeIRxz3QxcOVhXVfrm6vkut7Oc02nGEj7lJpp4vGdTK11h8uD02EtwF7IvjKf1inwVMdrf7tFVypPy-4m1yaYIfmWhVcLPhWydGClMUHB9tlMq2AHmWAOpb4dMvCk6ggYcWRZkzJE2Pt-Ewcu-ReGP-0X8rNRynwXC1F5yC9w3CgjBNCvy2A6K8bguzjvb1h3Tf3TSf1QaS1H5om-nlm7QD1f4b2_0AY9nghziHb-aCjoRpGwst0sGD8RTT-fUYR',
        '#82f6bf' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAR1_rtzf_yNsCsvF3rFQ-w28EMVx-Jz--SB_nzl-Z_87cAoxKnnKgihIIkmBW2GzHwyaRtcXkPxcko_jHP1nQ0J-cDxl3dbp_tiyjSnyhS5zBwIiRBgD4o-U__QzUMsz8pZkyJ_78dRyBwpD87Q92htm3uiZG6OXOuj6GNRrdD0bWQPECyXhvbVmRh4yLOFWf_TYN1JUegNpkfSpAqxz3gJVm8mFE-4kCRuXGaztD0c7s-kmkGzTKJvVCS8yLRxJu_0vYZYTRsEKC7',
        '#ffdbcb' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCtH5KL93efFNaGIPI6IwNuQhd_5Qgl3vii5GoXsDUKyZJoNvQ-xoUcFvZESYF-nM8w4UOQP4jexX8yP4IhPYXzUq3IRWN_VyXuL1uaehGnkVRd6BnIPwyotnWQmPuTfDbIISz8bsy74NEqQy0Gg3oOxdjHJQz3FZ1cjZ2npdfuGkGuEdwisRCR2eiG8nElpsUsmrovUXYnS0WyN5rdXiu_3o4G6gX-put8tNNN4yfP1feLMgSmqR82F0tDAsa2Vcb6sAmAxCmujdyq',
        '#bec2ff' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA5XFpRhEft1LVKmOReH5V8SEVfA578h7Zjb8ctgvWa_gYapuqlcuwOFlDtASgeu-ovOfoe6CZuIUlha2MP3InFHRIkLySBkeFW2jqTp34y0M8ANi695pq_VrHo4VTyIIPRSXpdGLtJ7LQPDax9Gbd05Bk3-Wyy2WY7nKEU848Y1XFd8fgBkhUZ17kpqKeXQgq4veavrPBXvOKWhWTs2B8eOWAvVqABzr0sq7u7RM5aEbRuH_tbKrTvpKU2uXNK14ta0IEVwZ9BZFcr',
        '#ffb692' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCtH5KL93efFNaGIPI6IwNuQhd_5Qgl3vii5GoXsDUKyZJoNvQ-xoUcFvZESYF-nM8w4UOQP4jexX8yP4IhPYXzUq3IRWN_VyXuL1uaehGnkVRd6BnIPwyotnWQmPuTfDbIISz8bsy74NEqQy0Gg3oOxdjHJQz3FZ1cjZ2npdfuGkGuEdwisRCR2eiG8nElpsUsmrovUXYnS0WyN5rdXiu_3o4G6gX-put8tNNN4yfP1feLMgSmqR82F0tDAsa2Vcb6sAmAxCmujdyq',
        '#67dca7' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAR1_rtzf_yNsCsvF3rFQ-w28EMVx-Jz--SB_nzl-Z_87cAoxKnnKgihIIkmBW2GzHwyaRtcXkPxcko_jHP1nQ0J-cDxl3dbp_tiyjSnyhS5zBwIiRBgD4o-U__QzUMsz8pZkyJ_78dRyBwpD87Q92htm3uiZG6OXOuj6GNRrdD0bWQPECyXhvbVmRh4yLOFWf_TYN1JUegNpkfSpAqxz3gJVm8mFE-4kCRuXGaztD0c7s-kmkGzTKJvVCS8yLRxJu_0vYZYTRsEKC7'
    ];

    // Ambil URL berdasarkan warna subject saat ini, default ke gambar pertama jika tidak cocok
    $illustrationUrl = $imageMap[$subject->color] ?? $imageMap['#8b93ff'];
@endphp
<body class="bg-background font-body-md text-on-background min-h-screen overflow-x-hidden">

<!-- SideNavBar Shell -->
<aside class="fixed left-0 top-0 flex flex-col h-full p-4 z-40 bg-surface-container-low w-64 shadow-lg rounded-r-lg">
    <div class="mb-10 px-4">
        <h1 class="font-display-lg text-headline-md text-primary tracking-tight italic">Santara</h1>
        <p class="font-body-md text-on-surface-variant text-label-md tracking-widest uppercase text-[10px] font-black">Task Manager</p>
    </div>
    <nav class="flex flex-col gap-2 flex-grow">
        <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 hover:bg-surface-container-high rounded-xl transition-all hover:translate-x-2 duration-300" href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-label-md text-label-md">Dashboard</span>
        </a>
        <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 hover:bg-surface-container-high rounded-xl transition-all hover:translate-x-2 duration-300" href="{{ route('tasks.create') }}">
            <span class="material-symbols-outlined">edit_note</span>
            <span class="font-label-md text-label-md">Data Entry</span>
        </a>
        <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 hover:bg-surface-container-high rounded-xl transition-all hover:translate-x-2 duration-300" href="#">
            <span class="material-symbols-outlined">calendar_month</span>
            <span class="font-label-md text-label-md">Calendar</span>
        </a>
        <a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 hover:bg-surface-container-high rounded-xl transition-all hover:translate-x-2 duration-300" href="#">
            <span class="material-symbols-outlined">settings</span>
            <span class="font-label-md text-label-md">Settings</span>
        </a>
    </nav>
</aside>
<main class="ml-64 p-10 min-h-screen w-[calc(100%-16rem)]">
    <header class="flex justify-between items-center mb-10 w-full">
        <div class="relative w-96">
            <input class="w-full clay-inset bg-surface-container-lowest rounded-full py-3 px-12 border-none" placeholder="Search..." type="text">
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">search</span>
        </div>
        <div class="relative" id="profile-container">
        <div class="flex items-center gap-4 bg-surface-container-high px-2 py-2 pr-6 rounded-full clay-card cursor-pointer hover:bg-white transition-all" id="profile-trigger">
            <img alt="Profile" class="w-10 h-10 rounded-full object-cover border-2 border-primary-container shadow-sm" src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=4b53bb&color=fff"/>
            <div>
                <p class="font-label-md text-label-md text-on-surface leading-tight">{{ Auth::user()->name }}</p>
                <p class="text-[10px] text-on-surface-variant uppercase tracking-wider font-bold">Active Student</p>
            </div>
            <span class="material-symbols-outlined text-outline text-sm ml-2">expand_more</span>
        </div>

        <div class="absolute right-0 mt-3 w-48 bg-white rounded-2xl shadow-xl border border-outline-variant/10 p-2 z-[100] hidden opacity-0 translate-y-2 transition-all duration-300" id="logout-dropdown">
            <div class="px-4 py-2 border-bottom border-gray-100 mb-1">
                <p class="text-[10px] font-black text-outline uppercase tracking-widest">Akun Anda</p>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex items-center gap-3 w-full px-4 py-3 text-red-500 hover:bg-red-50 rounded-xl transition-all font-bold text-sm">
                    <span class="material-symbols-outlined text-lg">logout</span>
                    <span>Keluar Akun</span>
                </button>
            </form>
        </div>
    </div>
    </header>

    <div class="flex items-center gap-6 mb-10 w-full">
        <a href="{{ route('dashboard') }}" class="clay-card h-14 w-14 flex items-center justify-center !rounded-full text-primary hover:scale-110 transition-all shrink-0">
            <span class="material-symbols-outlined">arrow_back</span>
        </a>
        <div class="flex items-center gap-6">
            <div class="w-20 h-20 rounded-full flex items-center justify-center p-2 relative overflow-hidden shrink-0" style="background-color: {{ $subject->color }}25;">
                <img class="w-full h-full object-cover rounded-full" src="{{ $illustrationUrl }}" alt="{{ $subject->name }}">
            </div>
            <div>
                <h2 class="font-display-lg text-3xl font-black text-on-background leading-tight">{{ $subject->name }}</h2>
                <p class="text-on-surface-variant text-xs font-black tracking-widest uppercase opacity-70">Active Module • Semester 4</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-8 w-full items-start">

        <div class="col-span-12 lg:col-span-8 flex flex-col gap-6">
            <section class="clay-card p-8 bg-white h-full">
                <div class="flex items-center justify-between mb-8">
                    <h3 class="text-xl font-black text-on-surface">Daftar Tugas</h3>
                    <span class="text-primary text-xs font-bold px-3 py-1 bg-primary/10 rounded-full uppercase italic">Live Data</span>
                </div>

<div class="flex flex-col gap-4">
@forelse($subject->tasks->sortBy(fn($task) => $task->status === 'completed' ? 1 : 0) as $task)
<div class="bg-surface-container-lowest p-6 rounded-2xl clay-card flex items-start gap-6 group mb-6"
     style="border-left: 8px solid {{ $task->status == 'completed' ? '#e1e2e8' : ($subject->color ?? '#4b53bb') }}">

    <form action="{{ route('tasks.updateStatus', $task->id) }}" method="POST" class="mt-1">
        @csrf @method('PATCH')
        <input type="checkbox" onchange="this.form.submit()" {{ $task->status == 'completed' ? 'checked disabled' : '' }}
               class="w-8 h-8 rounded-full border-none clay-inset text-primary focus:ring-0 cursor-pointer checked:bg-primary transition-all">
    </form>

    <div class="flex-grow flex flex-col gap-4">
        <div>
            <h4 class="font-black text-lg {{ $task->status == 'completed' ? 'line-through opacity-40' : '' }} text-on-surface leading-tight">
                {{ $task->title }}
            </h4>
            @if($task->description)
                <p class="text-sm text-on-surface-variant mt-2 leading-relaxed">
                    {{ $task->description }}
                </p>
            @endif
        </div>

        {{-- AREA LAMPIRAN FILE: Tampil tepat di bawah deskripsi --}}
        @if($task->file_instruction)
        <div class="p-3 bg-surface-container-low rounded-xl border border-outline-variant/20 flex items-center justify-between group/file hover:bg-white transition-all">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined text-2xl">description</span>
                </div>
                <div class="overflow-hidden">
                    <p class="text-[10px] font-black text-on-surface uppercase tracking-tighter">Instruksi Dosen</p>
                    <p class="text-[10px] text-outline truncate w-32 md:w-48 italic">
                        {{ basename($task->file_instruction) }}
                    </p>
                </div>
            </div>

            <a href="{{ asset('storage/' . $task->file_instruction) }}"
               target="_blank"
               class="clay-button bg-primary text-white px-4 py-2 rounded-lg text-[10px] font-black uppercase flex items-center gap-2 hover:scale-105 active:scale-95 transition-all">
                <span class="material-symbols-outlined text-sm">open_in_new</span>
                Buka File
            </a>
        </div>
        @endif

        <div class="flex items-center gap-2 text-[10px] text-outline font-bold uppercase tracking-widest">
            <span class="material-symbols-outlined text-sm">event</span>
            Selesai pada: {{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}
        </div>
    </div>

    <div class="shrink-0">
        <span class="text-[9px] font-black uppercase px-3 py-1 rounded-full text-white"
              style="background-color: {{ $task->status == 'completed' ? '#cbd5e1' : ($subject->color ?? '#4b53bb') }}">
            {{ $task->status }}
        </span>
    </div>
</div>
@empty
    <div class="p-16 text-center clay-inset rounded-3xl text-outline italic font-bold">
        Belum ada tugas di modul ini, King! 🚀
    </div>
@endforelse
                </div>
            </section>
        </div>

        <div class="col-span-12 lg:col-span-4 flex flex-col gap-8">
            <div class="clay-card p-8 bg-white">
                <h3 class="text-xs font-black uppercase tracking-widest text-on-surface-variant mb-8 text-center">Progres Modul</h3>
                @php
                    $total = $subject->tasks->count();
                    $done = $subject->tasks->where('status', 'completed')->count();
                    $perc = $total > 0 ? round(($done / $total) * 100) : 0;
                @endphp
                <div class="flex justify-center mb-8">
                    <div class="relative w-40 h-40 flex items-center justify-center">
                        <svg class="w-full h-full transform -rotate-90">
                            <circle class="text-surface-container" cx="80" cy="80" fill="transparent" r="70" stroke="currentColor" stroke-width="12"></circle>
                            <circle class="transition-all duration-1000" style="stroke: {{ $subject->color ?? '#4b53bb' }}" cx="80" cy="80" fill="transparent" r="70" stroke="currentColor" stroke-dasharray="440" stroke-dashoffset="{{ 440 - (440 * $perc / 100) }}" stroke-width="12" stroke-linecap="round"></circle>
                        </svg>
                        <span class="absolute text-3xl font-black" style="color: {{ $subject->color ?? '#4b53bb' }}">{{ $perc }}%</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="clay-inset p-4 rounded-2xl text-center">
                        <p class="text-2xl font-black" style="color: {{ $subject->color }}">{{ $done }}</p>
                        <p class="text-[9px] font-black uppercase text-outline">Selesai</p>
                    </div>
                    <div class="clay-inset p-4 rounded-2xl text-center">
                        <p class="text-2xl font-black text-tertiary">{{ $total - $done }}</p>
                        <p class="text-[9px] font-black uppercase text-outline">Sisa</p>
                    </div>
                </div>
            </div>

            <div class="clay-card p-6 bg-surface-container-low flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center font-black text-white shadow-lg" style="background-color: {{ $subject->color ?? '#4b53bb' }}">
                    {{ $total }}
                </div>
                <div>
                    <p class="text-sm font-black text-on-surface">Total Tugas</p>
                    <p class="text-[10px] text-on-surface-variant italic">Modul Terdeteksi</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8 w-full">
        <div class="clay-card p-8 bg-primary text-white relative overflow-hidden">
            <div class="relative z-10">
                <h4 class="font-bold flex items-center gap-2 mb-2">
                    <span class="material-symbols-outlined">lightbulb</span> Tips Belajar
                </h4>
                <p class="text-sm opacity-90 italic">"Fokus selesaikan tugas satu per satu untuk menjaga ritme progresmu, King!"</p>
            </div>
            <span class="material-symbols-outlined absolute -right-4 -bottom-4 text-9xl opacity-10 rotate-12">auto_awesome</span>
        </div>
    </div>
</main>
<footer class="ml-64 w-[calc(100%-16rem)] py-12 px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-gutter bg-surface-container rounded-t-lg shadow-md mt-10">
    <div class="flex flex-col gap-2">
        <h5 class="font-headline-md text-primary font-black uppercase tracking-tighter">Santara</h5>
        <p class="font-body-md text-label-sm text-on-surface-variant">© 2026 Santara • University of Tata Rencana.</p>
    </div>
</footer>

<script>
    const profileTrigger = document.getElementById('profile-trigger');
    const dropdownMenu = document.getElementById('logout-dropdown');
    profileTrigger?.addEventListener('click', (e) => {
        e.stopPropagation();
        dropdownMenu.classList.toggle('hidden');
        setTimeout(() => { dropdownMenu.classList.toggle('opacity-0'); dropdownMenu.classList.toggle('translate-y-2'); dropdownMenu.classList.toggle('translate-y-0'); }, 10);
    });
    document.addEventListener('click', () => { if (dropdownMenu && !dropdownMenu.classList.contains('hidden')) { dropdownMenu.classList.add('hidden', 'opacity-0', 'translate-y-2'); dropdownMenu.classList.remove('translate-y-0'); } });
    document.querySelectorAll('.clay-card').forEach(card => {
        card.addEventListener('mouseenter', () => { card.style.transform = 'translateY(-4px)'; });
        card.addEventListener('mouseleave', () => { card.style.transform = 'translateY(0)'; });
    });
</script>
</body></html>
