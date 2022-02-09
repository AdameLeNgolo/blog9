@extends('layouts.master')

@section('content')
    

        <div>

            <form action="{{ route('posts.store') }}" method="POST" class="grid grid-cols-1 gap-4 w-6/12 mx-auto mt-10">
                @csrf
                
                <input type="text" name="libelle" id="libelle" class="" placeholder="Enter the title">
                <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter the text description"></textarea>
                <input type="submit" value="CREATE" class="bg-cyan-700 text-white mx-auto px-6 py-2">
            </form>
           
        </div>

        @endsection
