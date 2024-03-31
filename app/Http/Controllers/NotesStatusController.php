<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use Illuminate\Http\Request;

class NotesStatusController extends Controller
{
    public function update($id){
        // request() ->validate([
        //     "note"=> "required|min:4|max:20",
        // ]);
        $notes = Notes::where('uuid' ,$id)->first();
        $x = false;
        if($notes->completed == false)  $x = true;
        $notes->completed =$x;
        $notes->save();
        return redirect()->route("home")->with("StatusUpdated","");
    }
}
