<?php

class UsersController extends \BaseController {

   
    public function index(){
        return View::make('pages.login');
    }

    public function login(){
        if(Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))){
            $username = Input::get('username');
            $user = DB::table('users')->where('username', $username)->first();
            Session::put('id', $user->id);
            return Redirect::to('/')->with('message', 'Thanks for signing in');
        }

        return Redirect::to('/login')->with('message', 'Your email and password is incorrect');
    }


    public function logout(){
        Auth::logout();
        Session::forget('id');
        return Redirect::to('/login')->with('message', 'Signed out');
    }
}