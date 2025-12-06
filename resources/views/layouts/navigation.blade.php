<nav x-data="{ open:false }"
     class="fixed top-0 left-0 w-full z-50 bg-gray-900 bg-opacity-70 backdrop-blur-md border-b border-gray-700">

    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">

        <!-- ЛОГО -->
        <a href="/" class="flex items-center">
            <img src="/images/logo.png" class="h-10 w-auto" alt="Avantgarde">
        </a>

        <!-- ДЕСКТОП МЕНЮ -->
        <div class="hidden md:flex space-x-8 text-white">
            <a href="/home" class="hover:text-yellow-400">Главная</a>

            <!-- Прайс -->
            <div class="relative group cursor-pointer">
                <span class="hover:text-yellow-400 flex items-center gap-1">Прайс</span>

                <div class="absolute left-0 mt-2 bg-gray-800 text-white rounded-md shadow-lg
                            opacity-0 invisible group-hover:opacity-100 group-hover:visible
                            transition-all duration-200">

                    <a href="/price/lower" class="block px-4 py-2 hover:bg-gray-700">Нижний зал</a>
                    <a href="/price/upper" class="block px-4 py-2 hover:bg-gray-700">Верхний зал</a>
                </div>
            </div>

            <a href="/trainers" class="hover:text-yellow-400">Тренеры</a>
            <a href="/about" class="hover:text-yellow-400">О нас</a>
            <a href="/gallery" class="hover:text-yellow-400">Галерея</a>
            <a href="/health" class="hover:text-yellow-400">Здоровье</a>
            <a href="/nutrition" class="hover:text-yellow-400">Питание</a>
        </div>

        <!-- БУРГЕР СПРАВА -->
        <button @click="open = true"
                class="md:hidden text-yellow-300 text-3xl">
            ☰
        </button>

    </div>

    <!-- МОБИЛЬНОЕ МЕНЮ -->
    <div x-show="open"
         x-transition
         class="fixed inset-0 z-40 bg-gray-900/90 backdrop-blur-lg text-white flex flex-col p-6 space-y-4">

        <!-- Верх панели -->
        <div class="flex items-center justify-between">
            <img src="/images/logo.png" class="h-10" alt="">
            <button @click="open = false" class="text-3xl">✕</button>
        </div>

        <!-- Ссылки -->
        <nav class="space-y-4 text-xl">

            <a href="/home" @click="open=false" class="block hover:text-yellow-300">Главная</a>

            <p class="text-gray-400 uppercase text-sm mt-4">Прайс</p>
            <a href="/price/lower" @click="open=false" class="block hover:text-yellow-300">Нижний зал</a>
            <a href="/price/upper" @click="open=false" class="block hover:text-yellow-300">Верхний зал</a>

            <a href="/trainers" @click="open=false" class="block hover:text-yellow-300">Тренеры</a>
            <a href="/about" @click="open=false" class="block hover:text-yellow-300">О нас</a>
            <a href="/gallery" @click="open=false" class="block hover:text-yellow-300">Галерея</a>
            <a href="/health" @click="open=false" class="block hover:text-yellow-300">Здоровье</a>
            <a href="/nutrition" @click="open=false" class="block hover:text-yellow-300">Питание</a>

        </nav>
    </div>

</nav>
