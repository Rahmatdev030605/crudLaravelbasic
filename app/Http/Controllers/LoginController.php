<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Login {
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Login berhasil, alihkan pengguna ke halaman yang sesuai
        return redirect('/dashboard');
    } else {
        // Login gagal, tampilkan pesan error
        return back()->withErrors(['email' => 'Login gagal.']);
    }
}
}

