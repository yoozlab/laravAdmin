@extends('master')

@section('title', 'Homepage')

@section('content')


Post a message
<br>
<form action="/create" method="post">
    <input type="text" name="title" placeholder="Title"/>
    <br />
    <textarea type="text" name="content" placeholder="Content" ></textarea>
    <br>
    {{csrf_field()}}
    <input type="submit" value="submit" />
</form>
<br>

Recent messages 

<ul>
@foreach($messages as $message)
<li>
    <strong>{{$message->title}}</strong>
    <p>{{$message->content}}</p>
    <p>
    {{$message->created_at->diffForHumans()}}
    </p>
</li>
@endforeach
</ul>


@endsection