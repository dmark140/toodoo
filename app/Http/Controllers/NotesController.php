<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PHPUnit\Framework\MockObject\Generator\DuplicateMethodException;

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

    public function delete($id){
            dump($id);
            $del = Notes::where('uuid', $id)->first();
            $del->delete();
            return redirect()->route("home")->with("NoteDelete","");
    }

    public function update($id){
        request() ->validate([
            "note"=> "required|min:4|max:20",
        ]);
        $titles = Notes::where('uuid' ,$id)->first();
        $titles->note = request()->get("note");
        $titles->save();
        return redirect()->route("home")->with("NoteUpdated","");
    }

}
