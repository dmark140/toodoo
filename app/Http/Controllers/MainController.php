<?php

namespace App\Http\Controllers;

use App\Models\Titles as ModelsTitles;
use App\Models\Titles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Ramsey\Uuid\Codec\OrderedTimeCodec;

class MainController extends Controller
{
    //

    public function index(){
        // $data = [
        //         [
        //             "id"=> 1,
        //             "task"=> "to the exam",
        //         ],
        //         [
        //             "id"=> 2,
        //             "task"=> "pass the exam?",
        //         ]
        //     ];

        //     $note0 = new ModelsTitles([
        //         'Title' =>'something',
        //         'uuid' => Str::uuid(),
        //     ]);
        //     $note0-> save();
        //     // dump(Titles::all());

        $getNOtes = DB::table('titles')
                ->leftJoin('notes', 'titles.uuid', '=', 'notes.title_id')
                ->select('titles.title' ,'notes.completed','titles.created_at' ,'notes.created_at as Notecreated_at' , 'titles.uuid  as titleUuid','notes.uuid as noteUUID' ,'notes.note','notes.completed')
                ->orderBy('titles.created_at','desc')
                ->get();
                // dump($getNOtes);
        return view("welcome",
            [
                // 'data'=> Titles::orderBy('created_at','desc')->get(),
                'data' => $getNOtes,
            ]
        );
    }
}
