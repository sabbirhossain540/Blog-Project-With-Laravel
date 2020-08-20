@extends('layouts.app')

@section('content')
	<div class="card">
	  <div class="card-header">
	    <h3>Tag List</h3>
	  </div>
	  <div class="card-body">
	  	<a class="btn btn-outline-primary mb-3" href="{{ route('tags.create') }}">Add Tag</a>
	    <table class="table">
			<thead>
				<th>name</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($tags as $tag)
				<tr>
					<td>{{ $tag->name }}</td>
					<td>
						<a href="{{ route('tags.edit',$tag->id) }}" class="btn btn-outline-info btn-sm">Edit</a>
						<!-- <a href="{{ route('tags.destroy',$tag->id) }}" class="btn btn-outline-danger btn-sm">delete</a> -->
						<form action="{{ route('tags.destroy',$tag->id) }}" method="POST">
						    {{ csrf_field() }}
						    {{ method_field('DELETE') }}
						    <button type="submit" class="btn btn-outline-danger btn-sm"> delete</button>
						</form>
						<!-- <button class="btn btn-outline-danger btn-sm" onclick="handleDelete({{ $tag->id }})">Delete</button> -->
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	  </div>
	</div>


<!-- Modal -->
		<form action="" method="POST" id="deleteCategoryForm">
			@csrf
			@method('DELETE')

			<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="deleteModalLabel">Delete Tag</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			       	
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">No. Go back</button>
			        <button type="submit" class="btn btn-outline-danger">Yes. Delete</button>
			      </div>
			    </div>
			  </div>
			</div>
		</form>


		<script type="text/javascript">
	        function handleDelete(id){
	        	var form = document.getElementById('deleteCategoryForm')
	        	form.action = '/tags/'+id
	        	//console.log(form)
	            $('#deleteModal').modal('show')
	        }
	    </script>

	
@endsection