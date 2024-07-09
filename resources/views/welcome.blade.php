@extends('layouts.app')

@section('main')

    <div class="container">
        <div class="row">
            {{-- <div class="col">
                <img src="{{ Vite::asset('resources/img/pipistrello.jpg')}}" alt="">
                <ul>
                    <li><a href="">prova list item e link</a></li>
                </ul>
            </div> --}}
            @foreach ($trains as $train)

            <div class="card">
                <p>Treno numero: {{ $train["codice_treno"] }}</p>
                <p>In partenza da: {{ $train["stazione_partenza"] }}</p>
                <p>Alle ore: {{ $train["partenza_orario"] }}</p>
                <p>Diretto a: {{ $train["stazione_arrivo"] }}</p>
                <p>Alle ore: {{ $train["arrivo_orario"] }}</p>
            </div>
            @endforeach
        </div>
    </div>
@endsection