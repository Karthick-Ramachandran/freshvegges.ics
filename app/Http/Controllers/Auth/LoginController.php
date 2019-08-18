<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/login1';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function logout(Request $request)
    {
        $user = User::where('id', '=', Auth::user()->id)->first();
        $user->login1 = 0;
        $user->login2 = 0;
        $user->login3 = 0;
        $user->login4 = 0;
        $user->save();
        Auth::logout();
        return redirect('/login');
    }
    public function login(Request $request)
    {
        $user = User::where('email', '=', $request->email)->first();
        $user->login1 = 0;
        $user->login2 = 0;
        $user->login3 = 0;
        $user->login4 = 0;
        $user->save();

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/home');
        } else {
            return redirect('/');
        }
    }
}

