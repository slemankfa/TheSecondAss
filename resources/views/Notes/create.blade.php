@extends('layouts.main')
@section('content')

     <h2>Create New Note</h2>

    <form method="POST" action="{{ route('note.store') }}">
        @csrf

        Note Title
        <input type="text" name="note_title" />


        <br>
        <br>
        Note Content
        <textarea name="note_content">
        </textarea>
        <br>
        <br>
        <input type="submit" value="Add Note" />
    </form>




@endsection