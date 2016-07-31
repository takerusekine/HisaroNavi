{!! Form::open(['methor' => 'get', 'action' => 'SearchesController@result','class' => 'form-group']) !!}
<div class="col-xs-12">
    <label for="searcharea"  class="label label-warning">現在のエリア</label>
    <span>{{$area}}</span>
    <p id="ajax-counter"></p>
    <p id="loading">
        <img src="{{asset('img/sunny.gif')}}" alt="" />
    </p>

    <input type="hidden" name="lg-region" value="{{$area}}" id="searcharea">

</div>
<table class="table search-table">
    <tbody>
        <tr>
            <th>こだわり条件</th>
            <td>
                <?php $rks = $radio['kodawari'] ?>
                @foreach ($rks as $rk)
                    <label class="c-input c-checkbox">
                        {!! Form::checkbox('kodawari', $rk) !!}
                        <span class="c-indicator"></span>
                        {{$rk}}
                    </label>
                @endforeach
            </td>
        </tr>
        <tr>
            <th>サロン情報</th>
            <td>
                <?php $ris = $radio['salon_info']; ?>
                @foreach ($ris as $ri)
                    <label class="c-input c-checkbox">
                        {!! Form::checkbox('kodawari', $ri) !!}
                        <span class="c-indicator"></span>
                        {{$ri}}
                    </label>
                @endforeach
            </td>
        </tr>
        <tr>
            <th>価格帯</th>
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
            <td>
                <?php $ros = $radio['other']; ?>
                @foreach ($ros as $ro)
                    <label class="c-input c-checkbox">
                        {!! Form::checkbox('kodawari', $ro) !!}
                        <span class="c-indicator"></span>
                        {{$ro}}
                    </label>
                @endforeach
            </td>
        </tr>
    </tbody>
</table>
{!! Form::close() !!}
