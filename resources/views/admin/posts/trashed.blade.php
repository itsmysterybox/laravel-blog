@extends('layouts/app')

@section('content')
	<div class="card">
		<div class="card-header">Trashed Posts</div>
		<div class="card-body">
			<table class="table table-hover">
				<thead>
					<th>Image</th>
					<th>Title</th>
					<th>Edit</th>
					<th>Restore</th>
					<th>Delete</th>
				</thead>
				<tbody>
					@forelse($posts as $post)
						<tr>
							<td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px"></td>
							<td>{{ $post->title }}</td>
							<td>Edit</td>
							<td>
								<a href="{{ route('post.restore', ['id' => $post->id ]) }}" class="btn btn-sm btn-success">Restore</a>
							</td>
							<td>
								<a href="{{ route('post.kill', ['id' => $post->id ]) }}" class="btn btn-sm btn-danger">Delete</a>
							</td>
						</tr>
					@empty
						<tr>
							<th colspan="5" class="text-center">No trashed posts</th>
						</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
	
@stop