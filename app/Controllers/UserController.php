<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Auth\Book;
use Resources\Views\home;


class UserController extends BaseController
{
    public function home(){
    	$user = User::find(1);
    	$books = Book::where('user_id','=',$user->id)->get();
    	//$books = $user->book;

    	return view('home')->with('books',$books);
    }

    public function getLogin(){
    	return view('login');
    }

    public function getRegister(){
    	return view('register');
    }
}
