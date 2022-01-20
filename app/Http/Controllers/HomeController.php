<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Review;
use App\Models\Image;
use App\Models\Mesajj;
use App\Models\Setting;
use App\Models\Style;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;
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
        $slider = Style::select('id', 'title', 'image', 'slug')->limit(4)->get();
        $modish = Style::select('id', 'title', 'image', 'slug')->limit(6)->inRandomOrder()->get();

        #print_r($modish);
        #exit();

        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'modish' => $modish
        ];
        return view('home.index', $data);
    }

    public function style($id, $slug)
    {
        $data = Style::find($id);
        $datalist = Image::where('style_id', $id)->get();
        $reviews = \App\Models\Review::where('style_id',$id)->get();
        #print_r($data);
        #exit();
        return view('home.style_detail', ['data' => $data, 'datalist' => $datalist, 'reviews' => $reviews]);
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

    public function sendmessage(Request $request)
    {
        $data = new Mesajj();
        $data->name = $request->input('name');
        $data->surname = $request->input('surname');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('contact')->with('success', 'Mesajınız Kaydedildi. Teşekkürler.');
    }

    public function services()
    {
        $setting = Setting::first();
        return view('home.services', ['setting' => $setting]);
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
