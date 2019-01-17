@extends('layouts.admin')


@section('content')
	<h1>Media</h1>
	<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Created</th>

      </tr>
    </thead>
    <tbody>
    @if($photos)
    @foreach($photos as $photo)
      <tr>
        <td>{{$photo->id}}</td>
        <td><img height="50" src="{!! URL::asset( $photo->file) !!}"></td>
        <td>{{$photo->created_at ? $photo->created_at : 'no date' }}</td>
        <td>
          {!! Form::open([ 'method'=>'DELETE', 'action' => ['AdminMediaController@destroy', $photo->id]]) !!}
              <div class="form-group">
                {!!Form::submit('Delete Photo', ['class'=>'btn btn-danger'])!!}
              </div>
          {!! Form::close()!!}
        </td>
        <th>
      </tr>
      @endforeach
     @endif
    </tbody>
  </table>


@stop