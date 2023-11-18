<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
<<<<<<< HEAD
        $validated = $request->validateWithBag('updatePassword', [
=======
        $validated = $request->validate([
>>>>>>> 34415bd (yrexuytifvyuhuih)
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

<<<<<<< HEAD
        return back()->with('status', 'password-updated');
=======
        return back();
>>>>>>> 34415bd (yrexuytifvyuhuih)
    }
}
