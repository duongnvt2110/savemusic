<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Session;
class AdminController extends Controller
{
    	public function getIndex()
    {
       return view('login');
        
    }
    public function indexuser()
    {
       return view('view.user');
        
    }
    public function adminLogin(Request $req)
    {
    
        $user=$req->post('txtname');
        $pass=$req->post('txtpass');
        $data=admin::select('username','password')->first();
        $count=admin::select('username','password')->count();
        // print_r($count);
        // exit;
        if( $user==$data['username'] and md5($pass)==$data['password'])
        {
        	$req->Session()->put('user',$data);
        	return Redirect('user');
        }
        elseif($count<0)
        {
        	$error=array('Login is Failed');
    		$req->Session()->put('error',$error);
            $data=session::get('error');
            return view('login',compact('data'));
        }
        else
        {	
       	 	$error=array('Login is Failed');
    		$req->Session()->put('error',$error);
            $data=session::get('error');
            return view('login',compact('data'));
        }
        
    }
}