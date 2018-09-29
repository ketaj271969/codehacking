@extends('layouts.admin')

@section('content')



    @if(count($comments) > 0)
        <h1>Comments</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>

        </thead>
        <tbody>
        <tr>
            @foreach($comments as $comment)
           <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>
        </tbody>
    </table>
        @else
        <h1 class="text-center">No comments</h1>
    @endif
@stop