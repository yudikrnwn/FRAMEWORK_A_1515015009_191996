<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\pengguna;
use Illuminate\Auth\SessionGuard;
use Auth;
class sesicontroller extends Controller
{
	public function index()
	{
		return view('master');
	}
	public function form()
	{
		if(Auth::check()){
			return redirect('/');
		}
		return view('login');
	}
	public function validasi(Request $input)
	{
		$this->validate($input,[
			'username'=>'required',
			'password'=>'required',
		]);
		$pengguna=pengguna::where($input->only('username','password'))->first();
		if(! is_null($pengguna)){
			Auth::login($pengguna);
			if(Auth::check())
				return redirect('/')->with('informasi',"selamat datang ".Auth::user()->username);
		}
		return redirect('/login')->withErrors(['pengguna tidak di temukan']);
	}
	public function logout()
	{
		if(Auth::check()){
			Auth::logout();
			return redirect('/login')->withErrors(['silahkan login untuk masuk ke sistem']);
		}else{
			return redirect('/login')->withErrors(['silahkan login terlebih dahulu']);
		}
	}
}