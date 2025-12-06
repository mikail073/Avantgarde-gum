@extends('layouts.app')

@section('content')
<div class="text-white p-6">

    <h1 class="text-3xl font-bold mb-6">Галерея</h1>
    <p class="mb-6 text-gray-300">Фото наших залов Avantgarde</p>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
        @for($i = 1; $i <= 10; $i++)
            <img src="{{ asset("images/gallery/$i.jpeg") }}"
                 class="gallery-img rounded-lg shadow-lg cursor-pointer"
                 data-index="{{ $i }}">
        @endfor
    </div>
</div>

{{-- ЛАЙТБОКС --}}
<div id="lightbox"
     class="hidden fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50">

    <!-- Контейнер фото (50% экрана) -->
    <div class="relative w-1/2">
        <button id="closeLightbox"
            class="absolute -top-4 -right-4 bg-red-500 text-white rounded-full px-3 py-1 text-lg">
            ✕
        </button>

        <img id="lightboxImage" src="" class="rounded-lg shadow-xl max-h-[80vh] mx-auto">
    </div>

    <!-- Листание -->
    <button id="prevPhoto" class="absolute left-5 text-white text-4xl">❮</button>
    <button id="nextPhoto" class="absolute right-5 text-white text-4xl">❯</button>

</div>

@endsection
<script>
document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.gallery-img');
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightboxImage');
    const closeBtn = document.getElementById('closeLightbox');
    const prevBtn = document.getElementById('prevPhoto');
    const nextBtn = document.getElementById('nextPhoto');

    let currentIndex = 1;

    // Открыть фото
    images.forEach(img => {
        img.addEventListener('click', () => {
            currentIndex = Number(img.dataset.index);
            showImage();
            lightbox.classList.remove('hidden');
        });
    });

    // Показать фото по индексу
    function showImage() {
        lightboxImage.src = `/images/gallery/${currentIndex}.jpeg`;
    }

    // Листание назад
    prevBtn.addEventListener('click', () => {
        currentIndex = currentIndex === 1 ? images.length : currentIndex - 1;
        showImage();
    });

    // Листание вперёд
    nextBtn.addEventListener('click', () => {
        currentIndex = currentIndex === images.length ? 1 : currentIndex + 1;
        showImage();
    });

    // Закрыть
    closeBtn.addEventListener('click', () => {
        lightbox.classList.add('hidden');
    });

    // Закрытие по клику на фон
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            lightbox.classList.add('hidden');
        }
    });
});
</script>
