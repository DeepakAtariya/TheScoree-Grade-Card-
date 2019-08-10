<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\feedback;

class FeedbackController extends Controller
{
    public function feedback(Request $req){
		$modal = new feedback();
		$modal->name = $req->input('name');
		$modal->email= $req->input('email');
		$modal->feedback= $req->input('improvement');
		
		// return response()->json([
		// 	'status'=>$modal->save()
		// ]);

		return "<script>alert('Thank you for your time. We will contact you probably for more clarity'); window.location.href='home'</script>";
	
	}
}
