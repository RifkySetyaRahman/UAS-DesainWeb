<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|unique:User|max:255',
            'password' => 'required|min:6',
        ]);

        // Simpan pengguna baru tanpa hashing password
        User::create([
            'name' => $request->username,
            'password' => Hash::make($request->password), // Simpan password tanpa hashing
        ]);

        // Redirect atau tampilkan pesan sukses
        return redirect('login')->with('success', 'Registration successful! You can now log in.');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika login berhasil, redirect ke halaman beranda
            return redirect()->route('beranda');
        }

        // Validasi input
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        // Cek kredensial menggunakan model Pengguna
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])) {
            // Jika berhasil, redirect ke halaman home
            return redirect()->route('beranda')->with('success', 'Login successful!');
        
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ]);
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return redirect('login')->with('error', 'Invalid name or password.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }
}