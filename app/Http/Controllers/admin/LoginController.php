<?php

// namespace App\Http\Controllers\admin;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Session;
// use App\Models\User;

// class LoginController extends Controller
// {

//     public function login()
//     {
//         if (Auth::check()) {
//             return redirect('landingpage.home');
//         } else {
//             return view('login.login');
//         }
//     }

//     public function actionlogin(Request $request)
//     {
//         $data = [
//             'email' => $request->input('email'),
//             'password' => $request->input('password'),
//         ];

//         if (Auth::Attempt($data)) {
//             return redirect('home');
//         } else {
//             Session::flash('error', 'Email atau Password Salah');
//             return redirect('/login');
//         }
//     }

//     public function actionlogout()
//     {
//         Auth::logout();
//         return redirect('/login');
//     }
// }
