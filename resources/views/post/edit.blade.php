@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit : {{ $post->title }}
                </div>

                <div class="card-body">
                    <form action="{{ route('post.update',$post->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                        <br>
                        <textarea name="body" class="form-control">{{ $post->body }}</textarea>
                        <br>
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection