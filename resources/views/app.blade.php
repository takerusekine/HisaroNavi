<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{$titletag}} | 日サロナビ</title>
  <meta name="description" content="{{$description}}">
  <meta name="keywords" content="{{$keywords}}">
  <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
  <script src="{{asset('js/jquery.cookie.min.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/tether.min.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/bootstrap.min.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/jquery.japan-map.min.js')}}" charset="utf-8"></script>
  <link rel="stylesheet" href="{{asset('css/app.css')}}" charset="utf-8">
</head>
<body>
  <div class="collapse" id="exCollapsingNavbar">
    <div class="bg-faded p-a-1">
      <h4 class="text-muted">Contents Menu</h4>
      <ul class="nav nav-stacked">
        <li>
          {!! link_to_action('HomeController@index', 'ホーム', array(), ['class' => 'nav-link' ]) !!}
        </li>
        <li>
          {!! link_to_action('HomeController@index', 'エリア検索', array(), ['class' => 'nav-link' ]) !!}
        </li>
        <li>
          {!! link_to_action('HomeController@index', 'こだわり検索', array(), ['class' => 'nav-link' ]) !!}
        </li>
        {{-- <li>
          {!! link_to_action('RegionController@getHokkaido', '北海道', array() ,['class' => 'nav-link']) !!}
        </li> --}}
      </ul>
    </div>
  </div>
  <nav class="navbar" id="topnav">
    <span class="text-lg"><a href="{{ action('HomeController@index') }}"><img src="{{asset('img/hisaronavilogo.png')}}" alt="ロゴ" id="logo"></a></span>
    <button class="navbar-toggler pull-xs-right" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
    &#9776;
    </button>
  </nav>
  <div class="bg-default">
    <div id="appnav">

        <a class="nav-link text-xs" href="//hiyake1696.com" target="_blank">
            <img src="{{asset('img/sunny.gif')}}" alt="日焼けチャンネル" width="20"/>
            <span>日焼け派のための日焼けチャンネルはこちらから！</span>
            <i class="material-icons">launch</i>
        </a>
    </div>
    @yield('content')
    @include('layouts.recommendarticle')
    @include('layouts.chbanner')

    <footer>
      &copy; 2016, Bulluck Co.,Ltd. All rights Reserved.
    </footer>
  </div>

  <!-- Scripts -->

  <script async src="https://use.fontawesome.com/1eb9d638f6.js"></script>

  <script src="{{asset('js/scripts.min.js')}}" charset="utf-8"></script>
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
