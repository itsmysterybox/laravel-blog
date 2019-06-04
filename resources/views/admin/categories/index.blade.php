@extends('layouts/app')

@section('content')
	<div class="card">
		<div class="card-header">Categories</div>
		<div class="card-body">
			<table class="table table-hover">
				<thead>
					<th>Category name</th>
					<th>Edit</th>
					<th>Delete</th>
				</thead>
				<tbody>
					@forelse($categories as $category)
						<tr>
							<td>
								{{ $category->name }}
							</td>
							<td>
								<a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn btn-sm btn-info">Edit</a>
							</td>
							<td>
								<a href="{{ route('category.delete', ['id' => $category->id ]) }}" class="btn btn-sm btn-danger">Delete</a>
							</td>
						</tr>
					@empty
						<tr>
							<th colspan="5" class="text-center">No categories yet</th>
						</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
	
@stop