<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $service;

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }
    public function index()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerUser(RegisterRequest $request)
    {
        $register = $this->service->register($request->validated());
        if (!$register) {
            return back()->with('error', 'An error occured, please try again later');
        }

        return redirect()->route('login')->with('success', "Account created success, login to proceed");
    }

    public function loginUser(LoginRequest $request)
    {
        if ($this->service->authenticate($request->email, $request->password)) {
            return redirect()->route('dashboard');
        }
        return back()->withErrors("Username or Password is not correct");
    }
}
