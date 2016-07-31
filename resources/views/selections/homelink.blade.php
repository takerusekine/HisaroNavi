<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>
                    編集部セレクション
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="list-group">
                    {!!Form::open(['method' => 'get', 'action' => 'SelectionController@getNearStation', 'class' => 'list-group-item selection-list'])!!}
                    <input type="hidden" name="area_flash" value="";>
                    <button type="submit" class="btn-block">
                        <div class="media">
                            <div class="media-left media-middle">
                                <img src="{{asset('img/selection-1.jpg')}}" alt="" class="img-fluid" />
                            </div>
                            <div class="media-body">
                                <h3>
                                    駅近のサロン
                                </h3>
                                <p>
                                    仕事帰りに嬉しい駅近のサロン
                                </p>
                            </div>
                            <span class="media-right media-middle">
                                <i class="material-icons">keyboard_arrow_right</i>
                            </span>
                        </div>
                    </button>
                    {!! Form::close() !!}

                    {!!Form::open(['method' => 'get', 'action' => 'SelectionController@getPowerfulMachine', 'class' => 'list-group-item selection-list'])!!}
                    <input type="hidden" name="area_flash" value="";>
                    <button type="submit" class="btn-block">
                        <div class="media">
                            <div class="media-left media-middle">
                                <img src="{{asset('img/selection-2.jpg')}}" alt="" class="img-fluid" />
                            </div>
                            <div class="media-body">
                                <h3>
                                    強力マシーンのあるサロン
                                </h3>
                                <p>
                                    もっと黒くなりたい人に！
                                </p>
                            </div>
                            <span class="media-right media-middle">
                                <i class="material-icons">keyboard_arrow_right</i>
                            </span>
                        </div>
                    </button>
                    {!! Form::close() !!}

                    {!!Form::open(['method' => 'get', 'action' => 'SelectionController@getMorningDiscount', 'class' => 'list-group-item selection-list'])!!}
                    <input type="hidden" name="area_flash" value="";>
                    <button type="submit" class="btn-block">
                        <div class="media">
                            <div class="media-left media-middle">
                                <img src="{{asset('img/selection-3.jpg')}}" alt="" class="img-fluid" />
                            </div>
                            <div class="media-body">
                                <h3>
                                    朝割引ありのサロン
                                </h3>
                                <p>
                                    嬉しい朝トクサロン！
                                </p>
                            </div>
                            <span class="media-right media-middle">
                                <i class="material-icons">keyboard_arrow_right</i>
                            </span>
                        </div>
                    </button>
                    {!! Form::close() !!}

                    {!!Form::open(['method' => 'get', 'action' => 'SelectionController@getNightDiscount', 'class' => 'list-group-item selection-list'])!!}
                    <input type="hidden" name="area_flash" value="";>
                    <button type="submit" class="btn-block">
                        <div class="media">
                            <div class="media-left media-middle">
                                <img src="{{asset('img/selection-4.jpg')}}" alt="" class="img-fluid" />
                            </div>
                            <div class="media-body">
                                <h3>
                                    夜割引ありのサロン
                                </h3>
                                <p>
                                    夜に行ってもおトク！
                                </p>
                            </div>
                            <span class="media-right media-middle">
                                <i class="material-icons">keyboard_arrow_right</i>
                            </span>
                        </div>
                    </button>
                    {!! Form::close() !!}

                    {!!Form::open(['method' => 'get', 'action' => 'SelectionController@getIntroDiscount', 'class' => 'list-group-item selection-list'])!!}
                    <input type="hidden" name="area_flash" value="";>
                    <button type="submit" class="btn-block">
                        <div class="media">
                            <div class="media-left media-middle">
                                <img src="{{asset('img/selection-5.jpg')}}" alt="" class="img-fluid" />
                            </div>
                            <div class="media-body">
                                <h3>
                                    紹介割引あり
                                </h3>
                                <p>
                                    友人紹介でおトク！
                                </p>
                            </div>
                            <span class="media-right media-middle">
                                <i class="material-icons">keyboard_arrow_right</i>
                            </span>
                        </div>
                    </button>
                    {!! Form::close() !!}

                    {!!Form::open(['method' => 'get', 'action' => 'SelectionController@getDrinkService', 'class' => 'list-group-item selection-list'])!!}
                    <input type="hidden" name="area_flash" value="";>
                    <button type="submit" class="btn-block">
                        <div class="media">
                            <div class="media-left media-middle">
                                <img src="{{asset('img/selection-6.jpg')}}" alt="" class="img-fluid" />
                            </div>
                            <div class="media-body">
                                <h3>
                                    ドリンクサービスありのサロン
                                </h3>
                                <p>
                                    焼いた後に嬉しいサービス！
                                </p>
                            </div>
                            <span class="media-right media-middle">
                                <i class="material-icons">keyboard_arrow_right</i>
                            </span>
                        </div>
                    </button>
                    {!! Form::close() !!}

                    {!!Form::open(['method' => 'get', 'action' => 'SelectionController@getPrivateRoom', 'class' => 'list-group-item selection-list'])!!}
                    <input type="hidden" name="area_flash" value="";>
                    <button type="submit" class="btn-block">
                        <div class="media">
                            <div class="media-left media-middle">
                                <img src="{{asset('img/selection-7.jpg')}}" alt="" class="img-fluid" />
                            </div>
                            <div class="media-body">
                                <h3>
                                    完全個室のサロン
                                </h3>
                                <p>
                                    完全個室の安全サロン！
                                </p>
                            </div>
                            <span class="media-right media-middle">
                                <i class="material-icons">keyboard_arrow_right</i>
                            </span>
                        </div>
                    </button>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
