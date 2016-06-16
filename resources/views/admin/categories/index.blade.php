@extends('layouts.admin')

@section('title', 'Categories')

@section('content')


	<h1>Categories</h1>

	<div class="col-sm-6">
			
		<!-- Form Creation -->
     {!! Form::open(['method' => 'POST', 'action' => 'AdminCategoriesController@store' ]) !!}
        

           <div class="form-group">
               {!! Form::label('name', 'Name:') !!}
               {!! Form::text('name', null, ['class' => 'form-control']) !!}
           </div>


         <div class="form-group">
             {!! Form::submit('Create Category', ['class' => 'btn btn-primary']) !!}
         </div>

     {!! Form::close() !!}

	

	</div>


	<div class="col-sm-6">
			

   @if($categories)

			<table class="table">
         <thead>
           <tr>
               <th>Id</th>
               <th>Name</th>
               <th>Created</th>
               <th>Created</th>
               
           </tr>
         </thead>
         <tbody>


             @foreach($categories as $category)
               <tr>
                   <td>{{$category->id}}</td>
                   <td>{{$category->name}}</td>
                   <td>{{$category->created_at ? $category->created_at->diffForHumans() : "has no date"}}</td>
                   <td>{{$category->created_at ? $category->updated_at->diffForHumans() : "has no date"}}</td>
             
               </tr>
             @endforeach

           
         </tbody>
     </table>

  @endif
			
	</div>

@stop