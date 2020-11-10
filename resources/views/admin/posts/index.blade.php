@extends('layouts.app');

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">TITOLO</th>
                <th scope="col">SLUG</th>
                <th scope="col">CONTENUTO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->slug}}</td>
                <td>{{$article->content}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection