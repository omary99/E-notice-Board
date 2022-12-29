<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holiday;

class HolidayController extends Controller
{
    //
    public function index(){
        return view('uploadholidaypage');
    }

    public function store(Request $request){
    
        $data = new holiday;

        $data->holiday_date = $request->holidayDate;
        $data->servant_name = $request->servantName;
        $data->holiday_type = $request->holidayType;
        $data->holiday_days = $request->holidayDays;
        $data->holiday_start_date = $request->holidayStartDate;
        $data->holiday_expiration_date = $request->holidayExpirationDate;
        $data->assistant_name = $request->assistantName;

        $data->save();
        return redirect()->back();
    }

    public function show()
    {
        $data = Holiday::all();
        return view('showholidaypage', compact('data'));
    }
}
