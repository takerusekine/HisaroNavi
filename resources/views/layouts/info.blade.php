<ul class="slider">

    @if (!empty($info['exterior_img']))
        <li class="slideimg showimg"><img src="{{$info['exterior_img']}}" alt=""/></li>
    @else
        <li class="slideimg showimg"><img src="{{asset('img/img-'.str_pad( $info['id'] % 15, 2, 0, STR_PAD_LEFT)).'.jpg'}}" alt="" /></li>
    @endif

    @if (!empty($info['interior_img']))
        <li class="slideimg"><img src="{{$info['interior_img']}}" alt=""/></li>
    @else
        <li class="slideimg"><img src="{{asset('img/img-'.str_pad( ($info['id'] + 1) % 15, 2, 0, STR_PAD_LEFT)).'.jpg'}}" alt="" /></li>
    @endif

    @if (!empty($info['staff_img']))
        <li class="slideimg"><img src="a" alt=""/></li>
    @else
        <li class="slideimg"><img src="{{asset('img/img-'.str_pad( ($info['id'] + 2) % 15, 2, 0, STR_PAD_LEFT)).'.jpg'}}" alt="" /></li>
    @endif
</ul>
<ul class="sliderIndex">
    @if (!empty($info['exterior_img']))
        <li class="active"><img src="{{$info['exterior_img']}}" alt=""/></li>
    @else
        <li class="active"><img src="{{asset('img/img-'.str_pad( $info['id'] % 15, 2, 0, STR_PAD_LEFT)).'.jpg'}}" alt="" /></li>
    @endif

    @if (!empty($info['interior_img']))
        <li><img src="{{$info['interior_img']}}" alt=""/></li>
    @else
        <li><img src="{{asset('img/img-'.str_pad( ($info['id'] + 1) % 15, 2, 0, STR_PAD_LEFT)).'.jpg'}}" alt="" /></li>
    @endif

    @if (!empty($info['staff_img']))
        <li><img src="{{$info['staff_img']}}" alt=""/></li>
    @else
        <li><img src="{{asset('img/img-'.str_pad( ($info['id'] + 2) % 15, 2, 0, STR_PAD_LEFT)).'.jpg'}}" alt="" /></li>
    @endif
</ul>
@unless (empty($info['catch_msg']))
    <section>
        <h2>サロンの特徴</h2>
        <p class="sentence">{{$info['catch_msg']}}</p>
    </section>
@endunless
@unless (empty($info['summary']))
    <section>
        <h2>サロンからのひとこと</h2>
        <p class="sentence">
            <?php $summary = explode('■',$info['summary']);?>
            @foreach ($summary as $s)
                @unless (empty($s))
                    {{'■'.$s}}<br />
                @endunless
            @endforeach
        </p>
    </section>
@endunless
<section>
    <h2>サロンデータ</h2>
    <div class="row">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>営業時間</th>
                    <td>{{$info['open_time']}}</td>
                </tr>
                <tr>
                    <th>定休日</th>
                    <td>
                        @unless (empty($info['close_day']))
                            {{ $info['close_day'] }}
                        @else
                            -
                        @endunless
                    </td>
                </tr>
                <tr>
                    <th>
                        マシン台数
                    </th>
                    <td>
                        @unless (empty($info['machine_num']))
                            {{$info['machine_num']}}
                        @else
                            詳細情報なし
                        @endunless
                    </td>
                </tr>
                <tr>
                    <th>
                        駐車場
                    </th>
                    <td>
                        @unless (empty($info['parking']))
                            {{$info['parking']}}
                        @else
                            詳細情報なし
                        @endunless
                    </td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td>
                        @unless (empty($info['address']))
                            {{ $info['address'] }}
                        @else
                            -
                        @endunless
                    </td>
                </tr>
                <tr>
                    <th>
                        最寄り駅
                    </th>
                    <td>
                        @unless (empty($info['near_st']))
                            {{ $info['near_st'] }}
                        @else
                            -
                        @endunless
                    </td>
                </tr>
                <tr>
                    <th>アクセス</th>
                    <td>
                        @unless (empty($info['load_navi']))
                            {{ $info['load_navi'] }}
                        @else
                            -
                        @endunless
                    </td>
                </tr>
                <tr>
                    <th>電話</th>
                    <td>
                        <a href="tel:{{$info['tel']}}" class="hidden-sm-up">{{$info['tel']}}</a>
                        <p class="hidden-sm-down">{{$info['tel']}}</p>
                    </td>
                </tr>
                <tr>
                    <th>
                        ホームページ
                    </th>
                    <td>
                        @unless (empty($info['site_url']))
                            <a href="{{$info['site_url']}}" target="_blank">{{$info['site_url']}}</a>
                        @else
                            -
                        @endunless
                    </td>
                </tr>
                <tr>
                    <th>
                        客層
                    </th>
                    <td>
                        @unless (empty($info['customers']))
                            {{$info['customers']}}
                        @else
                            詳細情報なし
                        @endunless
                    </td>
                </tr>
                <tr>
                    <th>
                        こだわり条件
                    </th>
                    <td>
                        @unless (empty($info['kodawari']))
                            {{$info['kodawari']}}
                        @else
                            -
                        @endunless
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <div class="row">
            <h2>お問い合わせ</h2>
            <div class="col-xs-12 mt-5">
                <button type="button" class="btn btn-block exitbtn">
                    <a href="tel:{{$info->tel}}">
                        <i class="material-icons">phonelink_ring</i><span>{{$info->tel}}</span>
                    </a>
                </button>
            </div>
        </div>
    </div>
</section>
