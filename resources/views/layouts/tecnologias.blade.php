@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12 text-center">
    <h1 class="sinfony-font text-5xl md:text-6xl font-bold text-dark-bg mb-4">
        Tecnologías Aplicadas
    </h1>
    <p class="inter-font text-lg text-footer-text-dark max-w-2xl mx-auto">
        En DigitConnection, utilizamos las tecnologías más robustas y modernas para asegurar que tu proyecto sea eficiente y escalable.
    </p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12 max-w-4xl mx-auto">
        <div class="p-6 rounded-lg shadow-lg bg-white">
            <h3 class="cairo-font text-2xl font-semibold text-blue-main mb-2">Frontend</h3>
            <ul class="text-left text-footer-text-dark list-disc list-inside">
                <li>Laravel (Blade)</li>
                <li>Tailwind CSS</li>
                <li>JavaScript</li>
                <li>Vue.js / React.js</li>
                <li>Bootstrap</li>
            </ul>
        </div>
        <div class="p-6 rounded-lg shadow-lg bg-white">
            <h3 class="cairo-font text-2xl font-semibold text-blue-main mb-2">Backend</h3>
            <ul class="text-left text-footer-text-dark list-disc list-inside">
                <li>Laravel / PHP</li>
                <li>Python</li>
                <li>Node.js</li>
                <li>Bases de datos (MySQL, PostgreSQL)</li>
            </ul>
        </div>
        <div class="p-6 rounded-lg shadow-lg bg-white">
            <h3 class="cairo-font text-2xl font-semibold text-blue-main mb-2">Servidores</h3>
            <ul class="text-left text-footer-text-dark list-disc list-inside">
                <li>AWS</li>
                <li>DigitalOcean</li>
                <li>Vercel</li>
                <li>Heroku</li>
                <li>Hostinger</li>
                <li>V2Network</li>
            </ul>
        </div>
    </div>
</div>
@endsection