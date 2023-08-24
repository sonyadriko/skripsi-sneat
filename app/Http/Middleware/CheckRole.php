<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        // Periksa apakah pengguna sedang login
        if (Auth::check()) {
            $user = Auth::user();

            // Periksa apakah peran pengguna ada di dalam daftar peran yang diizinkan
            if (in_array($user->role, $roles)) {
                // Jika peran pengguna cocok dengan salah satu peran yang diizinkan,
                // lanjutkan ke rute berikutnya
                return $next($request);
            }
        }

        // Jika peran pengguna tidak cocok atau pengguna tidak login,
        // arahkan pengguna ke halaman tertentu atau kembalikan pesan error.
        return redirect('/')->withErrors(['error' => 'Anda tidak memiliki akses ke halaman ini.']);
    }
}
