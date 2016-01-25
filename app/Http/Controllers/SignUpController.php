<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Auth;
use \Input as Input;
use Illuminate\Http\Request;

class SignUpController extends Auth\AuthController{
    public function postRegister(Request $request){
		parent::postRegister($request);
		if(Input::hasFile('file')){

			$file = Input::file('file');
			$file->move('uploads', $file->getClientOriginalName());
		}
		return redirect($this->redirectPath());
	}

}