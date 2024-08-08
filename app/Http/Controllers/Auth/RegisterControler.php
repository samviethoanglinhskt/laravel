<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class RegisterControler extends Controller
{
    public function index()
    {
        $dm = DB::table('categories')->get();
        return view('clients.register',compact('dm'));
    }

    public function register(Request $request)
    {
        // xu li logic dang ki
//        dd($request->all());
        $data = $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string','max:100', 'unique:users'],
            'password' => ['required', 'string','min:8', 'confirmed']
        ]);
        // tao user moi
        $user = User::query()->create($data);
        // Gui email xac nhan
        $token = base64_encode($user->email);
        Mail::to($user->email)->send(new \App\Mail\VerifyEmail($token,$user->name));
        // Login voi user vua tao
        Auth::login($user);
//        // gen lai token cho user vua dang nhap
        $request->session()->regenerate();
        // quay lai trang phia truoc
        return redirect()->intended('client/index');

    }

}
