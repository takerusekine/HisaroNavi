@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>{{$title}}のエリア絞り込み検索結果</h2>
                <div class="letter-brown mt-5">
                    <span class="label label-secondary">エリア</span>
                    <?php print_r($d_area_name); ?>
                </div>
                <div class="letter-brown mt-5">
                    <span class="label label-secondary">特集</span>
                    {{$title}}
                </div>
                <p class="mt-0">
                    Hits:{{count($salons).'件'}}
                </p>
            </div>
        </div>
    </div>
    @include('layouts.regionlist')
@endsection
