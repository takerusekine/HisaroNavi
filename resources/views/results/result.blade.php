
    <div class="row">
        <div class="col-xs-12">
               <div class="flex-center" id="result-search">
                   <a href="{{action('SearchesController@getArea')}}" class="btn btn-default" style="width:45%">
                       <i class="material-icons">public</i><span>エリア絞り込み</span>
                   </a>
                   <a href="{{action('SearchesController@getPrejudice')}}" class="btn btn-default" style="width:45%;margin-left:12px">
                       <i class="material-icons">touch_app</i><span>こだわり条件変更</span>
                   </a>
               </div>
        </div>
    </div>
    <div class="row flex-center">
        <div class="col-xs-11">
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
    <div class="row">
        <div class="divider"></div>
        <h2 class="under_bc">
            @if (is_array($areaname))
                {{implode($areaname, '・')}}
            @else
                {{$areaname}}
            @endif
            の日焼けサロン情報
        </h2>
    </div>
    <div class="row" id="kodawari-row">
        <section id="regionList">
            @if (count($salons) <= 0)
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="mb-5 letter-brown">
                                お探しの条件の日焼けサロンはありません。
                            </p>
                            <div class="arrow text-xs-center">
                                この地域の日焼けサロン
                            </div>
                        </div>
                    </div>
                </div>
            @endif
                @if ( count($salons) <= 0)
                    <ul class="store-group">
                    <?php $i = 0; ?>
                    @foreach ($zero_count as $salon)
                        @if ($i < 5)
                            @include('results.list')
                        @else
                            @if ($i === 5)
                                <li class="store-group-item sgi-wrap" style="padding:0;display:none;">
                                    <ul class="sgi-child">
                                    @endif
                                @include('results.list')
                            @if ($i === count($zero_count) - 1)
                                    </ul>
                                </li>
                            @endif
                        @endif
                        <?php $i++; ?>
                    @endforeach
                </ul>
                @if (count($zero_count) > 5)
                    <div class="flex-center col-xs-12 mb-10">
                        <button type="button" class="btn btn-block btn-default" name="continue-btn">
                            <i class="material-icons">playlist_add</i><span>続きを見る</span>
                        </button>
                    </div>
                @endif
                @else
                    <ul class="store-group">
                        @foreach ($salons as $salon)
                            @include('results.list')
                        @endforeach
                    </ul>
                @endif
        </section>
    </div>
