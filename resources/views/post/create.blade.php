@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Add New
                </div>

                <div class="card-body">
                    <form action="{{ route('post.store') }}" method="POST">
                        @csrf

                        <input type="text" name="title" class="form-control" placeholder="Title">
                        <br>
                        <textarea name="body" class="form-control" placeholder="Body"></textarea>
                        <br>
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection