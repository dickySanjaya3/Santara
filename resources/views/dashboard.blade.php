<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Santara | Student Dashboard</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@700;800&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-fixed-dim": "#bec2ff",
                        "on-tertiary-fixed": "#341100",
                        "surface-variant": "#e1e2e8",
                        "on-secondary-container": "#00714d",
                        "tertiary-fixed-dim": "#ffb692",
                        "outline": "#767684",
                        "on-primary": "#ffffff",
                        "on-secondary-fixed-variant": "#005236",
                        "surface-tint": "#4b53bb",
                        "surface-container-lowest": "#ffffff",
                        "surface-bright": "#f8f9ff",
                        "primary-fixed": "#e0e0ff",
                        "on-background": "#191c20",
                        "secondary-fixed-dim": "#67dca7",
                        "on-primary-fixed-variant": "#3239a2",
                        "secondary": "#006c49",
                        "surface": "#f8f9ff",
                        "surface-container": "#eceef3",
                        "on-tertiary": "#ffffff",
                        "on-surface-variant": "#464652",
                        "primary-container": "#8b93ff",
                        "background": "#f8f9ff",
                        "on-secondary-fixed": "#002114",
                        "error": "#ba1a1a",
                        "on-error-container": "#93000a",
                        "tertiary-fixed": "#ffdbcb",
                        "on-surface": "#191c20",
                        "on-tertiary-fixed-variant": "#6d391d",
                        "primary": "#4b53bb",
                        "outline-variant": "#c6c5d5",
                        "surface-dim": "#d8dae0",
                        "on-secondary": "#ffffff",
                        "surface-container-high": "#e7e8ee",
                        "secondary-fixed": "#85f8c2",
                        "inverse-surface": "#2e3135",
                        "on-error": "#ffffff",
                        "error-container": "#ffdad6",
                        "inverse-primary": "#bec2ff",
                        "on-primary-fixed": "#00016d",
                        "surface-container-low": "#f2f3f9",
                        "surface-container-highest": "#e1e2e8",
                        "on-tertiary-container": "#56270c",
                        "secondary-container": "#82f6bf",
                        "tertiary": "#895032",
                        "inverse-on-surface": "#eff0f6",
                        "on-primary-container": "#1d238f",
                        "tertiary-container": "#d28c6a"
                    },
                    "borderRadius": {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "unit": "8px",
                        "margin-desktop": "40px",
                        "margin-mobile": "16px",
                        "gutter": "24px",
                        "container-max": "1280px"
                    },
                    "fontFamily": {
                        "body-md": ["Nunito Sans"],
                        "body-lg": ["Nunito Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "label-sm": ["Nunito Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "display-lg": ["Plus Jakarta Sans"],
                        "label-md": ["Nunito Sans"]
                    },
                    "fontSize": {
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-lg-mobile": ["28px", {"lineHeight": "1.3", "fontWeight": "700"}],
                        "headline-md": ["24px", {"lineHeight": "1.4", "fontWeight": "700"}],
                        "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}],
                        "headline-lg": ["32px", {"lineHeight": "1.3", "fontWeight": "700"}],
                        "display-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                        "label-md": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.01em", "fontWeight": "700"}]
                    }
                },
            },
        }
    </script>
<style>
        .clay-card {
            box-shadow: 0 20px 40px -15px rgba(75, 83, 187, 0.1),
                        inset 4px 4px 12px rgba(255, 255, 255, 0.6),
                        inset -4px -4px 12px rgba(0, 0, 0, 0.05);
        }
        .clay-button {
            box-shadow: 0 10px 20px -5px rgba(75, 83, 187, 0.3),
                        inset 2px 2px 4px rgba(255, 255, 255, 0.4),
                        inset -2px -2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .clay-button:active {
            transform: scale(0.95);
            box-shadow: 0 5px 10px -2px rgba(75, 83, 187, 0.3),
                        inset 4px 4px 8px rgba(0, 0, 0, 0.1),
                        inset -4px -4px 8px rgba(255, 255, 255, 0.2);
        }
        .clay-inset {
            box-shadow: inset 4px 4px 8px rgba(0, 0, 0, 0.05),
                        inset -4px -4px 8px rgba(255, 255, 255, 0.8);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #e1e2e8; border-radius: 10px; }
    </style>
</head>
<body class="bg-background font-body-md text-on-background min-h-screen overflow-x-hidden">
<!-- SideNavBar Shell -->
<aside class="fixed left-0 top-0 flex flex-col h-full p-4 z-40 bg-surface-container-low w-64 shadow-lg rounded-r-lg">
<div class="mb-10 px-4">
<h1 class="font-display-lg text-headline-md text-primary tracking-tight">Santara</h1>
<p class="font-body-md text-on-surface-variant text-label-md">Task Manager</p>
</div>
<nav class="flex flex-col gap-2 flex-grow">
<!-- Active Tab: Dashboard -->
<a class="flex items-center gap-3 bg-primary-container text-on-primary-container rounded-xl px-4 py-3 shadow-[inset_2px_2px_4px_rgba(255,255,255,0.4),inset_-2px_-2px_4px_rgba(0,0,0,0.1)] hover:translate-x-2 transition-transform duration-300" href="{{ route('dashboard') }}">
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
<!-- Main Content Canvas -->
<main class="ml-64 p-margin-desktop min-h-screen">
<!-- Header / Greeting Row -->
<!-- Header / Top Bar -->
<header class="flex justify-between items-center mb-10">
<div class="relative w-96">
<input class="w-full clay-input rounded-full py-3 px-12 font-body-md text-on-surface" placeholder="Search..." type="text">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">search</span>
</div>
<div class="flex items-center gap-6">
<div class="flex items-center bg-error-container text-on-error-container px-3 py-1 rounded-full gap-2 animate-pulse">
<span class="w-2 h-2 bg-error rounded-full"></span>
<span class="font-label-sm text-label-sm">Live</span>
</div>
                <button class="text-outline hover:text-primary transition-colors">
                    <span class="material-symbols-outlined">dark_mode</span>
                </button>
                <button class="text-outline hover:text-primary transition-colors relative">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute top-0 right-0 w-2 h-2 bg-primary rounded-full"></span>
                </button>
    <div class="relative" id="profile-container">
        <div class="flex items-center gap-4 bg-surface-container-high px-2 py-2 pr-6 rounded-full clay-card cursor-pointer hover:bg-white transition-all" id="profile-trigger">
            <img alt="Profile" class="w-10 h-10 rounded-full object-cover border-2 border-primary-container shadow-sm" src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=4b53bb&color=fff"/>
            <div>
                <p class="font-label-md text-label-md text-on-surface leading-tight">{{ Auth::user()->name }}</p>
                <p class="text-[10px] text-on-surface-variant uppercase tracking-wider font-bold">Unesa Student</p>
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
</div>
</header>
<!-- Hero Section -->
<section class="relative h-64 rounded-lg overflow-hidden mb-12 clay-card bg-primary-container flex items-center px-12 group">
<div class="absolute inset-0 bg-gradient-to-br from-primary via-transparent to-primary/20 mix-blend-overlay"></div>
<div class="relative z-10 max-w-lg">
<h2 class="font-display-lg text-display-lg text-on-primary-container mb-2">Hi, {{ explode(' ', Auth::user()->name)[0] }}!</h2>
<p class="text-body-lg font-body-lg text-white/80 mb-6">Kamu punya <strong>{{ $subjects->sum('tasks_count') }}</strong> tugas aktif yang perlu ditata hari ini.</p>
<a href="{{ route('tasks.create') }}" class="bg-on-primary-container text-white px-8 py-3 rounded-full font-label-md clay-button hover:scale-105 transition-transform inline-block text-center">
                    Tambah Tugas Baru
</a>
</div>
<!-- Decorative 3D Illustration Mockup -->
<div class="absolute right-12 top-1/2 -translate-y-1/2 flex gap-4 pointer-events-none">
<div class="w-48 h-56 bg-surface-container-lowest/20 backdrop-blur-md rounded-xl clay-card border border-white/30 transform rotate-6 translate-y-4 group-hover:rotate-0 group-hover:translate-y-0 transition-transform duration-700">
<img class="w-full h-full object-cover rounded-xl" data-alt="A soft, claymorphic 3D rendering of a stack of books with vibrant pastel covers, floating in a clean studio environment. The lighting is soft and high-key, casting diffuse shadows on a light purple surface. The aesthetic is clean, premium, and welcoming, matching a modern educational platform's visual identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDqEBQI_Kcem8ASyNjHMN6FmGczrashJROesBMDvWKTKw9ALZ0U4sX0jsBdq2rUDAoKmv-f4li18p7zOFgxq8VfbNC8vKvVCkIk0mvctAiNx7PsfFOQVGEm1ZhfpuZxOgwltlI8Ejgi04CCffrzxU6RAuwigbwSRzotCZb3TOENU2PYygnjp8KzYGQAxE9uhUXbuq6KMgZIeybLnsBdsn1prRPJJqkC9KUyltXKySvlXO2tckPsYC5N9R5Uom1XuWSrBLv4s_7vxs9b"/>
</div>
<div class="w-40 h-48 bg-surface-container-lowest/20 backdrop-blur-md rounded-xl clay-card border border-white/30 transform -rotate-12 -translate-y-4 group-hover:rotate-0 group-hover:translate-y-0 transition-transform duration-500">
<img class="w-full h-full object-cover rounded-xl" data-alt="Close up of a single 3D rendered open book with soft clay edges and a soft yellow glow emanating from the pages. The setting is minimalist with a soft pink gradient background. The style is 3D minimalism with exaggerated soft corners and high-end diffuse lighting to evoke a friendly, educational atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFOAI2Mtg8ZVMoFPbhc2wmWu8C101kVvodUqh12t-PNb7jkDD27r_d_aENUEVJNLQVfM14UpVuXQ3A_h3H1lTA4Mobwr-RYLkVT37iBRyRYxSVPFngVMBR4BKkr-0cgQxuMilkLkOQvlhtGyKgR_GzxcEmsPFcfAb1YyJEv9KWuOMp_T-D_RHTYHjrccPCUjw1bYokxZaq7dyafCDkBObP6onKaCKVko_QCHxhBORkMKoxNB7qm3rB9RbP_rCBUJHo-8ZvegnodcwR"/>
</div>
</div>
</section>
<div class="grid grid-cols-12 gap-gutter">
<!-- Main Content Area (Left 8 cols) -->
<div class="col-span-12 lg:col-span-8 space-y-12">
<!-- Courses Section -->
<section>
<div class="flex justify-between items-end mb-6">
<h3 class="font-headline-lg text-headline-lg text-on-surface">Mata Kuliah Anda</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
    @foreach($subjects as $subject)
        @php
            // MAPPING OTOMATIS: Warna dari database dicocokkan dengan URL Gambar 3D dari image_69335e.png
            $imageMap = [
                '#8b93ff' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDsM2IZVnU9zweeDeIRxz3QxcOVhXVfrm6vkut7Oc02nGEj7lJpp4vGdTK11h8uD02EtwF7IvjKf1inwVMdrf7tFVypPy-4m1yaYIfmWhVcLPhWydGClMUHB9tlMq2AHmWAOpb4dMvCk6ggYcWRZkzJE2Pt-Ewcu-ReGP-0X8rNRynwXC1F5yC9w3CgjBNCvy2A6K8bguzjvb1h3Tf3TSf1QaS1H5om-nlm7QD1f4b2_0AY9nghziHb-aCjoRpGwst0sGD8RTT-fUYR', // Teori Otomata (Violet)
                '#82f6bf' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAR1_rtzf_yNsCsvF3rFQ-w28EMVx-Jz--SB_nzl-Z_87cAoxKnnKgihIIkmBW2GzHwyaRtcXkPxcko_jHP1nQ0J-cDxl3dbp_tiyjSnyhS5zBwIiRBgD4o-U__QzUMsz8pZkyJ_78dRyBwpD87Q92htm3uiZG6OXOuj6GNRrdD0bWQPECyXhvbVmRh4yLOFWf_TYN1JUegNpkfSpAqxz3gJVm8mFE-4kCRuXGaztD0c7s-kmkGzTKJvVCS8yLRxJu_0vYZYTRsEKC7', // Pemrograman Web (Mint)
                '#ffdbcb' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCtH5KL93efFNaGIPI6IwNuQhd_5Qgl3vii5GoXsDUKyZJoNvQ-xoUcFvZESYF-nM8w4UOQP4jexX8yP4IhPYXzUq3IRWN_VyXuL1uaehGnkVRd6BnIPwyotnWQmPuTfDbIISz8bsy74NEqQy0Gg3oOxdjHJQz3FZ1cjZ2npdfuGkGuEdwisRCR2eiG8nElpsUsmrovUXYnS0WyN5rdXiu_3o4G6gX-put8tNNN4yfP1feLMgSmqR82F0tDAsa2Vcb6sAmAxCmujdyq', // Matematika Diskrit (Peach)
                '#bec2ff' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA5XFpRhEft1LVKmOReH5V8SEVfA578h7Zjb8ctgvWa_gYapuqlcuwOFlDtASgeu-ovOfoe6CZuIUlha2MP3InFHRIkLySBkeFW2jqTp34y0M8ANi695pq_VrHo4VTyIIPRSXpdGLtJ7LQPDax9Gbd05Bk3-Wyy2WY7nKEU848Y1XFd8fgBkhUZ17kpqKeXQgq4veavrPBXvOKWhWTs2B8eOWAvVqABzr0sq7u7RM5aEbRuH_tbKrTvpKU2uXNK14ta0IEVwZ9BZFcr', // UI/UX Design (Lavender)
                '#ffb692' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCtH5KL93efFNaGIPI6IwNuQhd_5Qgl3vii5GoXsDUKyZJoNvQ-xoUcFvZESYF-nM8w4UOQP4jexX8yP4IhPYXzUq3IRWN_VyXuL1uaehGnkVRd6BnIPwyotnWQmPuTfDbIISz8bsy74NEqQy0Gg3oOxdjHJQz3FZ1cjZ2npdfuGkGuEdwisRCR2eiG8nElpsUsmrovUXYnS0WyN5rdXiu_3o4G6gX-put8tNNN4yfP1feLMgSmqR82F0tDAsa2Vcb6sAmAxCmujdyq', // Alternatif Orange
                '#67dca7' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAR1_rtzf_yNsCsvF3rFQ-w28EMVx-Jz--SB_nzl-Z_87cAoxKnnKgihIIkmBW2GzHwyaRtcXkPxcko_jHP1nQ0J-cDxl3dbp_tiyjSnyhS5zBwIiRBgD4o-U__QzUMsz8pZkyJ_78dRyBwpD87Q92htm3uiZG6OXOuj6GNRrdD0bWQPECyXhvbVmRh4yLOFWf_TYN1JUegNpkfSpAqxz3gJVm8mFE-4kCRuXGaztD0c7s-kmkGzTKJvVCS8yLRxJu_0vYZYTRsEKC7'  // Alternatif Green
            ];

            // Mengambil gambar sesuai warna, jika warna tidak terdaftar pakai default icon gambar pertama
            $illustrationUrl = $imageMap[$subject->color] ?? $imageMap['#8b93ff'];
        @endphp

        <a href="{{ route('subjects.show', $subject->id) }}" class="bg-surface-container-lowest p-4 rounded-lg clay-card group hover:-translate-y-2 transition-transform duration-300 block cursor-pointer">
            <!-- Lingkaran Luar dengan Efek Background Transparan Senada -->
            <div class="aspect-square rounded-full mb-4 overflow-hidden flex items-center justify-center p-4 relative transition-all duration-500 group-hover:scale-105" style="background-color: {{ $subject->color }}25;">
                <!-- Image Render Otomatis Sesuai Warna Pilihan -->
                <img class="w-full h-full object-cover rounded-full" src="{{ $illustrationUrl }}" alt="{{ $subject->name }}">
            </div>
            <h4 class="font-label-md text-on-surface mb-1 uppercase tracking-tight">{{ $subject->name }}</h4>
            <p class="text-label-sm text-on-surface-variant">{{ $subject->tasks_count }} Tugas Aktif</p>
        </a>
    @endforeach
</div>
</section>
<!-- Assignments List -->
<section>
<div class="flex justify-between items-end mb-6">
<h3 class="font-headline-lg text-headline-lg text-on-surface">Ongoing Assignments</h3>
</div>
<div class="space-y-4">
@php
    $allTasks = collect();
    foreach($subjects as $subject) {
        $allTasks = $allTasks->concat($subject->tasks->where('status', '!=', 'completed'));
    }
@endphp

@forelse($allTasks->sortBy('deadline')->take(5) as $task)
<div class="bg-surface-container-lowest p-6 rounded-lg clay-card flex items-center gap-6 group hover:bg-surface-bright transition-colors cursor-pointer">
<div class="w-16 h-16 rounded-xl flex items-center justify-center relative overflow-hidden shrink-0">
    <div class="absolute inset-0 opacity-15" style="background-color: {{ $task->subject->color ?? '#cbd5e1' }};"></div>
    <span class="material-symbols-outlined text-3xl relative z-10" style="color: {{ $task->subject->color ?? '#64748b' }}">task</span>
</div>
<div class="flex-grow">
<h4 class="font-headline-md text-headline-md text-on-surface mb-1">{{ $task->title }}</h4>
<p class="text-body-md text-on-surface-variant">Due: {{ \Carbon\Carbon::parse($task->deadline)->diffForHumans() }} • {{ $task->subject->name ?? 'Mata Kuliah' }}</p>
</div>
<div class="flex flex-col items-end gap-2 shrink-0">
<span class="px-4 py-1 rounded-full text-white font-label-sm clay-button uppercase text-[10px] tracking-widest" style="background-color: {{ $task->subject->color ?? '#4b53bb' }}">{{ $task->status }}</span>
</div>
</div>
@empty
<div class="p-12 text-center clay-inset rounded-xl text-gray-400 font-bold italic">Semua tugas sudah tertata rapi! 🥳</div>
@endforelse
</div>
</section>
</div>
<!-- Sidebar Widgets (Right 4 cols) -->
<div class="col-span-12 lg:col-span-4 space-y-gutter">
<!-- Calendar Widget -->
<div class="bg-surface-container-lowest p-8 rounded-lg clay-card">
    <div class="flex justify-between items-center mb-6">
        <h4 class="font-headline-md text-on-surface">{{ now()->format('F Y') }}</h4>
        <div class="flex gap-2">
            <button class="material-symbols-outlined text-outline hover:text-primary transition-colors">chevron_left</button>
            <button class="material-symbols-outlined text-outline hover:text-primary transition-colors">chevron_right</button>
        </div>
    </div>

    <div class="grid grid-cols-7 gap-2 text-center mb-4">
        <span class="text-[10px] text-outline font-black uppercase">S</span>
        <span class="text-[10px] text-outline font-black uppercase">M</span>
        <span class="text-[10px] text-outline font-black uppercase">T</span>
        <span class="text-[10px] text-outline font-black uppercase">W</span>
        <span class="text-[10px] text-outline font-black uppercase">T</span>
        <span class="text-[10px] text-outline font-black uppercase">F</span>
        <span class="text-[10px] text-outline font-black uppercase">S</span>
    </div>

    <div class="grid grid-cols-7 gap-2">
        @php
            $startOfMonth = now()->startOfMonth();
            $endOfMonth = now()->endOfMonth();
            $daysInMonth = now()->daysInMonth;
            $startDayOfWeek = $startOfMonth->dayOfWeek; // 0 (Sun) to 6 (Sat)

            // Mengambil tanggal dari akhir bulan lalu untuk mengisi slot kosong di awal
            $prevMonthDays = now()->subMonth()->daysInMonth;
        @endphp

        {{-- Slot Hari Bulan Sebelumnya (Warna Pudar) --}}
        @for($i = $startDayOfWeek; $i > 0; $i--)
            <div class="p-2 text-center text-label-md text-outline/30 font-medium">
                {{ $prevMonthDays - $i + 1 }}
            </div>
        @endfor

        {{-- Slot Hari Bulan Sekarang --}}
        @for($day = 1; $day <= $daysInMonth; $day++)
            @php
                $isToday = ($day == now()->day);
                // Contoh logika penanda deadline (titik hijau)
                $hasDeadline = ($day == now()->addDays(2)->day);
            @endphp

            <div class="relative p-2 text-center text-label-md font-bold transition-all cursor-pointer rounded-full
                {{ $isToday ? 'bg-primary text-white shadow-lg shadow-primary/30' : 'text-on-surface hover:bg-surface-container-high' }}">
                {{ $day }}

                @if($hasDeadline && !$isToday)
                    <div class="absolute bottom-1 left-1/2 -translate-x-1/2 w-1 h-1 bg-secondary rounded-full"></div>
                @endif
            </div>
        @endfor
    </div>

    <div class="mt-8 space-y-4">
        @php
            $upcomingTasks = $allTasks->sortBy('deadline')->take(2);
        @endphp

        @forelse($upcomingTasks as $task)
        <div class="flex items-start gap-4 p-4 rounded-xl clay-inset bg-surface-container-low border border-white/50">
            <div class="w-10 h-10 rounded-lg flex items-center justify-center shrink-0"
                 style="background-color: {{ $task->subject->color ?? '#8b93ff' }}20; color: {{ $task->subject->color ?? '#4b53bb' }}">
                <span class="material-symbols-outlined text-sm">schedule</span>
            </div>
            <div>
                <p class="text-xs font-bold text-on-surface line-clamp-1">{{ $task->title }}</p>
                <p class="text-[9px] text-on-surface-variant uppercase font-black tracking-wider">
                    {{ \Carbon\Carbon::parse($task->deadline)->format('D • H:i A') }}
                </p>
            </div>
        </div>
        @empty
        <p class="text-[10px] text-center text-outline italic">No schedule for today</p>
        @endforelse
    </div>
</div>
<!-- Best Sales/Progress Section -->
<div class="bg-surface-container-lowest p-8 rounded-lg clay-card">
<div class="flex justify-between items-center mb-6">
<h4 class="font-headline-md text-on-surface">Achievements</h4>
<span class="material-symbols-outlined text-primary cursor-pointer">more_horiz</span>
</div>
<div class="space-y-6">
<div class="flex items-center gap-4">
<div class="relative w-14 h-14 bg-emerald-50 rounded-full flex items-center justify-center font-black text-emerald-500 border-4 border-emerald-500/20 shadow-sm">
{{ $subjects->count() }}
</div>
<div>
<p class="font-label-md text-on-surface">Total Mata Kuliah</p>
<p class="text-label-sm text-on-surface-variant">Terdaftar Semester Ini</p>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Footer Shell -->
<footer class="ml-64 w-[calc(100%-16rem)] py-12 px-margin-desktop flex flex-col md:flex-row justify-between items-center gap-gutter bg-surface-container rounded-t-lg shadow-md">
<div class="flex flex-col gap-2">
<h5 class="font-headline-md text-primary">Santara</h5>
<p class="font-body-md text-label-sm text-on-surface-variant">© 2026 Santara. State University of Surabaya.</p>
</div>
<div class="flex gap-8">
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Terms of Service</a>
</div>
</footer>
<script>
        document.querySelectorAll('.clay-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-4px)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
            });
        });
    </script>
    <script>
    const profileTrigger = document.getElementById('profile-trigger');
    const dropdownMenu = document.getElementById('logout-dropdown');

    profileTrigger.addEventListener('click', (e) => {
        e.stopPropagation();
        dropdownMenu.classList.toggle('hidden');
        // Animasi halus
        setTimeout(() => {
            dropdownMenu.classList.toggle('opacity-0');
            dropdownMenu.classList.toggle('translate-y-2');
            dropdownMenu.classList.toggle('translate-y-0');
        }, 10);
    });

    // Klik di luar untuk menutup dropdown
    document.addEventListener('click', () => {
        if (!dropdownMenu.classList.contains('hidden')) {
            dropdownMenu.classList.add('hidden', 'opacity-0', 'translate-y-2');
            dropdownMenu.classList.remove('translate-y-0');
        }
    });
</script>
</body></html>
