@extends('layouts.app')
@section('content')
<div class="container mx-auto px-4 py-12">
    <div class="text-center mb-8">
        <h1 class="text-4xl md:text-5xl font-bold text-center text-dark-bg sinfony-font mb-4">
            {{ __('messages.blog_title') }}
        </h1>
        <a href="{{ route('contacto') }}" class="mt-6 inline-block w-100 items-center justify-center 
          rounded-full bg-gradient-to-r from-indigo-700 via-purple-600 to-pink-500 
          shadow-md shadow-indigo-900/30 text-white font-semibold text-xl 
          py-2 px-4 hover:scale-105 hover:shadow-lg 
          transition duration-300 animate-fade-up delay-300">
            Hablemos de tu proyecto
        </a>
    </div>

    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($posts as $post)
            <a href="{{ route('blog.show', ['slug' => $post['slug']]) }}" class="block">
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <img class="w-full h-48 object-cover" src="{{ $post['image'] }}" alt="Imagen del post: {{ $post['title'] }}">
                    <div class="p-6">
                        <h2 class="cairo-font text-2xl font-semibold text-dark-bg mb-2">
                            {{ $post['title'] }}
                        </h2>
                        <p class="text-footer-text-dark text-sm mb-4 line-clamp-3">
                            {{ $post['excerpt'] }}
                        </p>
                        <div class="flex justify-between items-center text-sm text-gray-500">
                            <span>{{ $post['date'] }}</span>
                            <span class="text-blue-main font-semibold hover:underline">
                                {{ __('messages.read_more') }}
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection