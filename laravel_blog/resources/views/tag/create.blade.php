@extends('layouts.app')

@section('content')
	<div class="card">
	  <div class="card-header">
	    <h3>{{ isset($tag) ? 'Edit Tag' : 'Create Tag' }}</h3>
	  </div>
	  <div class="card-body">
	  	@if($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group" >
                    @foreach($errors->all() as $error)
                        <li class="list-group-list" >
                        {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif


	  	<form method="POST" action="{{ isset($tag) ? route('tags.update', $tag->id) : route('tags.store') }}">
	  		@csrf
	  		@if(isset($tag))
	  		@method('PUT')
	  		@endif
	  		<div class="form-group">
	  			<label for="name">Name</label>
	  			<input type="text" class="form-control" id="name" name="name" value="{{ isset($tag) ? $tag->name : '' }}">
	  		</div>
	  		<div class="form-group">
	  			<button type="submit" class="btn btn-outline-success" name="add_tag">{{ isset($tag) ? 'Update Tag' : 'Add Tag' }}</button>
	  		</div>
	  	</form>
	  </div>
	</div>


@endsection