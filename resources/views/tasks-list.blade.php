@extends('tasks')

@php($page_header="Tasks List")

@section('content')

@if (session('create_task'))
<div class="alert alert-success">
  {{ session('create_task') }}
</div>
@endif

@if (session('edit_task'))
<div class="alert alert-success">
  {{ session('edit_task') }}
</div>
@endif

@if (session('delete_task'))
<div class="alert alert-success">
  {{ session('delete_task') }}
</div>
@endif


<p>
	<a class="btn btn-primary" href="tasks/create" role="button">New Task</a>
</p>

<table class="table table-striped">
	<tr>
		<th>Task ID</th>
		<th>Date Created</th>
		<th>Task Description</th>
		<th>Status</th>
		<th>Action</th>
	</tr>
	@foreach ($data as $task) 
	<tr>
		<td>{{ $task->id }}</td>
		<td>{{ $task->created_at->format('d/m/Y h:i A') }}</td>
		<td>{{ $task->description }}</td>
		<td>{{ $task->status }}</td>
		<td>
			<a class="btn btn-xs btn-primary" href="tasks/{{ $task->id }}/edit" role="button">Edit</a>
			{!! Form::open(['url' => '/tasks/' . $task->id, 'style' => 'display:inline;']) !!}
			<input type="hidden" name="_method" value="DELETE">
			<input type="submit" class="btn btn-xs btn-danger" value="Delete">
			{!! Form::close() !!}

		</td>
	</tr>
	@endforeach
</table>
@endsection