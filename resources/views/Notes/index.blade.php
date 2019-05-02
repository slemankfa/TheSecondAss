/**
 * Created by PhpStorm.
 * User: OMEN
 * Date: 5/2/2019
 * Time: 8:26 PM
 */
@extends('layouts.main')

@section('content')
    <h2>All Notes </h2>

    <a href="{{ route('note.create') }}">Add Note</a>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Content</th>

        </tr>

        @forelse($notes as $notes)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $notes->note_title }}</td>
                <td>{{ $notes->note_content }}</td>
                <td>{{ \Carbon\Carbon::parse($notes->created_at)->format('Y-m-d D') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No Notes Found</td>
            </tr>
        @endforelse

    </table>


@endsection
