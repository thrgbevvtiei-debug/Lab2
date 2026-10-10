@extends('layouts.app')

@section('title', 'Автосалон Преміум Класу')

@section('content')
    <div class="container py-5">
        <h1>Ласкаво просимо до нашого автосалону!</h1>
        <p>Ми пропонуємо найкращі автомобілі за вигідними умовами.</p>

        <div class="card mt-4 p-4 shadow-sm">
            <h2>Спеціальна пропозиція тижня</h2>
            <p><strong>Модель:</strong> {{ $featuredCar['brand'] }} ({{ $featuredCar['year'] }})</p>
            <p><strong>Ціна:</strong> {{ $featuredCar['price'] }}</p>
            <p>{{ $featuredCar['description'] }}</p>

            <a href="{{ route('showroom.contact') }}" class="btn btn-primary mt-2">Замовити тест-драйв</a>
        </div>
    </div>
@endsection
