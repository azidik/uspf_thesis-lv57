<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct() {
    	$this->users = new User();
    }

    public function index() {
    	return view('auth.register');
    }

    public function store(Request $request) {
    	
    	try {

	    	$validate = Validator::make($request->all(), [
	            'name' => ['required', 'string', 'max:255'],
	            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
	            'password' => ['required', 'string', 'min:6', 'confirmed'],
	        ]);

	        dd($validate);
	    } catch (\Exception $e) {
    		return 'error';
    	}
    }
}
