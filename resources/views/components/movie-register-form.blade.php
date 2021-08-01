<div class="w-full pb-10 pt-8 border grid grid-cols-5">
    <h2 class="pt-2 col-start-3 col-end-5 text-3xl text-blue-900 font-bold">Cadastrar um filme</h2>
    <form onsubmit="confirmar();" action="{{route('create_movie')}}" method="post" class="p-10 col-start-2 col-end-5">
        @csrf
        <label>Titulo: <x-input class="block mt-1 w-full" type="text" name="title" placeholder="Nome do filme" required autofocus /></label>
        <label>Autor: <x-input class="block mt-1 w-full" type="text" name="author" placeholder="Nome do autor" required autofocus /></label>
        <label>Gêneros: <select class="block mt-1 w-full h-20" name="genres[]" multiple required autofocus>
        @foreach (\App\Models\genre::all() as $genre)
            <option value="{{$genre->id}}">{{$genre->genre}}</option>
        @endforeach
        </select></label>
        <label>Ano de lançamento: <x-input class="block mt-1 w-full" type="text" name="year" placeholder="Exemplo: 2002" required autofocus /></label>
        <label>Duração(horas): <x-input class="block mt-1 w-full" type="text" name="duration" placeholder="Exemplo: 1:30" required autofocus /></label>
        <label>Descrição: <x-input class="block mt-1 w-full" type="text" name="desc" required autofocus placeholder="Descrição do filme..."/></label>  
        <x-button class="w-auto mt-5 bg-blue-700 hover:bg-blue-900" autofocus>Salvar             
        </x-button>                         
    </form>
</div>
