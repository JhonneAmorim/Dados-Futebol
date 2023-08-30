<!DOCTYPE html>
<html>

<head>
    <title>Partidas ao Vivo</title>
</head>

<body>
    <h1>Partidas ao Vivo</h1>
    @if(is_array($data))
        @foreach($data as $event)
            <h2>ID do Jogo: {{ $event['match_id'] }}</h2>
            <a href="{{ route('team-statistics', ['matchId' => $event['match_id']]) }}">Ver Estatísticas</a>
            <p>País: {{ $event['country_name'] }}</p>
            <p>Liga: {{ $event['league_name'] }}</p>

            <h3>Odds Ao Vivo:</h3>
            <ul>
                @foreach($event['live_odds'] as $odd)
                    <li>{{ $odd['odd_name'] }}: {{ $odd['value'] }}</li>
                @endforeach
            </ul>

            <h3>Comentários Ao Vivo:</h3>
            <ul>
                @foreach($event['live_comments'] as $comment)
                    <li>Tempo: {{ $comment['time'] }}</li>
                    <li>Comentário: {{ $comment['text'] }}</li>
                    <li>Estado: {{ $comment['state'] }}</li>
                @endforeach
            </ul>

            <hr>
        @endforeach
    @else
        <p>Erro na obtenção dos resultados da API.</p>
    @endif
</body>

</html>
