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
    // 1. Proses Validasi (Termasuk Exception email UNESA)
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
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ], [
        'email.regex' => 'Waduh! Email kamu kayaknya salah alamat nih. Di Santara, cuma email @mhs.unesa.ac.id yang punya kunci akses. Gmail/Yahoo? Nanti dulu ya, King! 🤓🙏',
    ]);

    // 2. Membuat User (VARIABEL $user DIBUAT DI SINI)
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // 3. Menjalankan Event & Login (Di sinilah $user dipanggil)
    event(new Registered($user));

    Auth::login($user);

    return redirect(route('dashboard', absolute: false));
    }
}
