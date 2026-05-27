<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Santara - Data Entry</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&amp;family=Plus+Jakarta+Sans:wght@700;800&amp;display=swap" rel="stylesheet">
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<!-- Tailwind CSS -->
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        /* Claymorphism Elevation Layers */
        .clay-card {
            background: #ffffff;
            border-radius: 2rem;
            box-shadow:
                0 20px 40px -10px rgba(75, 83, 187, 0.1),
                inset 2px 2px 4px rgba(255, 255, 255, 0.8),
                inset -4px -4px 8px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .clay-input {
            background: #f2f3f9;
            box-shadow:
                inset 3px 3px 6px rgba(0, 0, 0, 0.05),
                inset -3px -3px 6px rgba(255, 255, 255, 0.8);
            border: none;
            transition: all 0.3s ease;
        }

        .clay-input:focus {
            outline: none;
            box-shadow:
                inset 2px 2px 4px rgba(75, 83, 187, 0.1),
                0 0 0 4px rgba(75, 83, 187, 0.1);
        }

        .clay-button-primary {
            background: linear-gradient(135deg, #8b93ff 0%, #4b53bb 100%);
            box-shadow:
                0 12px 24px -6px rgba(75, 83, 187, 0.3),
                inset 2px 2px 4px rgba(255, 255, 255, 0.4),
                inset -2px -2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.2s ease;
        }

        .clay-button-primary:hover {
            transform: scale(1.02) translateY(-2px);
            box-shadow: 0 16px 32px -8px rgba(75, 83, 187, 0.4);
        }

        .clay-button-primary:active {
            transform: scale(0.96);
            box-shadow: 0 4px 8px -2px rgba(75, 83, 187, 0.3);
        }

        .color-bubble {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            cursor: pointer;
            transition: transform 0.2s;
            box-shadow:
                4px 4px 8px rgba(0,0,0,0.1),
                inset 2px 2px 4px rgba(255,255,255,0.4);
        }

        .color-bubble:hover {
            transform: scale(1.2);
        }

        .color-bubble.active {
            border: 3px solid #ffffff;
            outline: 3px solid #4b53bb;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #c6c5d5;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen">
<!-- Sidebar Navigation -->
<aside class="fixed left-0 top-0 flex flex-col h-full p-4 z-40 bg-surface-container-low w-64 shadow-lg rounded-r-lg">
<div class="mb-10 px-4">
<h1 class="font-display-lg text-headline-md text-primary tracking-tight">Santara</h1>
<p class="font-label-md text-label-md text-on-surface-variant">Task Manager</p>
</div>
<nav class="flex-grow flex flex-col gap-2">
<a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 hover:bg-surface-container-high rounded-xl transition-all hover:translate-x-2" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
<a class="flex items-center gap-3 bg-primary-container text-on-primary-container rounded-xl px-4 py-3 shadow-[inset_2px_2px_4px_rgba(255,255,255,0.4),inset_-2px_-2px_4px_rgba(0,0,0,0.1)] transition-all scale-[0.98]" href="{{ route('tasks.create') }}">
<span class="material-symbols-outlined">edit_note</span>
<span class="font-label-md text-label-md">Data Entry</span>
</a>
<a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 hover:bg-surface-container-high rounded-xl transition-all hover:translate-x-2" href="#">
<span class="material-symbols-outlined">calendar_month</span>
<span class="font-label-md text-label-md">Calendar</span>
</a>
<a class="flex items-center gap-3 text-on-surface-variant px-4 py-3 hover:bg-surface-container-high rounded-xl transition-all hover:translate-x-2" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="font-label-md text-label-md">Settings</span>
</a>
</nav>
</aside>
<!-- Main Content Area -->
<main class="ml-64 p-margin-desktop min-h-screen">
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
<!-- Page Title & Hero Info -->
<section class="mb-gutter">
<div class="clay-card p-gutter bg-gradient-to-r from-primary-container to-primary flex justify-between items-center overflow-hidden relative">
<!-- Background decorative elements -->
<div class="absolute -right-20 -top-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
<div class="absolute right-40 -bottom-20 w-48 h-48 bg-primary-fixed-dim/20 rounded-full blur-2xl"></div>
<div class="z-10 max-w-xl">
<h2 class="font-display-lg text-headline-lg text-on-primary-container mb-2">Manajemen Data Akademik</h2>
<p class="font-body-md text-on-primary-container/80 mb-6">Kelola mata kuliah dan tugas harian Anda dengan antarmuka yang bersih dan intuitif. Santara membantu Anda tetap terorganisir.</p>
<button class="bg-surface-container-lowest text-primary px-8 py-3 rounded-full font-label-md shadow-md hover:shadow-lg transition-all active:scale-95">
                        Learn more
                    </button>
</div>
<div class="hidden lg:flex gap-4 z-10 items-end">
<img alt="3D Books" class="w-48 h-auto rounded-lg shadow-xl translate-y-8" data-alt="A 3D rendered stack of colorful academic books with soft, matte finishes. The books have rounded corners and vibrant pastel covers in blue, purple, and yellow. One pair of oversized yellow glasses sits on top. The style is claymorphic, with soft shadows and high-key studio lighting against a lavender-tinted background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQEJbS4cEmA3QSjPlrHSgscvErqKNG8b3wxwLl0CjCT-hmCYf8JlO03MDlOvJw3FkotuBqYsOcLlZvZ2o4RsM2jhjgC2R3q5DjFfu5v-9-TmF6lMSc9avwmiRuBRqp6leYgtgPwSM0MBIBgdSBnCw8ORCetBvWeWNpC_beZZx8obX9fz6gxNTuHBe63r8r5arsfE05vaUEVy9e_SCMQK1-m99zCPFH_Lu020yS07JaHDYAw5RF7Gk5gX3TUbFpu1vyEGlnrERP_ulw">
<img alt="3D Library" class="w-32 h-auto rounded-lg shadow-xl" data-alt="A close-up 3D render of library shelves filled with soft-touch pastel colored books. The shelves are made of light wood with rounded edges. The lighting is soft and cinematic, casting diffuse shadows that highlight the tactile 'clay' texture of the scene. The color palette is primary blues and secondary greens." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD7nbSwpLUnJ6zKLW1ncrUGwlBffyY9LNY7hmj0MAz3Coe-O6ZSHC0U12M3Zjt-nynBwMdnJFLild8Bb7bBJMOgxhs-PA7KGcIlYddZQhwwHeiRL5cP9b88jXeOLyPv3i3Plj0jOQesPxIDuSREi9U2GSL4VXSbDhcjcAGGzXQFpBvOvaLKgEBmlse7cPXjvUnuvpGcZtd6rpaUDpp0-KzSUnx7FNcvH5DCzaf1JmIUM58wrszz6o9kW-yuJsy6kA5oY19UBwcojeVH">
</div>
</div>
</section>
<!-- Form Sections Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- Tambah Mata Kuliah Section -->
<section class="lg:col-span-5">
<div class="clay-card p-gutter h-full">
<div class="flex items-center gap-3 mb-6">
<div class="bg-primary-container p-2 rounded-xl text-on-primary-container shadow-sm">
<span class="material-symbols-outlined">library_books</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface">Tambah Mata Kuliah</h3>
</div>
<form action="{{ route('subjects.store') }}" method="POST" class="space-y-6">
@csrf
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface-variant block ml-2">Nama Mata Kuliah</label>
<input name="name" required class="w-full clay-input rounded-2xl py-4 px-4 font-body-md text-on-surface" placeholder="Contoh: Desain Antarmuka" type="text">
</div>
<div class="space-y-2">
<label class="font-label-md text-label-md text-on-surface-variant block ml-2">Pilih Tema Warna</label>
<div class="flex flex-wrap gap-4 p-4 clay-input rounded-2xl">
<input type="hidden" name="color" id="selected_color" value="#8b93ff">
<div class="color-bubble bg-[#8b93ff] active" data-color="#8b93ff"></div>
<div class="color-bubble bg-[#82f6bf]" data-color="#82f6bf"></div>
<div class="color-bubble bg-[#ffdbcb]" data-color="#ffdbcb"></div>
<div class="color-bubble bg-[#bec2ff]" data-color="#bec2ff"></div>
<div class="color-bubble bg-[#ffb692]" data-color="#ffb692"></div>
<div class="color-bubble bg-[#67dca7]" data-color="#67dca7"></div>
</div>
</div>
<div class="pt-4">
<button class="w-full clay-button-primary py-4 rounded-2xl text-on-primary font-display-lg text-body-lg" type="submit">
                                Simpan Mata Kuliah
                            </button>
</div>
</form>
<!-- Preview Card -->
<div class="mt-8 p-4 bg-surface-container-low rounded-xl border border-dashed border-outline-variant flex items-center gap-4">
<div class="w-12 h-12 bg-primary-container rounded-lg flex items-center justify-center text-on-primary-container">
<span class="material-symbols-outlined">auto_stories</span>
</div>
<div>
<p class="font-label-sm text-label-sm text-on-surface-variant">Preview</p>
<p class="font-body-md text-body-md font-bold text-on-surface">Mata Kuliah Baru</p>
</div>
</div>
</div>
</section>
<!-- Input Detail Tugas Section -->
<section class="lg:col-span-7">
<div class="clay-card p-gutter h-full">
<div class="flex items-center gap-3 mb-6">
<div class="bg-secondary-container p-2 rounded-xl text-on-secondary-container shadow-sm">
<span class="material-symbols-outlined">assignment_add</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface">Input Detail Tugas</h3>
</div>
<form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @csrf

    <div class="space-y-2 md:col-span-1">
        <label class="font-label-md text-label-md text-on-surface-variant block ml-2 uppercase text-[10px] font-black tracking-widest">Pilih Mata Kuliah</label>
        <select name="subject_id" required class="w-full clay-input rounded-2xl py-4 px-4 font-body-md text-on-surface appearance-none bg-no-repeat bg-[right_1rem_center] cursor-pointer">
            @foreach($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="space-y-2 md:col-span-1">
        <label class="font-label-md text-label-md text-on-surface-variant block ml-2 uppercase text-[10px] font-black tracking-widest">Deadline</label>
        <input name="deadline" required class="w-full clay-input rounded-2xl py-4 px-4 font-body-md text-on-surface cursor-pointer" type="date">
    </div>

    <div class="space-y-2 md:col-span-2">
        <label class="font-label-md text-label-md text-on-surface-variant block ml-2 uppercase text-[10px] font-black tracking-widest">Nama Tugas</label>
        <input name="title" required class="w-full clay-input rounded-2xl py-4 px-4 font-body-md text-on-surface" placeholder="Contoh: Membuat Wireframe" type="text">
    </div>

    <div class="space-y-2 md:col-span-2">
        <label class="font-label-md text-label-md text-on-surface-variant block ml-2 uppercase text-[10px] font-black tracking-widest">Deskripsi Tugas</label>
        <textarea name="description" class="w-full clay-input rounded-2xl py-4 px-4 font-body-md text-on-surface resize-none" placeholder="Jelaskan detail tugas di sini..." rows="4"></textarea>
    </div>

    <div class="space-y-2 md:col-span-2">
        <label class="font-label-md text-label-md text-on-surface-variant block ml-2 uppercase text-[10px] font-black tracking-widest">Lampiran Instruksi (PDF/Word)</label>
        <div class="relative">
            <input type="file"
            name="file_instruction"
            accept=".pdf,.doc,.docx"
                   class="w-full clay-inset bg-surface-container-lowest rounded-2xl py-3 px-4 text-xs file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-[10px] file:font-black file:uppercase file:bg-primary/10 file:text-primary hover:file:bg-primary/20 cursor-pointer transition-all">
        </div>
        <p class="text-[9px] text-outline italic ml-2">*Opsional: Upload file instruksi dari dosen jika ada.</p>
    </div>

    <div class="md:col-span-2 pt-4">
        <button class="w-full clay-button bg-primary py-4 rounded-2xl text-on-primary font-black uppercase tracking-widest text-sm flex items-center justify-center gap-3 transition-all" type="submit">
            <span class="material-symbols-outlined">save</span>
            Simpan Detail Tugas
        </button>
    </div>
</form>
</div>
</section>
</div>

<!-- Footer Shell -->
<footer class="mt-margin-desktop w-full py-12 flex flex-col md:flex-row justify-between items-center gap-gutter bg-surface-container shadow-[0_-10px_30px_rgba(0,0,0,0.03)] rounded-t-lg">
<div class="flex flex-col items-center md:items-start">
<span class="font-headline-md text-primary mb-2">Santara</span>
<p class="font-body-md text-body-md text-on-surface-variant">© 2024 Santara. State University of Surabaya.</p>
</div>
<div class="flex gap-6">
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Terms of Service</a>
<a class="font-label-sm text-label-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Contact Support</a>
</div>
</footer>
</main>
<script>
        // Color bubble selection logic
        const bubbles = document.querySelectorAll('.color-bubble');
        const colorInput = document.getElementById('selected_color');
        bubbles.forEach(bubble => {
            bubble.addEventListener('click', () => {
                bubbles.forEach(b => b.classList.remove('active'));
                bubble.classList.add('active');
                if(colorInput) {
                    colorInput.value = bubble.getAttribute('data-color');
                }
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
