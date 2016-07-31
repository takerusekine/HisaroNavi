<?php $prepaids = $info->prepaid; ?>
    <h2>
        オトク情報
    </h2>
@unless(count($prepaids) === 0)
    <div class="otokulist">
    @foreach ($prepaids as $p)
        <dl>
            @if ($p['subject_person'] === '新規')
                <dt class="bg-inverse">
                    {{$p['subject_person']}}
                </dt>
            @else
                <dt class="bg-warning">
                    {{$p['subject_person']}}
                </dt>
            @endif

            <dd>
                @unless (empty($p['otoku_type']))
                    <span class="label label-danger">{{$p['otoku_type']}}</span>
                @endunless
                @unless (empty($p['price']) || $p['price'] === '-')
                <span class="text-danger pull-xs-right">
                    {{number_format($p['price']).'円'}}
                </span>
                @endunless
                @unless (empty($p['service_name']))
                    <h3>
                        {{$p['service_name']}}
                    </h3>
                  @endunless
                <p class="reasonableContent">
                    {{mb_convert_kana($p['service_content'], 'as', 'utf-8')}}
                </p>
                <div class="mt-5">
                    <button class="btn btn-block exitbtn">
                        <a href="">
                            <i class="material-icons">phonelink_ring</i><span>{{$info->tel}}</span>
                        </a>
                    </button>
                </div>
            </dd>
        </dl>
    @endforeach
</div>
@else
    <p>
        このサロンにはオトク情報がありません
    </p>
@endunless
