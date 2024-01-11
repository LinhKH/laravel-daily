@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Post List</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Products</th>
                            <th>Photos</th>
                        </tr>
                        
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->title }}</td>
                                <td>
                                    @foreach ($product->photos as $photo)
                                        @if ($loop->iteration > 1)
                                            <br />
                                        @endif
                                        {{ $photo->filename }}
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
