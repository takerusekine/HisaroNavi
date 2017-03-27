@extends('app')
@section('content')
    <div>
        {!! Breadcrumbs::render('prejudiceSearch') !!}
    </div>
    <h1 class="result-h1">
        <?php if (is_array($d_area)): ?>
            {{implode($d_area, '・')}}
        <?php else :?>
            {{$d_area}}
        <?php endif; ?>
        の条件検索</h1>
        @include('layouts.condtable')
    <div class="container">
        <div class="row">
            @include('layouts.searchform')
        </div>
    </div>
@endsection
