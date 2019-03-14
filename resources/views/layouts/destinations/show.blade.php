@extends('layouts.app')

@section('title', 'Стоте обекта')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><span class="number">{{$destination->number}}</span>{{ $destination->name }}</h1>
                <h6 class="text-right">{{ $destination->category}}</h6>
                <img src="{{ asset("images/$destination->image") }}" alt="" class="rounded">
                <p>{{$destination->description}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <iframe src="{{ $destination->location }}" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-4">
                <h5>Работно време: {{ $destination->workingHourеs }}</h5> / rename hours / работни дни + работни часове
                <h5>Такса възрастен: {{ $destination->taxes }}</h5>
                <h5>Такса учащ: {{ $destination->taxes }}</h5>
                <h5>Такса пенсионер: {{ $destination->taxes }}</h5>
                <h5>Лекции: {{ $destination->lectures }}</h5>
                <h5>Свободен ден: {{ $destination->freeDay }}</h5>

            </div>
            <div class="col-4">
                <h5>Контакти: </h5>
                <p>email: {{ $destination->email }}</p>
                <p>Телефон: {{ $destination->contact }}</p>
            </div>
        </div>
    </div>

@endsection