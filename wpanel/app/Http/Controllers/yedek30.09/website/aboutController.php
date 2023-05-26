<?php

namespace App\Http\Controllers\website;

use App\Corparate;
use App\Gallerys;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    //
    public function about()
    {
        $imagesCorpare = Gallerys::where('page', 'kurumsal')->get();
        $corpare = Corparate::all()->first();
        // dd($corpare['ss']);
        return view('website.about.about', compact('corpare', 'imagesCorpare'));
    }
}
