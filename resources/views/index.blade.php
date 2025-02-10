<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda das motinha</title>
</head>
<body>
    <h1>Faz os baga aí menó, atrasa não fi</h1><br><br>
    <h1>Eventos</h1>
    <a href="{{ route('events.create') }}">Criar Novo Evento</a>
    <ul>
        @foreach($events as $event)
            <li>{{ $event->title }} - <a href="{{ route('events.show', $event->id) }}">Ver</a> - <a href="{{ route('events.edit', $event->id) }}">Editar</a> - <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form></li>
        @endforeach
    </ul>
</body>
</html>