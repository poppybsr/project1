<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function artist(){
        $title = 'Artist';
        //return view('pages.artist',compact('title'));
        $users = DB::table('artist')->get();
        var_dump($users);
        return view('pages.artist')->with('title',$title);
    }

    public function artobject(){
        $title = 'Art Object';

        $users = DB::table('art_object')->get();
        var_dump($users);
       
        return view('pages.artobject')->with('title',$title);
    }

    public function goers(){
        $data = array (
            'title' => 'Goers',
            'goers' => ['Childen','adult','null']
        );
        //$users = DB::connection('mariadb')->select(...);
        $users = DB::table('goer')->get();
        var_dump($users);
        return view('pages.goers')->with($data);
    }
}
