<?php

namespace App\Http\Controllers;
use App\Models\artist;
use App\Models\artobject;
use App\Models\painting;
use App\Models\sculpture;
use App\Models\other;
use App\Models\exhibition;
use App\Models\collection;
class PagesController extends Controller
{
    public function artist(){
        $artists = artist::all()->toArray();
        return view('pages.artist',compact('artists'));
    }

    public function artobject(){
        $artobjects = artobject::all()->toArray();
        return view('pages.artobject',compact('artobjects'));
    }

    public function painting(){
        $paints = painting::all()->toArray();
        return view('pages.painting',compact('paints'));
    }

    public function sculpture(){
        $sculptures = sculpture::all()->toArray();
        return view('pages.sculpture',compact('sculptures'));
    }

    public function other(){
        $others = other::all()->toArray();
        return view('pages.other',compact('others'));
    }

    public function exhibition(){
        $exhibitions = exhibition::all()->toArray();
        return view('pages.exhibition',compact('exhibitions'));
    }

    public function collection(){
        $collections = collection::all()->toArray();
        return view('pages.collection',compact('collections'));
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
