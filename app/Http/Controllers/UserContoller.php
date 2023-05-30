<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserContoller extends Controller
{
    public function index(){

        $user = userModel::get();

        $title = 'Delete User?';
        $text = "Are You Sure You Want To Delete This User?";
        confirmDelete($title, $text);

        return view('user.user',
        compact('user'));
    }

    public function add(){
        return view('user.add');
    }

    public function store(Request $request){
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'level' => 'required'
        ]);
        
        UserModel::insert([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => $request->level
        ]);

        Alert('Success!', 'Data Have Been Added', 'success');
        return redirect('/user');
    }

    public function edit($user_id){
        $user = userModel::where('user_id', $user_id)->get();

        return view('user.edit',
        compact('user'));
    }

    public function update(Request $request, $user_id){
        $request->validate([
            'username' => 'required',
            'level' => 'required'
        ]);

        if($request->password == ''){
            UserModel::where('user_id', $user_id)->update([
                'username' => $request->username,
                'level' => $request->level
            ]);
        } else {
            UserModel::where('user_id', $user_id)->update([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'level' => $request->level
            ]);
        }
        Alert::success('Success!', 'Data Have Been Changed');
        return redirect('/user');
    }

    public function delete($user_id){
        UserModel::where('user_id', $user_id)->delete();
        Alert::success('Success!', 'Data Have Been Deleted');
        return redirect('/user');
    }

    public function profile(){
        return view('profile.profile');
    }

    public function editprofile($user_id){
        $user = userModel::where('user_id', $user_id)->get();

        return view('user.editprofile',
        compact('user'));
    }

     public function updateprofile(Request $request, $user_id){
        $request->validate([
            'username' => 'required',
            'level' => 'required'
        ]);

        if($request->password == ''){
            UserModel::where('user_id', $user_id)->update([
                'username' => $request->username,
                'level' => $request->level
            ]);
        } else {
            UserModel::where('user_id', $user_id)->update([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'level' => $request->level
            ]);
        }
        Auth::logout();
        $request->session()->forget('username');
        $request->session()->invalidate();
        Alert::success('Success!', 'Profile Have Been Changed Please Login Again');
        return redirect('/');

    }

        public function deleteprofile($user_id){
        UserModel::where('user_id', $user_id)->delete();
        Alert::success('Success!', 'Profile Have Been Deleted');
        return redirect('/dashboard');
    }
}
