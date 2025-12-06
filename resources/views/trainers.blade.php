@extends('layouts.app')

@section('content')
 <div class="max-w-6xl mx-auto py-10 px-4">
    {{-- Заголовок страницы --}}
    <div class="text-center mb-10">
        <h1 class="text-3xl md:text-4xl font-bold text-white mb-3">
            Наши тренеры
        </h1>
        <p class="text-gray-300 max-w-3xl mx-auto text-sm md:text-base">
            Команда Avantgarde Gym — это специалисты, которые помогут в наборе массы, 
            жиросжигании, подготовке к соревнованиям и восстановлении после травм. 
            Выбирай зал и тренера под свои цели.
        </p>
    </div>

    {{-- Нижний зал --}}
    <section class="mb-12">
        <h2 class="text-2xl font-semibold text-white mb-4 flex items-center gap-2">
            🏋️‍♂️ Нижний зал
        </h2>
        <p class="text-gray-300 text-sm md:text-base mb-6 max-w-3xl">
            Нижний зал — силовой центр клуба. Здесь работают тренеры, которые специализируются
            на тяжёлой атлетике, функциональной силе и наборе мышечной массы.
        </p>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            {{-- Виталий --}}
            <div class="bg-gray-700/100 border border-gray-700 rounded-2xl p-4 flex flex-col shadow-lg hover:shadow-xl hover:-translate-y-1 transition">
                <img src="{{ asset('images/trainers/vitaliy.jpeg') }}"
                     alt="Тренер Виталий"
                     class="rounded-xl h-80 w-full object-cover mb-4">
                <h3 class="text-xl font-semibold text-white mb-1">
                    Виталий — силовой тренер
                </h3>
                <p class="text-yellow-400 text-sm mb-2">
                    Специализация: силовой тренинг, набор мышечной массы, техника базовых упражнений
                </p>
                <ul class="text-gray-300 text-sm space-y-1 mb-3">
                    <li>• Составляет программы для набора массы и силы «с нуля».</li>
                    <li>• Особый акцент на правильной технике приседаний, жима и тяги.</li>
                    <li>• Помогает безопасно прогрессировать рабочие веса.</li>
                </ul>
                <p class="text-xs text-gray-400 mt-auto">
                    Расписание: вторник / четверг / суббота · 08:00–00:00 · Нижний зал
                </p>
                <a href="https://www.instagram.com/vit.1453?igsh=MW1udGV4cHZzaXRqag==" target="_blank"
   class="mt-4 inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 hover:opacity-90 text-white font-semibold py-2 px-4 rounded-lg shadow-lg transition">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.66 0 3 1.34 3 3v10c0 
        1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.25a1.25 
        1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/>
    </svg>
    Записаться в Instagram
</a>

            </div>

            {{-- Адлет --}}
            <div class="bg-gray-700/100 border border-gray-700 rounded-2xl p-4 flex flex-col shadow-lg hover:shadow-xl hover:-translate-y-1 transition">
                <img src="{{ asset('images/trainers/adlet.jpeg') }}"
                     alt="Тренер Адлет"
                     class="rounded-xl h-80 w-full object-cover mb-4">
                <h3 class="text-xl font-semibold text-white mb-1">
                    Адлет — функциональный тренер
                </h3>
                <p class="text-yellow-400 text-sm mb-2">
                    Специализация: функциональные тренировки, ОФП, работа с выносливостью
                </p>
                <ul class="text-gray-300 text-sm space-y-1 mb-3">
                    <li>• Строит тренировки в формате кругов, станций и комплексов.</li>
                    <li>• Помогает улучшить сердечно-сосудистую выносливость и координацию.</li>
                    <li>• Делает акцент на общей физической форме и здоровье суставов.</li>
                </ul>
                <p class="text-xs text-gray-400 mt-auto">
                    Расписание: вторник / четверг / суббота · 07:00–00:00 · Нижний зал
                </p>
                <a href="https://www.instagram.com/tyaga_010?igsh=MXN1YjI0bnF5azNiaw==" target="_blank"
   class="mt-4 inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 hover:opacity-90 text-white font-semibold py-2 px-4 rounded-lg shadow-lg transition">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.66 0 3 1.34 3 3v10c0 
        1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.25a1.25 
        1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/>
    </svg>
    Записаться в Instagram
</a>

            </div>

            {{-- Вячеслав --}}
            <div class="bg-gray-700/100 border border-gray-700 rounded-2xl p-4 flex flex-col shadow-lg hover:shadow-xl hover:-translate-y-1 transition">
                <img src="{{ asset('images/trainers/vyacheslav.jpeg') }}"
                     alt="Тренер Вячеслав"
                     class="rounded-xl h-80 w-full object-cover mb-4">
                <h3 class="text-xl font-semibold text-white mb-1">
                    Вячеслав — силовой & powerlifting
                </h3>
                <p class="text-yellow-400 text-sm mb-2">
                    Специализация: пауэрлифтинг, работа с большими весами, подготовка к стартам
                </p>
                <ul class="text-gray-300 text-sm space-y-1 mb-3">
                    <li>• Выстраивает циклы подготовки под соревнования.</li>
                    <li>• Контролирует технику тяжёлых подходов и безопасность.</li>
                    <li>• Помогает пробивать «застой» в результатах по жиму, тяге и приседу.</li>
                </ul>
                <p class="text-xs text-gray-400 mt-auto">
                    Расписание: понедельник / среда / пятница · 06:00–00:00 · Нижний зал
                </p>
                <a href="https://www.instagram.com/v_natarov?igsh=ajU2bHJuZXp0ejZm" target="_blank"
   class="mt-4 inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 hover:opacity-90 text-white font-semibold py-2 px-4 rounded-lg shadow-lg transition">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.66 0 3 1.34 3 3v10c0 
        1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.25a1.25 
        1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/>
    </svg>
    Записаться в Instagram
</a>

            </div>

            {{-- Абиир --}}
            <div class="bg-gray-700/100 border border-gray-700 rounded-2xl p-4 flex flex-col shadow-lg hover:shadow-xl hover:-translate-y-1 transition">
                <img src="{{ asset('images/trainers/abiir.jpeg') }}"
                     alt="Тренер Абиир"
                     class="rounded-xl h-64 w-full object-cover mb-4">
                <h3 class="text-xl font-semibold text-white mb-1">
                    Абиир — единоборства & функционал
                </h3>
                <p class="text-yellow-400 text-sm mb-2">
                    Специализация: функциональная подготовка, элементы ММА и борьбы
                </p>
                <ul class="text-gray-300 text-sm space-y-1 mb-3">
                    <li>• Включает работу в стойке и партере для общей атлетичности.</li>
                    <li>• Развивает силу хвата, взрывную мощность и реакцию.</li>
                    <li>• Даёт программы для тех, кто хочет «боевую» функциональную форму.</li>
                </ul>
                <p class="text-xs text-gray-400 mt-auto">
                    Расписание: индивидуальные тренировки по записи · Нижний зал
                </p>
                <a href="https://www.instagram.com/universal_wrestler?igsh=MW9kaDhtODFhejFrdg==" target="_blank"
   class="mt-4 inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 hover:opacity-90 text-white font-semibold py-2 px-4 rounded-lg shadow-lg transition">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.66 0 3 1.34 3 3v10c0 
        1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.25a1.25 
        1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/>
    </svg>
    Записаться в Instagram
</a>

            </div>

            {{-- Диля --}}
            <div class="bg-gray-700/100 border border-gray-700 rounded-2xl p-4 flex flex-col shadow-lg hover:shadow-xl hover:-translate-y-1 transition">
                <img src="{{ asset('images/trainers/dilya.jpeg') }}"
                     alt="Тренер Диля"
                     class="rounded-xl h-80 w-full object-cover mb-4">
                <h3 class="text-xl font-semibold text-white mb-1">
                    Диля — тренер по CYCLE & кардио
                </h3>
                <p class="text-yellow-400 text-sm mb-2">
                    Специализация: CYCLE, жиросжигание, выносливость нижней части тела
                </p>
                <ul class="text-gray-300 text-sm space-y-1 mb-3">
                    <li>• Проводит динамичные занятия на велотренажёрах под музыку.</li>
                    <li>• Помогает безопасно снижать вес и укреплять сердечно-сосудистую систему.</li>
                    <li>• Подходит тем, кто любит энергичные групповые форматы.</li>
                </ul>
                <p class="text-xs text-gray-400 mt-auto">
                    Расписание: групповые занятия по расписанию · Нижний зал
                </p>
                <a href="https://www.instagram.com/kaisanova.z?igsh=ZzQzMjZ2Y2puY3Nj" target="_blank"
   class="mt-4 inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 hover:opacity-90 text-white font-semibold py-2 px-4 rounded-lg shadow-lg transition">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.66 0 3 1.34 3 3v10c0 
        1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.25a1.25 
        1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/>
    </svg>
    Записаться в Instagram
</a>

            </div>
        </div>
    </section>

    {{-- Верхний зал --}}
    <section class="mb-4">
        <h2 class="text-2xl font-semibold text-white mb-4 flex items-center gap-2">
            🔥 Верхний зал
        </h2>
        <p class="text-gray-300 text-sm md:text-base mb-6 max-w-3xl">
            Верхний зал — светлое и современное пространство с кардио-зоной, 
            тренажёрами для функциональных тренировок и комфортной атмосферой. 
            Здесь удобно начинать путь в зал и работать над рельефом.
        </p>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            {{-- Анастасия --}}
            <div class="bg-gray-700/100 border border-gray-700 rounded-2xl p-4 flex flex-col shadow-lg hover:shadow-xl hover:-translate-y-1 transition">
                <img src="{{ asset('images/trainers/anastasia.jpeg') }}"
                     alt="Тренер Анастасия"
                     class="rounded-xl h-72 w-full object-cover mb-4">
                <h3 class="text-xl font-semibold text-white mb-1">
                    Анастасия — женский тренер
                </h3>
                <p class="text-yellow-400 text-sm mb-2">
                    Специализация: женский фитнес, ягодицы, осанка, первые тренировки в зале
                </p>
                <ul class="text-gray-300 text-sm space-y-1 mb-3">
                    <li>• Помогает комфортно начать тренироваться с нуля.</li>
                    <li>• Делает акцент на форме ягодиц, талии и здоровье спины.</li>
                    <li>• Объясняет технику простым языком без «сложного спорта».</li>
                </ul>
                <p class="text-xs text-gray-400 mt-auto">
                    Расписание: вторник / четверг / суббота · 11:00–23:00 · Верхний зал
                </p>
                <a href="https://www.instagram.com/777.andreevna.777?igsh=MTQxazJmcTllYmRwYQ==" target="_blank"
   class="mt-4 inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 hover:opacity-90 text-white font-semibold py-2 px-4 rounded-lg shadow-lg transition">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.66 0 3 1.34 3 3v10c0 
        1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.25a1.25 
        1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/>
    </svg>
    Записаться в Instagram
</a>

            </div>

            {{-- Мария --}}
            <div class="bg-gray-700/100 border border-gray-700 rounded-2xl p-4 flex flex-col shadow-lg hover:shadow-xl hover:-translate-y-1 transition">
                <img src="{{ asset('images/trainers/maria.jpeg') }}"
                     alt="Тренер Мария"
                     class="rounded-xl h-72 w-full object-cover mb-4">
                <h3 class="text-xl font-semibold text-white mb-1">
                    Мария — функционал & рельеф
                </h3>
                <p class="text-yellow-400 text-sm mb-2">
                    Специализация: функциональные тренировки, рельеф, баланс нагрузки и восстановления
                </p>
                <ul class="text-gray-300 text-sm space-y-1 mb-3">
                    <li>• Комбинирует силовые, кардио и упражнения на кор.</li>
                    <li>• Подбирает нагрузку так, чтобы хватало сил и на работу, и на семью.</li>
                    <li>• Следит за техникой и дыханием на каждой тренировке.</li>
                </ul>
                <p class="text-xs text-gray-400 mt-auto">
                    Расписание: понедельник / среда / пятница · Верхний зал
                </p>
                <a href="https://www.instagram.com/_m.erry.fit_?igsh=c3prcjRwMWwzeHBu" target="_blank"
   class="mt-4 inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 hover:opacity-90 text-white font-semibold py-2 px-4 rounded-lg shadow-lg transition">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.66 0 3 1.34 3 3v10c0 
        1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.25a1.25 
        1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/>
    </svg>
    Записаться в Instagram
</a>

            </div>

            {{-- Дарья --}}
            <div class="bg-gray-700/100 border border-gray-700 rounded-2xl p-4 flex flex-col shadow-lg hover:shadow-xl hover:-translate-y-1 transition">
                <img src="{{ asset('images/trainers/darya.jpeg') }}"
                     alt="Тренер Дарья"
                     class="rounded-xl h-80 w-full object-cover mb-4">
                <h3 class="text-xl font-semibold text-white mb-1">
                    Дарья — женский фитнес & тонус
                </h3>
                <p class="text-yellow-400 text-sm mb-2">
                    Специализация: женский тренинг, снижение веса, работа с диастазом и спиной
                </p>
                <ul class="text-gray-300 text-sm space-y-1 mb-3">
                    <li>• Составляет щадящие, но эффективные программы для девушек.</li>
                    <li>• Помогает восстановиться после долгих перерывов в тренировках.</li>
                    <li>• Делает акцент на красивой осанке и тонусе без «перекачки».</li>
                </ul>
                <p class="text-xs text-gray-400 mt-auto">
                    Расписание: вторник / четверг / суббота · 09:00–21:00 · Верхний зал
                </p>
                <a href="https://www.instagram.com/esik_women_trener?igsh=NjdxZ3g1NGJhYWlu" target="_blank"
   class="mt-4 inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 hover:opacity-90 text-white font-semibold py-2 px-4 rounded-lg shadow-lg transition">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.66 0 3 1.34 3 3v10c0 
        1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.25a1.25 
        1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/>
    </svg>
    Записаться в Instagram
</a>

            </div>

            {{-- Сергей --}}
            <div class="bg-gray-700/100 border border-gray-700 rounded-2xl p-4 flex flex-col shadow-lg hover:shadow-xl hover:-translate-y-1 transition">
                <img src="{{ asset('images/trainers/sergey.jpeg') }}"
                     alt="Тренер Сергей"
                     class="rounded-xl h-80 w-full object-cover mb-4">
                <h3 class="text-xl font-semibold text-white mb-1">
                    Сергей — классический фитнес
                </h3>
                <p class="text-yellow-400 text-sm mb-2">
                    Специализация: общая физподготовка, снижение веса, мужской фитнес «для жизни»
                </p>
                <ul class="text-gray-300 text-sm space-y-1 mb-3">
                    <li>• Строит понятные программы без лишней «заморочки».</li>
                    <li>• Работает с мужчинами, которые хотят подтянуть форму и здоровье.</li>
                    <li>• Объясняет технику простыми словами и следит за безопасностью.</li>
                </ul>
                <p class="text-xs text-gray-400 mt-auto">
                    Расписание: по предварительной записи · Верхний зал
                </p>
                <a href="https://www.instagram.com/sergei_fitness_trener?igsh=MW41d28zcG5wb3kwMQ==" target="_blank"
   class="mt-4 inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 hover:opacity-90 text-white font-semibold py-2 px-4 rounded-lg shadow-lg transition">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.66 0 3 1.34 3 3v10c0 
        1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.25a1.25 
        1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/>
    </svg>
    Записаться в Instagram
</a>

            </div>

            {{-- Руслан --}}
            <div class="bg-gray-700/100 border border-gray-700 rounded-2xl p-4 flex flex-col shadow-lg hover:shadow-xl hover:-translate-y-1 transition">
                <img src="{{ asset('images/trainers/ruslan.jpeg') }}"
                     alt="Тренер Руслан"
                     class="rounded-xl h-80 w-full object-cover mb-4">
                <h3 class="text-xl font-semibold text-white mb-1">
                    Руслан — эстетика и рельеф
                </h3>
                <p class="text-yellow-400 text-sm mb-2">
                    Специализация: мужской рельеф, плечи, грудь, пресс
                </p>
                <ul class="text-gray-300 text-sm space-y-1 mb-3">
                    <li>• Помогает «подсушиться» и подчеркнуть мышцы.</li>
                    <li>• Сочетает силовую работу с аккуратным кардио и питанием.</li>
                    <li>• Делает упор на симметрию и аккуратную, эстетичную форму.</li>
                </ul>
                <p class="text-xs text-gray-400 mt-auto">
                    Расписание: индивидуальные тренировки по записи · Верхний зал
                </p>
                <a href="https://www.instagram.com/dobryy__zhuk?igsh=cW4xNDZ1cHVqeTFo" target="_blank"
   class="mt-4 inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 hover:opacity-90 text-white font-semibold py-2 px-4 rounded-lg shadow-lg transition">
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.66 0 3 1.34 3 3v10c0 
        1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.25a1.25 
        1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/>
    </svg>
    Записаться в Instagram
</a>

            </div>
        </div>
    </section>
</div>
@endsection
