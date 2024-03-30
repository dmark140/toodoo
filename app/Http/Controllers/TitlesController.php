<?php

namespace App\Http\Controllers;

use App\Models\Titles;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TitlesController extends Controller
{
    //
        public function store(){


            request() ->validate([
                "title"=> "required|min:4|max:20",
            ])      ;      // dump();



            $note0 = Titles::create([
                'Title' => request()->get("title"),
                'uuid' => str::uuid(),
            ]);
            return redirect()->route("home")->with("1","");
        }
}
