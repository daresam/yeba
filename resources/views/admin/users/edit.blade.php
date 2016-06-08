@extends('layouts.admin')



@section('content')
    <h1>Update Users</h1>
    @include('includes.form-error')

    <div class="col-sm-3">

{{--        <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400' }}" alt="" class="img img-responsive img-rounded">--}}

        <img src="{{$user->photo ? $user->photo->file : '/images/laravel.jpg' }}" alt="" class="img img-responsive img-rounded">
        
    </div>

    <div class="col-sm-9">

        <!-- Form Creation -->
        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' =>true]) !!}
        {{--{{ csrf_field() }}--}}
    
        <div class="form-group">
    
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    
        <!-- email Form Input -->
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
    
        <!-- role Form Input -->
        <div class="form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', ['' => 'Choose Options'] +  $roles, null, ['class' => 'form-control']) !!}
        </div>
    
        <!-- is_active Form Input -->
        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1 => 'Active', null => 'Not Active' ), 0, ['class' => 'form-control']) !!}
        </div>
    
        <!-- file Form Input -->
        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
        </div>
    
        <!-- password Form Input -->
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}
        </div>
    
        {!! Form::close() !!}

    </div>

@stop