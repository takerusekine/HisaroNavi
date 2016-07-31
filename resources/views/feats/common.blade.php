@extends('app')
@section('content')
    <div class="container" id="feature">
        <div class="row">
            <div class="col-xs-12">
                <h2>{{$title}}</h2>
                <div>
                    <span class="label label-warning">現在のエリア</span><span>{{$area}}</span>
                </div>
                <p class="mb-0">
                    Hits:{{count($salons).'件'}}
                </p>
            </div>
        </div>
        <div class="row">
            @include('layouts.regionlist')
        </div>
    </div>
@endsection
