<!DOCTYPE html>
<html>
<head>
    <title>Partidas com Estatísticas</title>
</head>
<body>
    <h1>Partidas com Estatísticas</h1>

    <div class="container">
        <table>
            <tr>
                <th>País</th>
                <th>Liga</th>
                <th>Time da Casa</th>
                <th>Time Visitante</th>
            </tr>
            @foreach($data as $event)
                <tr>
                    <td>{{ $event['country_name'] }}</td>
                    <td>{{ $event['league_name'] }}</td>
                    <td>{{ $event['match_hometeam_name'] }}</td>
                    <td>{{ $event['match_awayteam_name'] }}</td>
                </tr>
            @endforeach
        </table>
    </div>

</body>
</html>
