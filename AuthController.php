<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

if (Auth::attempt($request->only('email','password'))) {
    $request->session()->regenerate();

    return Auth::user()->role === 'admin'
        ? redirect()->route('admin.dashboard')
        : redirect()->route('login'); // atau route user dashboard
}


    return back()->with('error','Email atau password salah')->withInput();
    }

   public function logout(Request $request)
{
    Auth::logout();

    // ✅ bersihkan session biar benar-benar keluar
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // ✅ balik ke halaman login (pakai route biar konsisten)
    return redirect()->route('login');
}

}

class InventoryController extends Controller
{
    public function index()
    {
        return view('InventoryManagement'); 
        // pastikan nama file blade kamu InventoryManagement.blade.php
    }
}
