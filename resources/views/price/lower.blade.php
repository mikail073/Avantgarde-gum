@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto p-6 text-white">
    
    <h1 class="text-4xl font-bold mb-8">🏋️‍♂️ Прайс — Нижний зал</h1>

    {{-- Месячные абонементы --}}
    <h2 class="text-2xl font-semibold mb-4">📅 Месячные абонементы</h2>

    <div class="overflow-x-auto mb-10">
        <table class="min-w-full bg-gray-800 rounded-lg overflow-hidden">
            <thead class="bg-gray-700">
                <tr>
                    <th class="px-4 py-3 text-left">Период</th>
                    <th class="px-4 py-3 text-left">Тренировок</th>
                    <th class="px-4 py-3 text-left">Цена</th>
                    <th class="px-4 py-3 text-left">Дополнительно</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-600">

                <tr>
                    <td class="px-4 py-3">1 месяц (безлимит)</td>
                    <td class="px-4 py-3">30</td>
                    <td class="px-4 py-3">27 000 ₸</td>
                    <td class="px-4 py-3">❄ 6 заморозок, 👥 1 гость</td>
                </tr>

                <tr>
                    <td class="px-4 py-3">12 тренировок (1 месяц)</td>
                    <td class="px-4 py-3">12</td>
                    <td class="px-4 py-3">23 000 ₸</td>
                    <td class="px-4 py-3">❄ 6 заморозок, 👥 1 гость</td>
                </tr>

            </tbody>
        </table>
    </div>

    {{-- Длительные абонементы --}}
    <h2 class="text-2xl font-semibold mb-4">📆 Длительные абонементы</h2>

    <div class="overflow-x-auto mb-10">
        <table class="min-w-full bg-gray-800 rounded-lg overflow-hidden">
            <thead class="bg-gray-700">
                <tr>
                    <th class="px-4 py-3 text-left">Период</th>
                    <th class="px-4 py-3 text-left">Тренировок</th>
                    <th class="px-4 py-3 text-left">Цена</th>
                    <th class="px-4 py-3 text-left">Дополнительно</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-600">

                <tr>
                    <td class="px-4 py-3">36 тренировок (3 месяца)</td>
                    <td class="px-4 py-3">36</td>
                    <td class="px-4 py-3">57 000 ₸</td>
                    <td class="px-4 py-3">❄ 18 заморозок, 👥 3 гостя</td>
                </tr>

                <tr>
                    <td class="px-4 py-3">Безлимит (3 месяца)</td>
                    <td class="px-4 py-3">—</td>
                    <td class="px-4 py-3">62 000 ₸</td>
                    <td class="px-4 py-3">❄ 18 заморозок, 👥 3 гостя</td>
                </tr>

                <tr>
                    <td class="px-4 py-3">72 тренировки (6 месяцев)</td>
                    <td class="px-4 py-3">72</td>
                    <td class="px-4 py-3">98 000 ₸</td>
                    <td class="px-4 py-3">❄ 36 заморозок, 👥 6 гостей</td>
                </tr>

                <tr>
                    <td class="px-4 py-3">Безлимит (6 месяцев)</td>
                    <td class="px-4 py-3">—</td>
                    <td class="px-4 py-3">105 000 ₸</td>
                    <td class="px-4 py-3">❄ 36 заморозок, 👥 6 гостей</td>
                </tr>

                <tr>
                    <td class="px-4 py-3">144 тренировки (12 месяцев)</td>
                    <td class="px-4 py-3">144</td>
                    <td class="px-4 py-3">150 000 ₸</td>
                    <td class="px-4 py-3">❄ 72 заморозки, 👥 12 гостей</td>
                </tr>

                <tr>
                    <td class="px-4 py-3">Безлимит (12 месяцев)</td>
                    <td class="px-4 py-3">—</td>
                    <td class="px-4 py-3">170 000 ₸</td>
                    <td class="px-4 py-3">❄ 72 заморозки, 👥 12 гостей</td>
                </tr>

            </tbody>
        </table>
    </div>

    {{-- Дополнительные услуги --}}
    <h2 class="text-2xl font-semibold mb-4">🔥 Дополнительные услуги</h2>

    {{-- Дополнительные услуги --}}
<div class="max-w-4xl mx-auto mt-10 mb-16 bg-gray-800 text-white p-6 rounded-xl shadow-lg">

    <h2 class="text-2xl font-bold mb-4">🔥 Дополнительные услуги</h2>

    {{-- Персональный тренер --}}
    <div class="mb-6">
        <h3 class="text-xl font-semibold flex items-center">
            🏋️‍♂️ Персональный тренер
        </h3>
        <p>12 тренировок — от 20 000 т / мес.</p>
        <p>Разовое занятие — 5 000 т</p>
    </div>

    {{-- Студенческие --}}
    <div class="mb-6">
        <h3 class="text-xl font-semibold">🎓 Студенческие абонементы (от 14 лет)</h3>
        <p>12 тренировок — 20 000 т / мес.</p>
        <p>12 тренировок (07:00–17:00) — 17 000 т / мес.</p>
        <p>30 тренировок — 23 000 т / мес.</p>
    </div>

    {{-- Детские --}}
    <div class="mb-6">
        <h3 class="text-xl font-semibold">🧒 Детские абонементы (до 13 лет)</h3>
        <p>12 тренировок — 15 000 т / мес.</p>
    </div>

    {{-- Пенсионные --}}
    <div class="mb-6">
        <h3 class="text-xl font-semibold">👴 Пенсионные абонементы</h3>
        <p>12 тренировок — 15 000 т</p>
    </div>

    {{-- Разовые --}}
    <div class="mb-2">
        <h3 class="text-xl font-semibold">🎟 Разовые посещения</h3>
        <p>Взрослый билет — 5 000 т</p>
    </div>

</div>
@endsection

