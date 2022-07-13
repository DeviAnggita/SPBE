<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Mews\Captcha\Facades\Captcha;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|numeric',
            'password' => 'required',
            'captcha' => ['required','captcha'],
        ]);

        if (Auth::attempt(['nip' => $request->nip, 'password' => $request->password])) {
            if (Auth::user()->role == 'Super Admin') {
                $request->session()->regenerate();

                return redirect()->intended(route('dashboard.index'));
            } elseif (Auth::user()->role == 'Admin') {
                $request->session()->regenerate();

                return redirect()->intended(route('dashboardadmin.index'));
            } elseif (Auth::user()->role == 'User') {
                $request->session()->regenerate();

                return redirect()->intended(route('home.index'));
            } else {
                return redirect()->route('login');
            }
        }

        return back()->with([
            Alert::error('Login Failed', 'NIP atau Password Salah')
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')
        ->with([
            Alert::success('Berhasil', 'Anda Berhasil Logout')
        ]);
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
