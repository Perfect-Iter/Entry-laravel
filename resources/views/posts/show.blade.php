@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-outline-dark ">Back</a>
    <h1>{!! $post->title !!}</h1>

    <small>Date Posted{{$post->created_at}}</small>
    <br>
    <div class="mt-3">
        <h5>{!! $post->body !!}</h5>
    </div>
    <br>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a>

    {!! Form::open(['route' => ['posts.destroy',$post->id], 'method'=>'POST','class'=>'float-right']) !!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::Submit('Delete', ['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection