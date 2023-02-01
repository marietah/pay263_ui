<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

    //vendor/laravel/framework/src/Illuminate/Foundation/Auth/AuthenticatesUs

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


    public function login(Request $request)
    {
         $user = User::where('email','=', $request->email)->first();
         if ($user->is_locked==0)
         {
       if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
       

            $user->status=1;
            $user->login_tries=0;
            $user->update();
            return redirect('/home')->with('message','Login Successful');
        }
        else
        {
           $user->status=0;
           $user->login_tries=$user->login_tries +1;
           $user->update();

           if ($user->login_tries >3)
           {

            $user->is_locked=1;
            $user->update();

            return redirect()->back()->with('message','You have exceeded maximum Login Attempts-Your Account  has been Locked');
            
           }
           else{
            return redirect()->back()->with('message','You have made '.$user->login_tries .' attempts and the maximum number of attempts required is 3');
           }
        }
    }
    else
    {
     return redirect()->back()->with('message','Your Account has been locked please contact System Administrator');
    }

    


    }
}