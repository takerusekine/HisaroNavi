@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>{{$area}}エリアの詳細を選ぶ</h2>
            </div>
        </div>
    </div>
{!!Form::open(['class' => 'form-group', 'id' => 'area-choice-form', 'action' => 'RegionController@getResult', 'method' => 'get'])!!}
    <table class="table" id="area-choice-table">
        <tbody>
            <?php $k = 0; ?>
            <?php foreach ($selectAreaArr as $skey => $sval):?>
                <?php if (is_array($sval)) :?>
                    <tr>
                        <td class="colspan2 parent-td">
                            <label class="c-input c-checkbox">
                                <input type="checkbox" name="parent-check" value="{{$skey}}" data-num="{{$k}}">
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
                                    <input type="checkbox" name="areachoice[]" value="{{$nestval}}" data-num="{{$k}}">
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
                            <input type="checkbox" name="areachoice[]" value="{{$sval}}" data-num="{{$k}}">
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
