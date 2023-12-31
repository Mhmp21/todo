<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
<<<<<<< HEAD
use Illuminate\View\View;
=======
use Inertia\Inertia;
use Inertia\Response;
>>>>>>> 34415bd (yrexuytifvyuhuih)

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     */
<<<<<<< HEAD
    public function show(): View
    {
        return view('auth.confirm-password');
=======
    public function show(): Response
    {
        return Inertia::render('Auth/ConfirmPassword');
>>>>>>> 34415bd (yrexuytifvyuhuih)
    }

    /**
     * Confirm the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
