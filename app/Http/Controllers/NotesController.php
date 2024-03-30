<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NotesController extends Controller
{
    public function store(){
        request() ->validate([
            "note"=> "required|min:4|max:255",
        ])      ;      // dump();
        $uuidFkey = request()->input("title_id");
        echo $uuidFkey;
        $note0 = Notes::create([
            'note' => request()->get("note"),
            'title_id' => $uuidFkey,
            'completed' => false,
            'uuid' => Str::uuid(),
        ]);

        return redirect()->route("home")->with("1","");

    }
}
