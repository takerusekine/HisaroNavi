<!DOCTYPE html>
<html lang="ja">
@include('layouts.head')
<body>
<header class="topheader">
  <nav class="navbar" id="topnav">
    <a href="{{ action('HomeController@index') }}">
    <img src="{{asset('img/hisaronavilogo.png')}}" alt="日サロナビロゴ" id="logo" style="width:auto;">
    </a>
  </nav>
    <button id="hamburger">
        <span class="bar bar-top"></span>
        <span class="bar bar-middle"></span>
        <span class="bar bar-bottom"></span>
    </button>
</header>
  <div class="bg-default">
    @yield('content')

    @unless (Request::url() == action('HomeController@index'))
        <div class="divider"></div>
        <div class="flex-around">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- navi-rect -->
<ins class="adsbygoogle rect"
     style="display:block"
     data-ad-client="ca-pub-2941448928581832"
     data-ad-slot="1383894900"
     data-ad-format="rectangle"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- navi-rect -->
<ins class="adsbygoogle rect hidden-xs-down"
     style="display:block"
     data-ad-client="ca-pub-2941448928581832"
     data-ad-slot="1383894900"
     data-ad-format="rectangle"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
    @endunless
    @include('layouts.feature')
    @include('selections.homelink')
    @if (Request::url() == action('HomeController@index'))
        <div class="flex-around">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- navi-rect -->
<ins class="adsbygoogle rect"
     style="display:block"
     data-ad-client="ca-pub-2941448928581832"
     data-ad-slot="1383894900"
     data-ad-format="rectangle"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- navi-rect -->
<ins class="adsbygoogle rect hidden-xs-down"
     style="display:block"
     data-ad-client="ca-pub-2941448928581832"
     data-ad-slot="1383894900"
     data-ad-format="rectangle"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
        @include('layouts.infonews')
    @endif

    @include('layouts.recommendarticle')
    @include('layouts.chbanner')

    <footer>
        <ul class="list-unstyled fa-ul">
            <li>
                <a href="//www.facebook.com/hiyake1696/">
                    <i class="fa fa-facebook fa-li fa-lg fa-fw" aria-hidden="true"></i>Facebook
                </a>
            </li>
            <li>
                <a href="//twitter.com/hiyake_1696">
                    <i class="fa fa-twitter fa-li fa-lg fa-fw" aria-hidden="true"></i>
                    Twitter
                </a>
            </li>
            <li>
                <a href="//www.instagram.com/pikaokun_1696/">
                    <i class="fa fa-instagram fa-li fa-lg fa-fw" aria-hidden="true"></i>Instagram
                </a>
            </li>
            <li>
                <a href="//hiyake1696.com/privacy-policy/">
                    <i class="fa fa-shield fa-li fa-lg fa-fw" aria-hidden="true"></i>プライバシーポリシー
                </a>
            </li>
            <li>
                <a href="//bulluck.co.jp/">
                    <i class="fa fa-building fa-li fa-lg fa-fw"></i>
                    運営会社：株式会社ブラック
                </a>
            </li>
        </ul>
        <a href="{{action('HomeController@index')}}" class="footer-logo">
            <img src="{{asset('img/navi-footer.png')}}" alt="日サロナビフッターロゴ" class="img-fluid"/>
        </a>
        <p class="text-xs-center">
            &copy; 2016, Bulluck Co.,Ltd. All rights Reserved.
        </p>
    </footer>
  </div>

  <!-- Scripts -->
  <script async src="https://use.fontawesome.com/429b346b73.js"></script>
  <script defer src="{{asset('js/wNumb.min.js')}}" charset="utf-8"></script>
  <script defer src="{{asset('js/nouislider.min.js')}}" charset="utf-8"></script>
  <script defer src="{{asset('js/js.cookie.min.js')}}" charset="utf-8"></script>
  <script defer src="{{asset('js/scripts.min.js')}}" charset="utf-8"></script>
  @unless (empty($salon_map))
      @if (Request::url() === action('MapController@index', ['id' => $salon_map->id]) )
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDA_VkXBDGZvaZOZ_qop6glaj9jEA_dRCs&callback=initMap" defer></script>
      @endif
  @endunless
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80036034-1', 'auto');
  ga('send', 'pageview');

</script>
 <div class="menu">
 <div class="container-fluid">
     <div class="row">
        <div class="col-xs-12">
        <ul>
            <li><a href="{{action('HomeController@index')}}"><i class="fa fa-fw fa-sun-o"></i>日サロナビトップ</a></li>
            <li><a href="{{action('SearchesController@getArea')}}"><i class="fa fa-fw fa-map"></i>エリア・地図で検索</a></li>
            <li><a href="{{action('SearchesController@getPrejudice')}}"><i class="fa fa-fw fa-hand-o-up"></i>こだわり条件で検索</a></li>
            <li><a href="//hiyake1696.com/" target="_blank"><i class="fa fa-fw fa-television"></i>日焼けチャンネルはこちら</a></li>
        </ul>
        <p class="menu-section-letter">特集から探す</p>
        <?php
                    $featsarr = array(
                        '1' => '格安サロン',
                        '2' => '初回割引あり',
                        '3' => '学割あり',
                        '4' => '深夜まで営業',
                        '5' => '女性割引あり',
                        '6' => 'マシーン種類豊富',
                        '7' => 'お得な回数券・プリペイドカードあり',
                    );
                     foreach ($featsarr as $key => $value) :?>

                    {!!Form::open(['method' => 'get', 'action' => 'ResultsController@getIndex']) !!}
                    <input type="hidden" name="kodawari[]" value="{{$value}}">
                    <button type="submit">
                        <img src="{{asset('img/feature-icon0'.$key.'.svg')}}" alt="{{$value}}アイコン" width="20" style="color:white"/>
                        <span>{{$value}}</span>
                    </button>
                    {!! Form::close() !!}
                <?php endforeach; ?>
        <p class="menu-section-letter">日サロナビ編集部セレクション</p>
        <?php $selectionArr = array(
                    '1' =>'駅近',
                    '2' =>'強力マシーンあり',
                    '3' =>'朝割引あり',
                    '4' =>'夜割引あり',
                    '5' =>'紹介割引あり',
                    '6' =>'ドリンクサービスあり',
                    '7' =>'完全個室',
                );
                $expArr = array(
                    '1' => '仕事帰りに嬉しい駅近のサロン！',
                    '2' => 'もっと黒くなりたい人に！',
                    '3' => '嬉しい朝得サロン！',
                    '4' => '夜に行くとおトク！',
                    '5' => '友人紹介でおトク！',
                    '6' => '焼いた後に嬉しいサービス！',
                    '7' => '完全個室の安全サロン！',
                );
                foreach ($selectionArr as $key => $value) : ?>
                {!!Form::open(['method' => 'get', 'action' => 'ResultsController@getIndex'])!!}
                <input type="hidden" name="kodawari[]" value="{{$value}}">
                <button type="submit">
                <i class="fa fa-check-square-o fa-fw" aria-hidden="true"></i>
                <span>
                  {{$value}}
                </span>
                </button>
                {!!Form::close()!!}
            <?php endforeach; ?>
        </div>
     </div>
 </div>
    </div>
    <div class="affiliate affiliate-left">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- navi-pc-side -->
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px"
     data-ad-client="ca-pub-2941448928581832"
     data-ad-slot="1480884907"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
    <div class="affiliate affiliate-right">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- navi-pc-side -->
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px"
     data-ad-client="ca-pub-2941448928581832"
     data-ad-slot="1480884907"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
</body>
</html>
