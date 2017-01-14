@extends('tasks')

@php($page_header="New Task")

@section('content')

{!! Form::open(['url' => '/tasks']) !!}

	<div class="form-group">
		<label for="description">Tasks Description:</label>
		<textarea class="form-control" rows="5" name="description"></textarea>
	</div>

	<input type="submit" value="Create" class="btn btn-primary">
	<a href="/tasks" class="btn btn-default">Back</a>

{!! Form::open(['url' => 'foo/bar']) !!}

@endsection