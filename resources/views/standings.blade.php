<!DOCTYPE html>
<html>

<head>
    <title>Tabela de Classificação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        img {
            max-width: 30px;
            max-height: 30px;
        }
    </style>
</head>

<body>

    <h1>{{ $data[0]['league_name'] }}</h1>
    <div class="container">
        <table>
            <tr>
                <th></th>
                <th>Posição</th>
                <th>Jogos</th>
                <th>V</th>
                <th>E</th>
                <th>D</th>
                <th>G</th>
                <th>SG</th>
                <th>Pts</th>
            </tr>
            @foreach($data as $team)
            <tr>
                <td><img src="{{$team['team_badge']}}" alt="logo"></td>
                <td>{{ $team['overall_league_position'] }}</td>
                <td>{{ $team['overall_league_payed'] }}</td>
                <td>{{ $team['overall_league_W'] }}</td>
                <td>{{ $team['overall_league_D'] }}</td>
                <td>{{ $team['overall_league_L'] }}</td>
                <td>{{ $team['overall_league_GF'] }} : {{ $team['overall_league_GA'] }}</td>
                <td>{{ $team['overall_league_GF'] - $team['overall_league_GA'] }}</td>
                <td>{{ $team['overall_league_PTS'] }}</td>
            </tr>
            @endforeach
        </table>
    </div>

</body>

</html>