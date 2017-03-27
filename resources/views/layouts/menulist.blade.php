<h2>
    日焼けマシーン
</h2>
@unless (count($info->menu) === 0)
    <div class="card">
        <div class="card-header">
            マシーン絞り込み
        </div>
        <div class="card-body">
            <div class="container-fluid flex-center refine-btns">
                <div class="col-xs-8">
                    <button class="btn btn-block btn-secondary-outline refine-btn-active" id="btn-all" data-refine="all">全て</button>
                </div>
                <div class="col-xs-4">
                    <button class="btn btn-block btn-secondary-outline" id="btn-face" data-refine="1">顔焼き</button>
                </div>
            </div>
            <div class="container-fluid flex-center refine-btns">
                <div class="col-xs-4">
                    <button class="btn btn-block btn-secondary-outline" id="btn-beginner" data-refine="2">弱め</button>
                </div>
                <div class="col-xs-4">
                    <button class="btn btn-block btn-secondary-outline" id="btn-middle" data-refine="3">中強度</button>
                </div>
                <div class="col-xs-4">
                    <button class="btn btn-block btn-secondary-outline" id="btn-pro" data-refine="4">強め</button>
                </div>
            </div>
        </div>
    </div>
@endunless
<div class="refine-fix-wrapper">
<ul class="refine-fix">
    <li class="refine-active" data-refine="all">全</li>
    <li data-refine="1">顔</li>
    <li data-refine="2">弱</li>
    <li data-refine="3">中</li>
    <li data-refine="4">強</li>
</ul>
</div>
<div class="menulist">

        <?php $menus = $info->menu;
        $i=0;?>
        @unless (count($menus) === 0)

            @foreach ($menus as $m)
                @if($m['grade'] === '新規')
                    <dl data-grade="0">
                        <dt class="bg-inverse">
                            {{$m['grade']}}
                        </dt>
                    @elseif($m['grade'] === '顔')
                        <dl data-grade="1">
                            <dt class="bg-inverse">
                                顔焼き
                            </dt>
                        @elseif($m['grade'] === '初')
                            <dl data-grade="2">
                                <dt class="bg-inverse">
                                    弱め
                                </dt>
                            @elseif($m['grade'] === '中')
                                <dl data-grade="3">
                                    <dt class="bg-inverse">
                                        中強度
                                    </dt>
                                @elseif($m['grade'] === '上')
                                    <dl data-grade="4">
                                        <dt class="bg-inverse">
                                            強め
                                        </dt>
                                    @elseif($m['grade'] === '-')
                                        <dl data-grade="5">
                                            <dt class="bg-inverse">
                                                全員
                                            </dt>
                                        @endif
                                        <dd>
                                            <div>
                                                @unless ($m['duration'] === '-')
                                                    <span class="label label-info">
                                                        {{$m['duration']. '分'}}
                                                    </span>
                                                @endunless
                                                @unless ($m['watt']==='-')
                                                    <span class="label label-primary">
                                                        {{ $m['watt'].'W' }}
                                                    </span>
                                                @endunless
                                            </div>
                                            <h3 class="menu_machine">{{ mb_convert_kana($m['machine_name'], 'as', 'utf-8') }}</h3>
                                            <div class="media">
                                                <div class="media-left">
                                                    <?php
                                                    $num = str_pad($m['id']%15, 2, 0, STR_PAD_LEFT);
                                                    ?>
                                                    <img src="{{asset('img/img-' . $num . '.jpg')}}" alt="" />
                                                </div>
                                                <div class="media-body">
                                                    <dl>
                                                        <dd>
                                                            <span>
                                                                条件：
                                                                @if ($m['use_cond'] === '-')
                                                                    どなたでも
                                                                @else
                                                                    {{$m['use_cond']}}
                                                                @endif
                                                            </span>
                                                            <div>
                                                                    @if (ctype_digit($m['menu_price']))
                                                                        <p class="text-danger">
                                                                            {{number_format($m['menu_price']).'円'}}
                                                                        </p>
                                                                    @else
                                                                        <p>
                                                                            価格詳細情報なし
                                                                        </p>
                                                                    @endif
                                                            </div>

                                                        </dt>
                                                    </dl>
                                                </div>
                                            </div>
                                            @unless (empty($m['machine_exp']) || $m['machine_exp'] === '-')
                                                <div class="detailbtn">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-xs-5">
                                                                <button class="btn btn-block btn-default" data-toggle="modal" data-target="#detailModal{{$i}}">
                                                                    <i class="material-icons">search</i><span>詳細を見る</span>
                                                                </button>

                                                            </div>
                                                            <div class="col-xs-7">
                                                                <button type="button"  class="btn btn-block exitbtn">
                                                                    <a href="tel:{{$info->tel}}" onclick="ga('send', 'event', 'click', 'tel-tap');">
                                                                        <i class="material-icons">phonelink_ring</i><span>{{$info->tel}}</span>
                                                                    </a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                    <div class="detailbtn">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <button type="button"  class="btn btn-block exitbtn">
                                                                        <a href="tel:{{$info->tel}}" onclick="ga('send', 'event', 'click', 'tel-tap');">
                                                                            <i class="material-icons">phonelink_ring</i><span>{{$info->tel}}</span>
                                                                        </a>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            @endunless
                                            <div class="modal fade" id="detailModal{{$i}}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-title">
                                                            <h2>
                                                                メニュー詳細
                                                            </h2>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h3 class="menu_machine">
                                                                {{mb_convert_kana($m['machine_name'], 'as', 'utf-8')}}
                                                            </h3>
                                                            @unless(empty($m['menu_price']))
                                                                <span class="text-danger">
                                                                    {{ number_format($m->menu_price). '円' }}
                                                                </span>
                                                            @endunless
                                                            @unless ($m->watt === '-' )
                                                                <span class="label label-secondary">
                                                                    {{ $m->watt. 'W' }}
                                                                </span>
                                                            @endunless
                                                            @unless (empty($m->use_cond))
                                                                <p>
                                                                    @if ($m->use_cond === '-')
                                                                        {{ '条件：どなたでも' }}
                                                                    @else
                                                                            {{ '条件：' . $m->use_cond }}
                                                                    @endif
                                                                </p>
                                                            @endunless
                                                            @unless (empty($m['machine_exp']))
                                                                <p>
                                                                    {{$m['machine_exp']}}
                                                                </p>
                                                            @else
                                                                <p>
                                                                    マシン情報なし
                                                                </p>
                                                            @endunless
                                                            <div class="mt-10">
                                                                <button type="button" class="btn btn-block exitbtn">
                                                                    <a href="tel:{{$info->tel}}" onclick="ga('send', 'event', 'click', 'tel-tap');"><i class="material-icons">phonelink_ring</i><span>{{$info->tel}}</span></a>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </dd>
                                    </dl>
                                    <?php $i++; ?>
                                @endforeach
        @else
            <p>
                このサロンにはメニューの詳細情報がありません。
            </p>
        @endunless

        <?php
            $options = $info->option;
         ?>
</div>
<section class="option-list">
    <h2 class="mt-12">オプション</h2>
    @unless (count($options) === 0)
        <ul class="list-group">
            @foreach ($options as $o)
                <li class="list-group-item">
                    @unless ($o->option_price === '-')
                    <h3>
                        {{$o->options}}
                    </h3>
                    @else
                        <h3 style="width:100%">
                            {{$o->options}}
                        </h3>
                    @endunless

                    @unless ($o->option_price === '-')
                        <span class="text-danger">
                            {{number_format($o->option_price).'円'}}
                        </span>
                    @endunless
                    @unless ($o->explanation === '-')
                        <p>
                            {{$o->explanation}}
                        </p>
                    @endunless
                </li>
            @endforeach
        </ul>
        @else
        <p>
            このサロンにオプションメニューはありません。
        </p>
    @endunless
</section>
