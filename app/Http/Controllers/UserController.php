<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Owner;
use App\writer;
use App\role;

class UserController extends Controller
{
    //
    public function oneToOne(){
       $user=user::find(1)->passport;
       return view('welcome',compact('user'));
    }
    public function oneToMany(){
        $user=owner::find(1)->mobile;
        return view('oneToMany',compact('user'));
     }
 
     public function manyToMany(){
        $user=writer::find(1)->roles;
        $role=role::find(1)->writers;
        return $role;
     }
}
