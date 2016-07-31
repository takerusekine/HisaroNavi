    <div class="container" id="regionSelect">
        <div class="row">
            <div class="col-xs-12">
                <h1>エリア選択</h1>
                <div style="padding:8px 0;">
                    <span class="label label-warning">選択したエリア</span>
                    <span>{{$area}}</span>

                    <p class="count" id="count">{{'Hits:' . count($salons) . '件'}}</p>
                </div>
                <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#refineAreaModal">さらにエリアを絞る</button>
            </div>
        </div>
        <div class="row" id="region-salon-list">
            @include('layouts.regionlist')
        </div>
    </div>
    <section id="refineAreaModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="area-refine" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">エリア絞り込み</div>
                <div class="modal-body">
                    <p id="ajax-counter"></p>
                    <p id="loading">
                        <img src="{{asset('img/sunny.gif')}}" alt="ajaxload" />
                    </p>
                    {!! Form::open(['method' => 'get', 'id' => 'refineAreaForm']) !!}
                    <input type="hidden" name="lg-region" value='{{$area}}'>
                    <table class="area-refine-table">
                        <tbody>
                                <?php foreach ($area_arr as $akey => $aval):?>
                                    <tr>
                                    <th>
                                        {{$akey}}
                                    </th>
                                    <td>
                                        @if (is_array($aval))

                                            @foreach ($aval as $subkey => $subval)
                                                <label class="c-input c-checkbox">
                                                    <input type="checkbox" name="area" id="" value="{{$subval}}">
                                                    <span class="c-indicator"></span>
                                                    {{$subkey}}
                                                </label>
                                            @endforeach
                                        @else
                                            <label class="c-input c-checkbox">
                                                <input type="checkbox" name="area" id="" value="{{$aval}}">
                                                <span class="c-indicator"></span>
                                                {{'全域'}}
                                            </label>
                                        @endif
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                        </tbody>
                    </table>
                    {!! Form::close() !!}
                </div>

                <div class="modal-footer">
                    <div class="flex-center">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">検索する</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
