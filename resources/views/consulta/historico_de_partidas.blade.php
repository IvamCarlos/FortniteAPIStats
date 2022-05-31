<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortnite API - Desafios</title>
    <script src="https://use.fontawesome.com/2884a73c4a.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="col-12">
            <div class="row">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Data coletada</th>
                            <th>Eliminações</th>
                            <th>Partidas</th>
                            <th>Playlist</th>
                            <th>Score</th>
                            <th>Vitória</th>
                            <th>Top 10</th>
                            <th>Top 12</th>
                            <th>Top 25</th>
                            <th>Top 3</th>
                            <th>Top 5</th>
                            <th>Top 6</th>
                        </tr>
                    </thead>
                    @foreach($resultado as $r)
                    <tbody>
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($r->dateCollected)->format('d-m-Y H:i:s') }}</td>
                            <td>{{ $r->kills }}</td>
                            <td>{{ $r->matches }}</td>
                            @if($r->playlist == "p9")
                            <td>Squads</td>
                            @elseif($r->playlist == "p2")
                            <td>Solo</td>
                            @elseif($r->playlist == "trios")
                            <td>Trios</td>
                            @elseif($r->playlist == "p10")
                            <td>Duos</td>
                            @else
                            <td>CREATIVE MATCHMAKING</td>
                            @endif
                            <td>{{ $r->score }}</td>
                            <td>{{ $r->top1 }}</td>
                            <td>{{ $r->top10 }}</td>
                            <td>{{ $r->top12 }}</td>
                            <td>{{ $r->top25 }}</td>
                            <td>{{ $r->top3 }}</td>
                            <td>{{ $r->top5 }}</td>
                            <td>{{ $r->top6 }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>