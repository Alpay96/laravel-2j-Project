<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Method;

class HomeController extends Controller
{
    //

    public static function getsetting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        return view('home.index', ['setting' => $setting]);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references', ['setting' => $setting]);
    }

    public function fag()
    {
        $setting = Setting::first();
        return view('home.fag', ['setting' => $setting]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);
    }

    public function booking()
    {
        $setting = Setting::first();
        return view('home.booking', ['setting' => $setting]);
    }

    public function barbers()
    {
        $setting = Setting::first();
        return view('home.barbers', ['setting' => $setting]);
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        } else {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


    //
    public function test($id, $name)
    {
        echo "Id Number :", $id;
        echo "<br> Name :", $name;
    }
}
