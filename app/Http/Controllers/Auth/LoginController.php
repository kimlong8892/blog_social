<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function Login(Request $request)
    {
        return view('front_end.user.login');
    }

    public function loginPost(Request $request)
    {
        $user = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        if (Auth::attempt($user)) {
            return redirect('/');
        } else {
            echo 1;
            die;
            return redirect()->route('user.login.get')->with('error-login', "Sai email hoặc mật khẩu !");
        }
    }
}
