<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda das motinha</title>
</head>
<body>
    <h1>Faz os baga aí menó, atrasa não fi</h1>
    <h1>Eventos</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    @if($events->isEmpty())
        <p>Não há eventos cadastrados no momento.</p>
    @else
    <ul>
        @foreach($events as $event)
            <li>
                <strong>{{ $event->name }}</strong><br>
                Descrição: {{ $event->description }}<br>
                Data: {{ $event->date }}
            </li>
        @endforeach
    </ul>
    @endif
    <button onclick="location.href='{{ route('create') }}'">Criar novo evento</button><br><br>
</body>
</html>