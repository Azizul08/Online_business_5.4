<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
use DB;

use Auth;

class AuthController extends Controller
{
   
    public function login(){
    	return view('frontend.login');
    }

    public function getLogin(Request $request){
        
        if(auth()->guard('customer')->check()){
            return redirect('/');
        }
        else
        {
            return redirect()->back()->withErrors(['msg'=>'Email or password is incorrect'])->withInput();
        }
    }


	public function postLogin(Request $request) {
	    
	    // dd($request->emailAddress);
	    $info=DB::table('customers')->where('emailAddress',$request->emailAddress)->first();
	    // dd($info);
	    $customerId = $info->id;
	    Session::put('customerId', $customerId);
	     
	    // dd($info);
	    // $pass=$info->password;
	    // dd($pass);
	    $credentials = $request->only('emailAddress', 'password');
  
	    // dd($credentials);
	         if(auth()->guard('customer')->attempt($credentials, $request->has('remember'))) {

	            return $this->handleUserWasAuthenticated($request);
	        }

	        else
	        {
	            return redirect()->back()->withErrors(['msg'=>'Email or password is incorrect'])->withInput();

	        }
	}

	protected function handleUserWasAuthenticated(Request $request){

        if (method_exists($this, 'authenticated')) {
            return $this->authenticated($request, Auth::User());
        }

        return redirect('/products'); 
    }

    // logout function
    public function getLogout(){

        auth()->guard('customer')->logout();
        Session::flush();
        return redirect('/');
    }

    public function customerRegistration(Request $request) {
        $customer = new Customer();
        $customer->firstName = $request->firstName;
        $customer->lastName = $request->lastName;
        $customer->emailAddress = $request->emailAddress;
        $customer->phoneNumber = $request->phoneNumber;
        $customer->password = bcrypt($request->password);
        $customer->address = $request->address;
        $customer->save();
        $customerId = $customer->id;
        Session::put('customerId', $customerId);
        return redirect('/clientlogin');
    }

}
