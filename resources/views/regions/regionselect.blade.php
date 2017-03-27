    <div class="container" id="regionSelect">
        <div class="row">
            <div class="col-xs-12">
                <h1>詳細エリア検索結果</h1>
                <div class="mt-5 letter-brown">
                    <span class="label label-secondary">
                        エリア
                    </span>
                    @if (is_array($area_cond))
                        {{implode($area_cond, ' / ')}}
                    @else
                        {{$area_cond}}
                    @endif
                </div>
                <div style="padding:8px 0;">
                    <p class="count" id="count">{{'Hits:' . count($salons) . '件'}}</p>
                </div>
                <a href="{{action('SearchesController@getIndex')}}" class="btn btn-default">
                    <i class="material-icons">search</i>
                    <span>
                        こだわり条件で絞る
                    </span>
                </a>
            </div>
        </div>
        <div class="row" id="region-salon-list">
            @include('layouts.regionlist')
        </div>
    </div>
