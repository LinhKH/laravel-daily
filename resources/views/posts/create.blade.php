@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add new post</div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        Post title*:
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" />
                        <br />

                        Photos (comma-separated):
                        <input type="text" name="photos" class="form-control" />
                        <br />

                        <input type="submit" value=" Save article " class="btn btn-primary" />

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
