@extends('master')

@section('title', 'Homepage')

@section('content')


<h1>{{$message->title}}</h1>

<p>{{$message->content}}</p>


@endsection