<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currentuser;

class Login_Controller extends Controller
{
    public function index()
    {
        return view('frontend.login', [
            "title" => "Login"
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $currentuser = Currentuser::where('email', $credentials['email'])->where('password', $credentials['password'])->first();

        if (is_null($currentuser)) {
            $statuslogin = 0;
            $message = "login gagal";
            return view('infosukses', ['message' => $message, 'statuslogin' => $statuslogin]);
        } else {
            $statuslogin = 1;
            if ($currentuser->status === "no verified") {
                $message = "login sukses, namun akun anda belum diverifikasi";
                return view('infosukses', ['message' => $message, 'statuslogin' => $statuslogin]);
            } else {
                $message = "login sukses, anda sudah diverifikasi";
                return view('infosukses', ['message' => $message, 'statuslogin' => $statuslogin]);
            }
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function membercard()
    {

        // $dataUser = User::where('id', $request)->get();

        $dataUser = auth()->user();
        // dd($dataUser->name);

        return view('frontend.member-card', [
            'user' => $dataUser,
            'title' => 'Member Card'
        ]);
    }
    public function cetakMemberCard()
    {

        $dataUser = auth()->user();
        // return view('frontend.cetak-member-card', [
        //     'user' => $dataUser,
        //     'title' => 'Cetak Member Card'
        // ]);


        $pdf = PDF::loadView('frontend.cetak-member-card', [
            'user' => $dataUser,
            'title' => 'Cetak Member Card'
        ]);
        return $pdf->stream('MemberCardXstore.pdf');
    }
}
