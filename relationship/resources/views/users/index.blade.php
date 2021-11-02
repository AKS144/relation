@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @foreach($users as $user)
                    <h2></h2>
                    <p></p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
