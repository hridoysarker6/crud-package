@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">{{ $post->title }}</h1>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $post->description }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
