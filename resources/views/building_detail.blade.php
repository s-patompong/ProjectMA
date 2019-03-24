@extends('layouts.master')

@section('css')
<script src="{{ asset('js/level-get-data-room.js') }}" defer></script>
@endsection
@section('content')
@auth
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">{{$buildings->building_name}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$levels->level_name}}</li>
        </ol>
    </nav>

    {!! view($levels->imglink)!!}

</div>
@endauth
@endsection
