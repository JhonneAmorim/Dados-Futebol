<!DOCTYPE html>
<html>
<head>
    <title>Estatísticas do Time</title>
</head>
<body>
    <h1>Estatísticas do Time - Partida ID: {{ $matchId }}</h1>
    <table>
        <tr>
            <th>Tipo</th>
            <th>Casa</th>
            <th>Visitante</th>
        </tr>
        @foreach ($statistics as $statistic)
        <tr>
            <td>{{ $statistic['type'] }}</td>
            <td>{{ $statistic['home'] }}</td>
            <td>{{ $statistic['away'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
