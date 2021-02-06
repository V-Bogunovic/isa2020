<?php

namespace App\Http\Controllers\Auth;

use App\Enumerations\RoleEnumeration;
use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::login($user = $this->createPatient($request));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }

    /**
     * Create patient from an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \App\Models\User
     *
     */
    private function createPatient(Request $request)
    {
        $patient = Patient::create([]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roleable_type' => RoleEnumeration::PATIENT,
            'roleable_id' => $patient->id,
        ]);

        return $user;
    }
}
