<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guest\Train;

class AboutTrainController extends Controller
{
    public function index(){
        $TrainDati = Train::All();
        return view('pages.aboutTrain',compact('TrainDati'));
    }
}