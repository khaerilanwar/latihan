<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Registrasi Akun',
            'active' => 'login'
        ];
        return view('registrasi.index', $data);
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:5|confirmed'
        ]);
        $validated_data['password'] = Hash::make($validated_data['password']);
        User::create($validated_data);
        $request->session()->flash('success', 'Akun berhasil dibuat!');

        return redirect('/login');
    }
}
