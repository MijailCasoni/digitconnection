@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-12">
    <a href="{{ route('blog.index') }}" class="flex items-center text-blue-main font-semibold mb-8 hover:underline">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
        </svg>
        {{ __('messages.back_to_blog') }}
    </a>

    <article class="bg-white rounded-xl shadow-lg p-8 md:p-12 lg:p-16">
        @include('blog.posts.' . $post_slug)

        <div class="mt-12 text-center border-t border-gray-200 pt-8">
            <h3 class="sinfony-font text-3xl text-dark-bg mb-4">
                {{ __('messages.ready_to_take_step') }}
            </h3>
            <p class="inter-font text-lg text-footer-text-dark mb-6">
                {!! __('messages.talk_to_us_intro') !!}
            </p>
            <a href="{{ route('contacto') }}" class="inline-block bg-blue-main hover:bg-purple-dark text-white font-bold py-3 px-8 rounded-full transition-colors duration-300 transform hover:scale-105">
                {{ __('messages.contact_us_cta') }}
            </a>
        </div>
    </article>
</div>
@endsection