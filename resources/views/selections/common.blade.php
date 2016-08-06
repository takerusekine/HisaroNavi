@extends('app')
@section('content')
    <div class="container" id="feature">
        <div class="row">
            <div class="col-xs-12">
                <h2>{{$title}}</h2>
                <div class="mt-5 letter-brown">
                    <span class="label label-secondary">エリア</span>
                    {{$area_flash}}
                </div>
                <div class="mt-5 letter-brown">
                    <span class="label label-secondary">セレクション</span>
                    {{$title}}
                </div>
                <p class="mb-0">
                    Hits:{{count($salons).'件'}}
                </p>
                <a href="{{action('SelectionController@getSelectionDetailArea')}}" class="btn btn-default">
                    <i class="material-icons">search</i><span>エリアをさらに絞り込む</span>
                </a>
            </div>
        </div>
        <div class="row">
            @include('layouts.regionlist')
        </div>
    </div>
@endsection
