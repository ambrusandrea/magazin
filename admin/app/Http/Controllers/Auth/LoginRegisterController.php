<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }
    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nume' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'parola' => 'required|min:8|confirmed'
        ]);

        User::create([
            'nume' => $request->nume,
            'email' => $request->email,
            'parola' => Hash::make($request->parola)
        ]);

        $credentials = $request->only('email', 'parola');
        $user = User::where('email', $credentials['email'])->first();
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->route('dashboard')->withSuccess('You have successfully registered & logged in!');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'parola' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

    if ($user && Hash::check($request->parola, $user->parola)) {
        Auth::login($user);
            $request->session()->regenerate();
            return redirect()->route('dashboard')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Emailul este gresit',
            'parola' => 'Parola este gresita'
        ])
        ;

    } 
    public function dashboard()
    {
        if(Auth::check())
        {
            return view('auth.dashboard');
        }
        
        return redirect()->route('login')
            ->withErrors([
            'email' => 'Please login to access the dashboard.',
        ])->onlyInput('email');
    } 
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    }    

}