<table class="table search-table">
    <tbody>
        <tr>
            <th>こだわり条件</th>
        </tr>
        <tr>
            <td>
                <?php $rks = $radio['kodawari'] ?>
                @foreach ($rks as $rk)
                    <label class="c-input c-checkbox">
                        @if (is_array($cond))
                            @if (in_array($rk, $cond))
                                {!! Form::checkbox('kodawari[]', $rk, true) !!}
                            @else
                                {!! Form::checkbox('kodawari[]', $rk) !!}
                            @endif
                        @else
                            {!! Form::checkbox('kodawari[]', $rk) !!}
                        @endif
                        <span class="c-indicator"></span>
                        {{$rk}}
                    </label>
                @endforeach
            </td>
        </tr>
        <tr>
            <th>サロン情報</th>
        </tr>
        <tr>
            <td>
                <?php $ris = $radio['salon_info']; ?>
                    @foreach ($ris as $ri)
                        <label class="c-input c-checkbox">
                            @if (is_array($cond))
                                @if (in_array($ri, $cond))
                                    {!! Form::checkbox('kodawari[]', $ri, true) !!}
                                @else
                                    {!! Form::checkbox('kodawari[]', $ri) !!}
                                @endif
                            @else
                                {!! Form::checkbox('kodawari[]', $ri) !!}
                        @endif
                            <span class="c-indicator"></span>
                            {{$ri}}
                        </label>
                    @endforeach


            </td>
        </tr>
        <tr>
            <th>価格帯</th>
        </tr>
        <tr>
            <td>
                <div>
                    <label class="c-input c-checkbox" id="slider-check">
                        @unless (isset($_COOKIE['refineprice']))
                            {!! Form::checkbox('pricerefine', 1, true) !!}
                        @else
                            @if ($_COOKIE['refineprice'] == 1)
                                {!! Form::checkbox('pricerefine', 1, true) !!}

                            @else
                                {!! Form::checkbox('pricerefine', 0, false) !!}

                            @endif
                        @endunless
                        <span class="c-indicator"></span>
                        価格帯を絞り込む
                    </label>
                </div>
                <div id="range-slider"></div>
                <input type="hidden" name="lower-price" value="" id="lowerPrice">
                <input type="hidden" name="upper-price" value="" id="upperPrice">

            </td>
        </tr>
        <tr>
            <th>その他</th>
        </tr>
        <tr>
            <td>
                <?php $ros = $radio['other']; ?>
                @foreach ($ros as $ro)
                    <label class="c-input c-checkbox">
                        @if (is_array($cond))
                            @if (in_array($ro, $cond))
                                {!! Form::checkbox('kodawari[]', $ro, true) !!}

                            @else
                                {!! Form::checkbox('kodawari[]', $ro) !!}

                            @endif
                        @else
                            {!! Form::checkbox('kodawari[]', $ro) !!}

                        @endif
                        <span class="c-indicator"></span>
                        {{$ro}}
                    </label>
                @endforeach
            </td>
        </tr>
    </tbody>
</table>
<div class="flex-center bottom-fix searchform">
    <button type="button" class="btn btn-default" onclick="history.back()">
        <i class="material-icons">undo</i><span>キャンセル</span>
    </button>
    <button type="submit" class="btn btn-default">
        <i class="material-icons">search</i>
        <span>検索する</span>
    </button>
</div>
