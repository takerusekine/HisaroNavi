{!! Form::open(['method' => 'get', 'action' => 'ResultsController@getIndex','class' => 'form-group', 'id' => 's-form']) !!}
@include('layouts.searchtable')
{!! Form::close() !!}
