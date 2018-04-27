<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Resources\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function list()
   {
      return new Users(User::all());
   }
}
