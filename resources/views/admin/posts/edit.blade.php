@extends('layouts.admin');

@section('title', 'Edit Post')

@section('content');

    <h1>Edit Post</h1>
@include('includes.form-error')

<div class="col-sm-3">

    {{--        <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}" alt="" class="img img-responsive img-rounded">--}}

    <img src="{{$post->photo ? $post->photo->file : '/images/laravel.jpg' }}" alt="" class="img img-responsive img-rounded">

</div>

<div class="col-sm-9">

    <div class="row">
        <!-- Form Creation -->
        {!! Form::model($post, ['method' => 'PATCH', 'action' => ['AdminPostsController@update', $post->id], 'files' => true ]) !!}
        {{--{{ csrf_field() }}--}}

        <div class="form-group">

            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>


        <!-- category_id Form Input -->
        <div class="form-group">
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id',  $categories, null, ['class' => 'form-control']) !!}
        </div>

        <!-- file Form Input -->
        <div class="form-group">
            {!! Form::label(' photo_id', ' Photo:') !!}
            {!! Form::file(' photo_id', null, ['class' => 'form-control']) !!}
        </div>

        <!-- body Form Input -->
        <div class="form-group">
            {!! Form::label('body', 'Description:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control', 'rows' => 5]) !!}
        </div>




        <div class="form-group">
            {!! Form::submit('Update Post', ['class' => 'btn btn-primary col-sm-6']) !!}
        </div>

        {!! Form::close() !!}

       <!-- Form Delete -->
        {!! Form::open(['method' => 'DELETE', 'action' => ['AdminPostsController@destroy', $post->id]]) !!}
        {{--{{ csrf_field() }}--}}

        <div class="form-group">
            {!! Form::submit('Delete Post', ['class' => 'btn btn-danger col-sm-6']) !!}
        </div>

        {!! Form::close() !!}


    </div>
</div>


@stop