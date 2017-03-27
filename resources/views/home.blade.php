@extends('app') @section('content')
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="area-header">
        <div>
          <label for="areaname" class="label label-warning" style="margin-right: 4px;margin-bottom:0;">現在のエリア</label>
          <span id="areaname">
                            @if (isset($_COOKIE['hisaronavi_area']))
                                {{$_COOKIE['hisaronavi_area']}}
                            @else
                                未設定です
                            @endif
                        </span>
        </div>
        <button type="button" class="btn btn-sm btn-warning-outline font-weight-normal" id="regionBtn">
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
          <a href="{{action('SearchesController@getArea')}}" class="nav-link" style="padding:0;width:100%;">
            <i class="material-icons" style="font-size:2.5rem;">public</i>
            <div>
              <strong>エリア・地図</strong><br>で検索
            </div>
          </a>
        </li>
        <li class="btn btn-secondary pAll-0">
          <a href="{{action('SearchesController@getPrejudice')}}" class="nav-link" style="padding:0;width:100%;">
            <i class="material-icons" style="font-size:2.5rem;">touch_app</i>
            <div>
              <strong>こだわり条件</strong><br />で検索
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="row flex-center">
    <div class="col-xs-11 col-sm-9 mt-20">
      <form action="http://www.google.co.jp/cse" id="cse-search-box" class="form-group">
  <div>
    <input type="hidden" name="cx" value="partner-pub-2941448928581832:3872162108" />
    <input type="hidden" name="ie" value="UTF-8" />
    <div class="flex-around">
    <input type="text" name="q" class="form-control" style="margin-right:8px;" />
    <input type="submit" name="sa" value="検索" class="btn btn-sm btn-warning"/>
    </div>
  </div>
</form>

<script type="text/javascript" src="http://www.google.co.jp/coop/cse/brand?form=cse-search-box&amp;lang=ja"></script>

    </div>
  </div>
</div>
<div class="modal fade" data-backdrop="static" id="areamodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3"
  aria-hidden="true">
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