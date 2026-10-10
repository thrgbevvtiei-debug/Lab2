@extends('layouts.app')

@section('title', 'Заявку успішно прийнято')

@section('content')
    <div class="container py-5">
        <div class="alert alert-success shadow-sm p-4">
            <h1 class="alert-heading">✅ Успішна покупка / замовлення!</h1>
            <p class="fs-5">Дякуємо! Ваша заявка на автомобіль успішно оформлена, і ми зв’яжемося з вами найближчим часом.</p>
        </div>

        <div class="card mt-4 shadow-sm p-4">
            <h3 class="mb-3">Деталі вашого замовлення:</h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Ім'я:</strong> {{ $name }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $email }}</li>
                <li class="list-group-item"><strong>Повідомлення:</strong> {{ $message }}</li>
            </ul>
        </div>

        <div class="mt-4">
            <a href="{{ route('showroom.index') }}" class="btn btn-primary">Повернутися на головну</a>
        </div>
    </div>
@endsection
