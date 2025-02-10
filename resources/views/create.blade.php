<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Evento</title>
</head>
<body>
    <h1>Criar Novo Evento</h1>
    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" required>
        
        <label for="description">Descrição:</label>
        <textarea id="description" name="description"></textarea>
        
        <label for="date">Data:</label>
        <input type="date" id="date" name="date" required>
        
        <button type="submit">Salvar Evento</button>
    </form>
</body>
</html>