<?php

namespace App\Http\Controllers;

use  App\Note ;
use Illuminate\Http\Request;

class KeepNoter extends Controller
{
    //



    public function index()
    {

        $notes = Note::all()->sortByDesc('created_at');
        return view('Notes.index', [
            'notes' => $notes
        ]);
    }


    public function create()
    {
        //
        return view('Notes.create');
    }


    public function store(Request $request)
    {
        //dd($request->has('title'));
        //dd($request->get('title'));
        $noteData = $request->all();
        //

       // dd($noteData);
        $note = new Note();
        $note->note_title = $noteData['note_title'];
        $note->note_content = $noteData['note_content'];

        $note->save();
        return redirect()->route('note.index');
    }



}
