<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Santara - Sign In</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #ffffff;
            background-image: radial-gradient(circle at 100% 0%, #8e7aa30a 0%, transparent 40%);
        }
        .auth-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(142, 122, 163, 0.1);
        }
        .input-style {
            background-color: #f4f7fe;
            border: 1px solid transparent;
            transition: all 0.3s ease;
        }
        .input-style:focus {
            background-color: #ffffff;
            border-color: #1cda94;
            ring: 4px;
            ring-color: rgba(142, 122, 163, 0.1);
        }
    </style>
</head>
<body class="antialiased min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-[440px]">
        <div class="flex flex-col items-center mb-10">
            <div class="w-12 h-12 bg-[#1cda94] rounded-2xl flex items-center justify-center rotate-3 shadow-xl mb-4">
                <span class="text-white font-extrabold text-2xl">S</span>
            </div>
            <h1 class="text-2xl font-black text-[#1cda94] tracking-tighter uppercase">Santara Workspace</h1>
            <p class="text-xs font-bold text-gray-400 uppercase tracking-[0.2em] mt-2">Sign in to continue</p>
        </div>

        <div class="auth-card p-10 rounded-[2.5rem] shadow-2xl shadow-[#8e7aa3]/5">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="space-y-6">
                    <div>
                        <label class="text-[10px] font-black text-[#1cda94] uppercase tracking-widest ml-1">Email Address</label>
                        <input type="email" name="email" required autofocus
                            class="input-style w-full mt-2 px-5 py-4 rounded-2xl text-sm font-semibold text-[#3a3045] outline-none"
                            placeholder="@unesa.ac.id">
                    </div>

                    <div>
                        <div class="flex justify-between items-center ml-1">
                            <label class="text-[10px] font-black text-[#1cda94] uppercase tracking-widest">Password</label>
                            <a href="#" class="text-[9px] font-bold text-gray-400 hover:text-[#1cda94] transition uppercase tracking-tighter">Forgot?</a>
                        </div>
                        <input type="password" name="password" required
                            class="input-style w-full mt-2 px-5 py-4 rounded-2xl text-sm font-semibold text-[#3a3045] outline-none"
                            placeholder="enter your password">
                    </div>
                </div>

                <div class="flex items-center mt-6 ml-1">
                    <input type="checkbox" name="remember" class="w-4 h-4 rounded border-gray-200 text-[#1cda94] focus:ring-[#1cda94]">
                    <span class="ml-3 text-[11px] font-bold text-gray-400 uppercase tracking-wide">Keep me signed in</span>
                </div>

                <button type="submit"
                    class="w-full mt-8 bg-[#1cda94] hover:bg-[#17b880] text-white py-5 rounded-2xl text-xs font-black uppercase tracking-[0.25em] shadow-lg shadow-[#1cda94]/20 transition-all active:scale-[0.98]">
                    Sign In
                </button>
            </form>
        </div>

        <p class="text-center mt-8 text-xs font-bold text-gray-400 tracking-wide">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-[#1cda94] hover:underline ml-1">Create Account</a>
        </p>
    </div>

</body>
</html>
