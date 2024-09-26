<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show(string $id): View
    {
        $title='';
        $people = DB::table('people')->find('id');

        return view('show', [
            'user' => User::findOrFail($id)
        ]);

        // return view('show', compact('title','people'));
    }
}
