<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
  public function index()
  {

    return view('front-end.login-register.index');

  }
}
