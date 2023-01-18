@extends('layouts.main')

@section('page-title')
    Homepage
@endsection

@section('page-content')
    <section>
        <h1 class="text-center">Monitor arrivi e partenze treni</h1>
        <div class="container">
            <h2>Treni in partenza</h2>
            @foreach ($trains as $train)
                <ul class="list-unstyled">
                    <li>
                        {{ $train->company }}
                    </li>
                    <li>Treno: 
                        {{ $train->train_code }}
                    </li>
                    <li>Provenienza: 
                        {{ $train->departure_station }}
                    </li>
                    <li>Destinazione: 
                        {{ $train->arrival_station }}
                    </li>
                    <li>Orario partenza: 
                        {{ $train->departure_time }}
                    </li>
                    <li>Arrivo: 
                        {{ $train->arrival_time }}
                    </li>
                </ul>
            @endforeach
        </div>
@endsection