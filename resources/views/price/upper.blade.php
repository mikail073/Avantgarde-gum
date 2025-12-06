@extends('layouts.app')

@section('content')
<div class="text-white max-w-5xl mx-auto p-8">

    <h1 class="text-4xl font-bold mb-8 text-center">Прайс — Верхний зал</h1>

    <!-- Блок: Месячные абонементы -->
    <h2 class="text-2xl font-semibold mt-10 mb-4">📆 Месячные абонементы</h2>

    <table class="w-full text-left bg-gray-800 rounded-lg overflow-hidden mb-10">
        <thead class="bg-gray-700">
            <tr>
                <th class="p-3">Период</th>
                <th class="p-3">Тренировок</th>
                <th class="p-3">Цена</th>
                <th class="p-3">Дополнительно</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-700">
                <td class="p-3">1 месяц</td>
                <td class="p-3">30</td>
                <td class="p-3">14 000 ₸</td>
                <td class="p-3">❄ 6 • 👥 1</td>
            </tr>
        </tbody>
    </table>

    <!-- Блок: Длительные абонементы -->
    <h2 class="text-2xl font-semibold mt-10 mb-4">📅 Длительные абонементы</h2>

    <table class="w-full text-left bg-gray-800 rounded-lg overflow-hidden mb-10">
        <thead class="bg-gray-700">
            <tr>
                <th class="p-3">Период</th>
                <th class="p-3">Тренировок</th>
                <th class="p-3">Цена</th>
                <th class="p-3">Цена / мес</th>
                <th class="p-3">Дополнительно</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-700">
                <td class="p-3">2 месяца</td>
                <td class="p-3">24</td>
                <td class="p-3">26 000 ₸</td>
                <td class="p-3">13 000 ₸</td>
                <td class="p-3">❄ 12 • 👥 2</td>
            </tr>

            <tr class="border-b border-gray-700">
                <td class="p-3">3 месяца</td>
                <td class="p-3">36</td>
                <td class="p-3">38 000 ₸</td>
                <td class="p-3">~12 700 ₸</td>
                <td class="p-3">❄ 18 • 👥 3</td>
            </tr>

            <tr class="border-b border-gray-700">
                <td class="p-3">6 месяцев</td>
                <td class="p-3">72</td>
                <td class="p-3">70 000 ₸</td>
                <td class="p-3">~11 700 ₸</td>
                <td class="p-3">❄ 36 • 👥 6</td>
            </tr>

            <tr class="border-b border-gray-700">
                <td class="p-3">12 месяцев</td>
                <td class="p-3">144</td>
                <td class="p-3">115 000 ₸</td>
                <td class="p-3">~10 500 ₸</td>
                <td class="p-3">❄ 72 • 👥 12</td>
            </tr>
        </tbody>
    </table>

    <!-- Персональный тренер -->
    <h2 class="text-2xl font-semibold mt-10 mb-4">💪 Персональный тренер</h2>

    <div class="bg-gray-800 p-5 rounded-lg mb-10">
        <p>12 тренировок — <span class="font-semibold">от 15 000 ₸ / мес.</span></p>
        <p>Разовое занятие с тренером — <span class="font-semibold">5 000 ₸</span></p>
    </div>

    <!-- Студенческие абонементы -->
    <h2 class="text-2xl font-semibold mt-10 mb-4">🎓 Студенческие абонементы (от 14 лет)</h2>

    <div class="bg-gray-800 p-5 rounded-lg mb-10">
        <p>12 тренировок — <span class="font-semibold">13 000 ₸ / мес.</span></p>
        <p>12 тренировок (07:00–17:00) — <span class="font-semibold">12 000 ₸ / мес.</span></p>
    </div>

    <!-- Детские абонементы -->
    <h2 class="text-2xl font-semibold mt-10 mb-4">👶 Детские абонементы (до 13 лет)</h2>

    <div class="bg-gray-800 p-5 rounded-lg mb-10">
        <p>12 тренировок (07:00–17:00) — <span class="font-semibold">11 000 ₸ / мес.</span></p>
    </div>

    <!-- Разовые посещения -->
    <h2 class="text-2xl font-semibold mt-10 mb-4">🎟 Разовые посещения</h2>

    <div class="bg-gray-800 p-5 rounded-lg mb-10">
        <p>Взрослый билет — <span class="font-semibold">2 000 ₸</span></p>
    </div>

</div>
@endsection
