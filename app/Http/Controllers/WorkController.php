<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public const id = 0;

    public function SelectWork(Request $request){
        return view('portfolio-detail', ['id' => $request->id]);
        $this->id = $request->id;
    }
}
