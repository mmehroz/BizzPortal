<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jobapplicant;
use DB;
use DataTables;
use Carbon\Carbon;

class ReservationController extends Controller
{
	public function reservationreport(){
		if(session()->get("email")){
			if (session()->get('role_id') == 2) {
				$task = DB::connection('mysql')->table('reserveroom')
				->join('elsemployees','elsemployees.elsemployees_batchid', '=','reserveroom.created_by')
				->join('meetingroom','meetingroom.meetingroom_id', '=','reserveroom.meetingroom_id')
				->join('reservertionstatus','reservertionstatus.reservertionstatus_id', '=','reserveroom.reservertionstatus_id')
				->where('reserveroom.created_by','=',session()->get('batchid'))
				->where('reserveroom.status_id','=',2)
				->select('reserveroom.reserveroom_id','reserveroom.reserveroom_for','reserveroom.reserveroom_date','reserveroom.reserveroom_starttime','reserveroom.reserveroom_endtime','reservertionstatus.reservertionstatus_name','meetingroom.meetingroom_name','elsemployees_name')
				->get();	
			}else{
				$task = DB::connection('mysql')->table('reserveroom')
				->join('elsemployees','elsemployees.elsemployees_batchid', '=','reserveroom.created_by')
				->join('meetingroom','meetingroom.meetingroom_id', '=','reserveroom.meetingroom_id')
				->join('reservertionstatus','reservertionstatus.reservertionstatus_id', '=','reserveroom.reservertionstatus_id')
				->where('reserveroom.status_id','=',2)
				->select('reserveroom.reserveroom_id','reserveroom.reserveroom_for','reserveroom.reserveroom_starttime','reserveroom.reserveroom_endtime','reservertionstatus.reservertionstatus_name','meetingroom.meetingroom_name','elsemployees_name')
				->get();
			}
			return view('reservation.report', ['data' => $task]);
		}else{
			return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}
	}
	public function reservemeetingroom(){
		if(session()->get("email")){
			$task = DB::connection('mysql')->table('meetingroom')
			->where('status_id','=',2)
			->select('meetingroom_id','meetingroom_name')
			->get();
			return view('reservation.modal.reservemeetingroom', ['data' => $task]);
		}else{
			return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		} 
	}
	public function submitreservtion(Request $request){
		if(session()->get("email")){
			$this->validate($request, [
               'reserveroom_for'		=>'required',
               'reserveroom_starttime'	=>'required',
               'reserveroom_endtime'	=>'required',
               'meetingroom_id'			=>'required',
            ]);
			$add = array(
				'reserveroom_for' 		=> $request->reserveroom_for,
				'reserveroom_date' 		=> $request->reserveroom_date,
				'reserveroom_starttime' => $request->reserveroom_starttime,
				'reserveroom_endtime' 	=> $request->reserveroom_endtime,
				'meetingroom_id' 		=> $request->meetingroom_id,
				'reservertionstatus_id' => 1,
				'status_id'				=> 2,
				'created_by' 			=> session()->get('batchid'),
				'created_at' 			=> date('Y-m-d h:i:s')
				);
			DB::connection('mysql')->table('reserveroom')->insert($add);
		if($add){
				return redirect('/reservationreport')->with('message','Meeting Room Reserved Successfully'); 
		}else{
              return redirect('/reservationreport')->with('message','Oops! Something Went Wrong');
        }
		}else{
			return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
		}
	}	
}
