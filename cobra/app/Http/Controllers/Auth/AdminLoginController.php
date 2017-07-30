<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
   public function __construct()
   {
      $this->middleware('guest:admin', ['except' => ['logout']]);
   }

   public function showLoginForm()
   {
      return view('auth.admin-login');
   }

   public function login(Request $request)
   {
      // form valideren
      $this->validate($request, [
         'email'  => 'required|email',
         'password'  => 'required|min:8',
      ]);

      // Proberen om de gebruiker in te loggen, vergeet use Auth niet te doen
      //Auth::attempt($credentials, $remember);als je dit gebruikt, gaat die altijd ge standaard guard gebruiken
      $credentials = ['email' => $request->email, 'password' => $request->password];
      $remember = $request->remember;

      if(Auth::guard('admin')->attempt($credentials, $remember)){
         //if succesffull, rederict naar locatie
         //return redirect()->intended(route('admin.dashboard')); --> hardcoded
         return redirect()->intended('admin'); //-> controller method
      }

      //if unsuccessful, redirect terug naar de login
      return redirect()->back()->withInput($request->only('email','remember'));
   }

   public function logout()
   {
      Auth::guard('admin')->logout();
      return redirect('/');
   }
}
