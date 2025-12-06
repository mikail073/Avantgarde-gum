@extends('layouts.app')

@section('content')
<div class="text-white p-6 space-y-6 max-w-4xl mx-auto">

    <h1 class="text-4xl font-bold mb-4">О нас — Avantgarde Gym</h1>

    <p class="text-lg leading-relaxed text-gray-300">
        Avantgarde Gym — это пространство, где спорт становится частью стиля жизни. 
        У нас два полноценных тренировочных зала: верхний и нижний, каждый — со своим характером, атмосферой и уникальным оснащением.
    </p>

    <h2 class="text-2xl font-bold mt-6 mb-2">Наши залы</h2>

    <h3 class="text-xl font-semibold">🏋️‍♂️ Нижний зал</h3>
    <p class="text-gray-300 mb-4">
        Нижний зал — это силовой центр Avantgarde. Пространство для тех, кто любит железо. 
        Здесь собраны профессиональные тренажёры, много свободных весов, зона тяжёлой атлетики и силовые станции.
    </p>

    <h3 class="text-xl font-semibold">🔥 Верхний зал</h3>
    <p class="text-gray-300 mb-4">
        Верхний зал — лёгкий, просторный и современный. Кардио-зона, тренажёры для функционала, место для разминки и растяжки.
        Отлично подходит как новичкам, так и тем, кто хочет качественную проработку тела.
    </p>

    <div class="text-white p-6">
    <h1 class="text-3xl font-bold mb-8">Мы в соцсетях</h1>

    <div class="grid grid-cols-2 sm:grid-cols-3 gap-6 mt-6">

    <!-- Instagram -->
    <a href="https://www.instagram.com/avantgarde_gym" 
       target="_blank" 
       class="flex flex-col items-center p-4 rounded-xl bg-gray-800 hover:bg-gray-700 transition-all">
        <img src="/icons/instagram.png" alt="Instagram" class="w-16 h-16 mb-2">
        <span class="text-gray-200 text-lg font-semibold">Instagram</span>
    </a>

    <!-- 2GIS — Верхний зал -->
    <a href="https://2gis.kz/almaty/geo/70000001056397409" 
       target="_blank"
       class="flex flex-col items-center p-4 rounded-xl bg-gray-800 hover:bg-gray-700 transition-all">
        <img src="/icons/2gis.png" alt="2GIS" class="w-16 h-16 mb-2">
        <span class="text-gray-200 text-lg font-semibold">2GIS — Верхний зал</span>
    </a>

    <!-- 2GIS — Нижний зал (НОВЫЙ БЛОК) -->
    <a href="https://2gis.kz/almaty/geo/70000001079926607" 
       target="_blank"
       class="flex flex-col items-center p-4 rounded-xl bg-gray-800 hover:bg-gray-700 transition-all">
        <img src="/icons/2gis.png" alt="2GIS" class="w-16 h-16 mb-2">
        <span class="text-gray-200 text-lg font-semibold">2GIS — Нижний зал</span>
    </a>

    <!-- WhatsApp -->
    <a href="https://wa.me/77072417931" 
    target="_blank"
        class="flex flex-col items-center p-4 rounded-xl bg-gray-800 hover:bg-gray-700 transition-all">
        <img src="/icons/whatsapp.png" alt="whatsapp" class="w-16 h-16 mb-2">
        <span class="text-gray-200 text-lg font-semibold">WhatsApp</span>
    </a>

</div>


</div>

@endsection
