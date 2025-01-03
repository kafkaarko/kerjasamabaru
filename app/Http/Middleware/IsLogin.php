<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika login berhasil, alihkan ke landing page atau halaman utama
            return redirect()->intended('/dashboard');
        }       
    
        // Jika login gagal, alihkan kembali ke form login dengan pesan error
        return redirect()->route('login_form')->withErrors(['email' => 'Login gagal!']);
    }
}
