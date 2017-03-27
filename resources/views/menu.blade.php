@extends('app')

@section('content')
    <div>
        {!! Breadcrumbs::render('salons', $info) !!}
    </div>
<div id="menu">
<section id="salonheader">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 pt-10 pb-10">
                <h1 class="lead font-weight-bold mb-0">
                {{'【'.$company . '】の日焼けサロン情報'}}
                
            @unless(empty($replaceSalonName))
            <br>
                <span class="name">
                    {{$replaceSalonName}}
                </span>
            @endunless
                </h1>
                <p class="name">
                    {{ $info['kana_name'] }}
                </p>
                <div>
                    <?php $kodawariarr = explode('／', $info['kodawari']); ?>
                    @foreach ($kodawariarr as $key => $k)
                        <span class="label label-secondary">{{ $k }}</span>
                    @endforeach
                </div>
                {{-- <button type="button" class="btn btn-warning pull-xs-right clearfix"><i class="material-icons tiny">map</i>地図</button> --}}
                <div class="clearfix"></div>
            </div>
            <div class="col-xs-12 mb-20">
                <button type="button" class="btn btn-block exitbtn">
                    <a href="tel:{{$info->tel}}" onclick="ga('send', 'event', 'click', 'tel-tap');">
                        <i class="material-icons">phonelink_ring</i><span>{{$info->tel}}</span>
                    </a>
                </button>
            </div>
        </div>
    </div>
    <?php
        $map_url = action('MapController@index', ['id' => $info->id]);
     ?>
    <a href="{{$map_url}}" class="btn btn-sm btn-default map-btn">
        <i class="material-icons">room</i><span>MAP</span>
    </a>
</section>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist" id="menutab">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#saloninfo" role="tab" id="infoindex">日サロ情報</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menuinfo" role="tab" id="menuindex">メニュー</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#couponinfo" role="tab" id="otokuindex">オトク情報</a>
        </li>
    </ul>
<div class="container">
    <div class="row">
        <div class="col-xs-12 pt-15 pb-15">

            <!-- Tab panes -->
            <div class="tab-content pt-10 pb-10">
              <div class="tab-pane active" id="saloninfo" role="tabpanel">
                  @include('layouts.info')
              </div>

              <div class="tab-pane" id="menuinfo" role="tabpanel">
                  @include('layouts.menulist')
              </div>
              <div class="tab-pane" id="couponinfo" role="tabpanel">
                  @include('layouts.otoku')
              </div>
            </div>
            <h2>{{'【'.$company. $replaceSalonName.'】'}}日焼けサロンへのお問い合わせ</h2>
            <div class="col-xs-12 mt-5">
                <button type="button" class="btn btn-block exitbtn">
                    <a href="tel:{{$info->tel}}" onclick="ga('send', 'event', 'click', 'tel-tap');">
                        <i class="material-icons">phonelink_ring</i><span>{{$info->tel}}</span>
                    </a>
                </button>
            </div>
                <ul id="tab-btn">
                    <li>
                        <button type="button" class="btn btn-block btn-default active-btn">
                            <span>日サロ情報</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="btn btn-block btn-default">
                            <span>メニュー</span>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="btn btn-block btn-default">
                            <span>オトク情報</span>
                        </button>
                    </li>
                </ul>
            <div class="col-xs-12 mt-10">
                <a href="#menu" class="btn btn-block btn-default" id="gobacktop">
                    <i class="material-icons">publish</i><span>ページトップへ</span>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
