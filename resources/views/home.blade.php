@extends('layouts.app')

@section('content')
<h1>
    treni
</h1>
<ul>

    @foreach ($trains as $train)
    <li>
        <h1>{{$train->codice}}</h1>




    </li>
    @endforeach


</ul>
@endsection