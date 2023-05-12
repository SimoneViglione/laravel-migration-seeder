@extends('layouts.app')

@section('content')
    <main>
        <h1 class="text-light"> Treni </h1>  

        <div class="column">
            @foreach($trains as $train)

            <div class="col-4 ms_card text-success-emphasis">
                <h5 class="text-success">Comapgnia: <span class="text-light"> {{$train->company}} </span> </h5>
                <h6 class="text-info">Partenza: <span class="text-light"> {{$train->departure}} </span> </h6>
                <h6 class="text-info">Arrivo: <span class="text-light"> {{$train->arrival}}</span> </h6>
                <h6 class="text-info">Orario Partenza: <span class="text-light"> {{$train->departure_time}} </span> </h6>
                <h6 class="text-info">Orario Arrivo: <span class="text-light"> {{$train->arrival_time}}</span> </h6>
            </div>

            @endforeach
        </div>
    </main>
    
@endsection