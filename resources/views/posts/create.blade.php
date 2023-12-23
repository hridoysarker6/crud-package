@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Create a New Post</h2>
            </div>
            <div class="card-body">
                @if (isset($errors) && $errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('posts.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" class="form-control" id="title" type="text"
                            placeholder="Enter the title">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="description" placeholder="Enter the description"></textarea>
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
