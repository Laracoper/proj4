<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{


    public function index()
    {
        $title = 'hhhhoomme';
        // $peoples = DB::select("SELECT * FROM `people`");

        $peoples = DB::table('people')->get();
        // $peoples = DB::table('people')->paginate(2);

        // return view('home', ["title" => "home", "peoples" => $peoples]);
        return view('home', compact('title', 'peoples'));
    }

    public function about()
    {
        return view('about', ["title" => "about"]);
    }

    public function contact()
    {
        return view('contact', ["title" => "contact"]);
    }

    // public function posts()

    // {

    //     $title = 'posts';
    //     return view('posts', compact('title'));
    // }

    // public function post($id)

    // {

    //     $title = 'post';
    //     return view('post', compact('title', 'id'));
    // }

    public function people($id)

    {
        
        $people = DB::table('users')->find('id');
        // $people = DB::select('select * from users where id = ?', [$id]);

        $title = 'people';
        return view('people', compact('title', 'people'));
        
    }

   
}
