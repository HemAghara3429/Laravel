<!DOCTYPE html>
<html>

<head>
    <title>Many To Many Relationship</title>
</head>

<body>

    <h2>Players and Games</h2>

    <table border="1" cellpadding="10">

        <tr>

            <th>ID</th>
            <th>Player</th>
            <th>Games</th>

        </tr>

        @foreach ($players as $player)
            <tr>

                <td>{{ $player->id }}</td>

                <td>{{ $player->name }}</td>

                <td>

                    @if ($player->games->count())
                        <ul>

                            @foreach ($player->games as $game)
                                <li>{{ $game->game_name }}</li>
                            @endforeach

                        </ul>
                    @else
                        N/A
                    @endif

                </td>

            </tr>
        @endforeach

    </table>

</body>

</html>
