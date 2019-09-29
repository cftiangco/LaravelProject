@extends('layout')
	@section('content')
	<h1>Project Page</h1> <a href="/projects/create" class="float-right">Create Prject</a>
		<table class="table table-stripped">
			<thead>
				<tr>
					<th>Title</th>
					<th>Description</th>
					<th>View</th>
				</tr>
			</thead>
			<tbody>
				@foreach($projects as $project)
				<tr>
					<td>{{ $project->title }}</td>
					<td>{{ $project->description }}</td>
					<td><a href="/projects/{{ $project->id }}">View</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	@endsection