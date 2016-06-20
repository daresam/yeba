@extends('layouts.admin')

@section('title', 'Upload Media')

@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">

 @stop



@section('content')

    <h1>Upload Media</h1>

     <!-- Form Creation -->
     {!! Form::open(['method' => 'post', 'action' => 'AdminMediaController@store', 'class' => 'dropzone']) !!}




     {!! Form::close() !!}

@stop


@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>

@stop

@section('footer')

        <footer class="footer center">I love laravel Lorem ipsum dolor sit amet,
        consectetur adipisicing elit. Doloremque, nulla, ratione?
        Accusantium beatae dignissimos dolor doloribus eius enim ex hic,
        iure magnam mollitia nihil numquam
        praesentium quo ut voluptatem. Reiciendis!</footer>
@stop