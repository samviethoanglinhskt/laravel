<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginControler extends Controller
{
    public function index()
    {
        $dm = DB::table('categories')->get();
        return view('clients.login',compact('dm'));
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('client/index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout()
    {
        Auth::logout();
        \request()->session()->invalidate();
        return redirect('client/index');
    }
    public function verify($token)
    {
        $user = User::query()->where('email',base64_decode($token))
            ->where('email_verified_at',null)->first();
        if ($user){
            $user->update(['email_verified_at'=>Carbon::now()]);
            // Login voi user vua tao
            Auth::login($user);
            // gen lai token cho user vua dang nhap
            \request()->session()->regenerate();
            return redirect()->intended('client/index');

        }
    }
}
