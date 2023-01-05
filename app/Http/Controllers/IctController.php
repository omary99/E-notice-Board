<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ict;

class IctController extends Controller
{
    //
    public function index(){
        return view('uploadictpage');
    }

    public function store(Request $request){
    
        $data = new ict;

        $data->ict_date = $request->ictDate;
        $data->ict_time = $request->ictTime;
        $data->about = $request->about;
        $data->description = $request->description;
        $data->user_id = auth()->user()->id;

        $data->save();
        return redirect()->back();
    }

    public function show()
    {
        $data = Ict::all();
        return view('showictpage', compact('data'));
    }

}
