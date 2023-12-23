@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>All Posts</h2>
            <a href="{{ route('posts.create') }}" class="btn btn-success">Add New Post</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($posts->count() > 0)
            <ul class="list-group">
                @foreach ($posts as $post)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <h1>{{ $post->title }}</h1>
                        <div class="btn-group" role="group" aria-label="Post Actions">
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Show</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                            </form>
                        </div>
                    </li>
                @endforeach

            </ul>

            <div class="mt-3">
                <ul class="pagination d-flex">
                    {{ $posts->links() }}
                </ul>
            </div>
        @else
            <div class="alert alert-info mt-3" role="alert">
                <h3>No posts found.</h3>
            </div>
        @endif
    </div>
@endsection
