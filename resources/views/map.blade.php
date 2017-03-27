@extends('app')
@section('content')
    <div class="container" id="map-view">
        <div class="row">
            <h1 id="company_map" class="result-h1">
                <a href="{{str_replace('map', 'salon',Request::url())}}">
                    <span id="content_string">
                <i class="fa fa-fw fa-chevron-left"></i>
                        {{$companyName.$replaceSalonName. 'の日焼けサロン住所・地図'}}
                    </span>
                </a>
            </h1>
            <div class="col-xs-12">
                <div class="map-address letter-brown" id="salon_address">
                    {{$salon_map->address}}
                </div>
            </div>
            <div id="map"></div>
        </div>
    </div>
    <script async src="{{asset('js/gmap.min.js')}}" charset="utf-8"></script>
@endsection
