<div>
    <a href="{{ route('personagem.create') }}">criar</a>

    @foreach ($personagens as $personagem)
        <div>
            <h1>{{ $personagem->nome }}</h1>
            <a href="{{ route('personagem.show', $personagem->id) }}">mostrar</a>
            <a href="{{ route('personagem.edit', $personagem->id) }}">editar</a>
        </div>
    @endforeach
</div>