<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
<<<<<<< HEAD
use Illuminate\View\View;
=======
use Inertia\Inertia;
use Inertia\Response;
>>>>>>> 34415bd (yrexuytifvyuhuih)

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
<<<<<<< HEAD
    public function create(): View
    {
        return view('auth.register');
=======
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
>>>>>>> 34415bd (yrexuytifvyuhuih)
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
<<<<<<< HEAD
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
=======
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
>>>>>>> 34415bd (yrexuytifvyuhuih)
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
