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

<div>

    <div class="flex justify-center flex-wrap">
        @foreach ($posts as $post)
            <div class="m-2 border border-black bg-gray-300 w-5/12 ">
                <img src="https://images.pexels.com/photos/944762/pexels-photo-944762.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="float-left mr-2 w-96 h-auto" alt="">
                <div class="p-2">
                    <div class="mb-3 text-center">
                        <a href="{{ route('posts.show', $post->slug) }}" class="text-2xl font-semibold">{{ $post->libelle }}</a>
                        <p class="mt-2 text-left flex justify-around">
                            <span class="text-gray-800">{{ $post->created_at }}</span>
                            <span class="text-gray-800">{{ $post->user->name }}</span>
                        </p>
                    </div>
                    <p class="line-clamp-6">
                        {{ $post->description }}
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod delectus facilis, soluta iste nulla maiores at illo inventore fugit, harum voluptatibus obcaecati velit natus necessitatibus, in quaerat veniam ab tenetur.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo magnam minima quae accusamus? Error, illo autem? Ipsam, quia eaque maxime unde perspiciatis harum at vero eveniet, nemo, blanditiis provident repellendus!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dolore doloribus aperiam corrupti inventore deleniti similique praesentium fugit eius pariatur assumenda quas ad, suscipit facere, animi fuga quia. Ipsam, ut?
                    </p>

                    <div class="text-center my-3">
                        <a href="{{ route('posts.show', $post->slug) }}" class="border border-black px-3 py-2">Voir Plus</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="max-w-md mx-auto">
        {{ $posts->links() }}
    </div>
</div>

@endsection