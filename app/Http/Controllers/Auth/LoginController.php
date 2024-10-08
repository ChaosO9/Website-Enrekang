<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Closure;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

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

    // use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = '/home';

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function showLoginForm()
    {
        return view('login');
    }

    public function showLoginFormAdmin()
    {
        return view('login_admin');
    }

    public function login(Request $request)
    {
        $error_messages = [
            'email.required' => 'Form email tidak boleh kosong',
            'password.required' => 'Form password tidak boleh kosong',
            'captcha.required' => 'Form captcha tidak boleh kosong',
        ];

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'g-recaptcha-response' => ['required', function (string $attribute, mixed $value, Closure $fail) {
                $g_response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => config('services.recaptcha.secret_key'),
                    'response' => $value,
                    'remoteIp' => \request()->ip()
                ]);

                if (!$g_response->json('success')) {
                    $fail('The {$attribute} is invalid');
                }
            },]
        ], $error_messages);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials) && Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard');
        }

        if (Auth::attempt($credentials) && Auth::user()->hasRole('user')) {
            return redirect()->route('home');
        }

        // Authentication failed...
        return back()->withErrors([
            'email' => 'Email/Kata Sandi Salah',
        ]);
    }

    public function loginAdmin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->hasRole('admin')) {
                return redirect()->route('dashboard');
            } else {
                return back()->withErrors([
                    'email' => 'Akun yang anda masukkan bukanlah akun Admin',
                ]);
            }
        }

        // Authentication failed...
        return back()->withErrors([
            'email' => 'Email/Kata Sandi Salah',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect('/login');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_register' => 'required',
            'username_register' => 'required',
            'email_register' => 'required|email|unique:users,email',
            'password_register1' => 'required|min:8',
            'password_register2' => 'required|same:password_register1',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $validatedData = $validator->validated();

        $userData = [
            'name' => $validatedData['nama_register'],
            'username' => $validatedData['username_register'],
            'email' => $validatedData['email_register'],
            'password' => bcrypt($request->password_register1)
        ];

        // dd($userData);
        // exit();

        $user = User::create($userData);

        // Assign the 'user' role to the newly created user
        $user->assignRole('user');

        return redirect()->route('login.tampil')->with('success', 'Registrasi berhasil. Silahkan login.');
    }
}
