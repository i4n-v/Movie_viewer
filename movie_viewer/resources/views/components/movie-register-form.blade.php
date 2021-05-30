<div class="w-full pb-10 pt-8">
    <h2 class="pt-2">Cadastrar um filme:</h2>
    <form action="{{route('create_movie')}}" method="post" class="p-10">
        @csrf
        <label>Titulo: <x-input class="block mt-1 w-1/3" type="text" name="title" placeholder="Nome do filme" required autofocus /></label>
        <label>Autor: <x-input class="block mt-1 w-1/3" type="text" name="author" placeholder="Nome do autor" required autofocus /></label>
        <label>Gênero: <select class="block mt-1 w-1/3 h-10" name="genre" required autofocus>
        @foreach (\App\Models\genre::all() as $genre)
            <option value="{{$genre->id}}">{{$genre->genre}}</option>
        @endforeach
        </select></label>
        <label>Ano de lançamento: <x-input class="block mt-1 w-1/3" type="text" name="year" placeholder="Exemplo: 2002" required autofocus /></label>
        <label>Duração(horas): <x-input class="block mt-1 w-1/3" type="text" name="duration" placeholder="Exemplo: 1:30" required autofocus /></label>
        <label>Descrição: <x-input class="block mt-1 w-1/3" type="text" name="desc" required autofocus placeholder="Descrição do filme..."/></label>  
        <x-button class="w-auto mt-5 bg-blue-700 hover:bg-blue-900" autofocus>Salvar             
        </x-button>                         
    </form>
</div>