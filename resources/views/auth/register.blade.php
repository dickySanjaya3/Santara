<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Santara - Join Us</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #ffffff;
            background-image: radial-gradient(circle at 0% 100%, #8e7aa30a 0%, transparent 40%);
            color: #1cda94;
        }
        .auth-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(142, 122, 163, 0.1);
        }
        .input-style {
            background-color: #f4f7fe;
            border: 1px solid transparent;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .input-style:focus {
            background-color: #ffffff;
            border-color: #8e7aa3;
            box-shadow: 0 0 0 4px rgba(142, 122, 163, 0.05);
        }
        /* Animasi untuk pesan error lucu */
        @keyframes slideUp {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-error {
            animation: slideUp 0.4s ease-out forwards;
        }
    </style>
</head>
<body class="antialiased min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-[480px]">
        <div class="flex flex-col items-center mb-8">
            <div class="w-12 h-12 bg-[#1cda94] rounded-[1.2rem] flex items-center justify-center rotate-3 shadow-xl mb-4 transition-transform hover:rotate-0 duration-300">
                <span class="text-white font-extrabold text-2xl">S</span>
            </div>
            <h1 class="text-2xl font-black text-[#3a3045] tracking-tighter uppercase">Create Santara Account</h1>
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.3em] mt-2">Join the Informatics Circle</p>
        </div>

        <div class="auth-card p-10 rounded-[2.5rem] shadow-2xl shadow-[#8e7aa3]/5">
            <form method="POST" action="{{ route('register') }}" autocomplete="off">
                @csrf

                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label class="text-[10px] font-black text-[#1cda94] uppercase tracking-widest ml-1">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" required
                            class="input-style w-full mt-2 px-6 py-4 rounded-2xl text-sm font-semibold text-[#3a3045] outline-none"
                            placeholder="Dicky Sanjaya">
                    </div>

                    <div>
                        <label class="text-[10px] font-black text-[#1cda94] uppercase tracking-widest ml-1">Institutional Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            class="input-style w-full mt-2 px-6 py-4 rounded-2xl text-sm font-semibold text-[#3a3045] outline-none {{ $errors->has('email') ? 'border-red-300 bg-red-50/50' : '' }}"
                            placeholder="username@mhs.unesa.ac.id">

                        @error('email')
                            <div class="mt-4 p-4 bg-red-50 rounded-2xl border border-red-100 flex items-start gap-3 animate-error">
                                <span class="text-lg">🧐</span>
                                <p class="text-[10px] font-bold text-red-500 leading-tight uppercase tracking-tight">
                                    {{ $message }}
                                </p>
                            </div>
                        @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="text-[10px] font-black text-[#1cda94] uppercase tracking-widest ml-1">Password</label>
                            <input type="password" name="password" required
                                class="input-style w-full mt-2 px-6 py-4 rounded-2xl text-sm font-semibold text-[#3a3045] outline-none"
                                placeholder="••••••••">
                        </div>
                        <div>
                            <label class="text-[10px] font-black text-[#1cda94] uppercase tracking-widest ml-1">Confirm</label>
                            <input type="password" name="password_confirmation" required
                                class="input-style w-full mt-2 px-6 py-4 rounded-2xl text-sm font-semibold text-[#1cda94] outline-none"
                                placeholder="••••••••">
                        </div>
                    </div>
                </div>

                <button type="submit"
                    class="w-full mt-10 bg-[#1cda94] hover:bg-[#7a688d] text-white py-5 rounded-[1.5rem] text-xs font-black uppercase tracking-[0.25em] shadow-lg shadow-[#1cda94]/20 transition-all active:scale-[0.97]">
                    Register Now
                </button>
            </form>
        </div>

        <p class="text-center mt-10 text-[11px] font-bold text-gray-400 tracking-wide uppercase">
            Already a member?
            <a href="{{ route('login') }}" class="text-[#1cda94] hover:text-[#1cda94] ml-1 transition-colors underline decoration-2 underline-offset-4">Log In Here</a>
        </p>
    </div>

</body>
</html>
