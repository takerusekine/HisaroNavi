@extends('app')
@section('content')
    <div class="container" id="ajaxReplace">
        <div class="row">
            <div class="col-xs-12">
                <h2>条件検索</h2>
                <div>
                   <label for="searcharea"  class="label label-warning">現在のエリア</label>
                   <span>{{$area}}</span>
                   <p class="count" id="count">
                       {{'Hits:'. count($salons). '件'}}
                   </p>
                   <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#kodawari-modal">
                       こだわり条件で絞る
                   </button>
               </div>
            </div>
        </div>
        <div class="row" id="kodawari-row">
            @include('layouts.regionlist')
        </div>
    </div>
    <div class="modal fade" id="kodawari-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" style="padding:0">
                    @include('layouts.searchform')
                </div>
                <div class="modal-footer">
                    <div class="flex-center">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">検索する</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
