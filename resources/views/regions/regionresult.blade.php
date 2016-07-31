        <div class="row">
            <div class="col-xs-12">
                <h2>エリア選択</h2>
                <div style="padding:8px 0;">

                    <p class="count" id="count">{{'Hits:' . count($salons) . '件'}}</p>
                    
                </div>
                <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#refineAreaModal">さらにエリアを絞る</button>
            </div>
        </div>
        <div class="row" id="region-salon-list">
            @include('layouts.regionlist')
        </div>
