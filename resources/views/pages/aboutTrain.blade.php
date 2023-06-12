@extends('layout.app')

@section('content')
<div class="wrapper">
    <div class="container my-5">
        <h1>
            Treni
        </h1>
        <div class="row">
            @foreach($TrainDati as $elem)
            <div class="col-4">
                <div class="card my-4" style="width: 18rem;">
                    <img src="https://images.unsplash.com/photo-1514250609276-c577268ef8fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fHRyYWlufGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ 'stazione'.' '.$elem['Azienda'] }}</h5>
                        <p class="card-text">{{ 'Stazione_di_partenza:'. ' '.$elem['Stazione_di_partenza'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


        <p></p>

    </div>
</div>
@endsection