@extends('layouts/app')

@section('content')
	<div class="card">
		<div class="card-header">Users</div>
		<div class="card-body">
			<table class="table table-hover">
				<thead>
					<th>Image</th>
					<th>Name</th>
					<th>Permissions</th>
					<th>Delete</th>
				</thead>
				<tbody>
					@forelse($users as $user)
						<tr>
							<td><img src="{{ asset($user->profile->avatar) }}" alt="" width="40px" height="40px" style="border-radius: 50%;"></td>
							<td>{{ $user->name }}</td>
							<td>
								@if($user->admin)
									<a href="{{ route('user.not.admin', ['id' => $user->id ]) }}" class="btn btn-sm btn-danger">Remove permissions</a>
								@else
									<a href="{{ route('user.admin', ['id' => $user->id ]) }}" class="btn btn-sm btn-success">Make admin</a>
								@endif
							</td>
							<td>
								Delete
							</td>
						</tr>
					@empty
						<tr>
							<th colspan="5" class="text-center">No users</th>
						</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
	
@stop