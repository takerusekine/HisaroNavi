<section id="selection">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>
                    日サロナビ編集部セレクション
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="list-group">
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
                {!!Form::open(['method' => 'get', 'action' => 'ResultsController@getIndex', 'class' => 'list-group-item'])!!}
                <input type="hidden" name="kodawari[]" value="{{$value}}">
                <button type="submit">
                    <div class="media">
                        <div class="media-left media-middle">
                            <img src="{{asset('img/selection-'.$key.'.jpg')}}" alt="{{$value}}の日焼けサロン"/>
                        </div>
                        <div class="media-body">
                            <h3>
                                {{$value}}の日焼けサロン
                            </h3>
                            <p>
                                {{$expArr[$key]}}
                            </p>
                        </div>
                        <span class="media-right media-middle">
                            <i class="fa fa-chevron-right fa-fw"></i>
                        </span>
                    </div>
                </button>
                {!!Form::close()!!}
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
