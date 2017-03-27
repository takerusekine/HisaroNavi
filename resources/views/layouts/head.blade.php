<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{$titletag}}</title>
  <meta name="description" content="{{$description}}">
  <meta name="keywords" content="{{$keywords}}">
  {{-- OGP --}}
  <meta property="og:title" content="日焼けサロン | 日焼けサロンのことなら日サロナビ">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://hiyake1696.com/navi/" />
  <meta property="og:image" content="{{asset('img/screenshot.png')}}" height="200" width="200" alt="トップ画像">
  <meta property="og:description" content="{{$description}}" />
  <meta property="og:site_name" content="日サロナビ" />
  <meta property="og:locale" content="ja_JP" />
  {{-- Facebook --}}
  <meta property="fb:app_id" content="1062246737191557"/>
  <meta property="fb:admins" content="100008327171273"/>
  {{-- Twitter card --}}
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@hiyake_1696">
  <meta name="twitter:title" content="日焼けサロン | 日焼けサロンのことなら日サロナビ">
  <meta name="twitter:description" content="{{$description}}">
  <meta name="twitter:image" content="{{asset('img/screenshot.png')}}">
  <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script defer src="{{asset('js/tether.min.js')}}" charset="utf-8"></script>
  <script defer src="{{asset('js/bootstrap.min.js')}}" charset="utf-8"></script>
  <script defer src="{{asset('js/jquery.japan-map.min.js')}}" charset="utf-8"></script>
  <link rel="stylesheet" href="{{asset('css/nouislider.min.css')}}" charset="utf-8">
  <link rel="stylesheet" href="{{asset('css/nouislider.tooltips.css')}}" charset="utf-8">
  <link rel="stylesheet" href="{{asset('css/app.css')}}" charset="utf-8">
<?php $canonical = $_SERVER["REQUEST_URI"];
$canonical = str_replace("/com.hiyake1696", "http://hiyake1696.com", $canonical);
?>  
<link rel="canonical" href="{{$canonical}}">
</head>
