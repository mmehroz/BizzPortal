<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use DB;
use DataTables;
use Carbon\Carbon;

class EmailController extends Controller
{
	public function composeemail(){
		if(session()->get("email")){
			return view('email.composeemail');
		}else{
			return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}
	}
	public function sendcomposeemail(Request $request){
		if(session()->get("email")){
			$this->validate($request, [
        		'fromname'		=>'required',
        		'fromemail'		=>'required',
        		'emailsubject'	=>'required',
        		'toemail'		=>'required',
        	]);
			if ($request->istemplateortext == "template") {
				$this->validate($request, [
        			'template'=>'required'
        		]);
				$compose = file_get_contents($request->template);
			}else{
				$this->validate($request, [
        			'compose'=>'required'
        		]);
				$compose = $request->compose;
			}
			$toemail = explode("\n", $request->toemail);
			foreach ($toemail as $toemails) {
				Mail::send('email.compose', [ 
					'datas' =>$compose,
				],
				function ($message) use ($request,$toemail){
				$message->from($request->fromemail, $request->fromname)
				->to($toemail)
				// ->bcc('avidhaus.mehroz@gmail.com')
				->subject($request->emailsubject);
				});
			}
			return redirect('/composeemail')->with('message','Email Send Successfully');
		}else{
			return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}
	}
}
