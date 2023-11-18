<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
<<<<<<< HEAD
=======
use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> 34415bd (yrexuytifvyuhuih)
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
<<<<<<< HEAD
use Illuminate\View\View;
=======
use Inertia\Inertia;
use Inertia\Response;
>>>>>>> 34415bd (yrexuytifvyuhuih)

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
<<<<<<< HEAD
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
=======
    public function edit(Request $request): Response
    {
        return Inertia::render('Profile/Edit', [
            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
            'status' => session('status'),
>>>>>>> 34415bd (yrexuytifvyuhuih)
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

<<<<<<< HEAD
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
=======
        return Redirect::route('profile.edit');
>>>>>>> 34415bd (yrexuytifvyuhuih)
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
<<<<<<< HEAD
        $request->validateWithBag('userDeletion', [
=======
        $request->validate([
>>>>>>> 34415bd (yrexuytifvyuhuih)
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
