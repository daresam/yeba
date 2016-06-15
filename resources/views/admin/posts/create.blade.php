@extends('layouts.admin');

@section('title', 'Create Post')


@section('content');
    <div class="row">

        @include('includes.form-error')

    </div>

    <h1>Create Post</h1>

        <div class="row">
     <!-- Form Creation -->
     {!! Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store', 'files' => true ]) !!}
           {{--{{ csrf_field() }}--}}

           <div class="form-group">

               {!! Form::label('title', 'Title:') !!}
               {!! Form::text('title', null, ['class' => 'form-control']) !!}
           </div>


            <!-- category_id Form Input -->
            <div class="form-group">
                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id', ['' => 'Choose Categories'] + $categories, null, ['class' => 'form-control']) !!}
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
             {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
         </div>

     {!! Form::close() !!}


        </div>

@stop