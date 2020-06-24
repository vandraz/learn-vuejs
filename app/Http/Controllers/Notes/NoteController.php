<?php

namespace App\Http\Controllers\Notes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\{Note, Subject};


class NoteController extends Controller
{
    //

    public function store(){

//validasi
        request()->validate([
            'subject'=> 'required',
            'title' => 'required',
            'description'=>'required',
        ]);

        //die and dumb
        //dd('hello');

      
        /*
        //cara pertama untuk post / logic menyimpan inputan
        $note = Note::create([
            'subject_id' =>request('subject'),
            'title' => request('title'),
            'slug' => \Str::slug(request('title')),
            'description' => request('description'),
        ]);

        return response()->json([
            'message' => 'Your note was created',
            'note' => $note,
        ]);

        */

        // cara kedua logic post input

        $subject = Subject::findorFail(request('subject'));

        //return $subject;

        $note = Note::create([
            'subject_id' =>$subject->id,
            'title' => request('title'),
            'slug' => \Str::slug(request('title')),
            'description' => request('description'),
        ]);

        return response()->json([
            'message' => 'Your note was created',
            'note' => $note,
        ]);

    }
}
