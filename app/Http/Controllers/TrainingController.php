<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;

class TrainingController extends Controller
{
    //
    public function index(){
        return view('uploadtrainingpage');
    }

    public function store(Request $request)
    {
        $data = new training;

        $data->training_date = $request->trainingDate;
        $data->travel_date = $request->travelDate;
        $data->training_expiration_date = $request->trainingExpirationDate;
        $data->servant_name = $request->servantName;
        $data->training_type = $request->trainingType;
        $data->place = $request->place;
        $data->assistant_name = $request->assistantName;

        $data->save();
        return redirect()->back();
    }

    public function show()
    {
        $data = Training::all();
        return view('showtrainingpage', compact('data'));
    }
}
