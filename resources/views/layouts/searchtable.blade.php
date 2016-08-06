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
                        {!! Form::checkbox('kodawari[]', $rk) !!}
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
                        {!! Form::checkbox('kodawari[]', $ri) !!}
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
                <?php $args =[];
                    for ($i=1; $i <= 20 ; $i++) {
                        array_push($args, $i*1000);
                    }
                  ?>
                  <select class="c-select" name="lower_price">
                      <option value="0">下限金額</option>
                      @foreach ($args as $a)
                          <option value="{{$a}}">{{$a.'円'}}</option>
                      @endforeach
                  </select>
                  ~
                  <select class="c-select" name="upper_price">
                      <option value="0">上限金額</option>

                      @foreach ($args as $a)
                          <option value="{{$a}}">{{$a.'円'}}</option>
                      @endforeach
                  </select>

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
                        {!! Form::checkbox('kodawari[]', $ro) !!}
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
