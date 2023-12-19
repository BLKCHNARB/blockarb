<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Ramsey\Uuid\Uuid;

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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'age' => ['required'],
            'usinvestor' => ['required'],
            'investortype' => ['required'],
            'accredited' => ['required'],
            'hearabout' => ['required'],
            'capital' => ['required'],
            'lovetoknow' => ['required'],
        ]);

        $referrercookie = Cookie::get("referrer");
        $referrer = $referrercookie ? User::where('referral_token',$referrercookie)->first() : null;
        // $referrer ? $referrer->notify(new ReferralRegistration($request->first_name." ".$request->last_name)) : "";
        $referral_token = Uuid::uuid4();
        
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'age' => $request->age,
            'usinvestor' => $request->usinvestor,
            'investortype' => $request->investortype,
            'accredited' => $request->accredited,
            'hearabout' => $request->hearabout,
            'capital' => $request->capital,
            'lovetoknow' => $request->lovetoknow,
            'referrer_id' => $referrer ? $referrer->id : null,
            'referral_token' => $referral_token,
        ]);
        $user->attachRole('user');

        // event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
