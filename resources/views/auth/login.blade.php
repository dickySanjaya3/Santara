<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Masuk ke Santara</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    <!-- Design System Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary-fixed": "#00016d", "on-primary": "#ffffff", "primary": "#4b53bb",
                        "on-error-container": "#93000a", "background": "#f8f9ff", "on-secondary-fixed": "#002114",
                        "on-secondary-container": "#00714d", "on-primary-container": "#1d238f", "on-tertiary-fixed": "#341100",
                        "primary-container": "#8b93ff", "surface-container-lowest": "#ffffff", "tertiary": "#895032",
                        "surface-container-low": "#f2f3f9", "on-tertiary-fixed-variant": "#6d391d", "on-primary-fixed-variant": "#3239a2",
                        "primary-fixed-dim": "#bec2ff", "inverse-on-surface": "#eff0f6", "inverse-surface": "#2e3135",
                        "inverse-primary": "#bec2ff", "error": "#ba1a1a", "tertiary-fixed": "#ffdbcb",
                        "outline-variant": "#c6c5d5", "error-container": "#ffdad6", "surface-variant": "#e1e2e8",
                        "secondary-fixed-dim": "#67dca7", "surface-container": "#eceef3", "on-error": "#ffffff",
                        "surface": "#f8f9ff", "surface-dim": "#d8dae0", "on-surface": "#191c20",
                        "outline": "#767684", "on-secondary-fixed-variant": "#005236", "secondary-fixed": "#85f8c2",
                        "secondary": "#006c49", "on-background": "#191c20", "surface-container-high": "#e7e8ee",
                        "on-tertiary": "#ffffff", "surface-bright": "#f8f9ff", "secondary-container": "#82f6bf",
                        "tertiary-container": "#d28c6a", "surface-container-highest": "#e1e2e8", "surface-tint": "#4b53bb",
                        "on-tertiary-container": "#56270c", "on-surface-variant": "#464652", "on-secondary": "#ffffff"
                    },
                    "borderRadius": { "DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px" },
                    "spacing": { "gutter": "24px", "margin-desktop": "40px", "margin-mobile": "16px", "container-max": "1280px" },
                    "fontFamily": {
                        "headline-md": ["Plus Jakarta Sans"], "label-md": ["Nunito Sans"], "body-md": ["Nunito Sans"],
                        "body-lg": ["Nunito Sans"], "headline-lg-mobile": ["Plus Jakarta Sans"], "headline-lg": ["Plus Jakarta Sans"],
                        "display-lg": ["Plus Jakarta Sans"], "label-sm": ["Nunito Sans"]
                    },
                    "fontSize": {
                        "headline-md": ["24px", {"lineHeight": "1.4", "fontWeight": "700"}],
                        "label-md": ["14px", {"lineHeight": "1.2", "letterSpacing": "0.01em", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-lg-mobile": ["28px", {"lineHeight": "1.3", "fontWeight": "700"}],
                        "headline-lg": ["32px", {"lineHeight": "1.3", "fontWeight": "700"}],
                        "display-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "800"}],
                        "label-sm": ["12px", {"lineHeight": "1.2", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .clay-card {
            background: #ffffff;
            box-shadow: 0 20px 40px -10px rgba(75, 83, 187, 0.1), inset 2px 2px 4px rgba(255, 255, 255, 0.8), inset -2px -2px 4px rgba(75, 83, 187, 0.05);
            border-radius: 2rem;
        }
        .clay-button {
            background: linear-gradient(180deg, #8b93ff 0%, #4b53bb 100%);
            box-shadow: 0 10px 20px -5px rgba(75, 83, 187, 0.3), inset 0 2px 4px rgba(255, 255, 255, 0.4);
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .clay-button:hover {
            transform: translateY(-2px) scale(1.02);
            box-shadow: 0 15px 30px -10px rgba(75, 83, 187, 0.4), inset 0 2px 4px rgba(255, 255, 255, 0.4);
        }
        .clay-button:active {
            transform: scale(0.95);
            box-shadow: 0 5px 10px -2px rgba(75, 83, 187, 0.3), inset 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .clay-input {
            background: #f2f3f9;
            box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.05), inset -2px -2px 5px rgba(255, 255, 255, 0.8);
            border: 2px solid transparent;
            transition: all 0.2s ease;
        }
        .clay-input:focus { outline: none; border-color: #8b93ff; background: #ffffff; }
        .floating-element { animation: float 6s ease-in-out infinite; }
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        .bg-mesh {
            background-color: #f8f9ff;
            background-image:
                radial-gradient(at 0% 0%, hsla(236, 45%, 85%, 1) 0px, transparent 50%),
                radial-gradient(at 100% 100%, hsla(158, 64%, 90%, 1) 0px, transparent 50%),
                radial-gradient(at 100% 0%, hsla(342, 64%, 92%, 1) 0px, transparent 50%),
                radial-gradient(at 0% 100%, hsla(205, 64%, 92%, 1) 0px, transparent 50%);
        }
    </style>
</head>
<body class="bg-mesh min-h-screen flex items-center justify-center p-4 font-body-md text-on-background antialiased">

<!-- Main Container -->
<main class="w-full max-w-5xl grid lg:grid-cols-2 gap-8 items-center bg-white/40 backdrop-blur-xl p-6 lg:p-12 rounded-xl shadow-2xl overflow-hidden relative border border-white/60">
    <div class="absolute -top-12 -left-12 w-32 h-32 bg-secondary-container/40 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-12 -right-12 w-48 h-48 bg-primary-container/30 rounded-full blur-3xl"></div>

    <!-- Left Section: Branding & Illustration -->
    <section class="hidden lg:flex flex-col justify-center items-center text-center p-8 space-y-8">
        <div class="space-y-4">
            <div class="flex items-center justify-center gap-3">
                <span class="material-symbols-outlined text-primary text-5xl" style="font-variation-settings: 'FILL' 1;">book_3</span>
                <h1 class="font-display-lg text-primary tracking-tight">Santara</h1>
            </div>
            <p class="font-body-lg text-on-surface-variant max-w-xs mx-auto">
                Sandaran Tata Rencana: Kelola jadwal dan aktivitas belajarmu dengan lebih ceria.
            </p>
        </div>
        <div class="relative w-full aspect-square max-w-sm floating-element">
            <img alt="Santara Learning Concept" class="w-full h-full object-contain rounded-xl drop-shadow-2xl" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmgbEn6eu5s7cAOyOGkF-rHwx7iHL1dwJyKvaMkdmh4qj-3ghJKVzNiFijUZ9YJuUMaSvN9mAfwerPAR247UA2eXxDtbgjbvyqB-TAo0pX4gBnvYQYDRKppuyz7jY_rXLPFbgYa1EVe8ZJEuXTRv69QzD6Fs6xHyextLRbrbV6K41kBag82SFCqT710n_hjv0QSj9ij6ykKD2PyOsHTiY0SqhL8IqYKK1fPjZXQ9wFvT4-PZLd4oAW3Dtgsvn2dbXtT1E8pX9dZQSW"/>
        </div>
    </section>

    <!-- Right Section: Login Form -->
    <section class="flex flex-col justify-center w-full max-w-md mx-auto">
        <div class="clay-card p-8 lg:p-10 space-y-8 bg-white border border-outline-variant/20">
            <header class="space-y-2 text-center lg:text-left">
                <div class="lg:hidden flex items-center justify-center gap-2 mb-6">
                    <span class="material-symbols-outlined text-primary text-4xl" style="font-variation-settings: 'FILL' 1;">book_3</span>
                    <h1 class="font-headline-md text-primary">Santara</h1>
                </div>
                <h2 class="font-headline-lg text-on-surface">Masuk ke Santara</h2>
                <p class="font-body-md text-on-surface-variant">Senang melihatmu kembali! Silakan masuk ke akunmu.</p>
            </header>

            {{-- ERROR HANDLING DARI BACKEND --}}
            @if ($errors->any())
                <div class="p-4 rounded-2xl bg-error-container text-on-error-container text-sm font-semibold shadow-sm">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- FORM DIARAHKAN KE BACKEND LARAVEL --}}
            <form class="space-y-6" action="{{ route('login') }}" method="POST" id="loginForm">
                @csrf

                <!-- Email/Username -->
                <div class="space-y-2">
                    <label class="font-label-md text-on-surface-variant ml-1" for="email">Email</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">mail</span>
                        <input class="clay-input w-full py-4 pl-12 pr-4 rounded-lg font-body-md" id="email" name="email" value="{{ old('email') }}" required autofocus placeholder="nama@email.com" type="email"/>
                    </div>
                </div>

                <!-- Password -->
                <div class="space-y-2">
                    <div class="flex justify-between items-center px-1">
                        <label class="font-label-md text-on-surface-variant" for="password">Kata Sandi</label>
                        @if (Route::has('password.request'))
                            <a class="text-label-sm text-primary hover:underline transition-all" href="{{ route('password.request') }}">Lupa Sandi?</a>
                        @endif
                    </div>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline">lock</span>
                        <input class="clay-input w-full py-4 pl-12 pr-12 rounded-lg font-body-md" id="password" name="password" required placeholder="••••••••" type="password"/>
                        <button class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-primary transition-colors" type="button" id="togglePassword">
                            <span class="material-symbols-outlined">visibility</span>
                        </button>
                    </div>
                </div>

                <!-- Remember Me -->
                <div class="flex items-center gap-2 px-1">
                    <input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary-container bg-surface-container" id="remember_me" name="remember" type="checkbox"/>
                    <label class="text-label-md text-on-surface-variant" for="remember_me">Ingat saya di perangkat ini</label>
                </div>

                <!-- Submit Button -->
                <button class="clay-button w-full py-4 rounded-lg font-headline-md text-on-primary flex items-center justify-center gap-2 group" type="submit">
                    <span>Masuk</span>
                    <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
                </button>
            </form>

            <footer class="text-center space-y-4">
                <p class="font-body-md text-on-surface-variant">
                    Belum punya akun?
                    <a class="text-primary font-bold hover:underline" href="{{ route('register') }}">Daftar Sekarang</a>
                </p>
                <div class="relative flex items-center gap-4 py-2">
                    <div class="flex-grow h-[1px] bg-outline-variant/30"></div>
                    <span class="text-label-sm text-outline uppercase tracking-widest">Atau masuk dengan</span>
                    <div class="flex-grow h-[1px] bg-outline-variant/30"></div>
                </div>
                <div class="flex gap-4">
                    <button class="flex-1 py-3 px-4 rounded-lg border-2 border-surface-container hover:bg-surface-container transition-all flex items-center justify-center gap-2">
                        <img alt="Google" class="w-5 h-5" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBd31ZDuFbi5Xt_BfRHUIHz6oWwI-iGDXDVMoAJSBQEWd5blbRfRZS_P33q_6YKlASeSMIoVp85IcO_Mxc-zsMhekDxhkSxTXYpGdmLj9L-4DA4R30woz4I4YzDQVYIguyb6KywCFQgacReDforYdGMom0MEi8nOk6-W8RQGtLNH_DrEFHy7etyUS5CYbq5Xi0vIMq2G99azDCQ2s2eFf2IeEWB4kfggsM_xVNH3UovnFYfcqPF0yI5sIyQZj2weg9h43ItDFL4dhWQ"/>
                        <span class="font-label-md">Google</span>
                    </button>
                </div>
            </footer>
        </div>
    </section>
</main>

<!-- Floating Background Details -->
<div class="fixed top-20 right-10 pointer-events-none opacity-20 hidden md:block floating-element" style="animation-delay: -1s;">
    <span class="material-symbols-outlined text-primary text-9xl">school</span>
</div>
<div class="fixed bottom-20 left-10 pointer-events-none opacity-20 hidden md:block floating-element" style="animation-delay: -3s;">
    <span class="material-symbols-outlined text-secondary text-8xl">edit_note</span>
</div>

<script>
    // Interaksi Password Visibility Toggle
    document.getElementById('togglePassword')?.addEventListener('click', function() {
        const input = document.getElementById('password');
        const icon = this.querySelector('span');
        if (input.type === 'password') {
            input.type = 'text';
            icon.textContent = 'visibility_off';
        } else {
            input.type = 'password';
            icon.textContent = 'visibility';
        }
    });

    // Loading State saat Form Submit asli (Bukan return false lagi)
    document.getElementById('loginForm')?.addEventListener('submit', function(e) {
        const btn = this.querySelector('button[type="submit"]');
        btn.disabled = true;
        btn.innerHTML = '<span class="material-symbols-outlined animate-spin">progress_activity</span> Memproses...';
    });
</script>
</body>
</html>
