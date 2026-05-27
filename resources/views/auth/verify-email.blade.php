<x-info-layout>
    <style>
        .clay-card {
            background: #ffffff;
            box-shadow: 0 20px 40px rgba(75, 83, 187, 0.1), inset 4px 4px 10px rgba(255, 255, 255, 0.8), inset -4px -4px 10px rgba(0, 0, 0, 0.02);
            border-radius: 32px;
        }
        .clay-button {
            background: linear-gradient(135deg, #4b53bb 0%, #8b93ff 100%);
            box-shadow: 0 10px 20px rgba(75, 83, 187, 0.3), inset 2px 2px 5px rgba(255, 255, 255, 0.4);
            transition: all 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .floating-blob { animation: float 6s ease-in-out infinite; }
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
    </style>

    <main class="min-h-screen flex items-center justify-center px-6 py-12">
        <div class="clay-card w-full max-w-[500px] p-10 md:p-14 flex flex-col items-center text-center relative overflow-hidden bg-white">

            <div class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-blue-200">
                <span class="material-symbols-outlined text-white text-4xl">mail</span>
            </div>

            <h1 class="text-3xl font-black text-gray-900 mb-4 tracking-tight">Verifikasi Email</h1>

            <p class="text-gray-500 mb-8 leading-relaxed">
                Terima kasih sudah mendaftar, King! Sebelum mulai, silakan klik tombol di email yang baru saja kami kirim ke
                <span class="font-bold text-blue-600">{{ Auth::user()->email }}</span>.
            </p>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-8 p-4 bg-emerald-50 border border-emerald-100 rounded-2xl text-emerald-600 text-sm font-bold animate-bounce">
                    🚀 Link verifikasi baru sudah meluncur ke inboxmu!
                </div>
            @endif

            <div class="w-full space-y-4">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="clay-button w-full py-4 px-8 rounded-2xl font-black text-white flex items-center justify-center gap-2 group">
                        <span>Kirim Ulang Email</span>
                        <span class="material-symbols-outlined text-xl group-hover:rotate-180 transition-transform duration-500">refresh</span>
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full py-3 text-gray-400 font-bold text-sm hover:text-red-500 transition-colors">
                        Keluar / Logout
                    </button>
                </form>
            </div>

            <div class="mt-10 pt-8 border-t border-gray-50 w-full">
                <p class="text-[10px] text-gray-300 font-black uppercase tracking-[0.2em]">Santara University Project</p>
            </div>
        </div>
    </main>
</x-info-layout>
