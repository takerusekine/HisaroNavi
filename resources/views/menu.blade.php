@extends('app')

@section('content')
<div id="menu">
{{-- <div class="salonHeaderImg">
    @unless (empty($info['top_img']))
        <img src="{{$info['top_img']}}" alt="" class="img-fluid">
    @else
        <a href="//hiyake1696.com" target="_blank">
            <img src="{{asset('img/hiyake-channel-logo2.png')}}" alt="ダミー" class="img-fluid" style="object-fit:contain"/>
        </a>
    @endunless
</div> --}}
<section id="salonheader">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 pt-10 pb-10">
                {{$areacookie}}
                <h1 class="lead font-weight-bold">{{$info->company->name}}</h1>
                <p class="name">{{$info['name']}}</p>
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
                    <a href="tel:{{$info->tel}}">
                        <i class="material-icons">phonelink_ring</i><span>{{$info->tel}}</span>
                    </a>
                </button>
            </div>
        </div>
    </div>
</section>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist" id="menutab">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#saloninfo" role="tab" id="infoindex">サロン情報</a>
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
            <div class="col-xs-12 mt-15">
                <a href="#menu" class="btn btn-block btn-default" id="gobacktop">
                    <i class="material-icons">publish</i><span>ページトップへ</span>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
