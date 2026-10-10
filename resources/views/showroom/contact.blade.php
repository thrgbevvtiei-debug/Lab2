@extends('layouts.app')

@section('title', 'Зворотний зв’язок - Автосалон')

@section('content')
    <div class="container py-5">
        <h1>Залишити заявку на консультацію</h1>

        <form method="POST" action="{{ route('showroom.store') }}" class="mt-4">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Ім'я користувача</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Текст повідомлення</label>
                <textarea class="form-control" id="message" name="message" rows="4">{{ old('message') }}</textarea>
                @error('message')
                <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Надіслати заявку</button>
        </form>
    </div>
@endsection
