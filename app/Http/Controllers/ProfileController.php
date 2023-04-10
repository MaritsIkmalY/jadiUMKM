<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        if ($request->file('photo')) {
            $filename = basename($request->file('photo')->getClientOriginalName(), '.' . $request->file('photo')->getClientOriginalExtension());
            $path = $request->file('photo')->storeAs('/assets/profile-user', $filename . "-" . Auth::user()->email . "." . $request->file('photo')->getClientOriginalExtension(), 'public');
            $data = $request->validated();

            $data['photo'] = $path;

            if (!is_null($request->user()->photo)) {
                Storage::disk('public')->delete($request->user()->photo);
            }
            $request->user()->fill($data);
        } else {
            $request->user()->fill($request->validated());
        }

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
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
