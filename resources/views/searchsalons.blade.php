@extends('app')
@section('content')
    @include('layouts.regionlist', ['salon' => $query])

@endsection
