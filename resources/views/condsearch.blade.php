@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 mb-10">
                <h2>こだわり検索</h2>
                <div class="mt-5 letter-brown">
                    <span class="label label-secondary">エリア</span>
                    {{$areaname}}
                </div>
            </div>
            {!!Form::open(['method' => 'get', 'class' => 'form-group', 'action' => 'SearchesController@getConditionResult'])!!}
            @include('layouts.searchtable')
            {!!Form::close()!!}
        </div>
    </div>
@endsection
