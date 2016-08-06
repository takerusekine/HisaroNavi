@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>条件検索</h2>
                <div class="row">
                    @include('layouts.searchform')
               </div>
            </div>
        </div>
    </div>
@endsection
