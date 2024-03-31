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

        public function delete($id){
            $note0 = Titles::where('uuid' ,$id);
            $note0->delete();
            return redirect()->route("home")->with("deleteTitle","");
        }



        public function update($id){
            request() ->validate([
                "title"=> "required|min:4|max:20",
            ]);
            $titles = Titles::where('uuid' ,$id)->first();
            $titles->title = request()->get("title");
            $titles->save();
            return redirect()->route("home")->with("TitleUpdated","");
        }

}
