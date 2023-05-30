<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function index(){
        // $title = 'Logout?';
        // $text = 'yes';
        // confirm($title, $text);
        return view('login.login');
    }

     public function loginproses(Request $request){
        // $request->validate([
        //     'username' => 'required',
        //     'password' => 'required',
        // ]);

        if (
            Auth::attempt([
                'username' => $request->username,
                'password' => $request->password
            ])
        ) {
            $request->session()->put('login', 1);
            $request->session()->put('user_id', Auth::user()->user_id);
            $request->session()->put('username', Auth::user()->username);
            $request->session()->put('level', Auth::user()->level);
            // $request->session()->put('password', Auth::user()->password);
            $request->session()->regenerate();
            Alert::success('Welcome!', 'You Have Been Logged In');
            return redirect('/dashboard');
        } 
        
        elseif ($request->username == '' && $request->password == '') {
            Alert::error('Fail', 'Username And Password Must Be Filled');
            return redirect('/');
        }
        
        elseif ($request->username == '') {
            Alert::error('Fail', 'Username Must Be Filled');
            return redirect('/');
        }
        
        elseif ($request->password == '') {
            Alert::error('Fail', 'Password Must Be Filled');
            return redirect('/')->withInput($request->only('username'));
        }
        
        Alert::error('Fail', 'Couldn\'t Find That User');
        return redirect('/')->withInput($request->only('username'));
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->forget('username');
        $request->session()->invalidate();
        Alert::success('Goodbye!', 'You Have Been Logged Out');
        return redirect('/');
    }

}
