<!DOCTYPE html>
<html>
    @include('layouts.head')
    <body>
        <div class="container mapview-sp" id="map-view">
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
            <a href="maps" class="btn btn-map">地図アプリで開く</a>
        </div>
        <script>
            $(function(){
                var bh = $(window).height();
                var h1 = $('#company_map').outerHeight();
                var sah = $('#salon_address').outerHeight();
                var mapH = bh - h1-sah;
                $('#map').height(mapH);
                console.log(sah);
                console.log(bh);
                console.log(h1);
            });
        </script>
        <script async src="{{asset('js/gmap.min.js')}}" charset="utf-8"></script>
        <script async src="https://use.fontawesome.com/429b346b73.js"></script>
        @unless (empty($salon_map))
            @if (Request::url() === action('MapController@index', ['id' => $salon_map->id]) )
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDA_VkXBDGZvaZOZ_qop6glaj9jEA_dRCs&callback=initMap" async defer></script>
            @endif
        @endunless
        <script defer src="{{asset('js/wNumb.min.js')}}" charset="utf-8"></script>
        <script defer src="{{asset('js/nouislider.min.js')}}" charset="utf-8"></script>
        <script defer src="{{asset('js/js.cookie.min.js')}}" charset="utf-8"></script>
        <script defer src="{{asset('js/scripts.min.js')}}" charset="utf-8"></script>
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-80036034-1', 'auto');
        ga('send', 'pageview');

      </script>
    </body>
</html>
