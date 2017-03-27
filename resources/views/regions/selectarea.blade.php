@extends('app')
@section('content')
    <div>
        {!! Breadcrumbs::render('areaSearch') !!}
    </div>
    <h1 class="result-h1">{{$area}}エリアでエリア検索</h1>
    @include('layouts.condtable')

{!!Form::open(['class' => 'form-group', 'id' => 'area-choice-form', 'action' => 'ResultsController@getIndex', 'method' => 'get'])!!}
    <table class="table" id="area-choice-table">
        <tbody>
            <?php $k = 0; ?>
            <?php foreach ($selectAreaArr as $skey => $sval):?>
                <?php if (is_array($sval)) :?>
                    <tr>
                        <td class="colspan2 parent-td">
                            <label class="c-input c-checkbox">
                                @if (is_array($detail_area))
                                    @if(in_array($sval, $detail_area))
                                        <input type="checkbox" name="parent-check" value="{{$skey}}" data-num="{{$k}}" checked="checked">
                                        {!! Form::checkbox('parent-check', $skey, true, ['data-num' => $k]) !!}
                                    @else
                                        {!! Form::checkbox('parent-check', $skey, false, ['data-num' => $k]) !!}

                                    @endif
                                @else
                                    {!! Form::checkbox('parent-check', $skey, false, ['data-num' => $k]) !!}
                                @endif
                                <span class="c-indicator"></span>
                                {{$skey}}
                                <?php $sum = 0; ?>
                                    <?php foreach ($sval as $nestkey => $nestval) :?>
                                        <?php
                                            $sum += $salons->where('area_code', strval($nestval))->count();
                                         ?>
                                    <?php endforeach; ?>
                                    {{'（'. $sum . '）'}}
                            </label>
                        </td>
                    </tr>
                    <?php foreach ($sval as $nestkey => $nestval) :?>
                            <tr>
                            <td class="child-td">
                                <label class="c-input c-checkbox">
                                    @if (is_array($detail_area))
                                        @if(in_array($nestval, $detail_area))
                                            {!! Form::checkbox('areachoice[]', $nestval, true, ['data-num' => $k]) !!}


                                        @else
                                            {!! Form::checkbox('areachoice[]', $nestval, false, ['data-num' => $k]) !!}

                                        @endif
                                    @else
                                        {!! Form::checkbox('areachoice[]', $nestval, false, ['data-num' => $k]) !!}

                                    @endif
                                    <span class="c-indicator"></span>
                                    {{$nestkey.'（'.$salons->where('area_code', strval($nestval))->count().'）'}}
                                </label>
                            </td>
                            </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                <tr>
                    <td  class="colspan2">
                        <label class="c-input c-checkbox">
                            @if (is_array($detail_area))
                                @if(in_array($sval, $detail_area))
                                    {!! Form::checkbox('areachoice[]', $sval, true, ['data-num' => $k]) !!}

                                @else
                                    {!! Form::checkbox('areachoice[]', $sval, false, ['data-num' => $k]) !!}

                                @endif

                            @else
                                {!! Form::checkbox('areachoice[]', $sval, false, ['data-num' => $k]) !!}

                            @endif
                            <span class="c-indicator"></span>
                            {{$skey.'（'.$salons->where('area_code', strval($sval))->count().'）'}}
                        </label>
                    </td>
                    </tr>
                <?php endif;$k++;endforeach; ?>
        </tbody>
    </table>
    <div class="bottom-fix flex-center">
        <button type="button" class="btn btn-default" onclick="history.back()">
            <i class="material-icons">undo</i>
            <span>戻る</span>
        </button>
        <button type="submit" class="btn btn-default">
            <i class="material-icons">search</i><span>検索する</span>
        </button>
    </div>
    {!!Form::close()!!}

@endsection
