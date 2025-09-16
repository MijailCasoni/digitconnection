@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <article class="bg-white rounded-xl shadow-lg overflow-hidden">
        
        <div class="relative w-full h-80 md:h-96 lg:h-128 bg-cover bg-center" style="background-image: url('https://via.placeholder.com/1200x800.png?text=Imagen+Destacada+del+Blog');">
            <div class="absolute inset-0 bg-dark-bg bg-opacity-70 flex items-end">
                <div class="p-8 md:p-12 lg:p-16 text-white w-full">
                    <h1 class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-clip-text text-transparent">
                        {{ __('messages.blog_posts.de-la-idea-al-negocio-digital.title') }}
                    </h1>
                    <p class="text-sm md:text-base text-gray-300">
                        Publicado el 14 de septiembre de 2025
                    </p>
                </div>
            </div>
        </div>

        <div class="p-8 md:p-12 lg:p-16 blog-content">
            <p class="inter-font text-lg text-footer-text-dark leading-relaxed">
                ¿Alguna vez has tenido una gran idea para un negocio y te has preguntado cómo llevarla al mundo digital? Quizás piensas que crear una página web es solo para grandes empresas, o que desarrollar un sistema es un proceso complicado y fuera de tu alcance. La verdad es que detrás de cada página web y cada sistema exitoso hay un proceso creativo y estratégico, y no necesitas ser un experto para entenderlo.
            </p>

            <div class="flex items-center mt-8 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-blue-main mr-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21m6-3.75v3.75m-9-6h3m3 4.5h3m-9-6h6m2.25 1.5H21a.75.75 0 00-.75-.75H18m0 0v-5.25m0-1.5H9m1.5-1.5H5.25A2.25 2.25 0 003 4.5v9.75m18 0v-9.75A2.25 2.25 0 0018 3H9m1.5 1.5H12m-.75 6.75l-2.25-2.25M12 10.5l2.25 2.25m-2.25 1.5l2.25 2.25m-.75-6.75l2.25-2.25" />
                </svg>
                <h2 class="cairo-font text-2xl md:text-3xl font-semibold text-dark-bg">
                    Más que un diseño bonito: El arte de la interfaz de usuario (UI)
                </h2>
            </div>
            <p class="inter-font text-lg text-footer-text-dark leading-relaxed">
                Cuando hablamos de una página web, lo primero que se nos viene a la mente es el diseño. Y sí, la estética es crucial. Tu página web es la primera impresión que muchos clientes tendrán de tu marca. Pero el diseño va más allá de los colores y las tipografías. En el mundo del desarrollo web, hablamos de <strong>UI (User Interface)</strong> y <strong>UX (User Experience)</strong>. Mientras que la UI se centra en cómo se ve tu sitio (colores, botones, imágenes), la UX se enfoca en cómo el usuario se siente al interactuar con él.
            </p>
            <p class="inter-font text-lg text-footer-text-dark leading-relaxed">
                Una buena experiencia de usuario es como un buen anfitrión. Te guía, te hace sentir cómodo y te permite encontrar lo que buscas sin esfuerzo. Esto se logra con un proceso que incluye el diseño de **flujos de usuario**, **estructuras de navegación lógicas** y la creación de **prototipos** que nos permiten probar y optimizar cada interacción. Un diseño bien pensado se enfoca en que la experiencia sea intuitiva y agradable, lo que se traduce en más tiempo en tu sitio y una mayor tasa de conversión. ¿Sabías que los pequeños detalles, como el espacio entre los botones o el tamaño de la letra, influyen directamente en la decisión de un cliente de quedarse o irse de tu página?
            </p>

            <div class="my-8 flex justify-center">
                <img src="{{asset('img/blog1.png')}}" alt="Diseño de interfaz de usuario" class="rounded-lg shadow-lg">
            </div>

            <div class="flex items-center mt-8 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-blue-main mr-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.75c.504-.083 1-.083 1.5 0M9.594 3.75c.504-.083 1-.083 1.5 0m-1.5 0a2.25 2.25 0 012.25 2.25v2.25m-2.25-4.5v3.375m-3.935 5.625H12m-2.815-5.625h1.5m-1.5 0h3.834m-3.834 0a2.25 2.25 0 00-.412.186l-.504.252a1.125 1.125 0 01-.61 1.625M12 12m-1.5-1.5V12m0 0v1.5m0-1.5a2.25 2.25 0 002.25 2.25m-2.25-4.5a2.25 2.25 0 012.25-2.25V9.75m-3.834 1.125a2.25 2.25 0 011.625-.61l.252-.504a1.125 1.125 0 011.625-.61" />
                </svg>
                <h2 class="cairo-font text-2xl md:text-3xl font-semibold text-dark-bg">
                    Un detrás de cámaras invisible: El cerebro detrás del sistema
                </h2>
            </div>
            <p class="inter-font text-lg text-footer-text-dark leading-relaxed">
                Mientras que la UI es lo que ves, un sistema es el cerebro que trabaja detrás de escena. Imagina un sitio de comercio electrónico. Cuando añades un producto al carrito, procesas un pago o recibes una confirmación de pedido, todo eso sucede gracias a un sistema. El <strong>desarrollo de sistemas</strong> es la magia que hace que tu negocio funcione de manera eficiente.
            </p>
            <p class="inter-font text-lg text-footer-text-dark leading-relaxed">
                No se trata solo de líneas de código, sino de crear **soluciones a medida** para tus problemas específicos. ¿Necesitas gestionar un inventario en tiempo real, automatizar el envío de correos a tus clientes o permitir que tus usuarios reserven citas online? Todo esto es posible con un sistema a medida. Piensa en un sistema como tu "superpoder digital" para **escalar y optimizar tu negocio**. Con una plataforma sólida, puedes procesar más transacciones, servir a más clientes y reducir los errores manuales, lo que se traduce en **ahorro de tiempo y dinero**.
            </p>
            
            <div class="flex items-center mt-8 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-blue-main mr-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                </svg>
                <h2 class="cairo-font text-2xl md:text-3xl font-semibold text-dark-bg">
                    ¿Cómo unimos estas dos piezas?
                </h2>
            </div>
            <p class="inter-font text-lg text-footer-text-dark leading-relaxed">
                Aquí es donde entramos nosotros. Nuestro trabajo es ser el puente entre tu gran idea y su realización digital. No solo creamos páginas web y sistemas; construimos **soluciones completas y coherentes**. Usamos herramientas modernas como Tailwind CSS para asegurar que el diseño sea perfecto en cualquier dispositivo y que el branding de tu negocio sea atractivo.
            </p>
            <p class="inter-font text-lg text-footer-text-dark leading-relaxed">
                Nuestro enfoque no es solo técnico, es **colaborativo**. Te guiamos en cada paso del proceso, desde una **consulta inicial** para entender tus objetivos, hasta la **planificación detallada**, el **diseño y desarrollo**, y el **soporte post-lanzamiento**. Nuestro objetivo es que no solo obtengas un producto, sino que entiendas lo que estamos construyendo juntos y por qué.
            </p>
            <p class="inter-font text-lg text-footer-text-dark leading-relaxed">
                Entendemos que cada negocio es único. Por eso, en lugar de ofrecer soluciones genéricas, nos enfocamos en el valor que podemos aportar a tu proyecto. Queremos que tu negocio no solo exista en línea, sino que prospere.
            </p>
        </div>
    </article>
</div>
@endsection