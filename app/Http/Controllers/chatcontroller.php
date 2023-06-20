<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chatcontroller extends Controller
{
    public function message(Request $request)
    {
        event(new Message($request->input('username'),$request->input('message')));
        return[];
    }
    public function show()
    {
        return ('hello');
    }
}
