@extends('layouts.admin')

@section('title', 'Edit Categories')

@section('content')


  <h1>Categories</h1>

  <div class="col-sm-6">
      
    <!-- Form Creation -->
     {!! Form::model($category, ['method' => 'PATCH', 'action' => ['AdminCategoriesController@update', $category->id] ]) !!}
        

           <div class="form-group">
               {!! Form::label('name', 'Name:') !!}
               {!! Form::text('name', null, ['class' => 'form-control']) !!}
           </div>


         <div class="form-group">
             {!! Form::submit('Update Category', ['class' => 'btn btn-primary col-sm-6']) !!}
         </div>

     {!! Form::close() !!}


      <!-- Form Creation -->
     {!! Form::open( ['method' => 'DELETE', 'action' => ['AdminCategoriesController@destroy', $category->id] ]) !!}
        

         <div class="form-group">
             {!! Form::submit('Delete Category', ['class' => 'btn btn-danger col-sm-6']) !!}
         </div>

     {!! Form::close() !!}

  

  </div>


  
@stop