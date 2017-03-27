<section id="regionList">
    <ul class="store-group">
        @if ( count($salons) === 0)
            <li class="store-group-item">
                この地域に日焼けサロンはありません
            </li>
        @else
            @foreach($salons as $salon)
                <li class="store-group-item">
                    <section>
                        <a href="{{action('SalonsController@show', ['id' => $salon['id']])}}">
                            <h2>{{ mb_convert_kana($salon->company->name, 'as', 'utf-8')}}</h2>
                            <p>
                                {{ mb_convert_kana($salon['name'], 'as', 'utf-8')}}
                            </p>
                            <div class="tagarea">
                                <?php $kodawariarr = explode('／', $salon['kodawari']); ?>
                                @unless (empty( $kodawariarr[0] ))
                                    <span class="label label-warning">{{ $kodawariarr[0] }}</span>
                                @endunless
                                @unless(empty( $kodawariarr[1] ))
                                    <span class="label label-secondary">{{ $kodawariarr[1] }}</span>
                                @endunless
                                @unless( empty( $kodawariarr[2] ))
                                    <span class="label label-info">{{ $kodawariarr[2] }}</span>
                                @endif
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <?php
                                    $imgnum = $salon['id'] % 15;
                                    ?>
                                    <img src="{{asset('img/img-'.str_pad($imgnum, 2, 0, STR_PAD_LEFT)).'.jpg'}}" alt="" />
                                </div>
                                <div class="media-body">
                                    <p class="catch">
                                        {{ mb_convert_kana(mb_substr($salon['catch_msg'], 0, 50), 'as', 'utf-8')}}
                                        @if (mb_strlen($salon['catch_msg']) > 50 )
                                            ...
                                        @endif
                                    </p>
                                    <dl>
                                        <dt>
                                            <i class="fa fa-jpy fa-fw" aria-hidden="true"></i>
                                        </dt>
                                        <dd>
                                            <p class="ellipsis">
                                                @if (empty($salon->min_price))
                                                    詳細データなし
                                                @else
                                                    {{number_format($salon->min_price). '円〜'}}
                                                @endif
                                            </p>
                                        </dd>
                                    </dl>
                                    <dl>
                                        <dt>
                                            <i class="fa fa-train fa-fw" aria-hidden="true"></i>
                                        </dt>
                                        <dd>
                                            <p class="ellipsis">
                                                @if( empty($salon['load_navi']))
                                                    交通情報なし
                                                @else
                                                    {{ $salon['load_navi'] }}
                                                @endif
                                            </p>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="media-right media-middle">
                                    <i class="fa fa-chevron-right fa-fw"></i>
                                </div>
                            </div>
                            <div class="tel-area">
    <a href="tel:{{mb_convert_kana($salon['tel'] , 'as', 'utf-8') }}" onclick="ga('send', 'event', 'click', 'tel-tap');">
        <i class="medium material-icons">phonelink_ring</i><span>{{mb_convert_kana($salon['tel'] , 'as', 'utf-8') }}</span>
    </a>
                            </div>
                        </a>
                    </section>
                </li>
            @endforeach
        @endif
    </ul>
</section>
