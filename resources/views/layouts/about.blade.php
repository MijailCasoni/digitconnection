@extends('layouts.app')

<title>{{ config('app.name', 'Nosotros') }}</title>

@section('content')
 {{-- Hero / Above the Fold con imagen de fondo y overlay --}}
  <section
    class="relative bg-cover bg-center py-32"
    style="background-image: url('{{ asset('img/hero-about.png') }}')"
  >
    <div class="absolute inset-0 bg-gradient-to-r from-indigo-800 via-transparent to-indigo-800 opacity-80"></div>
    <div class="relative container mx-auto px-6 text-center text-white">
      <h1 class="text-5xl font-extrabold drop-shadow-lg mb-4">
        Impulsamos tu revolución digital
      </h1>
      <p class="text-xl drop-shadow mb-6">
        Soluciones full-stack, plantillas, hosting, dominios y soporte 24/7 para llevar tu proyecto al éxito.
      </p>
      <a href="/contacto"
         class="inline-block bg-amber-400 hover:bg-amber-500 text-indigo-900 font-semibold px-8 py-3 rounded-full transition"
      >
        Conversemos
      </a>
    </div>
  </section>

  {{-- Misión & Visión  --}}
  <section class="bg-white py-20">
    <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
      <div class="space-y-6">
        <img src="{{ asset('img/mision.png') }}" alt="Misión" class="w-[165px] h-[145px] mx-auto md:mx-0">
        <h2 class="text-3xl font-bold bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-clip-text text-transparent">Nuestra Misión</h2>
        <p class="text-gray-700 leading-relaxed">
          Transformar ideas visionarias en experiencias digitales seguras, innovadoras y de alto impacto que permitan a 
          nuestros clientes alcanzar y superar sus objetivos de negocio, respaldadas por tecnologías líderes como Laravel, React y WordPress.
        </p>
      </div>
      <div class="space-y-6">
        <img src="{{ asset('img/vision.png') }}" alt="Visión" class="w-[165px] h-[145px] mx-auto md:mx-0">
        <h2 class="text-3xl font-bold bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-clip-text text-transparent">Nuestra Visión</h2>
        <p class="text-gray-700 leading-relaxed">
          No solo ser un referente global en desarrollo web y transformación digital, sino ser tu aliado estratégico, inspirando confianza con prácticas éticas,
          sostenibles y un entorno inclusivo que fomente la innovación constante y el crecimiento de nuestro equipo.
        </p>
      </div>
    </div>
  </section>

  {{-- Valores con gradientes de fondo e íconos a todo color --}}
  <section class="py-20 bg-gradient-to-b from-indigo-50 to-white">
    <div class="container mx-auto px-6 text-center">
      <h3 class="text-4xl font-bold bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-clip-text text-transparent mb-12">Nuestros Valores</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        @php
          $values = [
            ['icon'=>'collaboration.png','title'=>'Colaboración','desc'=>'Transparencia y comunicación fluida.'],
            ['icon'=>'excellence.png','title'=>'Excelencia','desc'=>'Código limpio y pruebas continuas.'],
            ['icon'=>'innovation.png','title'=>'Innovación','desc'=>'Siempre a la vanguardia tecnológica.'],
            ['icon'=>'support.png','title'=>'Soporte 24/7','desc'=>'Mantenimiento y escalado día y noche.'],
          ];
        @endphp

        @foreach($values as $val)
          <div class="p-8 rounded-xl bg-white shadow-lg hover:shadow-[0_12px_40px_rgba(59,130,246,0.45)] 
                      transition-all duration-300 relative overflow-hidden h-full flex flex-col transition relative overflow-hidden">
            <div class="absolute -top-10 -right-10 w-32 h-32 bg-amber-100 rounded-full opacity-50"></div>
            <img src="{{ asset("img/{$val['icon']}") }}"
                 alt="{{ $val['title'] }}"
                 class="w-16 h-16 mx-auto mb-6">
            <h4 class="text-xl font-semibold text-indigo-800 mb-2">{{ $val['title'] }}</h4>
            <p class="text-gray-600">{{ $val['desc'] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- Equipo Multidisciplinario con fotos y bloques de color --}}
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
      <h3 class="text-4xl font-bold bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-clip-text text-transparent text-center mb-12">Equipo Multidisciplinario</h3>

      {{-- Fundadores --}}
      <div class="mb-16">
        <h4 class="text-2xl font-semibold text-indigo-800 mb-8 uppercase">Fundadores</h4>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          @php
            $founders = [
              ['img'=>'profile_fabian.jpg','name'=>'Fabian Ulloa','role'=>'Co-Founder & FullStack Dev','bio'=>'Ingeniero Informática (Ciberseguridad). Scrum Master y PM con +3 años de experiencia.'],
              ['img'=>'profile_mijail.jpg','name'=>'Mijail Casoni','role'=>'Co-Founder & FullStack Dev','bio'=>'Experto en Laravel, PHP, React, Vue, Angular, Python y JS. Cert. Google Ciberseguridad.'],
            ];
          @endphp

          @foreach($founders as $f)
            <div class="flex items-center bg-white rounded-xl shadow-lg p-6 hover:scale-105 hover:shadow-[0_12px_40px_rgba(59,130,246,0.45)]">
              <div class="w-24 h-24 flex-shrink-0 rounded-full overflow-hidden border-4 border-indigo-300 mr-6 ">
                <img src="{{ asset("img/{$f['img']}") }}" alt="{{ $f['name'] }}" class="object-cover w-full h-full">
              </div>
              <div>
                <h5 class="text-2xl font-semibold bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 bg-clip-text text-transparent">{{ $f['name'] }}</h5>
                <p class="text-indigo-600 font-medium">{{ $f['role'] }}</p>
                <p class="text-gray-600">{{ $f['bio'] }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      {{-- Otras Áreas --}}
      @php
        $teams = [
          ['title'=>'Diseño UX/UI','img'=>'uxui.png','desc'=>'Convertimos flujos complejos en experiencias intuitivas y atractivas.'],
          ['title'=>'Marketing Digital','img'=>'marketing.png','desc'=>'SEO, SEM, storytelling y contenidos que potencian tu marca.'],
          ['title'=>'Ventas & Preventa','img'=>'sales.png','desc'=>'Consultoría técnica/comercial, demos y cierre de contratos.'],
          ['title'=>'Soporte 24/7','img'=>'support_team.png','desc'=>'Mantenimiento, actualizaciones y escalado continuo.'],
        ];
      @endphp

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @foreach($teams as $t)
          <div class="relative bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-[0_12px_40px_rgba(59,130,246,0.45)] transition">
            <img src="{{ asset("img/{$t['img']}") }}"
                 alt="{{ $t['title'] }}"
                 class="w-full h-48 object-cover">
            <div class="p-6">
              <h4 class="text-2xl font-semibold text-indigo-800 mb-2">{{ $t['title'] }}</h4>
              <p class="text-gray-600">{{ $t['desc'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- Llamado a la Acción Final con gradiente --}}
  <section class="py-20 bg-gradient-to-r from-indigo-700 via-purple-600 to-pink-500">
    <div class="container mx-auto px-6 text-center text-white">
      <h3 class="text-4xl font-bold mb-4">¿Listo para llevar tu negocio al siguiente nivel?</h3>
      <a href="/contacto"
         class="inline-block bg-white text-indigo-900 font-semibold px-8 py-3 rounded-full hover:bg-gray-100 transition"
      >
        Hablemos ahora
      </a>
    </div>
  </section>
@endsection