<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // 1. Proses Validasi (Termasuk Exception email UNESA & Minimal 8 Karakter)
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                'unique:'.User::class,
                'regex:/^[a-zA-Z0-9._%+-]+@mhs\.unesa\.ac\.id$/i'
            ],
            // UPDATE: Menambahkan 'min:8' agar eksplisit mengunci minimal 8 karakter
            'password' => ['required', 'confirmed', 'min:8', Rules\Password::defaults()],
            'semester' => ['required'],
            'study_program' => ['required'],
        ], [
            'email.regex' => 'Waduh! Email kamu kayaknya salah alamat nih. Di Santara, cuma email @mhs.unesa.ac.id yang punya kunci akses. Gmail/Yahoo? Nanti dulu ya, King! 🤓🙏',
            // Tambahan pesan error custom untuk password (opsional agar UX makin mantap)
            'password.min' => 'Keamanan utama, King! Kata sandi kamu wajib minimal 8 karakter ya. 🛡️',
        ]);

        // 2. Membuat User (Data semester dan prodi ikut dimasukkan dengan aman)
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'semester' => $request->semester,
            'study_program' => $request->study_program,
        ]);

        // 3. Menjalankan Event & Login
        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
