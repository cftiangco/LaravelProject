@extends('layout')

@section('content')
	<h1>Edit Project</h1>

	@foreach($errors->all() as $error)
		<div class="alert alert-danger" role="alert">
		  {{ $error }}
		</div>
	@endforeach

	<form method="POST" action="/projects/{{$project->id}}">
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		
		<div class="form-group">
				<div>
					<label for="title">Title</label>
					<input type="text" name="title" placeholder="Title" 
					class="form-control {{ $errors->has('title') ? 'is-invalid' : ''}}" id="title" 
					value="{{ $errors->has('title') ? old('title'):$project->title}}">
				</div>
			</div>
			<div class="form-group">
				<div>
					<label for="description">Description</label>
					<textarea name="description" placeholder="Description" 
					class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" 
					id="description">{{ $errors->has('description') ? old('description') : $project->description }}</textarea>
				</div>
			</div>
			<input type="submit" name="submit" value="Update" class="btn btn-primary">
	</form>
@endsection