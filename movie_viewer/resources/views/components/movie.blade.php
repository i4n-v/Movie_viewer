@props(['movie']) <!-- Especifica uma variável de fora do componente para dentro dele -->

<table class="table-auto border-b  shadow text-gray-600" style="background-color:#F9FFFF">
    <thead>
        <tr>
            <th class="w-1/3 border text-blue-900" colspan="2">{{$movie->name}}<a href="{{ route('remove_movie', $movie) }}" class="float-right text-red-700 bg-red-200 rounded-full px-1 text-decoration-none">&times</a></th>
        </tr>
    </thead>
    <tbody>
        <tr class="border"><td class="text-blue-900 font-bold pl-2 w-1/12">Autor:</td><td>{{$movie->author}}</td></td>
        <tr class="border"><td class="text-blue-900 font-bold pl-2 w-1/12">Gênero:</td><td>{{$movie->genre->genre}}</td></td>
        <tr class="border"><td class="text-blue-900 font-bold pl-2 w-1/12">Ano de lançamento:</td><td>{{$movie->year}}</td></td>
        <tr class="border"><td class="text-blue-900 font-bold pl-2 w-1/12">Duração:</td><td>{{$movie->duration}}hrs</td></td>
        <tr class="border"><td class="text-blue-900 font-bold pl-2 w-1/12">Descrição:</td><td>{{$movie->description}}</td></td>
    </tbody>
</table>