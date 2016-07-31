@extends('app')
@section('content')

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>price</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i=1; $i < 398; $i++) :?>
            <?php if (array_key_exists($i, $a)) :?>
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$a[$i]}}</td>
                </tr>
            <?php else :?>
                <tr>
                    <td>{{$i}}</td>
                    <td></td>
                </tr>
            <?php endif; ?>
        <?php endfor; ?>
    </tbody>
</table>


@endsection
