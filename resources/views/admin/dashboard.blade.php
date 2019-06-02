@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card card-info">
                <div class="card-header text-center">Posted</div>

                <div class="card-body">
                    <h1 class="text-center">{{ $posts_count }}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-danger">
                <div class="card-header text-center">Trashed posts</div>

                <div class="card-body">
                    <h1 class="text-center">{{ $trashed_count }}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-success">
                <div class="card-header text-center">Users</div>

                <div class="card-body">
                    <h1 class="text-center">{{ $users_count }}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header text-center">Categories</div>

                <div class="card-body">
                    <h1 class="text-center">{{ $categories_count }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
