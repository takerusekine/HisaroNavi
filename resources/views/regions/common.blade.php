@extends('app')

@section('content')

@include('layouts.regionheader')
@include('layouts.regionlist')
@include('layouts.regionmap')

<ul class="nav btn-nav">
    <li class="btn btn-secondary"><a href="#"><i class="material-icons">attach_money</i><div>料金条件変更</div></a></li>
    <li class="btn btn-secondary"><a href="#"><i class="material-icons">touch_app</i><div>こだわり条件変更</div></a></li>
</ul>

@endsection
