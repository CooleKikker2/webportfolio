<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator, Redirect, Response;

class WorkController extends Controller
{

    public function SelectWork(Request $request){
        return view('portfolio-detail', ['id' => $request->id]);
    }

    public function newWork(){
        return view('newwork');
    }

    public function postWork(Request $request){
        $name = $request->name;
        $description = $request->description;
        $url = $request->url;
        $image = $request->image;
        $school = $request->school;
        $t = time();
        $now = date("Y-m-d",$t);

        $id = DB::table('work')->insertGetId(
            ['title' => $name, 'description' => $description, 'url' => $url, 'image' => $image, 'school' => $school, 'created_at' => $now]
        );

        if($id){
            return Redirect::to('dashboard');
        }
    }

    public function DeleteWork(Request $request){
        DB::table('work')->where('id', '=', $request->id)->delete();
        return Redirect::to('dashboard');
    }
}
