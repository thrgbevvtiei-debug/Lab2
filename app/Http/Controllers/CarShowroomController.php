<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CarContactRequest;

class CarShowroomController extends Controller
{
    public function index()
    {
        $featuredCar = [
            'brand' => 'Audi Q8',
            'year' => 2026,
            'price' => '$78,500',
            'description' => 'Сучасний преміальний кросовер із передовими технологіями.'
        ];

        return view('showroom.index', compact('featuredCar'));
    }

    public function contactForm()
    {
        return view('showroom.contact');
    }

    public function contactStore(CarContactRequest $request)
    {
        // Отримуємо валідовані дані
        $validatedData = $request->validated();

        // Передаємо їх у сторінку підтвердження
        return view('showroom.confirm', $validatedData);
    }
}
