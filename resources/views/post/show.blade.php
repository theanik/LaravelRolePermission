@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    View : {{ $post->title }}
                    
                </div>

                <div class="card-body">
                        <input type="text" name="title" class="form-control" disabled value="{{ $post->title }}">
                        <br>
                        <textarea name="title" class="form-control" disabled>{{ $post->body }}</textarea>
                        <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection