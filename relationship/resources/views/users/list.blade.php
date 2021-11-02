@extends('users.master')
@section('content')
<div class="container">
    @if($user->count())

    @else
    @endif
</div>
@endsection
