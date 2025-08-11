@extends('layout.app')

@section('content')
    <div class="about col-md-15 d-none d-flex row">
      <div class="row-about text-black/50 card-1">
        <h1>Nosotros</h1>
        <h2>Misión</h2>
        <p>Nuestra misión es <b>transformar ideas visionarias en soluciones web excepcionales</b> que potencien a nuestros
            clientes para alcanzar sus objetivos y más allá.
            Con una pasión inquebrantable por el desarrollo de aplicaciones y páginas web, nos comprometemos a ofrecer
            <b>experiencias digitales innovadoras, seguras y de alta calidad</b>, desarrolladas con tecnologías líderes como
            WordPress, PHP, Laravel, React y Angular.
            Nos esforzamos por cultivar relaciones duraderas con nuestros clientes, basadas en la confianza, la colaboración
            y el éxito compartido.</p>
        <h2>Visión</h2>
        <p>Ser reconocidos como <b>líderes y referentes en el desarrollo web</b> a nivel global, inspirando y empoderando a
            empresas y emprendedores a través de nuestras soluciones digitales de vanguardia.
            Aspiramos a <b>crear un impacto positivo</b> en la industria tecnológica mediante el uso de prácticas
            sostenibles y éticas, fomentando un entorno de trabajo inclusivo y creativo que promueva el crecimiento
            profesional y personal de nuestro equipo.
            Con una firme dedicación a la innovación y la excelencia, buscamos <b>convertirnos en la opción preferida</b>
            para quienes buscan servicios web que trasciendan las expectativas y marquen la diferencia en el mundo digital.
        </p>
      </div>
      <div class="container-about card-1 col-lg-15 d-flex mt-5 row">
        <div class="card-1 description">
          <img src="{{ asset('img/profile_fabian.jpg') }}" alt="User Icon" class="img_icon_about"> </a>
          <h3>Fabian Ulloa</h3>
          <p><b>Co-Founder</b>, desarrollador FullStack, Ingeniero Informática (menc. Ciberseguridad), Experto en desarrollo web y aplicaciones FullStack</p>
          <p>Scrum Master y Project Manager de Digit-Connection con mas de 3 años de experiencia liderando proyectos de desarrollo de aplicaciones</p>

        </div>
        <div class="card-1 description">
          <img src="{{ asset('img/profile_mijail.jpg') }}" alt="User Icon" class="img_icon_about"> </a>
          <h3>Mijail Casoni</h3>
          <p><b>Co-Founder</b>, desarrollador FullStack, Ingeniero Informática (menc. Ciberseguridad) con 3 años de experiencia en desarrollo de aplicaciones web.</p>
          <p>Experto en tecnologías como; Laravel, PHP, ReactJS, Vue, Angular, Python, JavaScript </p>
          <p>Certificaciones en Ciberseguridad con Google, entre otros.</p>
        </div>
  
      </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush
