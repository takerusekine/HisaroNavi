@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                    <div style="margin-bottom:0;">
                        <label for="areaname"  class="label label-warning">現在のエリア</label>
                        <input type="text" name="areaname" value="未設定です" id="areaname" disabled="disable" style="width:36%;padding-top:8px;border:0;">
                        <button type="button" class="btn btn-sm btn-warning-outline font-weight-normal pull-xs-right mb-5 mt-5" id="regionBtn">
                            エリア変更
                        </button>
                    </div>
                </div>
            </div>
        </div>
<div class="imgwrap" id="kvimg">
    <h1>日本最大級<br />日サロ紹介サイト</h1>
    <p>
        日サロナビで最寄りの日焼けサロンを素早く検索！
    </p>
    <p>掲載件数約<span>400</span>店舗！</p>
</div>
<div class="container mt-10">
    <div class="row">
        <div class="col-xs-12">
            <ul class="nav btn-nav">
                <li class="btn btn-secondary pAll-0">
                    <a href="{{action('RegionController@getAreaSelect')}}" class="nav-link" style="padding:0;width:100%;">
                        <i class="material-icons" style="font-size:2.5rem;">public</i>
                        <div>
                            <strong>エリア・地図</strong><br>で検索
                        </div>
                    </a>
                </li>
                <li class="btn btn-secondary pAll-0">
                    <a href="{{action('SearchesController@getConditionSearch')}}" class="nav-link" style="padding:0;width:100%;">
                        <i class="material-icons" style="font-size:2.5rem;">touch_app</i>
                        <div>
                            <strong>こだわり条件</strong><br />で検索
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

@include('layouts.feature')
@include('selections.homelink')
@include('layouts.infonews')
<div class="modal fade" data-backdrop="static" id="areamodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div id="areamap">
            <?php $i = 1;
                foreach ($arr as $val):?>
                <button type="button" name="areabtn" id="area-{{$i}}">
                    <span>{{ $val }}</span>
                </button>
            <?php $i++;
                endforeach;
            ?>
        </div>
    </div>
    <div class="modalmsg">
        初めに、検索したいエリアを選んでください。
    </div>
  </div>
</div>
<script src="{{asset('js/jpmap.min.js')}}" charset="utf-8"></script>
@endsection
