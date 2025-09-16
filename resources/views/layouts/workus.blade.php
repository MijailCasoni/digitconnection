@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="text-center mb-8">
        <h1 class="text-4xl md:text-5xl font-bold text-center text-dark-bg sinfony-font mb-4">
            Trabaja con nosotros
        </h1>
        <p class="text-lg text-footer-text-dark leading-relaxed max-w-2xl mx-auto mb-6">
            ¿Eres un apasionado de la tecnología y la innovación? En **DigitConnection**, buscamos personas talentosas y motivadas para unirse a nuestro equipo y ayudarnos a crear soluciones digitales excepcionales.
        </p>
        <p class="text-lg text-footer-text-dark leading-relaxed max-w-2xl mx-auto mb-8">
            Si te identificas con nuestra misión y tienes habilidades en desarrollo web, diseño de interfaces o marketing digital, nos encantaría conocerte.
        </p>

        <a href="{{ route('contacto') }}" class="inline-block bg-blue-main hover:bg-purple-dark text-white font-bold py-3 px-8 rounded-full transition-colors duration-300 transform hover:scale-105">
            ¡Envíanos tu postulación!
        </a>
    </div>
</div>
@endsection