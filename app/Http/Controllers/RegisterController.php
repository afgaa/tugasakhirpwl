<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Currentuser;

class RegisterController extends Controller
{
    public function registerAdmin()
    {
        return view('frontend.register-admin', [
            "title" => "Register"
        ]);
    }
    public function registerUser()
    {
        return view('frontend.register-user', [
            "title" => "Register"
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'level' => 'required'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        Currentuser::create($validatedData);

        $request->session()->flash('success', 'Registrasi berhasil, silahkan login');

        return redirect('/login');
    }
}
