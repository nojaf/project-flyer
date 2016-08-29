@extends('layout')

@section('content')
    <h1>Selling Your Home?</h1>
	<hr>
    <div class="row">
        <form class="col-md-6 col-md-offset-3" method="POST" action="/flyers" enctype="multipart/form-data">
            @include('flyers.form')

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
@stop