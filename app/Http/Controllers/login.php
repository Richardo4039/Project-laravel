<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\admin;
use App\seller;
use Illuminate\Http\Request;

class login extends Controller {
    function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }

    function masuk(Request $kiriman){
    	//Function login seller
    	$dataSeller = seller::where('username', $kiriman->username)->where('password',$kiriman->password)->get();
		
		// $dataSeller = seller::find($id);
		// $dataSeller->username = $kiriman['username_seller'];
		// $dataSeller->password = $kiriman['password_seller'];

		// $dataAdmin = admin::find($id);
		// $dataAdmin->username = $kiriman['username_admin'];
		// $dataAdmin->password = $kiriman['password_admin'];

    	//Function login admin
    	$dataAdmin = admin::where('username', $kiriman->username)->where('password',$kiriman->password)->get();

    	if (count($dataSeller)>0) {
    		//Login berhasil seller
    		Auth::guard('seller')->LoginUsingId($dataSeller[0]['id']);
    		return redirect('/seller_login');
    		
    	} elseif (count($dataAdmin)>0) {
    		//Login berhasil admin
    		Auth::guard('admin')->LoginUsingId($dataAdmin[0]['id']);
    		return redirect('/admin_login');
    	} else {
    		//Login gagal
    		return redirect('/masuk');
            phpAlert("Kata sandi/Username salah!");
            // echo '<script language="javascript">';
            // echo 'alert("Kata sandi/Username salah!")';
            // echo '</script>';
    	}
    }

    function keluar(){
    	if (Auth::guard('seller')->check()) {
    		Auth::guard('seller')->logout();
    	} elseif (Auth::guard('admin')->check()) {
    		Auth::guard('admin')->logout();
    	}
    	return redirect('/masuk');
    }
}
?>