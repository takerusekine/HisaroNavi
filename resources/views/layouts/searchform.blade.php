{!! Form::open(['method' => 'get', 'action' => 'SearchesController@getResult','class' => 'form-group']) !!}
<div class="col-xs-12 mb-10 mt-5 letter-brown">
    <span class="label label-secondary">エリア</span>
    <?php if (is_array($d_area)): ?>
        @foreach ($d_area as $d)
            @if ($d === end($d_area))
                {{$d}}
            @else
                {{$d. ' /'}}
            @endif
        @endforeach
    <?php else :?>
        {{$d_area}}
    <?php endif; ?>
</div>
@include('layouts.searchtable')
{!! Form::close() !!}
