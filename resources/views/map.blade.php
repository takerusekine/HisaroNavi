@extends('app')
@section('content')
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH5HaURJ0FPsE-C5G6VWF60f26mW9nGkM&signed_in=true&callback=initMap" async defer></script>
    <script src="{{asset('js/gmap.min.js')}}" charset="utf-8"></script>
    <div id="gps">
        <style media="screen">
        #map {
            height: 300px;
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    現在地
                    <div id="map">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
