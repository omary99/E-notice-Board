<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meeting;

class MeetingController extends Controller
{
    //
        //
        public function index(){
            return view('uploadmeetingpage');
        }
    
        public function store(Request $request){
    
            $data = new meeting;
    
            $data->meeting_date = $request->meetingDate;
            $data->meeting_time = $request->meetingTime;
            $data->goal = $request->goal;
            $data->characters = $request->characters;
            $data->area = $request->area;
            $data->user_id = auth()->user()->id;
    
            $data->save();
            return redirect()->back();
        }

        public function show()
        {
            $data = Meeting::all();
            return view('showmeetingpage', compact('data'));
        }
}
