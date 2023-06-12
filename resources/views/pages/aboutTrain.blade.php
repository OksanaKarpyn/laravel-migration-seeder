@extends('layout.app')

@section('content')
<div class="wrapper">
    <div class="container my-5">
        <h1>
            paggina aboutTrain
        </h1>
        @foreach($TrainDati as $elem)
        <p>{{ $elem['Azienda'] }}</p>
        @endforeach
    </div>
</div>
@endsection