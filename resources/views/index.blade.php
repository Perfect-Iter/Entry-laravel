@extends('layouts.app')

@section('content')
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light"{{$title}}</h1>
        <p class="lead text-muted">This is laravel application FOr Posting stuff and other stuff</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Login</a>
          <a href="#" class="btn btn-secondary my-2">Register</a>
        </p>
      </div>
    </div>
  </section>    
 @endsection