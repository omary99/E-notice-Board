<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class TravelController extends Controller
{
    //
    public function index()
    {
       return View('uploadtravelpage');
    }

    public function store(Request $request)
    {
        $data = new travel;

        $data->ads_date = $request->adsDate;
        $data->travel_date = $request->travelDate;
        $data->return_date = $request->returnDate;
        $data->place = $request->place;
        $data->servant_name = $request->servantName;
        $data->assistant_name = $request->assistantName;

        $data->save();
        return redirect()->back();
    }

    public function show()
    {
        $data = Travel::all();
        return view('showtravelpage', compact('data'));
    }
}
