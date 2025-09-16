@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <a href="{{ route('blog.index') }}" class="flex items-center text-blue-main font-semibold mb-8 hover:underline">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
        </svg>
        Volver al blog
    </a>

    <article class="bg-white rounded-xl shadow-lg overflow-hidden">
        
        <div class="relative w-full h-80 md:h-96 lg:h-128 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1542315729-16630f9d9441?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w1MDcxMzJ8MHwxfHNlYXJjaHwxNXx8YXV0b21hdGlvbiUyMGJsb2clMjBiYWNrZ3JvdW5kfGVufDB8fHx8MTcwNjMxODg5MHww&ixlib=rb-4.0.3&q=80&w=1080');">
            <div class="absolute inset-0 bg-dark-bg bg-opacity-70 flex items-end">
                <div class="p-8 md:p-12 lg:p-16 text-white w-full">
                    <h1 class="sinfony-font text-3xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4">
                        El poder de la automatización: Cómo un sistema web puede transformar tu negocio
                    </h1>
                    <p class="text-sm md:text-base text-gray-300">
                        Publicado el 14 de septiembre de 2025
                    </p>
                </div>
            </div>
        </div>

        <div class="p-8 md:p-12 lg:p-16 blog-content">
            <p class="inter-font text-lg text-footer-text-dark leading-relaxed">
                En el mundo digital de hoy, la eficiencia es la clave para la supervivencia y el crecimiento de cualquier negocio. Muchos emprendedores se enfrentan a tareas repetitivas que consumen tiempo y recursos valiosos. Aquí es donde los sistemas web entran en juego, no solo como una herramienta, sino como un verdadero catalizador para la transformación.
            </p>

            <h2 class="cairo-font text-3xl font-semibold text-dark-bg mt-8 mb-4">
                ¿Qué es la automatización de procesos?
            </h2>

            <p class="inter-font text-lg text-footer-text-dark leading-relaxed">
                La automatización se refiere al uso de la tecnología para realizar tareas o procesos de forma automática, sin la intervención humana. Imagina un escenario simple: cuando un cliente llena un formulario de contacto en tu sitio web. En lugar de recibir un correo y tener que responderle manualmente, un sistema de automatización puede hacer lo siguiente:
            </p>
            <ul class="list-disc list-inside mt-4 mb-6 text-footer-text-dark">
                <li class="mb-2">Enviar un correo de confirmación al cliente al instante.</li>
                <li class="mb-2">Añadir los datos del cliente a una base de datos o a tu sistema de gestión (CRM).</li>
                <li>Notificarte en tiempo real que tienes un nuevo cliente potencial.</li>
            </ul>
            <p class="inter-font text-lg text-footer-text-dark leading-relaxed">
                Todo esto sucede en segundos, sin que tú tengas que mover un dedo.
            </p>

            <div class="w-full my-10 text-center">
                <img src="{{asset('img/blog2.png')}}" alt="Automatización de procesos" class="rounded-xl shadow-lg w-full max-w-2xl mx-auto">
                <p class="text-sm text-gray-500 mt-2">La automatización libera tiempo y recursos valiosos.</p>
            </div>

            <h2 class="cairo-font text-3xl font-semibold text-dark-bg mt-8 mb-4">
                Beneficios Tangibles
            </h2>
            <p class="inter-font text-lg text-footer-text-dark leading-relaxed">
                La implementación de un sistema web con automatización puede generar una serie de beneficios inmediatos y a largo plazo:
            </p>
            <ul class="list-disc list-inside mt-4 mb-6 text-footer-text-dark">
                <li class="mb-2"><strong>Ahorro de tiempo:</strong> Reduce las horas dedicadas a tareas monótonas, permitiéndote enfocarte en la estrategia y el crecimiento.</li>
                <li class="mb-2"><strong>Eficiencia:</strong> Disminuye los errores humanos y asegura que los procesos se completen de manera consistente.</li>
                <li class="mb-2"><strong>Escalabilidad:</strong> Te permite manejar un mayor volumen de trabajo sin necesidad de contratar más personal.</li>
                <li class="mb-2"><strong>Mejora de la experiencia del cliente:</strong> Ofrece respuestas rápidas y personalizadas, mejorando la satisfacción y la lealtad.</li>
            </ul>
            
            <h2 class="cairo-font text-3xl font-semibold text-dark-bg mt-8 mb-4">
                ¡Empieza a transformar tu negocio hoy!
            </h2>
            <p class="inter-font text-lg text-footer-text-dark leading-relaxed">
                En nuestra experiencia, los negocios que adoptan la automatización no solo sobreviven, sino que prosperan. Estamos aquí para ayudarte a identificar qué procesos en tu negocio pueden ser automatizados y diseñar una solución a medida que te ayude a alcanzar tus metas.
            </p>
            <div class="mt-8 text-center">
                <a href="{{ url('/contacto') }}" class="inline-block bg-blue-main hover:bg-purple-dark text-white font-bold py-3 px-8 rounded-full transition-colors duration-300 transform hover:scale-105">
                    ¿Listo para tu proyecto? ¡Hablemos!
                </a>
            </div>
        </div>
    </article>
</div>
@endsection