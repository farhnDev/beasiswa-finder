<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        \Log::info('Register Request Data:', $request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'age' => 'required|integer',
            'phone_number' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
            'role' => 'user', // Default role, adjust if needed
        ]);

        return redirect()->route('login')->with('register-success', 'Anda Berhasil Melakukan Register, Harap Login.');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    protected function redirectBasedOnRole()
    {
        $user = Auth::user();
        if ($user->role === 'admin') {
            return redirect()->intended('dashboard');
        } else {
            return redirect()->intended('/user/menu');
        }
    }

    protected function authenticated(Request $request, $user)
    {
        return $this->redirectBasedOnRole();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}


