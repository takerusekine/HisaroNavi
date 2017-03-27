@extends('app')
@section('content')
    <div>
        @if(strpos($previous_url, 'area') !== false)
            {!! Breadcrumbs::render('area-results') !!}

        @else
            {!! Breadcrumbs::render('prej-results') !!}
        @endif
    </div>
    <h1 class="result-h1">
        @if (is_array($areaname))
            {{implode($areaname, '・')}}
        @else
            {{$areaname}}
        @endif
        の日焼けサロン
    </h1>
    <table class="cond-table table">
        <tbody class="letter-brown">
            <tr>
                <th>エリア</th>
                <td>
                    @if (is_array($areaname))
                        {{implode($areaname, ' / ')}}
                     @else
                         {{$areaname}}
                    @endif
                </td>
            </tr>
            <tr>
                <th>条件</th>
                <td>
                    {{implode($cond, ' / ')}}
                </td>
            </tr>
            <tr>
                <th>
                    価格帯
                </th>
                <td>
                    @if (empty($_COOKIE['refineprice']))
                        {{'未設定'}}
                    @else
                        {{number_format($_COOKIE['lowerPrice']).'円 ~ '.number_format($_COOKIE['upperPrice']).'円' }}
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    <p class="count-p">
        {{'Hits:'. count($salons). '件'}}
    </p>
    <div class="container">
        <div class="col-xs-12">
            <div class="row">
                @include('results.result')
            </div>
        </div>
    </div>
@endsection
