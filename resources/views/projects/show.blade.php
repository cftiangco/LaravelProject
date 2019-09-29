@extends('layout')

@section('content')

	<div class="card" style="">
	  <div class="card-body">
	    <h5 class="card-title">{{ $project->title }}</h5>
	    <h6 class="card-subtitle mb-2 text-muted">Posted On {{ $project->created_at }}</h6>
	    <p class="card-text">{{ $project->description }}</p>
		    <div>
			    <a href="/projects/{{ $project->id }}/edit" class="btn btn-info">Edit</a>
			   
			   <form method="POST" action="/projects/{{$project->id}}" style="display:inline;" class="float-right">
					{{ method_field('DELETE') }}
					{{ csrf_field() }}
					<input type="submit" name="submit" value="Delete" class="btn btn-danger">
			   </form>
			</div>
	  </div>
	</div>

@endsection