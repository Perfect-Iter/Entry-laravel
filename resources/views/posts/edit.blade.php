@extends('layouts.app')

@section('content')
    <h1>Edit Posts</h1>

    {!! Form::open(['route' => ['posts.update',$post->id], 'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title', $post->title,['class'=>'form-control', 'placeholder'=>'Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body', $post->body,['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'Body text'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary mt-3'])}}
    {!! Form::close() !!}
@endsection