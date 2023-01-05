<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OtherAnnouncement;


class OtherAnnouncementsController extends Controller
{
    //
    public function index(){
        return view('uploadotherannouncementspage');
    }

    public function store(Request $request){
    
        $data = new otherannouncement;

        $data->announcement_date = $request->announcementDate;
        $data->where_from = $request->whereFrom;
        $data->related = $request->related;
        $data->user_id = auth()->user()->id;

        $data->save();
        return redirect()->back();
    }

    public function show()
    {
        $data = Otherannouncement::all();
        return view('showotherannouncementspage', compact('data'));
    }
}
