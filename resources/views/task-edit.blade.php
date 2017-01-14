@extends('tasks')

@php($page_header="New Task")

@section('content')

{!! Form::open(['url' => '/tasks/' . $data["id"]]) !!}

<input type="hidden" name="_method" value="PUT">

<div class="form-group">
	<label for="description">Tasks Description:</label>
	<textarea class="form-control" rows="5" name="description">{{ $data['description'] }}</textarea>

</div>

<label for="status">Status:</label>
<div class="radio">
	<label><input type="radio" id="pending" name="status" value="Pending">Pending</label>
</div>
<div class="radio">
	<label><input type="radio" id="completed" name="status" value="Completed">Completed</label>
</div>
<br>

<input type="submit" value="Update" class="btn btn-primary">
<a href="/tasks" class="btn btn-default">Back</a>

{!! Form::close() !!}

@endsection

@section('script')
<script type="text/javascript">
window.onload = function() {
var status = "{{$data['status']}}";

status == "Pending" ?
	document.getElementById("pending").checked = true
	: document.getElementById("completed").checked = true;
}
</script>
@endsection