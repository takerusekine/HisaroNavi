<section id="feature">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>特集から探す</h2>
            </div>
        </div>
            <div class="row">
                <div class="list-group">
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

                    {!!Form::open(['method' => 'get', 'action' => 'ResultsController@getIndex', 'class' => 'list-group-item']) !!}
                    <input type="hidden" name="kodawari[]" value="{{$value}}">
                    <button type="submit">
                        <img src="{{asset('img/feature-icon0'.$key.'.svg')}}" alt="{{$value}}アイコン" width="20"/>
                        <span>{{$value}}</span>
                        <i class="fa fa-chevron-right fa-fw pull-xs-right"></i>
                    </button>
                    {!! Form::close() !!}
                <?php endforeach; ?>
                </div>
        </div>
    </div>
</section>
