<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>MOVIE VIEWER SYSTEM</h1>   

                    <div class="pb-10 pt-8">
                        <h2 class="pt-2">Movies register:</h2>
                        <form action="{{route('create_movie')}}" method="post" class="p-10">
                            @csrf
                            <label>Title: <x-input class="block mt-1 w-1/3" type="text" name="title" placeholder="Movie name" required autofocus /></label>
                            <label>Author: <x-input class="block mt-1 w-1/3" type="text" name="author" placeholder="Author name" required autofocus /></label>
                            <label>Genre: <select class="block mt-1 w-1/3 h-10" name="genre" required autofocus>
                            @foreach (\App\Models\genre::all() as $genre)
                                <option value="{{$genre->id}}">{{$genre->genre}}</option>
                            @endforeach
                            </select></label>
                            <label>Year: <x-input class="block mt-1 w-1/3" type="text" name="year" placeholder="Release year" required autofocus /></label>
                            <label>Duration: <x-input class="block mt-1 w-1/3" type="text" name="duration" placeholder="1,30hrs" required autofocus /></label>
                            <label>Description: <x-input class="block mt-1 w-1/3" type="text" name="desc" required autofocus placeholder="Description text"/></label>  
                        <x-button class="block w-1/6 mt-5 ml-20 pl-20" style="cursor: pointer" autofocus>Save</x-button>                         
                        </form>
                    </div>

                    <div class="p-6">
                        <h2 class="pb-6">Movies:</h2>

                        @foreach (Auth::user()->movies as $movie)
                                <table class="table-auto border w-1/2 mb-9">
                                <thead>
                                    <tr><th class="w-1/3" colspan="2">{{$movie->name}}</th></tr>
                                </thead>
                                <tbody>
                                    <tr class="border"><td>Author:</td><td>{{$movie->author}}</td></td>
                                    <tr class="border"><td>Genre:</td><td>{{$movie->genre->genre}}</td></td>
                                    <tr class="border"><td>Year:</td><td>{{$movie->year}}</td></td>
                                    <tr class="border"><td>Duration:</td><td>{{$movie->duration}}hrs</td></td>
                                    <tr class="border"><td>Description:</td><td>{{$movie->description}}</td></td>
                                </tbody>
                            </table>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
