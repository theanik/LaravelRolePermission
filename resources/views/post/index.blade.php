@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post
                    @can('add')
                    <a href="{{ route('post.create') }}" style="float: right">Add new</a>
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                {{-- <th>#</th> --}}
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>
                                        @role('admin|superAdmin')
                                        <a href="{{ route('post.edit',$post->id) }}">Edit</a>
                                        @endrole
                                        @can('view')
                                        <a href="{{ route('post.view',$post->id) }}">View</a>
                                        @endcan
                                        @can('delete')
                                        <form action="{{ route('post.delete',$post->id) }}" method="POST">
                                            @method("DELETE")
                                            @csrf
                                            <button type="submit">Delete</button>
                                        </form>
                                        @endcan
                                    </td>
                                </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
