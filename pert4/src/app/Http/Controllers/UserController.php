<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function register()
    {
        return view('user.register', ['title' => 'Register']);
    }

    public function register_action()
    {
        $data = request()->validate([
            'name' => 'required|min:3|max:50',
            'username' => 'required|min:3|max:50|unique:tb_user',
            'password' => 'required|min:3|max:50',
            'password_confirm' => 'required|same:password',
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect()->route('login')->with('success', 'Register success, please login');
    }

    public function login()
    {
        return view('user.login', ['title' => 'Login']);
    }

    public function login_action()
    {
        $data = request()->validate([
            'username' => 'required|min:3|max:50',
            'password' => 'required|min:3|max:50',
        ]);

        if (Auth::attempt($data)) {

            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('error', 'Username or password is wrong');
        }
    }

    public function password()
    {
        return view('user.password', ['title' => 'Password']);
    }

    public function password_action()
    {
        $data = request()->validate([
            'password' => 'required|min:3|max:50',
            'password_new' => 'required|min:3|max:50',
            'password_confirm' => 'required|same:password_new',
        ]);

        $user = User::find(Auth::user()->id);

        if (Hash::check($data['password'], $user->password)) {
            $user->password = Hash::make($data['password_new']);
            $user->save();

            return redirect()->route('password')->with('success', 'Password changed');
        } else {
            return redirect()->route('password')->with('error', 'Password is wrong');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
