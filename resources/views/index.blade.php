<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>nama Player</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>    
        <thead>
        <tbody>
            @foreach($data_player as $player)
                <tr>
                    <td><form action="post" action="{{route('player.update',$player->id)}}">@csrf
                            <button>Update</button></form></td>
                    <td>{{$player->id}}</td>
                    <td>{{$player->player_name}}</td>
                    <td>{{$player->no_punggung}}</td>
                    <td>{{$player->position}}</td>
                    <td>
                        <form action="{{route('player.destroy',$player->id)}}" method="post">
                        @csrf
                            <button  onClick="return confirm('are you sure)">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
