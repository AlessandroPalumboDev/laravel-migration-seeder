@extends('layouts.app')

@section('main')

    <div class="container mt-5">
        <div class="row align-items-center justify-content-center">
            @foreach ($trains as $train)
                <div class="col-4">
        
                    <div class="card my-2 p-3">
                        <p>Treno numero: {{ $train["codice_treno"] }}</p>
                        <p>In partenza da: {{ $train["stazione_partenza"] }}</p>
                        <p>Alle ore: {{ $train["partenza_orario"] }}</p>
                        <p>Diretto a: {{ $train["stazione_arrivo"] }}</p>
                        <p>Alle ore: {{ $train["arrivo_orario"] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection