@extends('layouts.master')

@section('content')
    

        <div class="relative flex items-top justify-center min-h-96 bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        {{-- <div>
            <a href="{{ route('posts.create') }}">Ajouter un article</a>
        </div> --}}

        <div>

            <div class="m-2  w-6/12 p-4 mx-auto ">
                <div class="text-center">
                    <a href="{{ route('posts.show', $post->slug) }}" class="text-3xl font-semibold">{{ $post->libelle }}</a>
                    <div class="text-left">
                        <span class="text-gray-500 text-sm">{{ $post->created_at }}</span>
                    </div>
                </div>
                <div class="mt-6 text-justify">
                    <p>{{ $post->description }}</p>
                </div>
            </div>
        </div>
@endsection
