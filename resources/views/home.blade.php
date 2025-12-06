@extends('layouts.app')

@section('content')
<div class="w-full text-center mt-12 px-6">
    <h1 class="text-4xl font-bold text-white mb-6">
        Добро пожаловать в Avantgarde Gym
    </h1>

    <p class="text-lg text-gray-200 leading-relaxed max-w-4xl mx-auto">
        Avantgarde — это больше чем просто спортзал. Это место, где сила 
        встречается с характером, где работа над собой превращается в стиль жизни.
        Два просторных зала — верхний и нижний — оснащены всем необходимым для 
        эффективных тренировок: от кардио-зоны до профессиональных тренажёров 
        и функциональных пространств.
        <br><br>
        Наша команда тренеров готова помочь в наборе массы, жиросжигании, 
        подготовке к соревнованиям или просто в достижении лучшей версии себя. 
        Здесь начинается твоя трансформация.
    </p>
 </div>
 <!-- Блок заявки -->
 <section class="w-full py-20 bg-gradient-to-b from-blue-700 to-blue-600 rounded-3xl shadow-xl mt-16">
    <div class="max-w-3xl mx-auto text-center px-6">
        
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
            Получи неделю тренировок за 900₸
        </h2>

        <p class="text-blue-100 mb-8 text-lg">
            Оставь свои контактные данные, и мы свяжемся с тобой в ближайшее время
        </p>

        <form class="space-y-5 max-w-md mx-auto">
            <input
                type="text"
                placeholder="Имя"
                class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-blue-100 
                focus:outline-none focus:ring-2 focus:ring-white/70"
            />

            <input
                type="tel"
                placeholder="+7"
                class="w-full px-4 py-3 rounded-lg bg-white/20 text-white placeholder-blue-100
                focus:outline-none focus:ring-2 focus:ring-white/70"
            />

            <label class="flex items-center justify-center gap-2 text-blue-100 text-sm cursor-pointer">
                <input type="checkbox" class="rounded focus:ring-white">
                Я согласен с условиями обработки данных
            </label>

            <button
                type="submit"
                class="w-full py-3 bg-white text-blue-700 font-semibold rounded-lg shadow-lg 
                hover:bg-blue-100 active:scale-95 transition"
            >
                Оставить заявку
            </button>
        </form>
    </div>
 </section>


   <section class="max-w-5xl mx-auto mt-20 mb-20 px-4">
    <h2 class="text-4xl font-bold text-white text-center mb-10">
        Часто задаваемые вопросы
    </h2>

    <div class="space-y-4">

        <!-- Вопрос 1 -->
        <div x-data="{ open: false }" class="bg-blue-700 rounded-xl text-white">
            <button @click="open = !open"
                class="w-full flex justify-between items-center px-6 py-4 text-lg font-semibold">
                Как записаться на первую тренировку?
                <span x-text="open ? '▾' : '▸'" class="text-2xl"></span>
            </button>

            <div x-show="open" x-transition class="px-6 pb-4 text-gray-200">
                Вы можете записаться через нашего администратора, в Instagram тренеров
                или прийти в клуб в любое время и оформить гостевое посещение.
            </div>
        </div>

        <!-- Вопрос 2 -->
        <div x-data="{ open: false }" class="bg-blue-700 rounded-xl text-white">
            <button @click="open = !open"
                class="w-full flex justify-between items-center px-6 py-4 text-lg font-semibold">
                Есть ли персональные тренировки?
                <span x-text="open ? '▾' : '▸'" class="text-2xl"></span>
            </button>

            <div x-show="open" x-transition class="px-6 pb-4 text-gray-200">
                Да! У нас работают сертифицированные тренеры, которые составят программу,
                помогут с техникой и ведут учеников к результату.
            </div>
        </div>

        <!-- Вопрос 3 -->
        <div x-data="{ open: false }" class="bg-blue-700 rounded-xl text-white">
            <button @click="open = !open"
                class="w-full flex justify-between items-center px-6 py-4 text-lg font-semibold">
                Предусмотрены ли скидки или акции?
                <span x-text="open ? '▾' : '▸'" class="text-2xl"></span>
            </button>

            <div x-show="open" x-transition class="px-6 pb-4 text-gray-200">
                Да, периодически проводим акции на абонементы, скидки студентам, детям и гостевые дни.
            </div>
        </div>

        <!-- Вопрос 4 -->
        <div x-data="{ open: false }" class="bg-blue-700 rounded-xl text-white">
            <button @click="open = !open"
                class="w-full flex justify-between items-center px-6 py-4 text-lg font-semibold">
                Что нужно взять с собой на тренировку?
                <span x-text="open ? '▾' : '▸'" class="text-2xl"></span>
            </button>

            <div x-show="open" x-transition class="px-6 pb-4 text-gray-200">
                Спортивную одежду, обувь, воду, полотенце и хорошее настроение.
            </div>
        </div>

        <!-- Вопрос 5 -->
        <div x-data="{ open: false }" class="bg-blue-700 rounded-xl text-white">
            <button @click="open = !open"
                class="w-full flex justify-between items-center px-6 py-4 text-lg font-semibold">
                Можно ли заморозить абонемент?
                <span x-text="open ? '▾' : '▸'" class="text-2xl"></span>
            </button>

            <div x-show="open" x-transition class="px-6 pb-4 text-gray-200">
                Да! Количество дней заморозки зависит от выбранного типа абонемента.
            </div>
        </div>

        <!-- Вопрос 6 -->
        <div x-data="{ open: false }" class="bg-blue-700 rounded-xl text-white">
            <button @click="open = !open"
                class="w-full flex justify-between items-center px-6 py-4 text-lg font-semibold">
                Могу ли я сменить тренера?
                <span x-text="open ? '▾' : '▸'" class="text-2xl"></span>
            </button>

            <div x-show="open" x-transition class="px-6 pb-4 text-gray-200">
                Конечно! Вы можете сменить тренера в любой момент — главное, чтобы вам было комфортно.
            </div>
        </div>

    </div>
 </section>

    <div class="max-w-7xl mx-auto py-20 px-6">

    <h2 class="text-4xl font-bold text-center text-gray-100 mb-12">
        ⭐ Отзывы наших клиентов ⭐
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

        <!-- Отзыв 1 -->
        <div class="bg-blue-900 bg-opacity-40 p-6 rounded-2xl shadow-lg text-gray-200">
            <p class="font-semibold text-xl mb-3">Валерия К.</p>
            <p class="text-gray-300">
                Зал понравился! Персонал дружелюбный, тренера 🔥. Хожу к Виктории — лучший тренер! 
                Атмосфера супер, всегда чисто.
            </p>

            <div class="flex text-yellow-400 text-xl mt-4">
                ⭐⭐⭐⭐⭐
            </div>
        </div>

        <!-- Отзыв 2 -->
        <div class="bg-blue-900 bg-opacity-40 p-6 rounded-2xl shadow-lg text-gray-200">
            <p class="font-semibold text-xl mb-3">Регина Ю.</p>
            <p class="text-gray-300">
                Просторно, чисто, уютно! Тренер Ирина — просто ракета 🚀🔥. 
                Объясняет технику понятно и всегда поддерживает.
            </p>

            <div class="flex text-yellow-400 text-xl mt-4">
                ⭐⭐⭐⭐⭐
            </div>
        </div>

        <!-- Отзыв 3 -->
        <div class="bg-blue-900 bg-opacity-40 p-6 rounded-2xl shadow-lg text-gray-200">
            <p class="font-semibold text-xl mb-3">Анна В.</p>
            <p class="text-gray-300">
                Очень чистый зал, хороший персонал. Тренировки проходят комфортно. 
                Действительно лучший зал в районе!
            </p>

            <div class="flex text-yellow-400 text-xl mt-4">
                ⭐⭐⭐⭐⭐
            </div>
        </div>

        <!-- Отзыв 4 -->
        <div class="bg-blue-900 bg-opacity-40 p-6 rounded-2xl shadow-lg text-gray-200">
            <p class="font-semibold text-xl mb-3">Ерлан Т.</p>
            <p class="text-gray-300">
                Отличное оборудование, сильные тренеры. Помогли восстановиться после травмы. 
                Теперь тренируюсь только здесь!
            </p>

            <div class="flex text-yellow-400 text-xl mt-4">
                ⭐⭐⭐⭐⭐⭐
            </div>
        </div>

        <!-- Отзыв 5 -->
        <div class="bg-blue-900 bg-opacity-40 p-6 rounded-2xl shadow-lg text-gray-200">
            <p class="font-semibold text-xl mb-3">Жанара М.</p>
            <p class="text-gray-300">
                Очень нравится атмосфера — современно, красиво, комфортно. 
                Особенно нравятся групповые занятия.
            </p>

            <div class="flex text-yellow-400 text-xl mt-4">
                ⭐⭐⭐⭐⭐
            </div>
        </div>

        <!-- Отзыв 6 -->
        <div class="bg-blue-900 bg-opacity-40 p-6 rounded-2xl shadow-lg text-gray-200">
            <p class="font-semibold text-xl mb-3">Максим С.</p>
            <p class="text-gray-300">
                Лучшие тренеры, индивидуальный подход. 
                За 3 месяца набрал форму, о которой давно мечтал!
            </p>

            <div class="flex text-yellow-400 text-xl mt-4">
                ⭐⭐⭐⭐⭐⭐
            </div>
        </div>

    </div>

    <div class="text-center mt-12">
        <a href="https://2gis.kz/almaty/geo/70000001079926607" 
           class="bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-xl font-semibold">
            Смотреть все отзывы в 2ГИС
        </a>
    </div>

</div>

@endsection
