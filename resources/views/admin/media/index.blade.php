@extends('layouts.admin')

@section('title', 'Media')





@section('content')

    <h1>Upload Media</h1>

     <!-- Bootstrap Table Form -->
     <table class="table">

     @if($photos)
         <thead>
           <tr>
             <th>Id</th>
             <th>Name</th>
             <th>Created</th>
             <th>Created</th>
           </tr>
         </thead>

         <tbody>

         @foreach($photos as $photo)
           <tr>
             <td>{{$photo->id}}</td>
             <td><img height="50" src="{{$photo->file}}" alt=""></td>
            <td>{{$photo->created_at ? $photo->created_at->diffForHumans() : 'No date'}}</td>
             <td>{{$photo->updated_at ? $photo->updated_at->diffForHumans() : 'no date'}}</td>

           <!-- Form Creation -->
               <td>
                   {!! Form::open(['method' => 'DELETE', 'action' => ['AdminMediaController@destroy', $photo->id]]) !!}


                    <div class="form-group">
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    </div>
                    {!! Form::close() !!}
               </td>
           </tr>
        @endforeach
         </tbody>
        </table>
    @endif

@stop



