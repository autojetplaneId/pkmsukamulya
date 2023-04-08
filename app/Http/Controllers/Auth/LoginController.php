<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        // $request->session()->increment('login_attempts');

        throw ValidationException::withMessages([
            'username' => [trans('auth.failed')],
        ]);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        $login = request()->input('username');
        if(is_numeric($login)){
            $field = 'no_hp';
        } elseif (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            $field = 'email';
        } else {
            $field = 'username';
        }
        request()->merge([$field => $login]);
        return $field;
    }

    public function login(Request $request){
        $input = $request->all();
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('username' => $input['username'], 'password' => $input['password'])))
        {
            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin.home');
            }else if (auth()->user()->type == 'manager') {
                return redirect()->route('manager.home');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }

    // private function shouldDisplayCaptcha()
    // {
    //     return session()->get('login_attempts', 0) > 2;
    // }

    // public function showLoginForm()
    // {
    //     return view('auth.login', [
    //         'displayCaptcha' => $this->shouldDisplayCaptcha(),
    //     ]);
    // }

    // protected function validateLogin(Request $request)
    // {
    //     $rules = [
    //         $this->username() => 'required|string',
    //         'password' => 'required|string',
    //     ];

    //     if ($this->shouldDisplayCaptcha()) {
    //         $rules['g-recaptcha-response'] = 'required|captcha';
    //     }

    //     $request->validate($rules);
    // }
}
